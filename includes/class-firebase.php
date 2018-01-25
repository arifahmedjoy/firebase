<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.arifahmed.info
 * @since      4.9.5
 *
 * @package    Firebase
 * @subpackage Firebase/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      4.9.5
 * @package    Firebase
 * @subpackage Firebase/includes
 * @author     Arif Ahmed Joy <arif@avalonhosting.services>
 */
class Firebase {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    4.9.5
	 * @access   protected
	 * @var      Firebase_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    4.9.5
	 * @access   protected
	 * @var      string    $firebase    The string used to uniquely identify this plugin.
	 */
	protected $firebase;

	/**
	 * The current version of the plugin.
	 *
	 * @since    4.9.5
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    4.9.5
	 */
	public function __construct() {
		if ( defined( 'FIREBASE' ) ) {
			$this->version = FIREBASE;
		} else {
			$this->version = '4.9.5';
		}
		$this->firebase = 'firebase';
		

		$this->load_dependencies();
		$this->set_locale();
		$this->define_public_hooks();

		// Register a new shortcode: [firebase_registration]
		add_shortcode( 'firebase_registration', 'custom_registration_shortcode' );

		// The callback function that will replace [firebase_registration]
		function custom_registration_shortcode() {
		    ob_start();
		    $firebase = new Firebase_Public( 'firebase', FIREBASE );
		    $firebase->custom_registration_function();
		    return ob_get_clean();
		}

		// Register a new shortcode: [firebase_login]
		add_shortcode( 'firebase_login', 'custom_login_shortcode' );

		// The callback function that will replace [firebase_login]
		function custom_login_shortcode() {
		    ob_start();
		    $firebase = new Firebase_Public( 'firebase', FIREBASE );
		    $firebase->custom_login_function();
		    return ob_get_clean();
		}

		// Register a new shortcode: [firebase_profile]
		add_shortcode( 'firebase_profile', 'custom_profile_shortcode' );

		// The callback function that will replace [firebase_profile]
		function custom_profile_shortcode() {
		    ob_start();
		    $firebase = new Firebase_Public( 'firebase', FIREBASE );
		    $firebase->custom_profile_function();
		    return ob_get_clean();
		}
		

		function custom_footer_script($script)
		{
			echo '<script>'.$script.'</script>';
		}
		add_action( 'wp_footer', 'custom_footer_script' );
		
		function userLogin()
		{			
			$firebase = new Firebase_Public( 'firebase', FIREBASE );
		    
			if ( isset($_POST['login']) && wp_verify_nonce($_POST['_firebase_login'], 'firebase_login' ) ) {
		        
		        $firebase->login_validation(
			        $_POST['email'],
			        $_POST['password'],
			        false       
		        );

		        // sanitize user form input | Security
		        global $email, $password;
		        $email      	=   sanitize_email( $_POST['email'] );
		        $password   	=   esc_attr( $_POST['password'] );
		 
		        // call @function complete_registration to create the user
		        // only when no WP_error is found | Security      
	 
				// this returns the user ID and other info from the user name
				$user = get_user_by( 'email', $_POST['email'] );
				
				// only log the user in if there are no errors
				if ( 1 > count( $firebase->login_errors->get_error_messages() ) ) {
		 			$creds = array(
				        'user_login'    => $email,
				        'user_password' => $password,
				        'remember'      => true
				    );

				    $signin = wp_signon( $creds, false );

					if ( is_wp_error( $signin ) ) {
				        echo '<div>';
				        echo '<strong>ERROR</strong>:';
				        echo $signin->get_error_message() . '<br/>';
				        echo '</div>';
				    } else {			    	          
						wp_set_current_user( $user->ID, $creds['user_login'] );
						wp_set_auth_cookie( $user->ID, true );
				    }
				}
			}
		}
		add_action( 'plugins_loaded', 'userLogin' );

		function initMenuControl(){
			$user = wp_get_current_user();
			
			if ( is_user_logged_in() ) {?>				
				<script>
					(function($){
						"use strict";

						$('.signup').hide('fast');
						$('.login').remove();

						$('.profile').show("fast").after('<li class="menu-item menu-item-type-post_type menu-item-object-page logout"><a href="<?php echo wp_logout_url( home_url() ); ?>" title="log out">Log out</a></li>');

					})( jQuery );
				</script>
			<?php } else { ?>
				<script>
					(function($){
						"use strict";

						$('.logout').remove();
						$('.signup').show('fast').after('<li class="menu-item menu-item-type-post_type menu-item-object-page login"><a class="login" href="<?php echo wp_login_url( site_url('profile/') ); ?>" title="log in">Log in</a></li>');
						$('.profile').hide('fast');

					})( jQuery );
				</script>
			<?php }
		}
		add_action( 'wp_footer', 'initMenuControl', 11 );

		add_action( 'login_form_middle', 'add_lost_password_link' );
		function add_lost_password_link() {
			return '<a class="float-right" href="'.site_url('wp-login.php?action=lostpassword').'">Lost Password?</a>';
		}

		function firebase_login_logo() { ?>
		    <style type="text/css">
		    .login.login-action-login.wp-core-ui {
		    	background-color: #FFF;
		    }
	        #login h1 a, .login h1 a {
	            background-image: url(http://cozyia.com/wp-content/uploads/2018/01/logo.png);
				height:144px;
				width:320px;
				background-size: 320px 144px;
				background-repeat: no-repeat;
	        	padding-bottom: 30px;
	        }
		    </style>
		<?php }
		add_action( 'login_enqueue_scripts', 'firebase_login_logo' );

		function firebase_login_logo_url() {
		    return home_url();
		}
		add_filter( 'login_headerurl', 'firebase_login_logo_url' );

		function firebase_login_logo_url_title() {
		    return 'Your Site Name and Info';
		}
		add_filter( 'login_headertitle', 'firebase_login_logo_url_title' );
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Firebase_Loader. Orchestrates the hooks of the plugin.
	 * - Firebase_i18n. Defines internationalization functionality.
	 * - Firebase_Admin. Defines all hooks for the admin area.
	 * - Firebase_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    4.9.5
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-firebase-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-firebase-i18n.php';		

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-firebase-public.php';

		$this->loader = new Firebase_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Firebase_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    4.9.5
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Firebase_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    4.9.5
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Firebase_Public( $this->get_firebase(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    4.9.5
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     4.9.5
	 * @return    string    The name of the plugin.
	 */
	public function get_firebase() {
		return $this->firebase;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     4.9.5
	 * @return    Firebase_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     4.9.5
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
