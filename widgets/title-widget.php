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
				'default' => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .title-widget-s1' => 'color: {{VALUE}};',
				],
			]
		);

		// add background color control
		$this->add_control(
			'title_background_color',
			[
				'label' => esc_html__( 'Background Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#e80028',
				'selectors' => [
					'{{WRAPPER}} .title-widget-s1' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .title-widget-s1:after' => 'border-top-color: {{VALUE}};',
				],
			]
		);

		// font size control
		$this->add_control(
			'title_font_size',
			[
				'label' => esc_html__( 'Font Size', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'default' => [
					'size' => 16,
				],
				'selectors' => [
					'{{WRAPPER}} .title-widget-s1' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		// font weight control
		$this->add_control(
			'title_font_weight',
			[
				'label' => esc_html__( 'Font Weight', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'normal' => esc_html__( 'Normal', 'elementor-addon' ),
					'bold' => esc_html__( 'Bold', 'elementor-addon' ),
				],
				'default' => 'bold',
				'selectors' => [
					'{{WRAPPER}} .title-widget-s1' => 'font-weight: {{VALUE}};',
				],
			]
		);

		// html wrapper control
		$this->add_control(
			'title_html_tag',
			[
				'label' => esc_html__( 'HTML Tag', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'h1' => esc_html__( 'H1', 'elementor-addon' ),
					'h2' => esc_html__( 'H2', 'elementor-addon' ),
					'h3' => esc_html__( 'H3', 'elementor-addon' ),
					'h4' => esc_html__( 'H4', 'elementor-addon' ),
					'h5' => esc_html__( 'H5', 'elementor-addon' ),
					'h6' => esc_html__( 'H6', 'elementor-addon' ),
					'p' => esc_html__( 'P', 'elementor-addon' ),
					'div' => esc_html__( 'DIV', 'elementor-addon' ),
				],
				'default' => 'h2',
				// 'selectors' => [
				// 	'{{WRAPPER}} .title-widget-s1' => 'display: inline-block;',
				// ],
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
		


		<<?php echo $settings['title_html_tag']; ?> class="title-widget-s1">
			<?php echo $settings['title']; ?>
		</<?php echo $settings['title_html_tag']; ?>>
		<?php
	}

	protected function content_template() {
		?>
		<#
		if ( '' === settings.title ) {
			return;
		}
		#>
		<{{ settings.title_html_tag }} class="title-widget-s1">
			{{ settings.title }}
		</{{ settings.title_html_tag }}>
		<?php
	}
}