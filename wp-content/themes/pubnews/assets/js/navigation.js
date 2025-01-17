/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function($) {
	const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

	const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

	// Return early if the button doesn't exist.
	if ( 'undefined' === typeof button ) {
		return;
	}

	const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( ! menu.classList.contains( 'nav-menu' ) ) {
		menu.classList.add( 'nav-menu' );
	}

	// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
	button.addEventListener( 'click', function() {
		siteNavigation.classList.toggle( 'toggled' );

		if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
			button.setAttribute( 'aria-expanded', 'false' );
		} else {
			button.setAttribute( 'aria-expanded', 'true' );
		}

		// focus trap for menu
		var menuElement = document.querySelector( '#site-navigation.toggled' );
		if( menuElement ) {
			document.addEventListener('keydown', function(e) {
				if( document.querySelector( '#site-navigation.toggled' ) ) {
					var focusable = document.querySelector( '#site-navigation.toggled' ).querySelectorAll( 'input, a, button, ul.sub-menu.isShow a' );
					focusable = Array.prototype.slice.call( focusable );
					focusable = focusable.filter( function( focusableelement ) {
						return null !== focusableelement.offsetParent;
					} );
					var firstFocusable = document.querySelector('.menu-toggle');
					var lastFocusable = focusable[focusable.length - 1];
					pubnews_focus_trap( firstFocusable, lastFocusable, e );
				}
			})
		}
	} );

	// focus trap for search
	const searchElement = document.getElementsByClassName( 'search-wrap' )
	if( searchElement.length > 0 ) {
		const searchButton = searchElement[0].getElementsByTagName( 'button' )[ 0 ];
		searchButton.addEventListener( 'click', function() {
			var searchElementToggled = document.querySelector( '.search-wrap' );
			if( searchElementToggled ) {
				document.addEventListener('keydown', function(e) {
					if( document.querySelector( '.search-wrap' ) ) {
						var focusable = document.querySelector( '.search-wrap' ).querySelectorAll( 'input.search-field, input.search-submit, .search_close_btn' );
						focusable = Array.prototype.slice.call( focusable );
						focusable = focusable.filter( function( focusableelement ) {
							return null !== focusableelement.offsetParent;
						} );
						var firstFocusable = document.querySelector('input.search-field');
						var lastFocusable = focusable[focusable.length - 1];
						pubnews_focus_trap( firstFocusable, lastFocusable, e );
						if( e.which == 13 && e.target == document.querySelector('button.search-form-close') ) {
							document.querySelector('button.search-form-close').click()
							document.querySelector('button.search-trigger').focus()
							e.preventDefault()
						}
					}
				})
			}	
		});
	}	

	// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
	document.addEventListener( 'click', function( event ) {
		const isClickInside = siteNavigation.contains( event.target );

		if ( ! isClickInside ) {
			siteNavigation.classList.remove( 'toggled' );
			button.setAttribute( 'aria-expanded', 'false' );
		}
	} );

	// Get all the link elements within the menu.
	const links = menu.getElementsByTagName( 'a' );

	// Get all the link elements with children within the menu.
	const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

	// Toggle focus each time a menu link is focused or blurred.
	for ( const link of links ) {
		link.addEventListener( 'focus', toggleFocus, true );
		link.addEventListener( 'blur', toggleFocus, true );
	}

	// Toggle focus each time a menu link with children receive a touch event.
	for ( const link of linksWithChildren ) {
		link.addEventListener( 'touchstart', toggleFocus, false );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		if ( event.type === 'focus' || event.type === 'blur' ) {
			let self = this;
			// Move up through the ancestors of the current link until we hit .nav-menu.
			while ( ! self.classList.contains( 'nav-menu' ) ) {
				// On li elements toggle the class .focus.
				if ( 'li' === self.tagName.toLowerCase() ) {
					self.classList.toggle( 'focus' );
				}
				self = self.parentNode;
			}
		}

		if ( event.type === 'touchstart' ) {
			const menuItem = this.parentNode;
			event.preventDefault();
			for ( const link of menuItem.parentNode.children ) {
				if ( menuItem !== link ) {
					link.classList.remove( 'focus' );
				}
			}
			menuItem.classList.toggle( 'focus' );
		}
	}

	/**
	 * Responsive header menu modal
	 * 
	 * @returns void
	 * @since 1.0.0
	 */
	function pubnews_focus_trap( firstFocusable, lastFocusable, e ) {
        if (e.key === 'Tab' || e.keyCode === KEYCODE_TAB) {
            if ( e.shiftKey ) /* shift + tab */ {
				if (document.activeElement === firstFocusable) {
                    lastFocusable.focus();
                    e.preventDefault();
                }
            } else /* tab */ {
				console.log( lastFocusable )
                if ( document.activeElement === lastFocusable ) {
                    firstFocusable.focus();
                    e.preventDefault();
                }
            }
        }
    }

	/**
	 * Responsive header sub menu toggler
	 * 
	 * @returns void
	 * @since 1.0.0
	 */
	function dropdownMenuMobileHandle() {
		if ( ! $( "#site-navigation .menu-item.menu-item-has-children" ).length > 0 && ! $( "#site-navigation .page_item.page_item_has_children" ).length > 0 ) {
			return;
		}
		$( "#site-navigation .menu-item.menu-item-has-children .sub-menu, #site-navigation .page_item.page_item_has_children .children" ).before( '<a href="#" class="toggle-sub-menu"><i class="fas fa-plus"></i></a>' );
		$(document).on( "click", "#site-navigation .toggle-sub-menu", function (e) {
			e.preventDefault();
			var _this = $(this)
			_this.parent().siblings().children( ".sub-menu, .children" ).removeClass( "isShow" );
			_this.siblings( ".sub-menu, .children" ).toggleClass( "isShow" );
			_this.parent().siblings().find( "> .toggle-sub-menu i" ).removeClass("fa-minus").addClass("fa-plus");
			if( _this.siblings( ".sub-menu, .children" ).hasClass( "isShow" ) ) {
				_this.children().removeClass( "fa-plus" ).addClass( "fa-minus" );
			} else {
				_this.children().removeClass( "fa-minus" ).addClass( "fa-plus" );
			}
		});
	}
	dropdownMenuMobileHandle();

}(jQuery) );
