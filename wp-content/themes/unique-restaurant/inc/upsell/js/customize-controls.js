( function( api ) {

	// Extends our custom "unique-restaurant" section.
	api.sectionConstructor['unique-restaurant'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );