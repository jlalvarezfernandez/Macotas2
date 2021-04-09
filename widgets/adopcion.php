<?php
/**
 * Elementor Posts Widget
 *
 * @package unitedpets
 */

namespace Elementor;

/**
 * Class Unitedpets_Adoption_Widget elementor posts widget.
 */
class Unitedpets_Adopcion_Widget extends \Elementor\Widget_Base {

	/**
	 * Name
	 */
	public function get_name() {
		return 'unitedpets-adopcion';
	}

	/**
	 * Title
	 */
	public function get_title() {
		return esc_html__( 'Adoption unitedpets', 'united-pets' );
	}

	/**
	 * Icon
	 */
	public function get_icon() {
		return 'eicon-banner';
	}

	/**
	 * Category
	 */
	public function get_categories() {
		return array( 'unitedpets-category' );
	}

	/**
	 * Scripts
	 */
	public function get_script_depends() {
		return array( 'unitedpets-elementor' );
	}

	/**
	 * Controls
	 */
	protected function _register_controls() { //phpcs:ignore
		$this->start_controls_section(
			'post_content',
			array(
				'label' => esc_html__( 'General', 'united-pets' ),
			)
		);

		// Posts per page.
		$this->add_control(
			'posts_per_page',
			array(
				'label'   => esc_html__( 'Posts Per Page', 'united-pets' ),
				'type'    => Controls_Manager::NUMBER,
				'min'     => -1,
				'max'     => 100,
				'step'    => 1,
				'default' => 4,
			)
		);

		// Column show in page.
		$this->add_responsive_control(
			'column_responsive',
			array(
				'label'                    => esc_html__( 'Column responsive', 'united-pets' ),
				'type'                     => Controls_Manager::NUMBER,
				'min'                      => 1,
				'max'                      => 6,
				'step'                     => 1,
				'devices'                  => array( 'desktop', 'mobile' ),
				'column_responsive_mobile' => array(
					'default' => 1,
				),
				'column_responsive'        => array(
					'default' => 2,
				),
			)
		);

		// Margin.
		$this->add_responsive_control(
			'margin',
			array(
				'label' => esc_html__( 'Margin', 'united-pets' ),
				'type'  => Controls_Manager::NUMBER,
				'min'   => 1,
				'max'   => 100,
				'step'  => 1,
				'magin' => array(
					'default' => 30,
				),
			)
		);

		// Stage show in page.
		$this->add_responsive_control(
			'stage_responsive',
			array(
				'label'                   => esc_html__( 'Stage responsive', 'united-pets' ),
				'type'                    => Controls_Manager::NUMBER,
				'min'                     => 0,
				'max'                     => 500,
				'step'                    => 1,
				'devices'                 => array( 'desktop', 'tablet', 'mobile' ),
				'stage_responsive_mobile' => array(
					'default' => 0,
				),
				'stage_responsive_tablet' => array(
					'default' => 60,
				),
				'stage_responsive'        => array(
					'default' => 120,
				),
			)
		);

		// Orderby.
		$this->add_control(
			'order_by',
			array(
				'label'   => esc_html__( 'Order By', 'united-pets' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'id',
				'options' => array(
					'id'            => esc_html__( 'ID', 'united-pets' ),
					'author'        => esc_html__( 'Author', 'united-pets' ),
					'title'         => esc_html__( 'Title', 'united-pets' ),
					'name'          => esc_html__( 'Name', 'united-pets' ),
					'date'          => esc_html__( 'Date', 'united-pets' ),
					'rand'          => esc_html__( 'Random', 'united-pets' ),
					'modified'      => esc_html__( 'Modified', 'united-pets' ),
					'comment_count' => esc_html__( 'Comment Count', 'united-pets' ),
				),
			)
		);

		// Order.
		$this->add_control(
			'order',
			array(
				'label'   => esc_html__( 'Order', 'united-pets' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'ASC',
				'options' => array(
					'ASC'  => esc_html__( 'ASC', 'united-pets' ),
					'DESC' => esc_html__( 'DESC', 'united-pets' ),
				),
			)
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_section_2',
			array(
				'label' => esc_html__( 'Style Adoption', 'united-pets' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			)
		);

		// Style name adoption.
		$this->add_control(
			'name_color',
			array(
				'label'     => esc_html__( 'Name Color', 'united-pets' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .adoption-header a' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'content_typography_1',
				'label'    => esc_html__( 'Typography Name', 'united-pets' ),
				'selector' => '{{WRAPPER}} .adoption-header a',
			)
		);

		// Style gender adoption.
		$this->add_control(
			'adopt_color',
			array(
				'label'     => esc_html__( 'Index Color', 'united-pets' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .list-unstyled li' => 'color: {{VALUE}}',
				),
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			array(
				'name'     => 'content_typography_2',
				'label'    => esc_html__( 'Typography Index', 'united-pets' ),
				'selector' => '{{WRAPPER}} .list-unstyled li',
			)
		);

		// Style border color adoption.
		$this->add_control(
			'border_image_color',
			array(
				'label'     => esc_html__( 'Border Image Color', 'united-pets' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .adopt-image' => 'border-color: {{VALUE}}',
				),
			)
		);

		// Style icon color adoption.
		$this->add_control(
			'icon_color',
			array(
				'label'     => esc_html__( 'Icon Color', 'united-pets' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .adopt-card-info i' => 'color: {{VALUE}}',
				),
			)
		);

		// Style button adoption.
		$this->add_control(
			'button_color',
			array(
				'label'     => esc_html__( 'Button Color', 'united-pets' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .btn-primary' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->add_control(
			'button_hover_color',
			array(
				'label'     => esc_html__( 'Button Hover Color', 'united-pets' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'selectors' => array(
					'{{WRAPPER}} .btn-primary:hover' => 'background-color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_section();
	}

	/**
	 * Render
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		// WP_Query arguments.
		$args = array(
			'post_type'      => array( 'adoptado' ),
			'post_status'    => array( 'publish' ),
			'order'          => $settings['order'],
			'order_by'       => $settings['order_by'],
			'posts_per_page' => $settings['posts_per_page'],
		);

		// The Query.
		$adopt = new \WP_Query( $args );

		$terms = get_terms(
			array(
				'taxonomy'   => 'adopt_category_service',
				'hide_empty' => true,
			)
		);

		if ( $adopt->have_posts() ) { ?>
			<div class="carousel-box">
				<div class="carousel-slider col-md-12 carousel-2items owl-carousel owl-theme" data-col="<?php echo esc_attr( $settings['column_responsive'] ); ?>" data-col-mobile="<?php echo esc_attr( $settings['column_responsive_mobile'] ); ?>" data-stage="<?php echo esc_attr( $settings['stage_responsive'] ); ?>" data-stage-tablet="<?php echo esc_attr( $settings['stage_responsive_tablet'] ); ?>" data-stage-mobile="<?php echo esc_attr( $settings['stage_responsive_mobile'] ); ?>" data-margin="<?php echo esc_attr( $settings['margin'] ); ?>">
					<?php
					while ( $adopt->have_posts() ) {
						$adopt->the_post();

						$mascota_fundacion = get_field( 'fundacion', get_the_ID() );

						$img          = get_the_post_thumbnail_url( get_the_ID(), 'full' );
						$link         = get_the_permalink( $mascota_fundacion[0]->ID );
						$title        = get_the_title();
						$adopt_name   = get_post_meta( get_the_ID(), '_adopt_name', true );
						$adopt_sexo   = get_field( 'sexo', get_the_ID() );
						$adopt_age    = get_field( 'edad', get_the_ID() );
						$adopt_breed  = get_field( 'raza', get_the_ID() );
						$adopt_tipo   = get_field( 'tipo', get_the_ID() );

						?>
						<div class="margin-adopt">
							<div class="adopt-card res-margin row bg-light pattern2">
								<div class="col-md-5">
									<!-- Image -->
									<div class="adopt-image d-flex flex-wrap align-items-center ">
										<a href="<?php echo esc_url( $link ); ?>">
											<img src="<?php echo esc_url( $img ); ?>" class="img-fluid" alt="<?php echo esc_attr( $title ); ?>">
										</a>
									</div>
								</div>
								<div class="col-md-7 res-margin">
									<!-- Name -->
									<div class="caption-adoption">
										<h5 class="adoption-header"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h5>
										<!-- List -->
										<ul class="list-unstyled">
											<li><strong><?php echo esc_html__( 'Tipo', 'united-pets' ); ?>:</strong> <div class="info-adopt-center"> <?php echo esc_html( $adopt_tipo ); ?></div></li>
											<li><strong><?php echo esc_html__( 'Sexo', 'united-pets' ); ?>:</strong> <div class="info-adopt-center"> <?php echo esc_html( $adopt_sexo ); ?></div></li>
											<li><strong><?php echo esc_html__( 'Edad', 'united-pets' ); ?>:</strong> <div class="info-adopt-center"> <?php echo esc_html( $adopt_age ); ?><?php echo esc_html__( ' años', 'united-pets' ); ?></div></li>
											<li><strong><?php echo esc_html__( 'Raza', 'united-pets' ); ?>:</strong> <div class="info-adopt-center"> <?php echo esc_html( $adopt_breed ); ?></div></li>
										</ul>
									</div>
								</div>
								<div class="col-md-12 mt-3">
									<!-- Button -->
									<div class="text-adopt">
										<!-- Adopt info -->
										<div class="adopt-card-info list-unstyled">
											<?php echo get_the_post_thumbnail( $mascota_fundacion[0]->ID, 'full', array( 'class' => 'icon'  )); ?> 
										</div>
										<!-- button-->
										<div class="text-center">
											<a href="<?php echo esc_url( $link ); ?>" class="btn btn-primary"><?php echo esc_html__( 'Más información', 'united-pets' ); ?></a>
										</div>
									</div>
									<!-- /text-center -->
								</div>
								<!-- /col-md -->
							</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
			<?php
		}
	}
}

Plugin::instance()->widgets_manager->register_widget_type( new Unitedpets_Adopcion_Widget() );
