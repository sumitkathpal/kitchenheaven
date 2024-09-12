<?php
/**
 * WYSIWYG Editor Control
 * 
 * @package Pubnews
 * @since 1.0.0
 */
class Pubnews_WP_Editor_Control extends WP_Customize_Control {
    /**
	 * Control's Type.
	 *
	 * @var string
	 */
	public $type = 'pubnews-editor';
	public $tab = 'general';
	
	/**
	 * Refresh the parameters passed to the JavaScript via JSON.
	 *
	 * @see WP_Customize_Control::to_json()
	 */
	public function to_json() {
		parent::to_json();
		$this->json['default'] = $this->setting->default;
		if ( isset( $this->default ) ) {
			$this->json['default'] = $this->default;
		}
		$this->json['value'] = $this->value();
		$this->json['link']        = $this->get_link();
		$this->json['id']          = $this->id;
		$this->json['label']       = esc_html( $this->label );
		$this->json['description'] = $this->description;
		if( $this->tab ) {
			$this->json['tab'] = $this->tab;
		}
	}
    
    /**
     * Loads the jQuery UI Button script and custom scripts/styles.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue() {
        wp_enqueue_script( 'pubnews-editor-control', get_template_directory_uri() . '/inc/customizer/custom-controls/editor-control/editor-control.js', array( 'jquery' ), PUBNEWS_VERSION, true );
    }

	/**
	 * An Underscore (JS) template for this control's content (but not its container).
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see WP_Customize_Control::print_template()
	 */
	protected function content_template() {
		?>
		<div class="customizer-text">
			<# if ( data.label ) { #>
			<span class="customize-control-title">{{{ data.label }}}</span>
			<# } #>

			<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
			<# } #>
		</div>

		<textarea id="editor_{{{ data.id }}}" {{{ data.link }}} style="width:100%">{{ data.value }}</textarea>
		<?php
	}
}
