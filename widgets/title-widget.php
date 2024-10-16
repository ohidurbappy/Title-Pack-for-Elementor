<?php
class Elementor_Title_Widget extends \Elementor\Widget_Base {

	public function get_style_depends() {
		return [ 'title-widget' ];
	}


	public function get_name() {
		return 'title_widget';
	}

	public function get_title() {
		return esc_html__( 'Styled Title', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-editor-h1';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'title', 'style' ];
	}

	public function register_controls(){

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Styled Title 1', 'elementor-addon' ),
			]
		);

		$this->end_controls_section();

		// Content Tab End



		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .tp-styled-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		if ( empty( $settings['title'] ) ) {
			return;
		}
		?>
		<p class="tp-styled-title title-widget-s1">
			<?php echo $settings['title']; ?>
		</p>
		<?php
	}

	protected function content_template() {
		?>
		<#
		if ( '' === settings.title ) {
			return;
		}
		#>
		<p class="tp-styled-title title-widget-s1">
			{{ settings.title }}
		</p>
		<?php
	}
}