<?php

    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: https://docs.reduxframework.com
     * */

    if ( ! class_exists( 'Redux_Framework_sample_config' ) ) {

        class Redux_Framework_sample_config {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Just for demo purposes. Not needed per say.
                $this->theme = wp_get_theme();

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                // If Redux is running as a plugin, this will remove the demo notice and links
                //add_action( 'redux/loaded', array( $this, 'remove_demo' ) );

                // Function to test the compiler hook and demo CSS output.
                // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
                //add_filter('redux/options/'.$this->args['opt_name'].'/compiler', array( $this, 'compiler_action' ), 10, 3);

                // Change the arguments after they've been declared, but before the panel is created
                //add_filter('redux/options/'.$this->args['opt_name'].'/args', array( $this, 'change_arguments' ) );

                // Change the default value of a field after it's been set, but before it's been useds
                //add_filter('redux/options/'.$this->args['opt_name'].'/defaults', array( $this,'change_defaults' ) );

                // Dynamically add a section. Can be also used to modify sections/fields
                //add_filter('redux/options/' . $this->args['opt_name'] . '/sections', array($this, 'dynamic_section'));

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            /**
             * This is a test function that will let you see when the compiler hook occurs.
             * It only runs if a field    set with compiler=>true is changed.
             * */
            function compiler_action( $options, $css, $changed_values ) {
                echo '<h1>The compiler hook has run!</h1>';
                echo "<pre>";
                print_r( $changed_values ); // Values that have changed since the last save
                echo "</pre>";
                //print_r($options); //Option values
                //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )

                /*
              // Demo of how to use the dynamic CSS and write your own static CSS file
              $filename = dirname(__FILE__) . '/style' . '.css';
              global $wp_filesystem;
              if( empty( $wp_filesystem ) ) {
                require_once( ABSPATH .'/wp-admin/includes/file.php' );
              WP_Filesystem();
              }

              if( $wp_filesystem ) {
                $wp_filesystem->put_contents(
                    $filename,
                    $css,
                    FS_CHMOD_FILE // predefined mode settings for WP files
                );
              }
             */
            }

            /**
             * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
             * Simply include this function in the child themes functions.php file.
             * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
             * so you must use get_template_directory_uri() if you want to use any of the built in icons
             * */
            function dynamic_section( $sections ) {
                //$sections = array();
                $sections[] = array(
                    'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                    'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-paper-clip',
                    // Leave this as a blank section, no options just some intro text set above.
                    'fields' => array()
                );

                return $sections;
            }

            /**
             * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
             * */
            function change_arguments( $args ) {
                //$args['dev_mode'] = true;

                return $args;
            }

            /**
             * Filter hook for filtering the default value of any given field. Very useful in development mode.
             * */
            function change_defaults( $defaults ) {
                $defaults['str_replace'] = 'Testing filter hook!';

                return $defaults;
            }

            // Remove the demo link and the notice of integrated demo from the redux-framework plugin
            function remove_demo() {

                // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
                if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                    remove_filter( 'plugin_row_meta', array(
                        ReduxFrameworkPlugin::instance(),
                        'plugin_metalinks'
                    ), null, 2 );

                    // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                    remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
                }
            }

            public function setSections() {

                /**
                 * Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
                 * */
                // Background Patterns Reader
                $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
                $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
                $sample_patterns      = array();

                if ( is_dir( $sample_patterns_path ) ) :

                    if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) :
                        $sample_patterns = array();

                        while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                            if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                                $name              = explode( '.', $sample_patterns_file );
                                $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                                $sample_patterns[] = array(
                                    'alt' => $name,
                                    'img' => $sample_patterns_url . $sample_patterns_file
                                );
                            }
                        }
                    endif;
                endif;

                ob_start();

                $ct          = wp_get_theme();
                $this->theme = $ct;
                $item_name   = $this->theme->get( 'Name' );
                $tags        = $this->theme->Tags;
                $screenshot  = $this->theme->get_screenshot();
                $class       = $screenshot ? 'has-screenshot' : '';

                $customize_title = sprintf( __( 'Customize &#8220;%s&#8221;', 'redux-framework-demo' ), $this->theme->display( 'Name' ) );

                ?>
                <div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
                    <?php if ( $screenshot ) : ?>
                        <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                            <a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize"
                               title="<?php echo esc_attr( $customize_title ); ?>">
                                <img src="<?php echo esc_url( $screenshot ); ?>"
                                     alt="<?php esc_attr_e( 'Current theme preview', 'redux-framework-demo' ); ?>"/>
                            </a>
                        <?php endif; ?>
                        <img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>"
                             alt="<?php esc_attr_e( 'Current theme preview', 'redux-framework-demo' ); ?>"/>
                    <?php endif; ?>

                    <h4><?php echo $this->theme->display( 'Name' ); ?></h4>

                    <div>
                        <ul class="theme-info">
                            <li><?php printf( __( 'By %s', 'redux-framework-demo' ), $this->theme->display( 'Author' ) ); ?></li>
                            <li><?php printf( __( 'Version %s', 'redux-framework-demo' ), $this->theme->display( 'Version' ) ); ?></li>
                            <li><?php echo '<strong>' . __( 'Tags', 'redux-framework-demo' ) . ':</strong> '; ?><?php printf( $this->theme->display( 'Tags' ) ); ?></li>
                        </ul>
                        <p class="theme-description"><?php echo $this->theme->display( 'Description' ); ?></p>
                        <?php
                            if ( $this->theme->parent() ) {
                                printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.', 'redux-framework-demo' ) . '</p>', __( 'http://codex.wordpress.org/Child_Themes', 'redux-framework-demo' ), $this->theme->parent()->display( 'Name' ) );
                            }
                        ?>

                    </div>
                </div>

                <?php
                $item_info = ob_get_contents();

                ob_end_clean();

                $sampleHTML = '';
                if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
                    Redux_Functions::initWpFilesystem();

                    global $wp_filesystem;

                    $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
                }

                // ACTUAL DECLARATION OF SECTIONS
                $this->sections[] = array(
                    'title'  => __( 'General Settings', 'redux-framework-demo' ),
                    /*'desc'   => __( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'redux-framework-demo' ),*/
                    'icon'   => 'el-icon-th-large',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
                        array(
                            'id'       => 'logo-image',
                            'type'     => 'media',
                            'title'    => __( 'Website Logo', 'redux-framework-demo' ),
                        ),
                        array(
                            'id'       => 'favicon-image',
                            'type'     => 'media',
                            'title'    => __( 'Favicon Image', 'redux-framework-demo' ),
                        ),
                        array(
                            'id'       => 'text-phone-number',
                            'type'     => 'text',
                            'title'    => __( 'Text Phone Number', 'redux-framework-demo' ),
                        ),
                        array(
                            'id'       => 'phone-number',
                            'type'     => 'text',
                            'title'    => __( 'Link Phone Number', 'redux-framework-demo' ),
                        ),                     
                        // array(
                        //     'id'       => 'enable-floating-buttons',
                        //     'type'     => 'switch', 
                        //     'title'    => __('Enable floating buttons', 'redux-framework-demo'),
                            
                        //     'default'  => true,
                        // ),
                        
                            
                        array(
                            'id'       => 'enquire-form',
                            'type'     => 'select',
                            'title'    => __( 'Enquire Form', 'redux-framework-demo' ),
                            'data'      => 'posts',
                            'args'      => [
                                'post_type' => 'wpcf7_contact_form',
                                'posts_per_page' => -1
                            ]
                        ),	
                       
                        array(
                            'id'       => 'copyright',
                            'type'     => 'editor',
                            'title'    => __( 'Copyright', 'redux-framework-demo' ),
                        ),
                    ),
                );

                $this->sections[] = array(
                    'icon'      => 'el-icon-home',
                    'title'     => __('Home Settings', 'redux-framework-demo'),
                    'fields'    => array(
    
                        array(
                            'id'       => 'section-start2',
                            'type'     => 'section',
                            'title'    => __( 'Banner', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'hero-icon',
                                'type'     => 'media',
                                'title'    => __( 'Hero Icon', 'redux-framework-demo' ),
                            ),  
                            array(
                                'id'       => 'moto-text',
                                'type'     => 'text',
                                'title'    => __( 'Moto text', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'moto-description',
                                'type'     => 'editor',
                                'title'    => __( 'Moto Description', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'section-end2',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ),
                        
                        array(
                            'id'       => 'section-start12',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 1', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'dest-1-title',
                                'type'     => 'text',
                                'title'    => __( 'title', 'redux-framework-demo' ),
                            ), 
                            
                            array(
                                'id'       => 'dest-1-description',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ),     
                        array(
                            'id'       => 'section-end12',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ),
                        array(
                            'id'       => 'section-start13',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 2', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'section00-icon',
                                'type'     => 'media',
                                'title'    => __( 'merchant kami', 'redux-framework-demo' ),
                            ),  
                            array(
                                'id'       => 'total-transaksi',
                                'type'     => 'media',
                                'title'    => __( 'Total Transaksi', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'dropshiperbergabung',
                                'type'     => 'media',
                                'title'    => __( 'dropshiper tergabung', 'redux-framework-demo' ),
                                
                            ), 
                            array(
                                'id'       => 'tingkat',
                                'type'     => 'slides',
                                'title'    => __( 'Tingkatan', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'merchankami',
                                'type'     => 'slides',
                                'title'    => __( 'merchans kami', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'merchantkami2',
                                'type'     => 'slides',
                                'title'    => __( 'review merchans kami', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'metodepembayaran',
                                'type'     => 'slides',
                                'title'    => __( 'metode pembayaran', 'redux-framework-demo' ),
                            ),
                            array(
                                'id' =>'metodepengiriman',
                                'type' => 'slides',
                                'title'    => __( 'metode pengiriman', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'partnerkami',
                                'type'     => 'slides',
                                'title'    => __( 'partner kami', 'redux-framework-demo' ),
                            ),  
                        array(
                            'id'       => 'section-end13',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ),
                        array(
                            'id'       => 'step5',
                            'type'     => 'media',
                            'title'    => __( 'Step 5', 'redux-framework-demo' ),
                        ), 
                       
                        array(
                            'id'       => 'section-start11',
                            'type'     => 'section',
                            'title'    => __( 'ABOUT US', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'about-title',
                                'type'     => 'text',
                                'title'    => __( 'Title', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'about-des',
                                'type'     => 'editor',
                                'title'    => __( 'description', 'redux-framework-demo' ),
                            ),  
                        array(
                            'id'       => 'section-end11',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ),
                        array(
                            'id'       => 'section-start00',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 3', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'how-it-work',
                                'type'     => 'slides',
                                'title'    => __( 'How It Works', 'redux-framework-demo' ),
                            ), 
                        array(
                            'id'       => 'section-end00',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
                            'id'       => 'section-start6',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 4', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'icon1',
                                'type'     => 'text',
                                'title'    => __( 'icon 1', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'judul1',
                                'type'     => 'text',
                                'title'    => __( 'title 1', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'deskrip1',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'icon2',
                                'type'     => 'text',
                                'title'    => __( 'icon 2', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'judul2',
                                'type'     => 'text',
                                'title'    => __( 'title 2', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'deskrip2',
                                'type'     => 'editor',
                                'title'    => __( 'Description 2', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'icon3',
                                'type'     => 'text',
                                'title'    => __( 'icon 3', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'judul3',
                                'type'     => 'text',
                                'title'    => __( 'title 3', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'deskrip3',
                                'type'     => 'editor',
                                'title'    => __( 'Description 3', 'redux-framework-demo' ),
                            ), 
                        array(
                            'id'       => 'section-end6',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
                            'id'       => 'section-start56',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 5', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'service1',
                                'type'     => 'editor',
                                'title'    => __( 'description 1', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'service2',
                                'type'     => 'editor',
                                'title'    => __( 'description 2', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'service3',
                                'type'     => 'editor',
                                'title'    => __( 'description 3', 'redux-framework-demo' ),
                            ), 
                        array(
                            'id'       => 'section-end56',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
                            'id'       => 'section-start54',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 6', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'Section5-title',
                                'type'     => 'text',
                                'title'    => __( 'Title', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'Section5-Description',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'section-end54',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
                            'id'       => 'section-start45',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 7', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'most-recent-listing',
                                'type'     => 'slides',
                                'title'    => __( 'most recent listing', 'redux-framework-demo' ),
                            ), 
                        array(
                            'id'       => 'section-end45',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
                            'id'       => 'section-start33',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 8', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'testimonial',
                                'type'     => 'slides',
                                'title'    => __( 'testimonial', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'section-end33',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ), 
                        array(
                            'id'       => 'section-start3q',
                            'type'     => 'section',
                            'title'    => __( 'SECTION 9', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ), 
                            array(
                                'id'       => 'logo-image-btn-footer1',
                                'type'     => 'media',
                                'title'    => __( 'Logo button footer', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'logo-image-btn-footer2',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ),  
                            array(
                                'id'       => 'email',
                                'type'     => 'text',
                                'title'    => __( 'Email', 'redux-framework-demo' ),
                            ),         
                        array(
                            'id'       => 'section-end3q',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ),                                       
                    ),
                );

                $this->sections[] = array(
                    'icon'      => 'el-icon-home',
                    'title'     => __('Header Images Settings', 'redux-framework-demo'),
                    'fields'    => array(
                        array(
                            'id'       => 'section-media-start',
                            'type'     => 'section',
                            'title'    => __( 'Default Header Image', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'default-header-image',
                                'type'     => 'media',
                                'title'    => __( 'Default header image', 'redux-framework-demo' ),
                            ),                           
                        array(
                            'id'       => 'section-media-end',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ),
						
						array(
                            'id'       => 'section-media-start',
                            'type'     => 'section',
                            'title'    => __( 'Single Header Image', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'single-header-image',
                                'type'     => 'media',
                                'title'    => __( 'Default header image', 'redux-framework-demo' ),
                            ),                           
                        array(
                            'id'       => 'section-media-end',
                            'type'     => 'section',
                            'indent'   => false, // Indent all options below until the next 'section' option is set.
                        ),
                        
                    )
                );

                // For Price Page
                $this->sections[] = array(
                    'icon'      => 'el-icon-home',
                    'title'     => __('Price Page Settings', 'redux-framework-demo'),
                    'fields'    => array(
    
                        array(
                            'id'       => 'price1',
                            'type'     => 'section',
                            'title'    => __( 'Banner', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'price_banner1',
                                'type'     => 'media',
                                'title'    => __( 'Hero Icon', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'moto-price',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'harga-layanan1',
                            'type'     => 'section',
                            'title'    => __( 'Harga Layanan 1', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),  
                            array(
                                'id'       => 'xqw1',
                                'type'     => 'text',
                                'title'    => __( 'Judul', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'rwe1',
                                'type'     => 'textarea',
                                'title'    => __( 'Harga', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'vsa1',
                                'type'     => 'editor',
                                'title'    => __( 'deskripsi', 'redux-framework-demo' ),
                            ),  
                            array(
                                'id'       => 'harga-layanan2',
                                'type'     => 'section',
                                'title'    => __( 'Harga Layanan 2', 'redux-framework-demo' ),
                                'indent'   => true, // Indent all options below until the next 'section' option is set.
                            ),  
                                array(
                                    'id'       => 'xqw2',
                                    'type'     => 'text',
                                    'title'    => __( 'Judul', 'redux-framework-demo' ),
                                ),
                                array(
                                    'id'       => 'rwe2',
                                    'type'     => 'textarea',
                                    'title'    => __( 'Harga', 'redux-framework-demo' ),
                                ), 
                                array(
                                    'id'       => 'vsa2',
                                    'type'     => 'editor',
                                    'title'    => __( 'deskripsi', 'redux-framework-demo' ),
                                ),  
                                array(
                                    'id'       => 'harga-layanan3',
                                    'type'     => 'section',
                                    'title'    => __( 'Harga Layanan 3', 'redux-framework-demo' ),
                                    'indent'   => true, // Indent all options below until the next 'section' option is set.
                                ),  
                                    array(
                                        'id'       => 'xqw3',
                                        'type'     => 'text',
                                        'title'    => __( 'Judul', 'redux-framework-demo' ),
                                    ),
                                    array(
                                        'id'       => 'rwe3',
                                        'type'     => 'textarea',
                                        'title'    => __( 'Harga', 'redux-framework-demo' ),
                                    ), 
                                    array(
                                        'id'       => 'vsa3',
                                        'type'     => 'editor',
                                        'title'    => __( 'deskripsi', 'redux-framework-demo' ),
                                    ),   
                                    array(
                                        'id'       => 'harga-layanan4',
                                        'type'     => 'section',
                                        'title'    => __( 'keterangan', 'redux-framework-demo' ),
                                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                                    ),   
                                    array(
                                        'id'       => 'xqw4',
                                        'type'     => 'text',
                                        'title'    => __( 'Judul', 'redux-framework-demo' ),
                                    ),
                                    array(
                                        'id'       => 'rwe4',
                                        'type'     => 'textarea',
                                        'title'    => __( 'Description', 'redux-framework-demo' ),
                                    ),                   
                    ),
                );
                //modal kerja
                $this->sections[] = array(
                    'icon'      => 'el-icon-home',
                    'title'     => __('Modal Kerja Page Settings', 'redux-framework-demo'),
                    'fields'    => array(
    
                        array(
                            'id'       => 'modalman1',
                            'type'     => 'section',
                            'title'    => __( 'Banner', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'nwq999',
                                'type'     => 'media',
                                'title'    => __( 'Hero Icon 1', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'nwq76',
                                'type'     => 'media',
                                'title'    => __( 'Hero Icon 2', 'redux-framework-demo' ),
                            ),  
                            array(
                                'id'       => 'jdlqwe',
                                'type'     => 'text',
                                'title'    => __( 'Judul', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'qwa123',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'nffd',
                                'type'     => 'media',
                                'title'    => __( 'Flow Merchant Induk', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'nffdczzzzzzzzzzzzzzs',
                                'type'     => 'media',
                                'title'    => __( 'Flow modal kerja resseler', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'jrx',
                                'type'     => 'textarea',
                                'title'    => __( 'keterangan', 'redux-framework-demo' ),
                            ),              
                    ),
                );
                $this->sections[] = array(
                    'icon'      => 'el-icon-home',
                    'title'     => __('Tutorial Page Settings', 'redux-framework-demo'),
                    'fields'    => array(
    
                        array(
                            'id'       => 'ss',
                            'type'     => 'section',
                            'title'    => __( 'Banner', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'nwqaqwq',
                                'type'     => 'media',
                                'title'    => __( 'Hero Icon 1', 'redux-framework-demo' ),
                            ),  
                            array(
                                'id'       => 'vidiotutorial',
                                'type'     => 'text',
                                'title'    => __( 'vidio tutorial link', 'redux-framework-demo' ),
                            ),   
                    ),
                );
                $this->sections[] = array(
                    'icon'      => 'el-icon-home',
                    'title'     => __('One Stop Dropshiping page setting', 'redux-framework-demo'),
                    'fields'    => array(
    
                        array(
                            'id'       => 'ssx',
                            'type'     => 'section',
                            'title'    => __( 'section 1', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),
                            array(
                                'id'       => 'taxascc',
                                'type'     => 'media',
                                'title'    => __( 'Hero Icon 1', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'XNXX',
                            'type'     => 'section',
                            'title'    => __( 'section 2', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        ),  
                            array(
                                'id'       => 'xanxx',
                                'type'     => 'media',
                                'title'    => __( 'Hero icon 2', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => '121uiash',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ), 
                            array(
                                'id'       => 'Xamster123',
                                'type'     => 'section',
                                'title'    => __( 'section 3', 'redux-framework-demo' ),
                                'indent'   => true, // Indent all options below until the next 'section' option is set.
                            ),  
                            array(
                                'id'       => '1uiaa',
                                'type'     => 'media',
                                'title'    => __( 'Hero icon 3', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'awq211331',
                                'type'     => 'text',
                                'title'    => __( 'judul', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'mcdjimbaranamcaq112',
                                'type'     => 'editor',
                                'title'    => __( 'description', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'Xar123',
                                'type'     => 'section',
                                'title'    => __( 'section 4', 'redux-framework-demo' ),
                                'indent'   => true, // Indent all options below until the next 'section' option is set.
                            ),
                            array(
                                'id'       => 'mnb211331',
                                'type'     => 'text',
                                'title'    => __( 'judul', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'mcdjcacaranamcaq112',
                                'type'     => 'media',
                                'title'    => __( 'gambar', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'Xar123',
                                'type'     => 'section',
                                'title'    => __( 'section 5', 'redux-framework-demo' ),
                                'indent'   => true, // Indent all options below until the next 'section' option is set.
                            ),
                            array(
                                'id'       => 'mndfs',
                                'type'     => 'text',
                                'title'    => __( 'judul', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'mcdjcacaranamca9112',
                                'type'     => 'slides',
                                'title'    => __( 'list', 'redux-framework-demo' ),
                            ),

                    ),
                );
                $this->sections[] = array(
                    'icon'      => 'el-icon-home',
                    'title'     => __('One Stop Smart resseler page setting', 'redux-framework-demo'),
                    'fields'    => array(
                        array(
                            'id'       => 'ppewwe3',
                            'type'     => 'section',
                            'title'    => __( 'section 1', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        
                    ),
                            array(
                                'id'       => 'masahsasa',
                                'type'     => 'media',
                                'title'    => __( 'hero icon 1', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'pxsq',
                            'type'     => 'section',
                            'title'    => __( 'section 2', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        
                    ),
                            array(
                                'id'       => 'maamshaqwwioduq8',
                                'type'     => 'media',
                                'title'    => __( 'hero icon 2', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'mdwasas',
                                'type'     => 'textarea',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'pzaasasaas',
                            'type'     => 'section',
                            'title'    => __( 'section 3', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        
                    ),
                            array(
                                'id'       => 'mcaasqqq111',
                                'type'     => 'text',
                                'title'    => __( 'judul', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'lqx3131',
                                'type'     => 'editor',
                                'title'    => __( 'Description', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'lncamaa',
                                'type'     => 'media',
                                'title'    => __( 'Hero icon 3', 'redux-framework-demo' ),
                            ),
                        array(
                            'id'       => 'pzaasasaas',
                            'type'     => 'section',
                            'title'    => __( 'section 4', 'redux-framework-demo' ),
                            'indent'   => true, // Indent all options below until the next 'section' option is set.
                        
                    ),
                            array(
                                'id'       => 'lahwqwyq',
                                'type'     => 'text',
                                'title'    => __( 'Judul', 'redux-framework-demo' ),
                            ),
                            array(
                                'id'       => 'wqwlqq',
                                'type'     => 'slides',
                                'title'    => __( 'list alur kerja', 'redux-framework-demo' ),
                            ),
                ),
            );
            $this->sections[] = array(
                'icon'      => 'el-icon-home',
                'title'     => __('One Stop Export retails page setting', 'redux-framework-demo'),
                'fields'    => array(
                    array(
                        'id'       => 'pza1aaa',
                        'type'     => 'section',
                        'title'    => __( 'section 1', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'iawnnnnnnnmmmmmmmmm',
                        'type'     => 'media',
                        'title'    => __( 'gambar hero 1', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'pza1aaa',
                        'type'     => 'section',
                        'title'    => __( 'section 2', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'iawznmmmmmmmmm',
                        'type'     => 'media',
                        'title'    => __( 'gambar hero 2', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'iawznmmmmmmm',
                        'type'     => 'textarea',
                        'title'    => __( 'description', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'iawznmmmm',
                        'type'     => 'slides',
                        'title'    => __( 'list', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'pza1a',
                        'type'     => 'section',
                        'title'    => __( 'section 3', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'xswqrt',
                        'type'     => 'text',
                        'title'    => __( 'judul', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'xsaq',
                        'type'     => 'textarea',
                        'title'    => __( 'description', 'redux-framework-demo' ),
                    ),
                ),
            );
            $this->sections[] = array(
                'icon'      => 'el-icon-home',
                'title'     => __('COD Page Settings', 'redux-framework-demo'),
                'fields'    => array(
                    array(
                        'id'       => 'pza1a',
                        'type'     => 'section',
                        'title'    => __( 'section 1', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'xasqe',
                        'type'     => 'media',
                        'title'    => __( 'hero icon 1', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'pzaqq1a',
                        'type'     => 'section',
                        'title'    => __( 'section 2', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'yququwq',
                        'type'     => 'media',
                        'title'    => __( 'hero icon 2', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'yq1qq',
                        'type'     => 'textarea',
                        'title'    => __( 'description', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'pz00',
                        'type'     => 'section',
                        'title'    => __( 'section 3', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'yquzz',
                        'type'     => 'text',
                        'title'    => __( 'judul', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'ywaqde',
                        'type'     => 'textarea',
                        'title'    => __( 'listing', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'ywzzz',
                        'type'     => 'media',
                        'title'    => __( 'gambar', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'pz0980',
                        'type'     => 'section',
                        'title'    => __( 'section 4', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'yqz1wuzz',
                        'type'     => 'text',
                        'title'    => __( 'judul', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'ytyqss',
                        'type'     => 'media',
                        'title'    => __( 'gambar', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'yqiq88',
                        'type'     => 'text',
                        'title'    => __( 'judul 2', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'yqiq8',
                        'type'     => 'textarea',
                        'title'    => __( 'deskripsi 2', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'opasaw',
                        'type'     => 'text',
                        'title'    => __( 'judul 3', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'yq01ll',
                        'type'     => 'textarea',
                        'title'    => __( 'deskripsi 3', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'y7p01ll',
                        'type'     => 'text',
                        'title'    => __( 'judul 4', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'ypzwas',
                        'type'     => 'textarea',
                        'title'    => __( 'Deskripsi 4', 'redux-framework-demo' ),
                    ),
                ),
            );
            $this->sections[] = array(
                'icon'      => 'el-icon-home',
                'title'     => __('One Stop WhatsApp', 'redux-framework-demo'),
                'fields'    => array(
                    array(
                        'id'       => 'trecwqq211',
                        'type'     => 'section',
                        'title'    => __( 'section 1', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'xxzzq12',
                        'type'     => 'media',
                        'title'    => __( 'hero icon 1', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'trecwqq211',
                        'type'     => 'section',
                        'title'    => __( 'section 2', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'xcdss',
                        'type'     => 'media',
                        'title'    => __( 'hero icon 2', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'hjay',
                        'type'     => 'textarea',
                        'title'    => __( 'deskripsi', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 't11',
                        'type'     => 'section',
                        'title'    => __( 'section 3', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'xcds9s',
                        'type'     => 'media',
                        'title'    => __( 'hero icon 3', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'hj0a00y',
                        'type'     => 'text',
                        'title'    => __( 'judul', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'hj0ay',
                        'type'     => 'textarea',
                        'title'    => __( 'deskripsi', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 't11azzzz',
                        'type'     => 'section',
                        'title'    => __( 'section 4', 'redux-framework-demo' ),
                        'indent'   => true, // Indent all options below until the next 'section' option is set.
                    
                ),
                    array(
                        'id'       => 'xcds96s',
                        'type'     => 'media',
                        'title'    => __( 'hero icon 3', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'hj0ay9',
                        'type'     => 'text',
                        'title'    => __( 'judul', 'redux-framework-demo' ),
                    ),
                ),
            );
            $this->sections[] = array(
                'icon'      => 'el-icon-home',
                'title'     => __('Footer', 'redux-framework-demo'),
                'fields'    => array(
                    array(
                        'id'       => 'logofooter',
                        'type'     => 'media',
                        'title'    => __( 'Logo Footer', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'xxaa121221122222222222222222222222',
                        'type'     => 'textarea',
                        'title'    => __( 'deskripsi', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'hkommmmaaa',
                        'type'     => 'media',
                        'title'    => __( 'gambar 1', 'redux-framework-demo' ),
                    ),
                    array(
                        'id'       => 'hj0ay9zmzppqpqpqpqpqpqpq021333333ioasdauda',
                        'type'     => 'media',
                        'title'    => __( 'gambar 2', 'redux-framework-demo' ),
                    ),
                ),
            );

                $theme_info = '<div class="redux-framework-section-desc">';
                $theme_info .= '<p class="redux-framework-theme-data description theme-uri">' . __( '<strong>Theme URL:</strong> ', 'redux-framework-demo' ) . '<a href="' . $this->theme->get( 'ThemeURI' ) . '" target="_blank">' . $this->theme->get( 'ThemeURI' ) . '</a></p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-author">' . __( '<strong>Author:</strong> ', 'redux-framework-demo' ) . $this->theme->get( 'Author' ) . '</p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-version">' . __( '<strong>Version:</strong> ', 'redux-framework-demo' ) . $this->theme->get( 'Version' ) . '</p>';
                $theme_info .= '<p class="redux-framework-theme-data description theme-description">' . $this->theme->get( 'Description' ) . '</p>';
                $tabs = $this->theme->get( 'Tags' );
                if ( ! empty( $tabs ) ) {
                    $theme_info .= '<p class="redux-framework-theme-data description theme-tags">' . __( '<strong>Tags:</strong> ', 'redux-framework-demo' ) . implode( ', ', $tabs ) . '</p>';
                }
                $theme_info .= '</div>';

                if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
                    $this->sections['theme_docs'] = array(
                        'icon'   => 'el-icon-list-alt',
                        'title'  => __( 'Documentation', 'redux-framework-demo' ),
                        'fields' => array(
                            array(
                                'id'       => '17',
                                'type'     => 'raw',
                                'markdown' => true,
                                'content'  => file_get_contents( dirname( __FILE__ ) . '/../README.md' )
                            ),
                        ),
                    );
                }

                $this->sections[] = array(
                    'title'  => __( 'Import / Export', 'redux-framework-demo' ),
                    'desc'   => __( 'Import and Export your Redux Framework settings from file, text or URL.', 'redux-framework-demo' ),
                    'icon'   => 'el-icon-refresh',
                    'fields' => array(
                        array(
                            'id'         => 'opt-import-export',
                            'type'       => 'import_export',
                            'title'      => 'Import Export',
                            'subtitle'   => 'Save and restore your Redux options',
                            'full_width' => false,
                        ),
                    ),
                );

                $this->sections[] = array(
                    'type' => 'divide',
                );

                $this->sections[] = array(
                    'icon'   => 'el-icon-info-sign',
                    'title'  => __( 'Theme Information', 'redux-framework-demo' ),
                    'desc'   => __( '<p class="description">This is the Description. Again HTML is allowed</p>', 'redux-framework-demo' ),
                    'fields' => array(
                        array(
                            'id'      => 'opt-raw-info',
                            'type'    => 'raw',
                            'content' => $item_info,
                        )
                    ),
                );

                if ( file_exists( trailingslashit( dirname( __FILE__ ) ) . 'README.html' ) ) {
                    $tabs['docs'] = array(
                        'icon'    => 'el-icon-book',
                        'title'   => __( 'Documentation', 'redux-framework-demo' ),
                        'content' => nl2br( file_get_contents( trailingslashit( dirname( __FILE__ ) ) . 'README.html' ) )
                    );
                }
            }

            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'             => 'soms_redux',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'         => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'      => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'            => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'       => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
                    'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'       => '',
                    // Set it you want google fonts to update weekly. A google_api_key value is required.
                    'google_update_weekly' => false,
                    // Must be defined to add google fonts to the typography module
                    'async_typography'     => true,
                    // Use a asynchronous font on the front end or font string
                    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
                    'admin_bar'            => true,
                    // Show the panel pages on the admin bar
                    'admin_bar_icon'     => 'dashicons-portfolio',
                    // Choose an icon for the admin bar menu
                    'admin_bar_priority' => 50,
                    // Choose an priority for the admin bar menu
                    'global_variable'      => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'             => true,
                    // Show the time the page took to load, etc
                    'update_notice'        => true,
                    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
                    'customizer'           => true,
                    // Enable basic customizer support
                    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
                    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

                    // OPTIONAL -> Give you extra features
                    'page_priority'        => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'          => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'     => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'            => '',
                    // Specify a custom URL to an icon
                    'last_tab'             => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'            => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'            => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'        => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'         => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'         => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export'   => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'       => 60 * MINUTE_IN_SECONDS,
                    'output'               => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'           => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'             => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'          => false,
                    // REMOVE

                    // HINTS
                    'hints'                => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );
            }

            public function validate_callback_function( $field, $value, $existing_value ) {
                $error = true;
                $value = 'just testing';

                /*
              do your validation

              if(something) {
                $value = $value;
              } elseif(something else) {
                $error = true;
                $value = $existing_value;
                
              }
             */

                $return['value'] = $value;
                $field['msg']    = 'your custom error message';
                if ( $error == true ) {
                    $return['error'] = $field;
                }

                return $return;
            }

            public function class_field_callback( $field, $value ) {
                print_r( $field );
                echo '<br/>CLASS CALLBACK';
                print_r( $value );
            }

        }

        global $reduxConfig;
        $reduxConfig = new Redux_Framework_sample_config();
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ):
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    endif;

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ):
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error = true;
            $value = 'just testing';

            /*
          do your validation

          if(something) {
            $value = $value;
          } elseif(something else) {
            $error = true;
            $value = $existing_value;
            
          }
         */

            $return['value'] = $value;
            $field['msg']    = 'your custom error message';
            if ( $error == true ) {
                $return['error'] = $field;
            }

            return $return;
        }
    endif;
