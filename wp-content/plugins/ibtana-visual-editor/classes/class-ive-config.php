<?php
/**
 * IVE Config.
 *
 * @package UAGB
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'IVE_Config' ) ) {

	/**
	 * Class IVE_Config.
	 */
	class IVE_Config {

		/**
		 * Block Attributes
		 *
		 * @var block_attributes
		 */
		public static $block_attributes = null;

		static function show_currency_symbol() {
			if ( !function_exists( 'get_woocommerce_currency_symbol' ) ) {
				return '';
			}
			global $woocommerce;
			$code =	get_woocommerce_currency_symbol();
			return '<span>' . $code . '</span>';
    }

		/**
		 * Get Widget List.
		 *
		 * @since 0.0.1
		 *
		 * @return array The Widget List.
		 */
		public static function get_block_attributes() {

			if ( null === self::$block_attributes ) {
				self::$block_attributes = array(
					'ive/ibtana-visual-editorbtn'			=>	array(
						'slug'        => '',
            'title'       => __( 'Button', 'ibtana-visual-editor' ),
            'description' => __(
							'The Button block allows you to add buttons linking to other pages on your site with advanced functionality for changing colors, font size, adding opacity, and more.',
							'ibtana-visual-editor'
						),
            'default'     => true,
            'attributes'  => array(
              'btnCount'            => 1,
              'uniqueID'            => '',
              'btns'                => array(
								array(
									'text'              => '',
                  'link'              => '',
                  'target'            => '_self',
                  'desksize'          => 18,
                  'tabsize'           => 16,
                  'mobsize'           => 14,
                  'deskAlign'         => 'center',
                  'tabAlign'          => 'center',
                  'mobAlign'          => 'center',
                  'deskMarginTop'     => 20,
                  'tabMarginTop'      => 20,
                  'mobMarginTop'      => 20,
                  'deskMarginBottom'  => 20,
				  'deskMarginLeft'    => 0,
                  'tabMarginBottom'   => 20,
				  'tabMarginLeft'	  => 10,
                  'mobMarginBottom'   => 20,
				  'mobMarginLeft'	  => 10,
                  'deskpaddingBT'     => 10,
                  'deskpaddingLR'     => 10,
                  'tabpaddingBT'      => 10,
                  'tabpaddingLR'      => 10,
                  'mobpaddingBT'      => 10,
                  'mobpaddingLR'      => 10,
                  'color'             => '#555555',
                  'background'        => 'transparent',
                  'border'            => '#555555',
                  'borderRadius'      => 3,
                  'borderWidth'       => 2,
                  'colorHover'        => '#555555',
                  'backgroundHover'   => 'transparent',
                  'borderHover'       => '#444444',
                  'icon'              => '',
                  'iconSide'          => 'right',
                  'iconpaddingleft'   => 5,
                  'iconpaddingbottom' => 5,
                  'iconpaddingtop' => 5,
									'marginleft'				=> '',
									'marginright'       => '',
								  'iconpaddingright'  => 5,
                  'iconHover'         => false,
                  'iconSvg'           => '',
									'iconSvgLeft'				=> ''
								),
              ),
              'letterSpacing'       => 0,
              'typography'          => '',
              'googleFont'          => false,
              'loadGoogleFont'      => true,
              'fontSubset'          => '',
              'fontVariant'         => '',
              'fontWeight'          => 'regular',
              'fontStyle'           => 'normal',
              'bgOpacity'           => 1,
              'bgfirstcolorr'       => '',
              'bgGradLoc'           => 0,
              'bgSecondColr'        => '#00B5E2',
              'bgGradLocSecond'     => 100,
              'bgGradType'          => 'linear',
              'bgGradAngle'         => 180,
              'vBgImgPosition'      => 'center center',
              'bgBlendMode'         => 'none',
              'iconDisable'         => false,
              'iconDisableHover'    => 0,
              'deskvisible'         => true,
              'tabvisible'          => true,
              'mobvisible'          => true,
              'hovGradFirstColor'   => '',
              'hovGradSecondColor'  => '',
              'iconGrad'            => false,
              'fontColorImp'            => false,
              'fontFamImp'            => false,
              'textTranImp'            => false,
              'letterspacingImp'            => false,
              'btnMarImp'            => false,
              'borderRadiusImp'            => false,
              'desksizeImp'            => false,
              'borderWidthImp'            => false,
              'iconMarImp'            => false,
              'iconSizeImp'            => false,
              'boxShadowBtnColorImp'            => true,
              'iconPadImp'            => false,
              'borderColorImp'            => false,
              'backgColorImp'            => false,
              'bgOpacityimp'            => false,
              'iconsize'            => array( 12, 12, 12 ),
              'boxshadowcolor'	  	=> '',
              'boxshadowx'		  		=> '0',
              'boxshadowY'		  		=> '0',
              'boxshadowblur'		  	=> '0',
              'boxshadowspread'	  	=> '0',
              'boxshadowpos'		  	=> '',
              'hoverboxshadowcolor' => '',
              'hoverboxshadowx'	  	=> '0',
              'hoverboxshadowY'	  	=> '0',
              'hoverboxshadowblur'  => '0',
              'hoverboxshadowspread'=> '0',
              'hoverboxshadowpos'	  => '',
              'iconBGColor'         => '',
              'iconhoverBGColor'    => '',
              'iconColor'           => '',
							'iconhoverColor'      => '',
							'animationtype'      	=> '',
							'animationdelay'      => '',
							'animationspeed'      => '',
              'animationiteration'	=> '1',
            ),
          ),
          'ive/page-title'       						=>	array(
            'slug'        =>	'',
            'title'       =>	__( 'Page Title', 'ibtana-visual-editor' ),
            'description' =>	__( 'Page Title Block gives you the flexibility to place the title of the page and display it on the web page.', 'ibtana-visual-editor' ),
            'default'     =>	true,
            'attributes'  =>	array(
              'page_title'          => true,
              'pagination_title'    => true
            ),
          ),
          'ive/google-map'      					 	=>	array(
              'slug'        => '',
              'title'       => __( 'Google Map', 'ibtana-visual-editor' ),
              'description' => __( 'Inserting a customizable Google map is now easy with Google Map Block. You can include a google map and enter the location name, address with functionality to zoom in and zoom out.', 'ibtana-visual-editor' ),
              'default'     => true,
              'attributes'  => array(
                'block_id'            => '',
                'uniqueID'            => '',
                'address'             => 'Nagpur',
                'height'              => 300,
                'zoom'                => 12,
                'blockAlignment'      => 'none',
                'bgOpacity'           => 1,
                'bgColor'             => '',
                'margin_top'          => 35,
                'margin_bottom'       => 35
              ),
          ),
          'ive/gallery'       							=>	array(
            'slug'        => '',
            'title'       => __( 'Ibtana Gallery', 'ibtana-visual-editor' ),
            'description' => __( 'Show splendid image galleries on your website with this simple drag and drop Galley Block. You can display a beautiful gallery of images on your website.', 'ibtana-visual-editor' ),
            'default'     => true,
            'attributes'  => array(
							'uniqueID'      =>	'',
              'overlayacolor'	=>	'#F5353561',
              'imgopacity'    =>	1,
							'paddingtop'		=>	array( 0, 0, 0 ),
							'paddingleft'		=>	array( 0, 0, 0 ),
							'paddingright'	=>	array( 0, 0, 0 ),
              'paddingbottm'	=>	array( 0, 0, 0 ),
							'iconfontSize'	=>	'12',
							'iconColor'			=>	'',
              'iconPosition'	=>	'',
            ),
          ),
          'ive/icon'       									=>	array(
						'slug'        => '',
            'title'       => __( 'Icon', 'ibtana-visual-editor' ),
            'description' => __(
							'You will find a list of all the Font Awesome icons here. Select any of the icons you want to add to your page and you can customize it by changing the background and color.',
							'ibtana-visual-editor'
						),
            'default'     => true,
            'attributes'  => array(
							'icons'               => array(
                array(
									'icon'              => 'fe_aperture',
                  'iconSvg'           => 'fa fa-bookmark',
                  'link'              => '',
                  'target'            => '_self',
                  'desksize'          => 50,
                  'tabsize'           => 35,
                  'mobsize'           => 20,
                  'title'             => '',
                  'deskwidth'         => 'auto',
                  'deskheight'        => 'auto',
                  'tabwidth'          => 'auto',
                  'tabheight'         => 'auto',
                  'mobwidth'          => 'auto',
                  'mobheight'         => 'auto',
                  'color'             => '#444444',
                  'hoverColor'        => '#eeeeee',
                  'background'        => '#ffffff',
                  'hoverBackground'   => '#000000',
                  'border'            => '#444444',
                  'hoverBorder'       => '#FF0000',
                  'borderRadius'      => 0,
                  'borderWidth'       => 2,
                  'borderStyle'       => 'none',
                  'deskpadding'       => 20,
                  'tabpadding'        => 16,
                  'mobpadding'        => 12,
                  'deskpadding2'      => 20,
                  'tabpadding2'       => 16,
                  'mobpadding2'       => 12,
                  'style'             => 'default'
                ),
              ),
              'iconCount'           => 1,
              'margintb'            => array( 5, 5, 5 ),
              'marginlr'            => array( 5, 5, 5 ),
              'uniqueID'            => '',
              'deskIconAlignment'   => 'center',
              'tabIconAlignment'    => 'center',
              'mobIconAlignment'    => 'center',
              'iconGrad'            => false,
              'gradFirstColor'      => '',
              'gradFirstLoc'        => 0,
              'gradSecondColor'     => '#00B5E2',
              'gradSecondLoc'       => 100,
              'gradType'            => 'linear',
              'gradAngle'           => 180,
              'gradRadPos'          => 'center center',
              'hovGradFirstColor'   => '',
              'hovGradSecondColor'  => '',
              'alignType'           => 'horizontal',
              'iconsticky'          => false,
              'stickyposition'      => 'left',
            ),
          ),
          'ive/separator'       						=>	array(
						'slug'        => '',
            'title'       => __( 'Separator', 'ibtana-visual-editor' ),
            'description' => __(
							'Want to separate the two content blocks on your page? Separator Block is what you are looking for. It allows you to separate your content with or without hr tag lines.',
							'ibtana-visual-editor'
						),
            'default'     => true,
            'attributes'  => array(
              'uniqueID'            => '',
              'dividerHeight'       => 1,
              'dividerWidth'        => 80,
              'dividerColor'        => '#eeeeee',
              'dividerOpacity'      => 100,
              'dividerStyle'        => 'solid',
              'spacerHeight'        => 6,
              'avdSepHeightImp'     => false,
              'avdSepDividerImp'     => false
            ),
          ),
          'ive/progress-bar'       					=>	array(
						'slug'        => '',
            'title'       => __( 'Progress Bar', 'ibtana-visual-editor' ),
            'description' => __(
							'Add animated horizontal progress bars to your page and show the percentage progress. You can customize it by changing the colors and values.',
							'ibtana-visual-editor'
						),
            'default'     => true,
            'attributes'  => array(
              'uniqueID'                  	=> '',
              'spaCountImp'                	=> false,
              'fontProgImp'                	=> false,
              'percentage'                	=> 25,
              'barThickness'              	=> 1,
              'counter'                   	=> false,
              'barType'                   	=> 'linear',
              'barColor'                  	=> '#2DB7F5',
              'titleColor'                	=> '#111111',
							'hoverTextColor'							=> '#111111',
              'titlebgColor'              	=> '',
							'percentBgGradient'						=>	false,
              'contentColor'              	=>	'#111111',
							'contentHoverColor'						=>	'#111111',
							'percentBgColor'							=>	'',
							'percentBgHoverColor'					=>	'',
							'percentBgFirstColor'					=>	'',
							'percentBgHovGradFirstColor'	=>	'',
							'percentBgGradLocOne'					=>	0,
							'percentBgSecondColor'				=>	'',
							'percentBgHovGradSecondColor'	=>	'',
							'percentBgGradLocSecond'			=>	100,
							'percentBgGradType'						=>	'linear',
							'percentBgGradAngle'					=>	180,
							'percentVbgImgPosition'				=>	'center center',
              'letterSpacing'             	=> 0,
							'textTransform'								=> '',
              'typography'                	=> '',
              'googleFont'                	=> false,
              'loadGoogleFont'            	=> true,
              'fontSubset'                	=> '',
              'deskfontSize'              	=> 24,
              'tabfontSize'               	=> 20,
              'mobfontSize'               	=> 16,
              'fontVariant'               	=> '',
              'fontWeight'                	=> 'normal',
              'fontStyle'                 	=> 'normal',
              'letterSpacing_cont'        	=> 0,
              'typography_cont'           	=> '',
              'googleFont_cont'           	=> false,
              'loadGoogleFont_cont'       	=> true,
              'fontSubset_cont'           	=> '',
              'deskfontSize_cont'         	=> 24,
              'tabfontSize_cont'          	=> 20,
              'mobfontSize_cont'          	=> 16,
              'fontVariant_cont'          	=> '',
              'fontWeight_cont'           	=> 'normal',
              'fontStyle_cont'            	=> 'normal',
              'progress_border'           	=> '#fff',
              'progress_borderRadius'     	=> 0,
              'progress_borderWidth'      	=> 2,
              'progress_padding'          	=> 20,
              'margin_top'                	=> 10,
              'margin_bottom'             	=> 10,
							'circularSize'								=> 150
            ),
          ),
          'ive/ibtana-visual-editorheading'	=>	array(
            'slug'        => '',
            'title'       => __( 'Advanced Text', 'ibtana-visual-editor' ),
            'description' => __( 'Advanced Text block is useful for adding the heading, paragraph and counter to your page. With this, you can easily structure your page and make the content easily readable to your readers as well as to search engines.', 'ibtana-visual-editor' ),
            'default'     => true,
            'attributes'  => array(
              'uniqueID'                  =>	'',
							'headingColorImp'           => false,
							'spacingTopImp'            	=> false,
							'spacingBottomImp'          => false,
							'advpaddIngImp'            	=> false,
							'advborderImp'            	=> false,
							'boxShaowImp'            		=> false,
							'headingBgColorImp'         => false,
							'dropCap'										=>	false,
              'gradientDisable'           =>	false,
              'bgGradType'                =>	'linear',
              'vBgImgPosition'            =>	'center center',
              'bgfirstcolorr'             =>	'',
              'bgGradLoc'                 =>	0,
              'bgSecondColr'              =>	'#00B5E2',
              'bgGradLocSecond'           =>	100,
              'bgGradAngle'               =>	180,
              'headhoverbgfirstcolor'     =>	'',
              'headhoverbgSecondColr'     =>	'',
              'backgroundcolor'           =>	'',
              'headbggradColor'           =>	'',
              'googleFont'                =>	false,
              'fontSubset'                =>	'',
              'fontWeight'                =>	400,
              'fontStyle'                 =>	'normal',
              'typography'                =>	'',
              'color'                     =>	'',
              'letterSpacing'             =>	1,
              'textTransform'             =>	'',
              'headinghovercolor'         =>	'',
              'headhoverbgOpacity'        =>	100,
              'hoverbackgroundcolor'      =>	'',
              'headhoverbggradcolor'      =>	'',
              'boxshadowpos'              =>	'',
              'boxshadowx'                =>	0,
              'boxshadowy'                =>	0,
              'boxshadowblur'             =>	5,
              'boxshadowspread'           =>	1,
              'boxshadowcolor'            =>	'transparent',
              'bordertype'                =>	'none',
              'bordercolor'               =>	'',
              'bordertop'                 =>	0,
              'borderright'               =>	0,
              'borderbottom'              =>	0,
              'borderleft'                =>	0,
              'borderadiustop'            =>	0,
              'borderadiusright'          =>	0,
              'borderadiusbottom'         =>	0,
              'borderadiusleft'           =>	0,
              'borderadiustype'           =>	'px',
              'bordertypehover'           =>	'none',
              'bordertophover'            =>	0,
              'borderrighthover'          =>	0,
              'borderbottomhover'         =>	0,
              'borderlefthover'           =>	0,
              'bordercolorhover'          =>	'',
              'borderadiustophover'       =>	'',
              'borderadiusrighthover'     =>	'',
              'borderadiusbottomhover'    =>	'',
              'borderadiuslefthover'      =>	'',
              'borderadiustypehover'      =>	'px',
              'boxshadowposhover'         =>	'',
              'boxshadowxhover'           =>	0,
              'boxshadowyhover'           =>	0,
              'boxshadowblurhover'        =>	5,
              'boxshadowspreadhover'      =>	1,
              'boxshadowcolorhover'       =>	'transparent',
              'animationtype'             =>	'none',
              'animationiteration'        =>	1,
              'animationdelay'            =>	'',
              'animationspeed'            =>	'',
              'deskfontSize'              =>	24,
              'tabfontSize'               =>	20,
              'mobfontSize'               =>	16,
              'deskvisible'               =>	true,
              'tabvisible'                =>	true,
              'mobvisible'                =>	true,
              'paddingtype'               =>	'px',
              'paddingtopdesk'            =>	0,
              'paddingrightdesk'          =>	0,
              'paddingbottomdesk'         =>	0,
              'paddingleftdesk'           =>	0,
              'paddingtoptablet'          =>	0,
              'paddingrighttablet'        =>	0,
              'paddingbottomtablet'       =>	0,
              'paddinglefttablet'         =>	0,
              'paddingtopmob'             =>	0,
              'paddingrightmob'           =>	0,
              'paddingbottommob'          =>	0,
              'paddingleftmob'            =>	0,
              'textOptions'               =>	'text',
              'iconfontSize'              =>	array( 12, 12, 12 ),
              'iconColor'                 =>	'',
							'iconHoverColor'						=>	'',
              'optionSide'                => 'row',
              'deskalign'                 => 'center',
              'tabalign'                  => 'center',
              'mobalign'                  => 'center',
              'topMargin'                 =>	1,
              'bottomMargin'              =>	1,
              'marginType'                =>	'px',
              'optionPadding'             =>	20,
							'optionPadding2'            =>	20,
							'backgdfirstcolor'          =>	'',
							'backgdGradLoc'            	=>	0,
							'backgdSecondColr'          =>	'',
							'backgdGradLocSecond'       =>	100,
							'backgdGradType'            =>	'',
							'backgdGradAngle'           =>	180,
							'backgdImgPosition'         =>	'',
							'backgdheadhoverfirstcolor' =>	'',
							'backgdheadhoverSecondColr' =>	'',
							'backgdOpacity'             =>	'',
							'headhoverbackgdOpacity'    =>	'',
							'bggradientDisable'					=>	false
            ),
          ),
          'ive/carousel'										=>	array(
            'slug'        =>	'',
            'title'       =>	__( 'MultiBlock slider', 'ibtana-visual-editor' ),
            'description' =>	__(
							'Use this feature-rich Tab Content Block for Gutenberg block editor allowing you to place different content and blocks inside each tab. There is absolutely no limit to things you can place within each tab.',
							'ibtana-visual-editor'
						),
            'default'     =>	true,
            'attributes'  =>	array(
							'uniqueID'                  => '',
							'innerPadding'              => array( 0, 0, 0, 0 ),
							'contentBorder'             => array( 1, 1, 1, 1 ),
							'contentBorderStyle'        => 'solid',
							'contentBgColor'				=>	'',
							'contentBorderRadius'       => 0,
							'dotActiveColor'            => '#000000',
							'dotColor'                  => '#222222',
							'dotBorderRadius'           => 0,
							'dotsalign'                 => 'center',
							'dotPaddingTop'             => 0,
							'navArrowBdRadius'          => 0,
							'navArrowColor'             => '#000000',
							'navArrowBgColor'           => '#ffffff',
							'navArrowBdColor'           => '#000000',
							'navArrowHovColor'          => '#ffffff',
							'navArrowBgHovColor'        => '#000000',
							'navArrowBdHovColor'        => '#ffffff',
							'owlNavMaxWidth'            => array( 100, 100, 100 ),
							'owlNavTop'                 => array( 35, 35, 35 ),
							'owlNavLeft'                => array( 0, 0, 0 ),
							'owlNavRight'               => array( 0, 0, 0 ),
							'navType'                   => array( 'none', 'none', 'none' ),
							'arrowBtnWidth'             => array( 40, 40, 40 ),
							'arrowBtnHeight'            => array( 40, 40, 40 ),
							'navArrowBdWidth'           => array( 0, 0, 0 ),
							'arrowBtnPadding'           => array(
								array( 0, 0, 0, 0 ),
                array( 0, 0, 0, 0 ),
                array( 0, 0, 0, 0 )
							),
							'navArrowSize'              => array( 20, 20, 20 ),
							'maxWidth'                  => '',
							'isbggradient'              => false,
							'bgfirstcolorr'             => '',
							'bgGradLoc1'                => '0',
							'bgSecondColr'              => '#00B5E2',
							'bgGradLocSecond'           => '100',
							'bgGradType'                => 'linear',
							'bgGradAngle'               => '180',
							'vBgImgPosition'            => 'center center',
							'hovGradFirstColor'         => '',
							'hovGradSecondColor'        => '',
							'actvGradFirstColor'        => '',
							'actvGradSecondColor'       => '',
            ),
          ),
          'ive/carouselimage'								=>	array(
            'slug'        => '',
            'title'       => __( 'Carousel Image', 'ibtana-visual-editor' ),
            'description' => __( '', 'ibtana-visual-editor' ),
            'default'     => true,
            'attributes'  => array(
              'uniqueID'				=> '',
              'bgColor'         => '',
              'bgOpacity'       => 30,
              'left'            => array( 0, 0, 0 ),
              'right'           => array( 0, 0, 0 ),
							'isbggradient'    => false,
							'bgfirstcolorr'   => '',
							'bgGradLoc1'      => '0',
							'bgSecondColr'    => '#00B5E2',
							'bgGradLocSecond' => '100',
							'bgGradType'      => 'linear',
							'bgGradAngle'     => '180',
							'vBgImgPosition'  => 'center center',
            ),
          ),
					'ive/tabs'												=>	array(
						'slug'				=> '',
						'tite'				=> __('Tabs', 'ibtana-visual-editor'),
						'description'	=> __(
							'Use this feature-rich Tab Content Block for Gutenberg block editor allowing you to place different content and blocks inside each tab. There is absolutely no limit to things you can place within each tab.',
							'ibtana-visual-editor'
						),
						'default'			=> true,
						'attributes'	=>	array(
							'uniqueID'							=>	'',
						  'tabCount'          		=>	'3',
						  'layout'              	=>	'tabs',
						  'mobileLayout'        	=>	'inherit',
						  'tabletLayout'        	=>	'inherit',
						  'currentTab'          	=>	1,
						  'minHeight'           	=>	'',
						  'maxWidth'            	=>	'',
						  'contentBgColor'				=>	'',
						  'contentBorderColor'		=>	'',
						  'contentBorder'       	=>	1,
						  'innerPadding'        	=>	20,
						  'innerPaddingM'       	=>	'',
						  'tabAlignment'        	=>	'left',
						  'blockAlignment'        =>	'none',
						  'desktopTabTitleAlign'	=>	'center',
						  'tabTabTitleAlign'			=>	'center',
						  'mobileTabTitleAlign'   =>	'center',
						  'titles'								=>	array(
								array(
									'text'							=>	'',
									'icon'							=>	'',
									'iconSide'					=>	'',
									'onlyIcon'					=>	'',
									'subText'						=>	'',
									'anchor'						=>	'',
									'imgID'							=>	'',
									'imgURL'						=>	'',
									'imgAlt'						=>	'',
									'imageheight'				=>	'150',
									'imagewidth'				=>	'200',
									'showimg'						=>	false,
									'showBGimg'					=>	false,
									'normalBGimgID'			=>	'',
									'normalBGimgURL'		=>	'',
									'normalBGimgAlt'		=>	'',
									'hoverBGImgimgID'		=>	'',
									'hoverBGImgimgURL'	=>	'',
									'hoverBGImgimgAlt'	=>	'',
									'activeBGimgID'			=>	'',
									'activeBGimgURL'		=>	'',
									'activeBGimgAlt'		=>	'',
								),
							),
							'iSize'									=>	'14',
							'titleColor'						=>	'',
							'titleColorHover'				=>	'',
							'titleColorActive'			=>	'',
							'titleBg'								=>	'',
							'titleBgHover'					=>	'',
							'titleBgActive'					=>	'',
							'titleBorder'						=>	'',
							'titleBorderHover'			=>	'',
							'titleBorderActive'			=>	'',
							'titleBorderWidth'			=>	1,
							'titleBorderRadius'			=>	'',
							'titlePadding'					=>	[
								[ 10, 10, 10, 10 ],
								[ 10, 10, 10, 10 ],
								[ 10, 10, 10, 10 ]
							],
							'titleMarginTop'				=>	'0',
							'titleMarginBottom'			=>	'0',
							'titleMarginLeft'				=>	'0',
							'titleMarginRight'			=>	'0',
							'size'									=>	'',
							'sizeType'							=>	'px',
							'lineHeight'						=>	'',
							'lineType'							=>	'px',
							'tabSize'								=>	'',
							'tabLineHeight'					=>	'',
							'mobileSize'						=>	'',
							'mobileLineHeight'			=>	'',
							'letterSpacing'					=>	'',
							'typography'						=>	'',
							'googleFont'						=>	false,
							'loadGoogleFont'				=>	true,
							'fontSubset'						=>	'',
							'fontVariant'						=>	'',
							'fontWeight'						=>	'regular',
							'fontStyle'							=>	'normal',
							'startTab'							=>	'',
							'showPresets'						=>	true,
							'subtitleFont'					=>	array(
								array(
									'size'						=> [ '', '', '' ],
									'sizeType'				=> 'px',
									'lineHeight'			=> [ '', '', '' ],
									'lineType'				=> 'px',
									'letterSpacing'		=> '',
									'textTransform'		=> '',
									'family'					=> '',
									'google'					=> false,
									'style'						=> '',
									'weight'					=> '',
									'variant'					=> '',
									'subset'					=> '',
									'loadGoogle'			=> true,
									'padding'					=> [ 0, 0, 0, 0 ],
									'paddingControl'	=> 'linked',
									'margin'					=> [ 0, 0, 0, 0 ],
									'marginControl'		=> 'linked',
								),
							),
							'enableSubtitle'				=>	false,
							'widthType'							=>	'normal',
							'tabWidth'							=>	[ 4, '', '' ],
							'gutter'								=>	[ 10, '', '' ],
							'iconfontSize'					=>	[12, 12, 12],
							'dotActiveColor'      	=>	'#000000',
							'dotColor'            	=>	'#222222',
							'dotBorderRadius'     	=>	0,
							'dotsalign'           	=>	'center',
							'dotPaddingTop'       	=>	0,
							'navArrowBdRadius'    	=>	0,
							'navArrowColor'       	=>	'#000000',
							'navArrowBgColor'     	=>	'#ffffff',
							'navArrowBdColor'     	=>	'#000000',
							'navArrowHovColor'    	=>	'#ffffff',
							'navArrowBgHovColor'  	=>	'#000000',
							'navArrowBdHovColor'		=>	'#ffffff',
							'owlNavMaxWidth'      	=>	array( 100, 100, 100 ),
							'owlNavTop'           	=>	array( 35, 35, 35 ),
							'owlNavLeft'          	=>	array( 0, 0, 0 ),
							'owlNavRight'         	=>	array( 0, 0, 0 ),
							'navType'             	=>	array( 'none', 'none', 'none' ),
							'arrowBtnWidth'       	=>	array( 40, 40, 40 ),
							'arrowBtnHeight'      	=>	array( 40, 40, 40 ),
							'navArrowBdWidth'     	=>	array( 0, 0, 0 ),
							'arrowBtnPadding'     	=>	array(
								array( 0, 0, 0, 0 ),
								array( 0, 0, 0, 0 ),
								array( 0, 0, 0, 0 )
							),
							'navArrowSize'          =>	array( 20, 20, 20 ),
							'maxWidth'              =>	'',
							'bgfirstcolorr'         =>	'',
							'bgGradLoc1'            =>	'0',
							'bgSecondColr'          =>	'#00B5E2',
							'bgGradLocSecond'       =>	'100',
							'bgGradType'            =>	'linear',
							'bgGradAngle'           =>	'180',
							'vBgImgPosition'        =>	'center center',
							'hovGradFirstColor'     =>	'',
							'hovGradSecondColor'    =>	'',
							'actvGradFirstColor'    =>	'',
							'actvGradSecondColor'   =>	'',
							'backgroundType'				=>	'color',
						),
					),
          'ive/accordion'       						=>	array(
						'slug'        =>	'',
            'title'       =>	__( 'Accordion', 'ibtana-visual-editor' ),
            'description' =>	__( 'The Accordion Block is a simple and useful block that can be used to add the accordion drop-downs to your website.', 'ibtana-visual-editor' ),
            'default'     =>	true,
            'attributes'  =>	array(
							'uniqueID'						=>	'',
							'paneCount'       		=>	2,
							'showPresets'        	=>	true,
							'openPane'						=>	0,
							'linkPaneCollapse'		=>	true,
							'minHeight'        		=>	'',
							'maxWidth'        		=>	'',
							'contentBgColor'			=>	'',
							'contentBorderColor'	=>	'',
							'contentBorder'				=>	'',
							'contentBorderRadius'	=>	'',
							'contentPadding'			=>	'',
							'titleAlignment'			=>	'',
							'blockAlignment'			=>	'',
							'titleStyles'					=> array(
								array(
									'size'							=> [ 18, '', '' ],
									'sizeType'					=> 'px',
									'lineHeight'				=> [ 24, '', '' ],
									'lineType'					=> 'px',
									'letterSpacing'		=> '',
									'family'						=> '',
									'google'						=> false,
									'style'						=> '',
									'weight'						=> '',
									'variant'					=> '',
									'subset'						=> '',
									'loadGoogle'				=> true,
									'padding'					=> 14,
									'marginTop'		=> 8,
									'color'						=> '#555555',
									'background'		=> '#f2f2f2',
									'border'		=> '#555555',
									'borderRadius'		=> 0,
									'borderWidth'		=> 0,
									'colorHover'		=> '#444444',
									'backgroundHover'		=> '#eeeeee',
									'borderHover'		=> '#eeeeee',
									'colorActive'		=> '#ffffff',
									'backgroundActive'		=> '#444444',
									'borderActive'		=> '#444444',
									'textTransform'		=> '',

									'titleTriggerIconColor'					=>	'#555555',
									'titleTriggerIconBgColor'				=>	'#f2f2f2',

									'titleTriggerIconHoverColor'		=>	'#444444',
									'titleTriggerIconBgHoverColor'	=>	'#eeeeee',

									'titleTriggerIconActiveColor'		=>	'#ffffff',
									'titleTriggerIconActiveBgColor'	=>	'#444444'
								),
							),
							'showIcon'						=>	true,
							'iconStyle'        		=>	'basic',
							'iconSide'        		=>	'right',
							'faqSchema'        		=>	false,
							'iconGrad'        		=>	false,
							'gradFirstColor'			=>	'',
							'gradFirstLoc'        =>	0,
							'gradSecondColor'			=>	'#00B5E2',
							'gradSecondLoc'				=>	100,
							'gradType'        		=>	'linear',
							'gradAngle'        		=>	180,
							'gradRadPos'        	=>	'center center',
							'hovGradFirstColor'		=>	'',
							'hovGradSecondColor'	=>	'',
							'actvGradFirstColor'	=>	'',
							'actvGradSecondColor'	=>	'',
            ),
            'letterSpacing'       	=>	0,
            'typography'          	=>	'',
            'googleFont'          	=>	false,
            'loadGoogleFont'      	=>	true,
            'fontSubset'          	=>	'',
            'fontVariant'         	=>	'',
            'fontWeight'          	=>	'regular',
            'fontStyle'           	=>	'normal',
            'bgOpacity'           	=>	1,
            'bgfirstcolorr'       	=>	'',
            'bgGradLoc'           	=>	0,
            'bgSecondColr'        	=>	'#00B5E2',
            'bgGradLocSecond'     	=>	100,
            'bgGradType'          	=>	'linear',
            'bgGradAngle'         	=>	180,
            'vBgImgPosition'      	=>	'center center',
            'bgBlendMode'         	=>	'none',
            'iconDisable'         	=>	false,
            'iconDisableHover'    	=>	0,
            'deskvisible'         	=>	true,
            'tabvisible'          	=>	true,
            'mobvisible'          	=>	true,
            'hovGradFirstColor'   	=>	'',
            'hovGradSecondColor'  	=>	'',
            'iconGrad'            	=>	false,
            'iconsize'            	=>	array( 12, 12, 12 ),
            'boxshadowcolor'	  		=>	'',
            'boxshadowx'		  			=>	'0',
            'boxshadowY'		  			=>	'0',
            'boxshadowblur'		  		=>	'0',
            'boxshadowspread'	  		=>	'0',
            'boxshadowpos'		  		=>	'',
            'hoverboxshadowcolor' 	=>	'',
            'hoverboxshadowx'	  		=>	'0',
            'hoverboxshadowY'	  		=>	'0',
            'hoverboxshadowblur'  	=>	'0',
            'hoverboxshadowspread'	=>	'0',
            'hoverboxshadowpos'	  	=>	'',
            'iconBGColor'         	=>	'',
            'iconhoverBGColor'    	=>	'',
            'iconColor'           	=>	'',
            'iconhoverColor'      	=>	''
  				),
					'ive/page-title'       						=>	array(
						'slug'        =>	'',
            'title'       =>	__( 'Page Title', 'ibtana-visual-editor' ),
            'description' =>	__(
							'Page Title Block gives you the flexibility to place the title of the page and display it on the web page.',
							'ibtana-visual-editor'
						),
            'default'     =>	true,
            'attributes'  =>	array(
							'page_title'          => true,
							'pagination_title'    => true
            ),
      		),
					'ive/google-map'       						=>	array(
            'slug'        =>	'',
            'title'       =>	__( 'Google Map', 'ibtana-visual-editor' ),
            'description' =>	__(
							'Inserting a customizable Google map is now easy with Google Map Block. You can include a google map and enter the location name, address with functionality to zoom in and zoom out.',
							'ibtana-visual-editor'
						),
            'default'     =>	true,
            'attributes'  =>	array(
              'block_id'            =>	'',
              'uniqueID'            =>	'',
              'address'             =>	'Nagpur',
              'height'              =>	300,
              'zoom'                =>	12,
              'blockAlignment'      =>	'none',
              'bgOpacity'           =>	1,
              'bgColor'             =>	'',
              'margin_top'          =>	35,
              'margin_bottom'       =>	35
            ),
          ),
          'ive/gallery'       							=>	array(
            'slug'        =>	'',
            'title'       =>	__( 'Ibtana Gallery', 'ibtana-visual-editor' ),
            'description'	=>	__(
							'Show splendid image galleries on your website with this simple drag and drop Galley Block. You can display a beautiful gallery of images on your website.',
							'ibtana-visual-editor'
						),
            'default'     =>	true,
            'attributes'  =>	array(
              'uniqueID'			=>	'',
              'overlayacolor'	=>	'#F5353561',
              'imgopacity'		=>	1
            ),
          ),
          'ive/icon'       									=>	array(
						'slug'        =>	'',
						'title'       =>	__( 'Icon', 'ibtana-visual-editor' ),
						'description'	=>	__(
							'You will find a list of all the Font Awesome icons here. Select any of the icons you want to add to your page and you can customize it by changing the background and color.',
							'ibtana-visual-editor'
						),
						'default'     =>	true,
						'attributes'  =>	array(
							'icons'	=> array(
								array(
									'icon'              =>	'fe_aperture',
									'iconSvg'           =>	'fa fa-bookmark',
									'link'              =>	'',
									'target'            =>	'_self',
									'desksize'          =>	50,
									'tabsize'           =>	35,
									'mobsize'           =>	20,
									'title'             =>	'',
									'deskwidth'         =>	'auto',
									'deskheight'        =>	'auto',
									'tabwidth'          =>	'auto',
									'tabheight'         =>	'auto',
									'mobwidth'          =>	'auto',
									'mobheight'         =>	'auto',
									'color'             =>	'#444444',
									'hoverColor'        =>	'#eeeeee',
									'background'        =>	'#ffffff',
									'hoverBackground'   =>	'#000000',
									'border'            =>	'#444444',
									'hoverBorder'       =>	'#FF0000',
									'borderRadius'      =>	0,
									'borderWidth'       =>	2,
									'borderStyle'       =>	'none',
									'deskpadding'       =>	20,
									'tabpadding'        =>	16,
									'mobpadding'        =>	12,
									'deskpadding2'      =>	20,
									'tabpadding2'       =>	16,
									'mobpadding2'       =>	12,
									'style'             =>	'default'
								),
							),
							'iconCount'           =>	1,
							'margintb'            =>	array( 5, 5, 5 ),
							'marginlr'            =>	array( 5, 5, 5 ),
							'uniqueID'            =>	'',
							'deskIconAlignment'   =>	'center',
							'tabIconAlignment'    =>	'center',
							'mobIconAlignment'    =>	'center',
							'iconGrad'            =>	false,
							'gradFirstColor'      =>	'',
							'gradFirstLoc'        =>	0,
							'gradSecondColor'     =>	'#00B5E2',
							'gradSecondLoc'       =>	100,
							'gradType'            =>	'linear',
							'gradAngle'           =>	180,
							'gradRadPos'          =>	'center center',
							'hovGradFirstColor'   =>	'',
							'hovGradSecondColor'  =>	'',
							'alignType'           =>	'horizontal',
							'iconsticky'          =>	false,
							'stickyposition'      =>	'left',
            ),
          ),
          'ive/separator'	=>	array(
						'slug'        =>	'',
						'title'       =>	__( 'Separator', 'ibtana-visual-editor' ),
						'description'	=>	__(
							'Want to separate the two content blocks on your page? Separator Block is what you are looking for. It allows you to separate your content with or without hr tag lines.',
							'ibtana-visual-editor'
						),
						'default'     =>	true,
						'attributes'  =>	array(
							'uniqueID'        =>	'',
							'dividerHeight'   =>	1,
							'dividerWidth'    =>	80,
							'dividerColor'    =>	'#eeeeee',
							'dividerOpacity'	=>	100,
							'dividerStyle'    =>	'solid',
							'spacerHeight'    =>	6
						),
          ),
          'ive/progress-bar'	=>	array(
              'slug'        => '',
              'title'       => __( 'Progress Bar', 'ibtana-visual-editor' ),
              'description' => __( 'Add animated horizontal progress bars to your page and show the percentage progress. You can customize it by changing the colors and values.', 'ibtana-visual-editor' ),
              'default'     => true,
              'attributes'  => array(
                  'uniqueID'                  => '',
                  'percentage'                => 25,
                  'barThickness'              => 1,
                  'counter'                   => false,
                  'barType'                   => 'linear',
                  'barColor'                  => '#2DB7F5',
                  'titleColor'                => '#111111',
                  'titlebgColor'              => '',
                  'contentColor'              => '#111111',
                  'letterSpacing'             => 0,
									'textTransform'							=> '',
                  'typography'                => '',
                  'googleFont'                => false,
                  'loadGoogleFont'            => true,
                  'fontSubset'                => '',
                  'deskfontSize'              => 24,
                  'tabfontSize'               => 20,
                  'mobfontSize'               => 16,
                  'fontVariant'               => '',
                  'fontWeight'                => 'normal',
                  'fontStyle'                 => 'normal',
                  'letterSpacing_cont'        => 0,
                  'typography_cont'           => '',
                  'googleFont_cont'           => false,
                  'loadGoogleFont_cont'       => true,
                  'fontSubset_cont'           => '',
                  'deskfontSize_cont'         => 24,
                  'tabfontSize_cont'          => 20,
                  'mobfontSize_cont'          => 16,
                  'fontVariant_cont'          => '',
                  'fontWeight_cont'           => 'normal',
                  'fontStyle_cont'            => 'normal',
                  'progress_border'           => '#fff',
                  'progress_borderRadius'     => 0,
                  'progress_borderWidth'      => 2,
                  'progress_padding'          => 20,
                  'margin_top'                => 10,
                  'margin_bottom'             => 10,
									'circularSize'							=> 150
              ),
          ),
          'ive/ibtana-visual-editorheading'	=>	array(
              'slug'        => '',
              'title'       => __( 'Advanced Text', 'ibtana-visual-editor' ),
              'description' => __( 'Advanced Text block is useful for adding the heading, paragraph and counter to your page. With this, you can easily structure your page and make the content easily readable to your readers as well as to search engines.', 'ibtana-visual-editor' ),
              'default'     => true,
              'attributes'  => array(
                  'uniqueID'                  => '',

                  'gradientDisable'           => false,
                  'bgGradType'                => 'linear',
                  'vBgImgPosition'            => 'center center',
                  'bgfirstcolorr'             => '',
                  'bgGradLoc'                 => 0,
                  'bgSecondColr'              => '#00B5E2',
                  'bgGradLocSecond'           => 100,
                  'bgGradAngle'               => 180,
                  'headhoverbgfirstcolor'     => '',
                  'headhoverbgSecondColr'     => '',
                  'backgroundcolor'           => '',
                  'headbggradColor'           => '',
                  'googleFont'                => false,
                  'fontSubset'                => '',
                  'fontWeight'                => 400,
                  'fontStyle'                 => 'normal',
                  'typography'                => '',
                  'color'                     => '',
                  'letterSpacing'             => 1,
                  'textTransform'             => '',
                  'headinghovercolor'         => '',
                  'headhoverbgOpacity'        => 100,
                  'hoverbackgroundcolor'      => '',
                  'headhoverbggradcolor'      => '',
                  'boxshadowpos'              => '',
                  'boxshadowx'                => 0,
                  'boxshadowy'                => 0,
                  'boxshadowblur'             => 5,
                  'boxshadowspread'           => 1,
                  'boxshadowcolor'            => 'transparent',
                  'bordertype'                => 'none',
                  'bordercolor'               => '',
                  'bordertop'                 => 0,
                  'borderright'               => 0,
                  'borderbottom'              => 0,
                  'borderleft'                => 0,
                  'borderadiustop'            => 0,
                  'borderadiusright'          => 0,
                  'borderadiusbottom'         => 0,
                  'borderadiusleft'           => 0,
                  'borderadiustype'           => 'px',
                  'bordertypehover'           => 'none',
                  'bordertophover'            => 0,
                  'borderrighthover'          => 0,
                  'borderbottomhover'         => 0,
                  'borderlefthover'           => 0,
                  'bordercolorhover'          => '',
                  'borderadiustophover'       => '',
                  'borderadiusrighthover'     => '',
                  'borderadiusbottomhover'    => '',
                  'borderadiuslefthover'      => '',
                  'borderadiustypehover'      => 'px',
                  'boxshadowposhover'         => '',
                  'boxshadowxhover'           => 0,
                  'boxshadowyhover'           => 0,
                  'boxshadowblurhover'        => 5,
                  'boxshadowspreadhover'      => 1,
                  'boxshadowcolorhover'       => 'transparent',
                  'animationtype'             => 'none',
                  'animationiteration'        => 1,
                  'animationdelay'            => '',
                  'animationspeed'            => '',
                  'deskfontSize'              => 24,
                  'tabfontSize'               => 20,
                  'mobfontSize'               => 16,
                  'deskvisible'               => true,
                  'tabvisible'                => true,
                  'mobvisible'                => true,
                  'paddingtype'               => 'px',
                  'paddingtopdesk'            => 0,
                  'paddingrightdesk'          => 0,
                  'paddingbottomdesk'         => 0,
                  'paddingleftdesk'           => 0,
                  'paddingtoptablet'          => 0,
                  'paddingrighttablet'        => 0,
                  'paddingbottomtablet'       => 0,
                  'paddinglefttablet'         => 0,
                  'paddingtopmob'             => 0,
                  'paddingrightmob'           => 0,
                  'paddingbottommob'          => 0,
                  'paddingleftmob'            => 0,
                  'textOptions'               => 'text',
                  'iconfontSize'              => array( 12, 12, 12 ),
                  'iconColor'                 => '',
                  'optionSide'                => 'row',
                  'deskalign'                 => 'center',
                  'tabalign'                  => 'center',
                  'mobalign'                  => 'center',
                  'topMargin'                 => 1,
                  'bottomMargin'              => 1,
                  'marginType'                => 'px',
                  'optionPadding'             => 20,
									'optionPadding2'            => 20,
									'backgdfirstcolor'          => '',
									'backgdGradLoc'            	=> 0,
									'backgdSecondColr'          => '',
									'backgdGradLocSecond'       => 100,
									'backgdGradType'            => '',
									'backgdGradAngle'           => 180,
									'backgdImgPosition'         => 'Center Top',
									'backgdheadhoverfirstcolor' => '',
									'backgdheadhoverSecondColr' => '',
									'backgdOpacity'             => '',
									'headhoverbackgdOpacity'    => '',
									'bggradientDisable'    => false,
              ),
          ),
          'ive/carousel'       							=>	array(
              'slug'        => '',
              'title'       => __( 'MultiBlock slider', 'ibtana-visual-editor' ),
              'description' => __( 'Use this feature-rich Tab Content Block for Gutenberg block editor allowing you to place different content and blocks inside each tab. There is absolutely no limit to things you can place within each tab.', 'ibtana-visual-editor' ),
              'default'     => true,
              'attributes'  => array(
                  'uniqueID'                  => '',
									'contentBgColor'						=> '',
                  'innerPadding'              => array( 0, 0, 0, 0 ),
                  'contentBorder'             => array( 1, 1, 1, 1 ),
                  'contentBorderStyle'        => 'solid',
                  'contentBorderRadius'       => 0,
                  'dotActiveColor'            => '#000000',
                  'dotColor'                  => '#222222',
                  'dotBorderRadius'           => 0,
                  'dotsalign'                 => 'center',
                  'dotPaddingTop'             => 0,
                  'navArrowBdRadius'          => 0,
                  'navArrowColor'             => '#000000',
                  'navArrowBgColor'           => '#ffffff',
                  'navArrowBdColor'           => '#000000',
                  'navArrowHovColor'          => '#ffffff',
                  'navArrowBgHovColor'        => '#000000',
                  'navArrowBdHovColor'        => '#ffffff',
                  'owlNavMaxWidth'            => array( 100, 100, 100 ),
                  'owlNavTop'                 => array( 35, 35, 35 ),
                  'owlNavLeft'                => array( 0, 0, 0 ),
                  'owlNavRight'               => array( 0, 0, 0 ),
                  'navType'                   => array( 'none', 'none', 'none' ),
                  'arrowBtnWidth'             => array( 40, 40, 40 ),
                  'arrowBtnHeight'            => array( 40, 40, 40 ),
                  'navArrowBdWidth'           => array( 0, 0, 0 ),
                  'arrowBtnPadding'           => array(
                                                  array( 0, 0, 0, 0 ),
                                                  array( 0, 0, 0, 0 ),
                                                  array( 0, 0, 0, 0 )
                  ),
                  'navArrowSize'              => array( 20, 20, 20 ),
									'maxWidth'                  => '',
									'isbggradient'              => false,
									'bgfirstcolorr'             => '',
									'bgGradLoc1'                => '0',
									'bgSecondColr'              => '#00B5E2',
									'bgGradLocSecond'           => '100',
									'bgGradType'                => 'linear',
									'bgGradAngle'               => '180',
									'vBgImgPosition'            => 'center center',
									'hovGradFirstColor'         => '',
									'hovGradSecondColor'        => '',
									'actvGradFirstColor'        => '',
									'actvGradSecondColor'       => '',
              ),
          ),
					'ive/slide'												=>	array(
						'slug'        => '',
						'title'       => __( 'slides', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'uniqueID'                  => '',
							'innerPadding'                  => array( 0, 0, 0, 0 )
						),
					),
          'ive/carouselimage'       				=>	array(
              'slug'        => '',
              'title'       => __( 'Carousel Image', 'ibtana-visual-editor' ),
              'description' => __( '', 'ibtana-visual-editor' ),
              'default'     => true,
              'attributes'  => array(
                  'uniqueID'                  => '',
                  'bgColor'                   => '',
                  'bgOpacity'                 => 30,
                  'left'                      => array( 0, 0, 0 ),
                  'right'                     => array( 0, 0, 0 ),
									'isbggradient'              => false,
									'bgfirstcolorr'             => '',
									'bgGradLoc1'                => '0',
									'bgSecondColr'              => '#00B5E2',
									'bgGradLocSecond'           => '100',
									'bgGradType'                => 'linear',
									'bgGradAngle'               => '180',
									'vBgImgPosition'            => 'center center',
              ),
          ),
					'ive/tabs'												=>	array(
					     'slug'				=> '',
					     'tite'				=> __('Tabs', 'ibtana-visual-editor'),
					     'description'=> __('Use this feature-rich Tab Content Block for Gutenberg block editor allowing you to place different content and blocks inside each tab. There is absolutely no limit to things you can place within each tab.', 'ibtana-visual-editor'),
					     'default'		=> true,
					     'attributes'	=>array(
					         'uniqueID'                  => '',
					         'tabCount'          				 => '3',
					         'layout'                		 => 'tabs',
					         'mobileLayout'            	 => 'inherit',
					         'tabletLayout'            	 => 'inherit',
					         'currentTab'             	 => 1,
					         'minHeight'                 => '',
					         'maxWidth'              		 => '',
					         'contentBgColor'            => '',
					         'contentBorderColor'        => '',
					         'contentBorder'             => 1,
					         'innerPadding'              => 20,
					         'innerPaddingM'             => '',
					         'tabAlignment'              => 'left',
					         'blockAlignment'            => 'none',
					         'desktopTabTitleAlign' 		 => 'center',
					         'tabTabTitleAlign'          => 'center',
					         'mobileTabTitleAlign'       => 'center',
					         'titles'                		 => array(
					             array(
					                 'text'						=> '',
					                 'icon'						=> '',
					                 'iconSide'				=> '',
					                 'onlyIcon'				=> '',
					                 'subText'				=> '',
					                 'anchor'					=> '',
					               ),
					             ),
					       'iSize'												=> '14',
					       'titleColor'										=> '',
					       'titleColorHover'							=> '',
					       'titleColorActive'							=> '',
					       'titleBg'											=> '',
					       'titleBgHover'									=> '',
					       'titleBgActive'								=> '',
					       'titleBorder'									=> '',
					       'titleBorderHover'							=> '',
					       'titleBorderActive'						=> '',
					       'titleBorderWidth'							=> 1,
					       'titleBorderRadius'						=> '',
								 'titlePaddingTop'							=> '10',
								 'titlePaddingRight'						=> '10',
								 'titlePaddingBottom'						=> '10',
					       'titlePaddingLeft'							=> '10',
								 'titleMarginTop'								=> '0',
								 'titleMarginBottom'						=> '0',
								 'titleMarginLeft'							=> '0',
					       'titleMarginRight'							=> '0',
					       'size'													=> '',
					       'sizeType'											=> 'px',
					       'lineHeight'										=> '',
					       'lineType'											=> 'px',
					       'tabSize'											=> '',
					       'tabLineHeight'								=> '',
					       'mobileSize'										=> '',
					       'mobileLineHeight'							=> '',
					       'letterSpacing'								=> '',
					       'typography'										=> '',
					       'googleFont'										=> false,
					       'loadGoogleFont'								=> true,
					       'fontSubset'										=> '',
					       'fontVariant'									=> '',
					       'fontWeight'										=> 'regular',
					       'fontStyle'										=> 'normal',
					       'startTab'											=> '',
					       'showPresets'									=> true,
					       'subtitleFont' 								=> array(
					           array(
					               'size'							=> [ '', '', '' ],
					               'sizeType'					=> 'px',
					               'lineHeight'				=> [ '', '', '' ],
					               'lineType'					=> 'px',
					               'letterSpacing'		=> '',
					               'textTransform'		=> '',
					               'family'						=> '',
					               'google'						=> false,
					               'style'						=> '',
					               'weight'						=> '',
					               'variant'					=> '',
					               'subset'						=> '',
					               'loadGoogle'				=> true,
					               'padding'					=> [ 0, 0, 0, 0 ],
					               'paddingControl'		=> 'linked',
					               'margin'						=> [ 0, 0, 0, 0 ],
					               'marginControl'		=> 'linked',
					             ),
					           ),
					       'enableSubtitle'								=> false,
					       'widthType'										=> 'normal',
					       'tabWidth'											=> [ 4, '', '' ],
					       'gutter'												=> [ 10, '', '' ],
								 'iconfontSize'									=> [12, 12, 12],
					     ),
					),
          'ive/accordion'       						=>	array(
              'slug'        => '',
              'title'       => __( 'Accordion', 'ibtana-visual-editor' ),
              'description' => __( 'The Accordion Block is a simple and useful block that can be used to add the accordion drop-downs to your website.', 'ibtana-visual-editor' ),
              'default'     => true,
              'attributes'  => array(
                  'uniqueID'            => '',
                  'paneCount'       => 2,
                  'showPresets'        => true,
                  'openPane'        => 0,
                  'linkPaneCollapse'      => true,
                  'minHeight'        => '',
									'maxWidth'        => '',
									'contentBgColor'        => '',
									'contentBorderColor'        => '',
									'contentBorder'        => '',
									'contentBorderRadius'        => '',
									'contentPadding'        => '',
									'titleAlignment'        => '',
									'blockAlignment'        => '',
									'titleStyles' 								=> array(
											array(
													'size'							=> [ 18, '', '' ],
													'sizeType'					=> 'px',
													'lineHeight'				=> [ 24, '', '' ],
													'lineType'					=> 'px',
													'letterSpacing'		=> '',
													'family'						=> '',
													'google'						=> false,
													'style'						=> '',
													'weight'						=> '',
													'variant'					=> '',
													'subset'						=> '',
													'loadGoogle'				=> true,
													'padding'					=> 14,
													'marginTop'		=> 8,
													'color'						=> '#555555',
													'background'		=> '#f2f2f2',
													'border'		=> '#555555',
													'borderRadius'		=> 0,
													'borderWidth'		=> 0,
													'colorHover'		=> '#444444',
													'backgroundHover'		=> '#eeeeee',
													'borderHover'		=> '#eeeeee',
													'colorActive'		=> '#ffffff',
													'backgroundActive'		=> '#444444',
													'borderActive'		=> '#444444',
													'textTransform'		=> '',
												),
									 ),
									 'showIcon'        => true,
									 'iconStyle'        => 'basic',
									 'iconSide'        => 'right',
									 'faqSchema'        => false,
									 'iconGrad'        => false,
									 'gradFirstColor'        => '',
									 'gradFirstLoc'        => 0,
									 'gradSecondColor'        => '#00B5E2',
									 'gradSecondLoc'        => 100,
									 'gradType'        => 'linear',
									 'gradAngle'        => 180,
									 'gradRadPos'        => 'center center',
									 'hovGradFirstColor'        => '',
									 'hovGradSecondColor'        => '',
									 'actvGradFirstColor'        => '',
									 'actvGradSecondColor'        => '',
              ),
          ),
          'ive/pane'       									=>	array(
              'slug'        => '',
              'title'       => __( 'Pane', 'ibtana-visual-editor' ),
              'description' => __( '', 'ibtana-visual-editor' ),
              'default'     => true,
              'attributes'  => array(
                  'id'            => '',
                  'title'       => '',
									'uniqueID'		=> '',
									'iconfontSize'		=> [12,12,12],
							)
					),
					'ive/ive-form' 					=> array(
						'slug'        => '',
						'title'       => __( 'Form', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'attributes'	=> 	array(
							'letterSpacing'		=> '',
							'typography'                	=> '',
							'googleFont'          => false,
							'loadGoogleFont'            => true,
							'fontVariant'						=>	'',
							'fontWeight'          => 'regular',
							'fontStyle'                 => 'normal',
							'fontSubset'						=>	'',
 							'deskfontSize'              =>	24,
							'tabfontSize'               => 20,
							'mobfontSize'               	=> 16,
							'buttoncontentTransform' => '',
							'uniqueID'						=>	'',
						)
					),

					'ive/form-field-checkbox'       	=>	array(
						'slug'        => '',
						'title'       => __( 'Checkbox', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-date'       			=>	array(
						'slug'        => '',
						'title'       => __( 'Date', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-email'       			=>	array(
						'slug'        => '',
						'title'       => __( 'Email', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-name'       			=>	array(
						'slug'        => '',
						'title'       => __( 'Name', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-number'       		=>	array(
						'slug'        => '',
						'title'       => __( 'Number', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-phone'       			=>	array(
						'slug'        => '',
						'title'       => __( 'Phone', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-radio'       			=>	array(
						'slug'        => '',
						'title'       => __( 'Radio', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-select'       		=>	array(
						'slug'        => '',
						'title'       => __( 'Select', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-text'       			=>	array(
						'slug'        => '',
						'title'       => __( 'Text', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-textarea'       	=>	array(
						'slug'        => '',
						'title'       => __( 'Text', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingMargin' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'spacingPadding' =>  [
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0 ],
										[ 0, 0, 0, 0]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/form-field-url'       				=>	array(
						'slug'        => '',
						'title'       => __( 'Text', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'frameNormalBorderStyle' => [ 'none', 'none', 'none'],
							'frameNormalBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalBorderWidth' => [ 0, 0, 0 ],
							'frameNormalboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalboxshadx' => [ 0, 0, 0 ],
							'frameNormalboxshady' => [ 0, 0, 0 ],
							'frameNormalboxshadblur' => [ 0, 0, 0 ],
							'frameNormalboxshadspread' => [ 0, 0, 0 ],
							'frameNormalBorderRadius' => [
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ]
							],
							'frameNormalHovBorderStyle' => [ 'none', 'none', 'none' ],
							'frameNormalHovBorderColor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovBorderWidth' => [ 0, 0, 0 ],
							'frameNormalHovboxshadcolor' => [ 'transparent', 'transparent', 'transparent' ],
							'frameNormalHovboxshadx' => [ 0, 0, 0 ],
							'frameNormalHovboxshady' => [ 0, 0, 0 ],
							'frameNormalHovboxshadblur' => [ 0, 0, 0 ],
							'frameNormalHovboxshadspread' => [ 0, 0, 0 ],
							'frameNormalHovBorderRadius' =>  [
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ]
							],
							'spacingMargin' =>  [
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ]
							],
							'spacingPadding' =>  [
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ]
							],
							'displayFields' => [ 'true', 'true', 'true' ],
							'animationStyle' => 'none',
							'animationType' => 'center'
						)
					),
					'ive/button-single'       				=>	array(
						'slug'        => '',
						'title'       => __( 'Text', 'ibtana-visual-editor' ),
						'description' => __( '', 'ibtana-visual-editor' ),
						'default'     => true,
						'attributes'  => array(
							'borderWeight'				=>	'0',
							'color'								=>	'',
							'textColor'						=>	'',
							'borderColor'					=>	'',
							'borderRadius'				=>	'',
							'hoverColor'					=>	'',
							'hoverTextColor'			=>	'',
							'hoverBorderColor'		=>	'',
							'focusOutlineColor'		=>	'',
							'focusOutlineWeight'	=>	'',
							'spacingMargin'				=>	[
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ]
							],
							'spacingPadding'			=>	[
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ],
								[ 0, 0, 0, 0 ]
							],
							'displayFields'				=>	[ 'true', 'true', 'true' ],
							'animationStyle'			=>	'none',
							'animationType'				=>	'center',
							'uniqueID'						=>	'',
							'letterSpacing' => 0,
              'typography' => '',
              'googleFont' => false,
              'loadGoogleFont' => true,
              'fontVariant' => '',
              'fontWeight' => 'normal',
              'fontStyle' => 'normal',
              'fontSubset' => '',
              'deskfontSize' => 24,
              'tabfontSize' => 20,
              'mobfontSize' => 16,
							'buttoncontentTransform' => '',
						),
					),

					'ive/ive-productscarousel'				=>	array(
						'slug'        =>	'',
						'title'       =>	__( 'Posttype Slider', 'ibtana-visual-editor' ),
						'description' =>	__(
							'Do not limit yourself to showing only particular products. Use the Product Slider block to create a separate category of your favorite products for featuring it on the slider.',
							'ibtana-visual-editor'
						),
						'default'     =>	true,
						'attributes'  =>	array(
							'uniqueID'												=>	'',
							'imageColorTab'										=>	'',
							'imageColorTabHov' 		  	  	    =>	'',
							'imgBorderWidth'									=>	2,
							'pctitleColorImp'									=>	false,
							'pctitleFontImp'									=>	false,
							'pcimageColorImp'									=>	false,
							'otherFontImp'										=>	true,
							'otherBorderImp'										=>	true,
							'imgleftmargin'										=>  '',
							'imgBorderType'										=>	'none',
							'contentColorTab'									=>	'',
							'contentColorTabHov' 		    	    =>	'',
							'contentBorderWidth'							=>	2,
							'contentborderType'								=>	'none',
							'regularfontPrice'								=>	'',
							'regularPricetabColor'						=>	'',
							'regularPricetabColorHov'         =>	'',
							'imgbgColor'											=>	'',
							'imgbgColorHov'										=>  '',
							'postBlockWidth'									=>	'center',
							'buttoncontentTransform'					=>   '',
							'postmetaTextTransform'						=>   '',
							'align'														=>	'left',
							'post_type'												=>	'post',
							'categories'											=>	'',
							'postcategories'									=>	'',
							'team_cats'												=>	'',
							'postscount'											=>	5,
							'order'														=>	'desc',
							'orderBy'													=>	'date',
							'columns'													=>	2,
							'columnGap'												=>	15,
							'postLayout'											=>	'grid',
							'layoutType'											=>	array( 'column', 'column', 'column' ),
							'carouselLayoutStyle'							=>	'skin1',
							'slidesToShow'										=>	2,
							'deskslideItems'									=>	3,
							'tabslideItems'										=>	2,
							'mobslideItems'										=>	1,
							'slideMargin'											=>	3,
							'autoPlay'												=>	true,
							'slideLoop'												=>	true,
							'mouseDrag'												=>	true,
							'overlayContent'									=>	true,
							'overlayTop'											=>	0,
							'isSlider'												=>	true,
							'navigation'											=>	array( 'none', 'none', 'none' ),
							'gridLayoutStyle'									=>	'g_skin1',
							'postImageSizes'									=>	'full',
							'displayPostTitle'								=>	array( 'true', 'true', 'true' ),
							'displayPostImage'								=>	array( 'true', 'true', 'true' ),
							'displayPostCategory'								=>	array( 'false', 'false', 'false' ),
							'displayPostDate'									=>	array( 'false', 'false', 'false' ),
							'displayPostDateIcon'							=>	array( 'false', 'false', 'false' ),
							'displayComment'									=>	array( 'false', 'false', 'false' ),
							'displayCommentIcon'							=>	array( 'false', 'false', 'false' ),
							'displayCommentText'							=>	array( 'false', 'false', 'false' ),
							'CommentText'											=>	'Comment',
							'displayPostAuthor'								=>	array( 'false', 'false', 'false' ),
							'displayPostAuthorIcon'						=>	array( 'false', 'false', 'false' ),
							'displayPostExcerpt'							=>	array( 'true', 'true', 'true' ),
							'displayProductExcerpt'						=>	array( 'true', 'true', 'true' ),
							'displayProductSaleBadge'					=>	array( 'true', 'true', 'true' ),
							'displayPostReadMoreButton'				=>	array( 'true', 'true', 'true' ),
							'postReadMoreButtonText'					=>	'Read More',
							'postCurrency'										=>	self::show_currency_symbol(),
							'nameColor'												=>	'black',
							'nameHoverColor'									=>	'black',
							'contentColor'										=>	'black',
							'postMetaTextColor'								=>	'black',
							'postMetaTextColorHov'						=>	'',
							'postCatTextColor'						=>	'black',
							'postCatTextColorHov'						=>	'',
							'postMetaIconColor'								=>	'#222222',
							'postMetaIconColorHov'						=>	'',
							'postDateFormat'									=>	'd F Y',
							'priceColor'											=>	'black',
							'priceHoverColor'									=>	'black',
							'contentBackgroundColor'					=>	'#ffffff',
							'cartButton'											=>	array( 'true', 'true', 'true' ),
							'contentOpacity'									=>	0,
							'cartBackgroundColor'							=>	'#f7f7f7',
							'cartBackgroundHovColor'					=>	'#ffffff',
							'cartTextColor'										=>	'black',
							'cartTextHoverColor'							=>	'black',
							'cartIconColor'										=>	'black',
							'cartIconHoverColor'							=>	'black',
							'cartBorderColor'									=>	'black',
							'cartBorderHovColor'							=>	'black',
							'cartBorderRadius'								=>	0,
							'cartFontSizemob'									=>	14,
							'cartFontSizetab'									=>	16,
							'cartFontSizedesk'								=>	18,
							'contentFontSizemob'							=>	14,
							'contentFontSizetab'							=>	16,
							'contentFontSizedesk'							=>	18,
							'titleFontSizemob'								=>	14,
							'titleFontSizetab'								=>	16,
							'titleFontSizedesk'								=>	18,
							'categoryFontSizemob'							=>	14,
							'categoryFontSizetab'							=>	16,
							'categoryFontSizedesk'							=>	18,
							'mobcartButtonPadding'						=>	10,
							'mobcartButtonPadding2'						=>	10,
							'tabcartButtonPadding'						=>	10,
							'tabcartButtonPadding2'						=>	10,
							'deskcartButtonPadding'						=>	10,
							'deskcartButtonPadding2'					=>	10,
							'cartButtonPaddingControl'				=>	'linked',
							'letterSpacing'										=>	0,
							'typography'											=>	'',
							'googleFont'											=>	false,
							'loadGoogleFont'									=>	true,
							'fontSubset'											=>	'',
							'fontVariant'											=>	'',
							'fontWeight'											=>	'400',
							'fontStyle'												=>	'normal',
							'letterSpacingC'									=>	0,
							'typographyC'											=>	'',
							'googleFontC'											=>	false,
							'loadGoogleFontC'									=>	true,
							'fontSubsetC'											=>	'',
							'fontVariantC'										=>	'',
							'fontWeightC'											=>	'400',
							'fontStyleC'											=>	'normal',
							'categoryLetterSpacing'								=>	0,
							'categoryTypography'								=>	'',
							'categoryGoogleFont'								=>	false,
							'categoryLoadGoogleFont'							=>	true,
							'categoryFontSubset'								=>	'',
							'categoryFontVariant'								=>	'',
							'categoryFontWeight'								=>	'400',
							'categoryFontStyle'									=>	'normal',
							'categoryContentTransform'							=>	'none',
							'letterSpacingT'									=>	0,
							'typographyT'											=>	'',
							'googleFontT'											=>	false,
							'loadGoogleFontT'									=>	true,
							'fontSubsetT'											=>	'',
							'fontVariantT'										=>	'',
							'fontWeightT'											=>	'400',
							'fontStyleT'											=>	'normal',
							'blockAlignment'									=>	'none',
							'autoplayHover'										=>	true,
							'rewind'													=>	false,
							'autoplayTimeOut'									=>	5000,
							'autoplaySpeed'										=>	5000,
							'navigationSpeed'									=>	5000,
							'dotSpeed'												=>	5000,
							'stagePadding'										=>	0,
							'navArrowSize'										=>	array( 20, 20, 20 ),
							'navArrowColor'										=>	'#000000',
							'navArrowBgColor'									=>	'#ffffff',
							'navArrowBdColor'									=>	'#000000',
							'navArrowBdWidth'									=>	array( 0, 0, 0 ),
							'navArrowBdRadius'								=>	0,
							'dotActiveColor'									=>	'#000000',
							'dotColor'												=>	'#222222',
							'navArrowHovColor'								=>	'#ffffff',
							'navArrowBgHovColor'							=>	'#000000',
							'navArrowBdHovColor'							=>	'#ffffff',
							'isnavText'												=>	false,
							'navbtntype'											=>	'icon',
							'navTextPrev'											=>	'Prev',
							'navTextNext'											=>	'Next',
							'navTextPrevicon'									=>	'fas fa-angle-left',
							'navTextNexticon'									=>	'fas fa-angle-right',
							'buttonOption'										=>	'text',
							'buttonIconName'									=>	'fas fa-cart-plus',
							'buttonIconName2'									=>	'fas fa-cart-plus',
							'iconAlignButton'									=>	'right',
							'imageDateOption'									=>	array( 'true', 'true', 'true' ),
							'imgWidth'												=>	array( 400, 400, 400 ),
							'imgHeight'												=>	array( 400, 400, 400 ),
							'postdeskalign'										=>	'center',
							'posttabalign'										=>	'center',
							'postmobalign'										=>	'center',
							'productdeskalign'								=>	'center',
							'producttabalign'									=>	'center',
							'productmobalign'									=>	'center',
							'borderType'											=>	'solid',
							'cartBorderWidth'									=>	0,
							'content_excerpt'									=>	100,
							'showRegularPrice'								=>	true,
							'showproductName'									=>	true,
							'showSalePrice'										=>	true,
							'isWooComActive'									=>	class_exists( 'WooCommerce' ) ? true : false,
							'marginPrice'											=>	0,
							'fontPrice'												=>	18,
							'marginTopPrice'									=>	0,
							'marginBottomPrice'								=>	0,
							'iconSpacingRight'								=>	0,
							'iconSpacingLeft'									=>	0,
							'iconPostMetaSize'								=>	array( 10, 10, 10 ),
							'contentPostMetaSize'							=>	array( 10, 10, 10 ),
							'iconGrad'												=>	false,
							'iconposTop'											=>	false,
							'israting'												=>	false,
							'ratingColor'											=>	'#fe2b2b',
							'bgfirstcolorr'										=>	'#00B5E2',
							'bgGradLoc'												=>	0,
							'bgSecondColr'										=>	'#00B5E2',
							'bgGradLocSecond'									=>	100,
							'bgGradType'											=>	'linear',
							'bgGradAngle'											=>	180,
							'vBgImgPosition'									=>	'center center',
							'hovGradFirstColor'								=>	'',
							'hovGradSecondColor'							=>	'',
							'productCount'										=>	class_exists( 'WooCommerce' ) ? wp_count_posts( 'product' )->publish : 0,
							'postCount'												=>	( (int) wp_count_posts( 'post' )->publish ),
							'owlNavMaxWidth'									=>	array( 100, 100, 100 ),
							'owlNavTop'												=>	array( 35, 35, 35 ),
							'owlNavLeft'											=>	array( 0, 0, 0 ),
							'owlNavRight'											=>	array( 0, 0, 0 ),
							'arrowBtnWidth'										=>	array( 45, 45, 45 ),
							'arrowBtnHeight'									=>	array( 40, 40, 40 ),
							'arrowBtnPadding'									=>	array( [ 0, 0, 0, 0 ], [ 0, 0, 0, 0 ], [ 0, 0, 0, 0 ] ),
							'arrowBtnPaddingControl'					=>	array( 'individual', 'individual', 'individual' ),
							'dotBorderRadius'									=>	0,
							'letterSpacingPM'									=>	'number',
							'typographyPM'										=>	'',
							'googleFontPM'										=>	false,
							'loadGoogleFontPM'								=>	true,
							'fontSubsetPM'										=>	'',
							'fontVariantPM'										=>	'',
							'fontWeightPM'										=>	'400',
							'fontStylePM'											=>	'normal',
							'letterSpacingPrice'							=>	'number',
							'typographyPrice'									=>	'',
							'googleFontPrice'									=>	false,
							'loadGoogleFontPrice'							=>	true,
							'fontSubsetPrice'									=>	'',
							'fontVariantPrice'								=>	'',
							'fontWeightPrice'									=>	'400',
							'fontStylePrice'									=>	'normal',
							'badgeColor'											=>	'black',
							'badgeHovColor'										=>	'#222222',
							'badgeBgColor'										=>	'#ffffff',
			        'badgeBgHovColor'									=>	'#222222',
			        'badgeFontSize'										=>	18,
			        'letterSpacingBadge'							=>	0,
			        'typographyBadge'									=>	'',
			        'googleFontBadge'									=>	false,
			        'loadGoogleFontBadge'							=>	true,
			        'fontSubsetBadge'									=>	'',
			        'fontVariantBadge'								=>	'',
			        'fontWeightBadge'									=>	'400',
			        'fontStyleBadge'									=>	'normal',
			        'authorOrderPosition'							=>	1,
			        'dateOrderPosition'								=>	2,
			        'commentOrderPosition'						=>	3,
			        'displaySocialShareIcons'					=>	array( 'false', 'false', 'false' ),
			        'iconCount'												=>	1,
			        'icons'														=>  array(
								array(
									'icon'                =>  'fe_aperture',
		              'iconSvg'             =>  'fa fa-bookmark',
		              'link'                =>  '',
		              'target'              =>  '_self',
		              'desksize'            =>  50,
		              'tabsize'             =>  35,
		              'mobsize'             =>  20,
		              'title'               =>  '',
		              'deskwidth'           =>  'auto',
		              'deskheight'          =>  'auto',
		              'tabwidth'            =>  'auto',
		              'tabheight'           =>  'auto',
		              'mobwidth'            =>  'auto',
		              'mobheight'           =>  'auto',
		              'color'               =>  '#444444',
		              'hoverColor'          =>  '#eeeeee',
		              'background'          =>  '#ffffff',
		              'hoverBackground'     =>  '#000000',
		              'border'              =>  '#444444',
		              'hoverBorder'         =>  '#FF0000',
		              'borderRadius'        =>  0,
		              'borderWidth'         =>  2,
		              'borderStyle'         =>  'none',
		              'deskpadding'         =>  20,
		              'tabpadding'          =>  16,
		              'mobpadding'          =>  12,
		              'deskpadding2'        =>  20,
		              'tabpadding2'         =>  16,
		              'mobpadding2'         =>  12,
		              'style'               =>  'default',
		              'iconGrad'            =>  false,
		              'gradFirstColor'      =>  '',
		              'gradFirstLoc'        =>  0,
		              'gradSecondColor'     =>  '#00B5E2',
		              'gradSecondLoc'       =>  '100',
		              'gradType'            =>  'linear',
		              'gradAngle'           =>  '180',
		              'gradRadPos'          =>  'center center',
		              'hovGradFirstColor'   =>  '',
		              'hovGradSecondColor'  =>  '',
		              'socialShareType'     =>  'facebook'
		            )
							),
			        'alignType'												=>	'horizontal',
			        'deskIconAlignment'								=>	'center',
			        'tabIconAlignment'								=>  'center',
			        'mobIconAlignment'								=>  'center',
			        'margintb'												=>	array( 5, 5, 5 ),
			        'marginlr'												=>  array( 5, 5, 5 ),
			        'isWishlistBtnEnabled'						=>	array( 'false', 'false', 'false' ),
			        'wishlistPlugin'									=>  'yith-woocommerce-wishlist',
			        'isWishListTypoEnabled'						=>	false,
			        'wishBtnLetterSpacing'						=>	1,
			        'wishBtnTypography'								=>	'',
			        'wishBtnGoogleFont'								=>	false,
			        'wishBtnLoadGoogleFont'						=>	false,
			        'wishBtnFontVariant'							=>	'',
			        'wishBtnFontWeight'								=>	'400',
			        'wishBtnFontStyle'								=>	'normal',
			        'wishBtnFontSubset'								=>	'',
			        'wishBtnTextTransform'						=>	'none',
			        'isProductCompareEnabled'   			=>  array( 'false', 'false', 'false' ),
			        'productComparePlugin'      			=>	'yith-woocommerce-compare',
			        'isCompareBtnTypoEnabled'   			=>	false,
			        'compareBtnLetterSpacing'					=>	1,
			        'compareBtnTypography'      			=>	'',
			        'compareBtnGoogleFont'      			=>	false,
			        'compareBtnLoadGoogleFont'  			=>	false,
			        'compareBtnFontVariant'     			=>	'',
			        'compareBtnFontWeight'      			=>	'400',
			        'compareBtnFontStyle'       			=>	'normal',
			        'compareBtnFontSubset'      			=>	'',
			        'compareBtnTextTransform'   			=>	'none',
			        'isQuickViewEnabled'        			=>	array( 'false', 'false', 'false' ),
			        'quickViewPlugin'           			=>	'woosq',
			        'isQuickViewBtnTypoEnabled'				=>  false,
			        'quickViewBtnLetterSpacing'				=>  1,
			        'quickViewBtnTypography'					=>	'',
			        'quickViewBtnGoogleFont'					=>	false,
			        'quickViewBtnLoadGoogleFont'			=>	false,
			        'quickViewBtnFontVariant'					=>	'',
			        'quickViewBtnFontWeight'					=>	'400',
			        'quickViewBtnFontStyle'       		=>	'normal',
			        'quickViewBtnFontSubset'      		=>	'',
			        'quickViewBtnTextTransform'   		=>	'none',
			        'isPaginationEnabled'							=>	false,
			        'paginationType'									=>	'pagination',
			        'paginationNav'										=>	'textArrow',
			        'deskPaginationAlign'							=>	'center',
			        'tabPaginationAlign'							=>	'center',
			        'mobPaginationAlign'							=>	'center',
			        'paginationBorderWidth'						=>	0,
			        'paginationBorderRadius'					=>	0,
			        'paginationBorderType'						=>	'solid',
			        'paginationLetterSpacing'					=>	1,
			        'paginationTypography'						=>	'',
			        'paginationGoogleFont'						=>	false,
			        'paginationLoadGoogleFont'				=>	false,
			        'paginationFontVariant'						=>	'',
			        'paginationFontWeight'						=>	'400',
			        'paginationFontStyle'							=>	'normal',
			        'paginationFontSubset'						=>	'',
			        'paginationTextTransform'					=>	'none',
			        'paginationTextColor'							=>	'#fff',
			        'paginationTextHoverColor'				=>	'#fff',
			        'paginationTextActiveColor'				=>	'#fff',
			        'paginationBackgroundColor'				=>	'#0e1523',
			        'paginationBackgroundHovColor'		=>	'#FF4747',
			        'paginationBackgroundActiveColor'	=>	'#FF4747',
			        'paginationBorderColor'						=>	'#0e1523',
			        'paginationBorderHovColor'				=>	'#FF4747',
			        'paginationBorderActiveColor'			=>	'#FF4747',
			        'cardNormalBorderType'						=>	'none',
			        'cardNormalBorderTop'							=>	0,
			        'cardNormalBorderRight'						=>	0,
			        'cardNormalBorderBottom'					=>	0,
			        'cardNormalBorderLeft'						=>	0,
			        'cardNormalBorderColor'						=>	'transparent',
			        'cardHoverBorderType'							=>	'none',
			        'cardHoverBorderTop'							=>	0,
			        'cardHoverBorderRight'						=>	0,
			        'cardHoverBorderBottom'						=>	0,
			        'cardHoverBorderLeft'							=>	0,
			        'cardHoverBorderColor'						=>	'transparent',
			        'cardBorderRadiustype'						=>	'px',
			        'cardBorderRadiusTop'							=>	0,
			        'cardBorderRadiusRight'						=>	0,
			        'cardBorderRadiusBottom'					=>	0,
			        'cardBorderRadiusLeft'						=>	0,
							'contentTransform'								=> 'none'
						),
					)

				);
			}
			return self::$block_attributes;
		}
	}
}
