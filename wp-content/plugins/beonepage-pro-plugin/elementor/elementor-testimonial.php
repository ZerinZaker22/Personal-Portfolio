<?php
namespace Elementor;
if ( ! defined( 'ABSPATH' ) ) exit;
class Widget_My_Custom_Elementor_Testimonial extends Widget_Base {
	
	public function get_categories() {
		return [ 'beonepage-widgets' ];
	}
	public function get_name() {
		return 'elementor-testimonial';
	}
	public function get_title() {
		return __( 'BeOne Testimonial', 'beonepage' );
	}
	public function get_icon() {
		return 'fa fa-quote-left ';
	}
	protected function _register_controls() {
		$this->add_control(
			'elementor_testimonial',
			[
            'label' => __( 'Testimonial Option', 'beonepage' ),
            'type' 	=> Controls_Manager::SECTION,
			]
		);
		//Title
		$beonepage_testimonial_module_title = beonepage_olddata_fetch('front_page_testimonial_module_title', 'option');
		if(!empty($beonepage_testimonial_module_title)){
			$beonepage_testimonial_module_title = beonepage_olddata_fetch('front_page_testimonial_module_title', 'option');
			$beonepage_testimonial_module_title = html_entity_decode($beonepage_testimonial_module_title);
		}else{
			$beonepage_testimonial_module_title = wp_kses("What <span>Clients</span> Say",array('span' => array()));
		}
		$this->add_control(
			'section_title',
			[
				'label' 	=> __( "Title", 'beonepage' ),
				'type' 		=> Controls_Manager::TEXT,
				'default' 	=> $beonepage_testimonial_module_title,
				'title'		=> __( 'Enter Title', 'beonepage' ),
				'section' 	=> 'elementor_testimonial',
				'condition' => [
                    'section_slider_type' => 'text',
                ],
			]
		);
        //Sub title
		$beonepage_testimonial_module_title = beonepage_olddata_fetch('front_page_testimonial_module_title', 'option');
			if(!empty($beonepage_testimonial_module_title)){
				$beonepage_testimonial_module_title = beonepage_olddata_fetch('front_page_testimonial_module_title', 'option');
				$beonepage_testimonial_module_title = html_entity_decode($beonepage_testimonial_module_title);
			}else{
				$beonepage_testimonial_module_title = esc_attr("We're the best professionals in this field");
			}
			$this->add_control(
			'section_sub_title',
				[
					'label' 	=> __( "Sub Title", 'beonepage' ),
					'type' 		=> Controls_Manager::TEXT,
					'default' 	=> $beonepage_testimonial_module_title,
					'title' 	=> __( 'Enter Sub Title', 'beonepage' ),
					'section' 	=> 'elementor_testimonial',
				]			
			);
		//Caption Animation
		$beonepage_testimonial_module_animation = beonepage_olddata_fetch('front_page_testimonial_module_animation', 'option');
			if(!empty($beonepage_testimonial_module_animation)){
				$beonepage_testimonial_module_animation = beonepage_olddata_fetch('front_page_testimonial_module_animation', 'option');
			}else{
				$beonepage_testimonial_module_animation = esc_attr("wobble");
			}
        $this->add_control(
            'section_caption_animation',
            [
                'label'   => __( 'Caption Animation', 'beonepage' ),
                'type'    => Controls_Manager::SELECT,
                'default' => $beonepage_testimonial_module_animation,
                'options' => beonepage_theme_animate(),
                'section' => 'elementor_testimonial',
            ]         
        );
		// Font Color
		$beonepage_testimonial_module_color = beonepage_olddata_fetch('front_page_testimonial_module_color', 'option');
			if(!empty($beonepage_testimonial_module_color)){
				$beonepage_testimonial_module_color = beonepage_olddata_fetch('front_page_testimonial_module_color', 'option');
			}else{
				$beonepage_testimonial_module_color = esc_attr("#eceff3");
			}
			$this->add_control(
				'section_font_color',
				[
					'label' 	=> __( "Font Color", 'beonepage' ),
					'type' 		=> Controls_Manager::COLOR,
					'default' 	=> $beonepage_testimonial_module_color,
					'scheme' 	=> [
					'type' 		=> Scheme_Color::get_type(),
					'value' 	=> Scheme_Color::COLOR_1,
					],
					'selectors' => [
					'{{WRAPPER}} .title' => 'color: {{VALUE}}',
					],
					'section' 	=> 'elementor_testimonial',
				]
			
			);
		//Separator Line & Dots Color
		$beonepage_testimonial_module_sp_color = beonepage_olddata_fetch('front_page_testimonial_module_sp_color', 'option');
			if(!empty($beonepage_testimonial_module_sp_color)){
				$beonepage_testimonial_module_sp_color = beonepage_olddata_fetch('front_page_testimonial_module_sp_color', 'option');
			}else{
				$beonepage_testimonial_module_sp_color = esc_attr("#888");
			}
			
			$this->add_control(
				'section_separator_line_color',
				[
					'label' 	=> __( "Separator Line & Dots Color", 'beonepage' ),
					'type' 		=> Controls_Manager::COLOR,
					'default' 	=> $beonepage_testimonial_module_sp_color,
					'scheme' 	=> [
						'type' 	=> Scheme_Color::get_type(),
						'value' => Scheme_Color::COLOR_1,
						],
					'selectors' => [
						'{{WRAPPER}} .title' => 'color: {{VALUE}}',
						],
					'section' 	=> 'elementor_testimonial',
				]
			
			);
		//Separator Circle & Active Dot Color
		$beonepage_testimonial_module_sp_i_color = beonepage_olddata_fetch('front_page_testimonial_module_sp_i_color', 'option');
			if(!empty($beonepage_testimonial_module_sp_i_color)){
				$beonepage_testimonial_module_sp_i_color = beonepage_olddata_fetch('front_page_testimonial_module_sp_i_color', 'option');
			}else{
				$beonepage_testimonial_module_sp_i_color = esc_attr("#ffcc00");
			}
			
			$this->add_control(
				'section_separator_circle_color',
				[
					'label' 	=> __( "Separator Circle & Active Dot Color", 'beonepage' ),
					'type' 		=> Controls_Manager::COLOR,
					'default' 	=> $beonepage_testimonial_module_sp_i_color,
					'scheme' 	=> [
						'type' 	=> Scheme_Color::get_type(),
						'value' => Scheme_Color::COLOR_1,
					],
					'selectors' => [
						'{{WRAPPER}} .title' => 'color: {{VALUE}}',
					],
					'section' 	=> 'elementor_testimonial',
				]
			
			);
		//Testimonial Box Background Color
		$beonepage_testimonial_module_box = beonepage_olddata_fetch('front_page_testimonial_module_box', 'option');
			if(!empty($beonepage_testimonial_module_box)){
				$beonepage_testimonial_module_box = beonepage_olddata_fetch('front_page_testimonial_module_box', 'option');
			}else{
				$beonepage_testimonial_module_box = esc_attr("rgba(17,17,17,0.5)");
			}
			
			$this->add_control(
				'section_module_box',
				[
					'label' 	=> __( "Testimonial Box Background Color", 'beonepage' ),
					'type' 		=> Controls_Manager::COLOR,
					'default' 	=> $beonepage_testimonial_module_box,
					'scheme' 	=> [
						'type' 	=> Scheme_Color::get_type(),
						'value' => Scheme_Color::COLOR_1,
					],
					'selectors' => [
						'{{WRAPPER}} .title' => 'color: {{VALUE}}',
					],
					'section' 	=> 'elementor_testimonial',
				]
			
			);
		//Background setting                
		$class = '';
		$attribute = '';    
        $beonepage_testimonial_module_bg = beonepage_olddata_fetch('front_page_testimonial_module_bg', 'option');
        if(!empty($beonepage_testimonial_module_bg)){
			$beonepage_testimonial_module_bg = beonepage_olddata_fetch('front_page_testimonial_module_bg', 'option');
        }else{
			$beonepage_testimonial_module_bg = esc_attr("color");
        }       
		$this->add_control(
			'section_background',
			[
				'label' 	=> __( "Background", 'beonepage' ),
				'type' 		=> Controls_Manager::CHOOSE,
				'options' 	=> [
                    'color' => [
                        'title' => __( 'Color', 'beonepage' ),
                        'icon' 	=> 'fa fa-eyedropper',
                        
                    ],
                    'image' => [
                        'title' => __( 'Image', 'beonepage' ),
                        'icon' 	=> 'fa fa-image',
                    ],
                    'video' => [
                        'title' => __( 'Video', 'beonepage' ),
                        'icon' 	=> '    fa fa-caret-square-o-right',
                    ]
				],
				'default' 	=> $beonepage_testimonial_module_bg,
				'toggle' 	=> true,
				'section' 	=> 'elementor_testimonial',
			]
         
        );
		//Background color
		$beonepage_testimonial_module_bg_color = beonepage_olddata_fetch('front_page_testimonial_module_bg_color', 'option');
			if(!empty($beonepage_testimonial_module_bg_color)){
				$beonepage_testimonial_module_bg_color = beonepage_olddata_fetch('front_page_testimonial_module_bg_color', 'option');
			}else{
				$beonepage_testimonial_module_bg_color = esc_attr("#181a1c");
			}
        $this->add_control(
			'section_background_color',
			[
				'label' 	=> __( "Background Color", 'beonepage' ),
				'type' 		=> Controls_Manager::COLOR,
				'default' 	=> $beonepage_testimonial_module_bg_color,
				'scheme' 	=> [
						'type' 	=> Scheme_Color::get_type(),
						'value' => Scheme_Color::COLOR_1,
					],
					'selectors' => [
						'{{WRAPPER}} .title' => 'color: {{VALUE}}',
					],
					'condition' => [
						'section_background' => 'color',
					],
				'section' 	=> 'elementor_testimonial',
			]         
        );        
        //Background image 
        $beonepage_testimonial_module_bg_img = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
        if(!empty($beonepage_testimonial_module_bg_img['background-image'])){
			$beonepage_testimonial_module_bg_img = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
			$beonepage_testimonial_module_bg_img_url = $beonepage_testimonial_module_bg_img['background-image'];
        }else{
			$beonepage_testimonial_module_bg_img_url = \Elementor\Utils::get_placeholder_image_src();
        }
        $this->add_control(
			'section_background_image',
			[
				'label' => __( "Bakground Image", 'beonepage' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
						'url' => esc_url($beonepage_testimonial_module_bg_img_url),
					],
					'condition' => [
						'section_background' => 'image',
					],
				'section' => 'elementor_testimonial',
			]        
        );
        // Background Repeat
        $beonepage_testimonial_module_bg_img_rp = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
        if(!empty($beonepage_testimonial_module_bg_img_rp['background-repeat'])){
          $beonepage_testimonial_module_bg_img_rp = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
          $beonepage_testimonial_module_bg_img_rp = $beonepage_testimonial_module_bg_img_rp['background-repeat'];
        }else{
           $beonepage_testimonial_module_bg_img_rp = esc_attr("No Repeat");
        }
         $this->add_control(
            'section_background_image_rp',
            [
                'label' 	=> __( 'Background Repeat', 'beonepage' ),
                'type' 		=> Controls_Manager::SELECT,
                'default' 	=> $beonepage_testimonial_module_bg_img_rp,
                'options' 	=> [
                    'no-repeat' => __( 'No Repeat', 'beonepage' ),
                    'repeat' 	=> __( 'Repeat All', 'beonepage' ),
                    'repeat-x' 	=> __( 'Repeat Horizontally', 'beonepage' ),
                    'repeat-y' 	=> __( 'Repeat Vertically', 'beonepage' ),
                ],
                'section' 	=> 'elementor_testimonial',
				'condition'	=> [
                    'section_background' => 'image',
                ],
            ]         
        );
        //Background Position
        $beonepage_testimonial_module_bg_img_bp = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
        if(!empty($beonepage_testimonial_module_bg_img_bp['background-position'])){
          $beonepage_testimonial_module_bg_img_bp = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
          $beonepage_testimonial_module_bg_img_bp = $beonepage_testimonial_module_bg_img_bp['background-position'];
        }else{
           $beonepage_testimonial_module_bg_img_bp = esc_attr("Left Top");
        }
        $this->add_control(
            'section_background_image_bp',
            [
                'label' 	=> __( 'Background Position', 'beonepage' ),
                'type' 		=> Controls_Manager::SELECT,
                'default' 	=> $beonepage_testimonial_module_bg_img_bp,
                'options' 	=> [
					'left top'  	=> __( 'Left Top', 'beonepage' ),
                    'left center' 	=> __( 'Left Center', 'beonepage' ),
                    'left bottom' 	=> __( 'Left Bottom', 'beonepage' ),
                    'right top' 	=> __( 'Right Top', 'beonepage' ),
                    'right center'  => __( 'Right Center', 'beonepage' ),
                    'right bottom' 	=> __( 'Right Bottom', 'beonepage' ),
                    'center top' 	=> __( 'Center Top', 'beonepage' ),
                    'center center' => __( 'Center Center', 'beonepage' ),
                    'center bottom' => __( 'Center Bottom', 'beonepage' ),
                ],
                'section' 	=> 'elementor_testimonial',
				'condition' => [
                    'section_background' => 'image',
                ],
            ]
         
        );
        //Background Size
        $beonepage_testimonial_module_bg_img_bs = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
        if(!empty($beonepage_testimonial_module_bg_img_bs['background-size'])){
          $beonepage_testimonial_module_bg_img_bs = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
          $beonepage_testimonial_module_bg_img_bs = $beonepage_testimonial_module_bg_img_bs['background-size'];
        }else{
          $beonepage_testimonial_module_bg_img_bs = esc_attr("auto");
        }
    
        $this->add_control(
			'section_background_image_bs',
			[
				'label' 	=> __( "Background Size", 'beonepage' ),
				'type' 		=> Controls_Manager::CHOOSE,
				'options' 	=> [
							'cover' => [
							'title' => __( 'Cover', 'beonepage' ),
							'icon' 	=> 'fa fa-arrows',
							
							],
							'contain' 	=> [
								'title' => __( 'Contain', 'beonepage' ),
								'icon' 	=> 'fa fa-arrows-v',
							],
							'auto' 	=> [
								'title' => __( 'Auto', 'beonepage' ),
								'icon' => 'fa fa-asterisk',
								]
					],
				'default' 		=> $beonepage_testimonial_module_bg_img_bs,
				'toggle' 		=> true,
				'condition' 	=> [
						'section_background' => 'image',
					],
				'section' => 'elementor_testimonial',
			]         
        );
        //Background Attachment
        $beonepage_testimonial_module_bg_img_ath = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
        if(!empty($beonepage_testimonial_module_bg_img_ath['background-attachment'])){
          $beonepage_testimonial_module_bg_img_ath = beonepage_olddata_fetch('front_page_testimonial_module_bg_img', 'option');
          $beonepage_testimonial_module_bg_img_ath = $beonepage_testimonial_module_bg_img_ath['background-attachment'];
        }else{
          $beonepage_testimonial_module_bg_img_ath = esc_attr("Scroll");
        }   
        $this->add_control(
        'section_background_image_ath',
        [
            'label' => __( "Background Attachment", 'beonepage' ),
            'type' => Controls_Manager::CHOOSE,
			'options' => [
                    'scroll' => [
                        'title' => __( 'Scroll', 'beonepage' ),
                        'icon' => 'fa fa-arrow-circle-right',
                        
                    ],
                    'fixed' => [
                        'title' => __( 'Fixed', 'beonepage' ),
                        'icon' => 'fa fa-arrows-alt',
                    ],
                    
                ],
            'default' => $beonepage_testimonial_module_bg_img_ath,
            'toggle' => true,
			'condition' => [
                    'section_background' => 'image',
            ],
            'section' => 'elementor_testimonial',
        ]         
        );
        //Background video field
        $beonepage_testimonial_module_bg_video = beonepage_olddata_fetch('front_page_testimonial_module_bg_video', 'option');
			if(!empty($beonepage_testimonial_module_bg_video)){
				$beonepage_testimonial_module_bg_video = beonepage_olddata_fetch('front_testimonial_module_table_module_bg_video', 'option');
				$beonepage_testimonial_module_bg_video = html_entity_decode($beonepage_testimonial_module_bg_video);
			}else{
				$beonepage_testimonial_module_bg_video =  esc_attr("Video Url");
			}
        $this->add_control(
         'section_youtube_url',
			[
				'label' 	=> __( "YouTube URL", 'beonepage' ),
				'type' 		=> Controls_Manager::TEXT,
				'default' 	=> $beonepage_testimonial_module_bg_video,
				'condition' => [
                    'section_background' => 'video',
                ],
				'description' => __( 'IMPORTANT NOTE: The YouTube Video is automatically disabled in mobile devices. Instead, the Image will be used, so its better to define both Image and YouTube Video for best results.', 'beonepage' ),
				'section' 	=> 'elementor_testimonial',
			]        
        );       
        //Parallax seting
        $beonepage_testimonial_module_bg_parallax = beonepage_olddata_fetch('front_page_testimonial_module_bg_parallax', 'option');
        if(!empty($beonepage_testimonial_module_bg_parallax)){
			$beonepage_testimonial_module_bg_parallax = beonepage_olddata_fetch('front_page_testimonial_module_bg_parallax', 'option');
			$beonepage_testimonial_module_bg_parallax = html_entity_decode($beonepage_testimonial_module_bg_parallax);
        if($beonepage_testimonial_module_bg_parallax == 1){
            $beonepage_testimonial_module_bg_parallax_d = esc_attr("yes");
        }else{
            $beonepage_testimonial_module_bg_parallax_d = esc_attr("no");
        }  
        }else{
          $beonepage_testimonial_module_bg_parallax_d = esc_attr("yes");
        }
        $this->add_control(
			'section_bg_parallax',
			[
            'label' 		=> __( 'Enable Parallax Scrolling For Image?', 'beonepage' ),
            'type' 			=> Controls_Manager::SWITCHER,
            'label_on' 		=> __( 'Enable', 'beonepage' ),
            'label_off' 	=> __( 'Disable', 'beonepage' ),
            'return_value' 	=> 'yes',
            'default' 		=> $beonepage_testimonial_module_bg_parallax_d,
            'section' 		=> 'elementor_testimonial',
			]
        );
		//Testimonial Metabox data
		$result = array();
		$_beonepage_option_testimonial = get_post_meta( get_option( 'page_on_front' ), '_beonepage_option_testimonial', true );
		if(!empty($_beonepage_option_testimonial)){
			$_beonepage_option_testimonial = get_post_meta( get_option( 'page_on_front' ), '_beonepage_option_testimonial', true );
			
			foreach ( $_beonepage_option_testimonial as $testimonial ) :
			
			$beonepage_img_url = '';
			if(isset($testimonial['img_url']) && $testimonial['img_url'] != ''){
				$beonepage_img_url = $testimonial['img_url'];
			}
			$beonepage_name = '';
			if(isset($testimonial['name']) && $testimonial['name'] != ''){
				$beonepage_name = $testimonial['name'];
			}
			$beonepage_addition = '';
			if(isset($testimonial['addition']) && $testimonial['addition'] != ''){
				$beonepage_addition = $testimonial['addition'];
			}
			$beonepage_description = '';
			if(isset($testimonial['description']) && $testimonial['description'] != ''){
				$beonepage_description = $testimonial['description'];
			}
			$result[] = array('section_clients_image' => array('url' => $beonepage_img_url),
								'section_clients_name' => $beonepage_name, 		
								'section_client_addition' => $beonepage_addition,
								'section_client_description' => $beonepage_description,
								);	
			endforeach;
			
		}else{
			$result = array();
		}
		$this->add_control(
		'section_testimonial',
			[
				'label' 	=> __('testimonial data', 'beonepage' ),
				'type' 		=> Controls_Manager::REPEATER,
				'fields' 	=> [				
					[
					'name' 		=> 'section_clients_image',
					'label' 	=> __( 'Client Picture', 'beonepage' ),
					'type' 		=> Controls_Manager::MEDIA,
					],
					[
					'name' 		=> 'section_clients_name',
					'label' 	=> __( "Client Name", 'beonepage' ),
					'type' 		=> Controls_Manager::TEXT,
					],					
					[
					'name' 		=> 'section_client_addition',
					'label' 	=> __( "Addition", 'beonepage' ),
					'type' 		=> Controls_Manager::TEXT,
					'description' => __( 'e.g. company or title.', 'beonepage' ),
					],
					[
						'name' 		=> 'section_client_description',
						'label' 	=> 	__( "Description", 'beonepage' ),
						'type' 		=> 	Controls_Manager::TEXTAREA,
						'rows' 		=> 	7,
					],
					
				],
				'default' 		=> $result,								
				'section'	 	=> 'elementor_testimonial',
			]
		);	
}// End function
protected function render( $instance = [] ) {
	$settings = $this->get_settings();
	$class = '';
	$attribute = '';    
    if ( $settings['section_background'] == 'color' ) {
        $class = ' no-background';
    } else {
        $class = ' img-background';
    }

    if ( $settings['section_background'] == 'image' && $settings['section_bg_parallax'] == 'yes' ) {
        $class .= ' parallax';
        $attribute = ' data-stellar-background-ratio="0.5"';
    }

    if ( $settings['section_background'] == 'video' ) {
        $class .= ' yt-bg-player';
        $attribute .= ' data-yt-video="' . $settings['section_youtube_url']. '"';
    }elseif( $settings['section_background'] == 'color')
			 {
				$class = ' no-background';
			} else {
				$class = ' img-background';
			}
		//conitions For Css
		$beonepage_section_background_image_url = '';
		if(isset($settings['section_background_image']['url'])&& $settings['section_background_image']['url'] !=''){
			$beonepage_section_background_image_url = $settings['section_background_image']['url'];
		}
		$beonepage_section_background_color = '';
		if(isset($settings['section_background_color']) && $settings['section_background_color'] !=''){
			$beonepage_section_background_color = $settings['section_background_color'];
		}
		$beonepage_section_font_color = '';
		if(isset($settings['section_font_color']) && $settings['section_font_color'] !=''){
			$beonepage_section_font_color = $settings['section_font_color'];
		}
		$beonepage_section_separator_line_color = '';
		if(isset($settings['section_separator_line_color']) && $settings['section_separator_line_color'] !=''){
			$beonepage_section_separator_line_color = $settings['section_separator_line_color'];
		}
		$beonepage_section_separator_circle_color = '';
		if(isset($settings['section_separator_circle_color']) && $settings['section_separator_circle_color'] !=''){
			$beonepage_section_separator_circle_color = $settings['section_separator_circle_color'];
		}
		$beonepage_section_module_box = '';
		if(isset($settings['section_module_box']) && $settings['section_module_box'] !=''){
			$beonepage_section_module_box = $settings['section_module_box'];
		}
		$beonepage_section_background_image_rp = '';
		if(isset($settings['section_background_image_rp']) && $settings['section_background_image_rp'] !=''){
			$beonepage_section_background_image_rp = $settings['section_background_image_rp'];
		}
		$beonepage_section_background_image_bp = '';
		if(isset($settings['section_background_image_bp']) && $settings['section_background_image_bp'] !=''){
			$beonepage_section_background_image_bp = $settings['section_background_image_bp'];
		}
		$beonepage_section_background_image_bs = '';
		if(isset($settings['section_background_image_bs']) && $settings['section_background_image_bs'] !=''){
			$beonepage_section_background_image_bs = $settings['section_background_image_bs'];
		}
		$beonepage_section_background_image_ath = '';
		if(isset($settings['section_background_image_ath']) && $settings['section_background_image_ath'] !=''){
			$beonepage_section_background_image_ath = $settings['section_background_image_ath'];
		} ?>
<style>
		<?php if(isset($beonepage_section_background_image_url) && $beonepage_section_background_image_url !=''){?>
			.testimonial-module{
			background-image: url(<?php echo $beonepage_section_background_image_url; ?>);
			}
		<?php }
		if(isset($beonepage_section_background_color) && $beonepage_section_background_color !=''){?>
			.testimonial-module{
			    background-color: <?php echo $beonepage_section_background_color; ?>;
			}
		<?php }
		if(isset($beonepage_section_font_color) && $beonepage_section_font_color !=''){?>
			.testimonial-module{
			    color: <?php echo $beonepage_section_font_color; ?>;
			}
		<?php }
		if(isset($beonepage_section_separator_line_color) && $beonepage_section_separator_line_color !=''){?>	
		.testimonial-module .separator span{
				color: <?php echo $beonepage_section_separator_line_color; ?>;
			}
		<?php }
		if(isset($beonepage_section_separator_circle_color) && $beonepage_section_separator_circle_color !=''){?>	
			.testimonial-module .separator i {
				color: <?php echo $beonepage_section_separator_circle_color; ?>;
			}
		<?php }
		if(isset($beonepage_section_module_box) && $beonepage_section_module_box !=''){?>	
			.testimonial-box blockquote {
				background-color: <?php echo $beonepage_section_module_box; ?>;
			}
		<?php }
		if(isset($beonepage_section_background_image_rp) && $beonepage_section_background_image_rp !=''){?>
			.testimonial-module{
			    background-repeat: <?php echo $beonepage_section_background_image_rp; ?>;
			}
		<?php }
		if(isset($beonepage_section_background_image_bp) && $beonepage_section_background_image_bp !=''){?>
			.testimonial-module{
			    background-position: <?php echo $beonepage_section_background_image_bp; ?>;
			}
		<?php }
		if(isset($beonepage_section_background_image_bs) && $beonepage_section_background_image_bs !=''){?>
			.testimonial-module{
			    background-size: <?php echo $beonepage_section_background_image_bs; ?>;
			}
		<?php }
		if(isset($beonepage_section_background_image_ath) && $beonepage_section_background_image_ath !=''){?>
			.testimonial-module{
			    background-attachment: <?php echo $beonepage_section_background_image_ath; ?>;
			}
		<?php } ?>
</style>
	<section id="" class="module testimonial-module<?php echo $class; ?> clearfix"<?php echo $attribute; ?>>
	<div class="container">
		<div class="row">
			<?php if ( $settings['section_title'] != '' ) : ?>
				<?php $animation = $settings['section_caption_animation'] != 'none' ? ' wow ' . $settings['section_caption_animation'] . '" data-wow-delay=".2s' : ''; ?>

				<div class="module-caption col-md-12 text-center<?php echo $animation; ?>">
					<h2><?php echo strip_tags( html_entity_decode( $settings['section_title']), '<span>' ); ?></h2>

					<?php if ( $settings['section_sub_title'] != '' ) : ?>
						<p><?php echo $settings['section_sub_title']; ?></p>
					<?php endif; ?>

					<div class="separator">
						<span><i class="fa fa-circle"></i></span>
					</div><!-- .separator -->

					<div class="spacer"></div>
				</div><!-- .module-caption -->
			<?php endif; ?>

			<div class="testimonial-container col-md-12 owl-carousel wow fadeIn" data-wow-delay=".5s">
				<?php $testimonials = $settings['section_testimonial']; ?>

				<?php if ( ! empty( $testimonials ) ) : ?>
					<?php foreach ( $testimonials as $testimonial ) : ?>
						<div class="testimonial-item col-md-12">
							<div class="testimonial-box">
								<blockquote>
									<p><?php echo isset( $testimonial['section_client_description'] ) ? $testimonial['section_client_description'] : ''; ?></p>
								</blockquote>

								<div class="testimonial-by">
									<div class="testimonial-img"><img src="<?php echo isset( $testimonial['section_clients_image']['url'] ) ? $testimonial['section_clients_image']['url'] : ''; ?>" alt="<?php echo isset( $testimonial['section_clients_name'] ) ? $testimonial['section_clients_name'] : ''; ?>"></div>
									<div class="testimonial-name"><?php echo isset( $testimonial['section_clients_name'] ) ? $testimonial['section_clients_name'] : ''; ?><span><?php echo isset( $testimonial['section_client_addition'] ) ? $testimonial['section_client_addition'] : ''; ?></span></div>
								</div><!-- .testimonial-by -->
							</div><!-- .testimonial-box -->
						</div><!-- .testimonial-item -->
					<?php endforeach; ?> 
				<?php endif; ?>
			</div><!-- .testimonial-container -->
			</div><!-- .row -->
	</div><!-- .container -->
	</section><!-- #testimonial -->
	<?php
	if ( Plugin::$instance->editor->is_edit_mode() ) :  
		?>
		<script> 
			(function($) {			
				var  $owlCarouselTestimonial = $('.testimonial-container.owl-carousel');
				APP.testimonial = {
					init: function() {
						APP.testimonial.owlCarousel();
					},

					owlCarousel: function() {
						$owlCarouselTestimonial.owlCarousel({
							smartSpeed: 200,
							responsiveClass: true,
							responsive: {
								0: {
									items: 1
								},
								479: {
									items: 2
								}
							}
						});

						$owlCarouselTestimonial.find('.owl-dots').addClass('dot-container');
					}
				}
				APP.testimonial.init();
			})(jQuery);
		</script>  
		<?php
	endif;
}
protected function content_template() {}
public function render_plain_content( $instance = [] ) {}
}
Plugin::instance()->widgets_manager->register_widget_type( new Widget_My_Custom_Elementor_Testimonial );
