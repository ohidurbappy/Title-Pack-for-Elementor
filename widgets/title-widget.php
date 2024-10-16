<?php
class Elementor_Title_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'title_widget';
	}

	public function get_title() {
		return esc_html__( 'Styled Title', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'title', 'style' ];
	}

	protected function render() {
		?>
		<p> Hello World </p>
		<?php
	}

	protected function content_template() {
		?>
		<p> Hello World </p>
		<?php
	}
}