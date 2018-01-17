<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Firebase
 * @subpackage Firebase/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Firebase
 * @subpackage Firebase/public
 * @author     Arif Ahmed Joy <arif@avalonhosting.services>
 */	
class Firebase_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $firebase    The ID of this plugin.
	 */
	private $firebase;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $reg_errors    The Errors of this plugin.
	 */
	private $reg_errors;
	private $login_errors;
	private $profile_errors;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $firebase       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $firebase, $version ) {

		$this->firebase = $firebase;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Firebase_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Firebase_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->firebase, plugin_dir_url( __FILE__ ) . 'css/firebase-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Firebase_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Firebase_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->firebase, 'https://www.gstatic.com/firebasejs/4.8.1/firebase.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->firebase.'-public', plugin_dir_url( __FILE__ ) . 'js/firebase-public.js', array( 'firebase' ), $this->version, false );
		wp_enqueue_script( $this->firebase.'-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->firebase.'-validate-extra', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js', array( 'jquery' ), $this->version, true );

	}

	/**
	*	Registration Form
	*/
	public function registration_form( $deviceID, $first_name, $last_name, $nickname, $username, $password, $email, $address, $city, $phone, $zip ) {
	 
	    echo '
	    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">

	    <div>
	    <label for="deviceID">Device ID <strong>*</strong></label>
	    <input id="deviceID" type="text" name="deviceID" value="' . ( isset( $_POST['deviceID']) ? $deviceID : null ) . '" required>
	    </div>

	    <div>
	    <label for="firstname">First Name <strong>*</strong></label>
	    <input id="first_name" type="text" name="first_name" value="' . ( isset( $_POST['first_name']) ? $first_name : null ) . '" required>
	    </div>
	     
	    <div>
	    <label for="website">Last Name <strong>*</strong></label>
	    <input id="last_name" type="text" name="last_name" value="' . ( isset( $_POST['last_name']) ? $last_name : null ) . '" required>
	    </div>
	     
	    <div>
	    <label for="nickname">Nickname</label>
	    <input id="nickname" type="text" name="nickname" value="' . ( isset( $_POST['nickname']) ? $nickname : null ) . '">
	    </div>

	    <div>
	    <label for="username">Username <strong>*</strong></label>
	    <input id="username" type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '" required>
	    </div>
	     
	    <div>
	    <label for="password">Password <strong>*</strong></label>
	    <input id="password" type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '" required>
	    </div>
	     
	    <div>
	    <label for="email">Email <strong>*</strong></label>
	    <input id="email" type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '" required>
	    </div>
	     
	    <div>
	    <label for="address">Address <strong>*</strong></label>
	    <input id="address" type="text" name="address" value="' . ( isset( $_POST['address']) ? $address : null ) . '" required>
	    </div>

	    <div>
	    <label for="city">City <strong>*</strong></label>
	    <input id="city" type="text" name="city" value="' . ( isset( $_POST['city']) ? $city : null ) . '" required>
	    </div>

	    <div>
	    <label for="phone">Phone <strong>*</strong></label>
	    <input id="phone" type="text" name="phone" value="' . ( isset( $_POST['phone']) ? $phone : null ) . '" required>
	    </div>

	    <div>
	    <label for="zip">Zipcode <strong>*</strong></label>
	    <input id="zip" type="text" name="zip" value="' . ( isset( $_POST['zip']) ? $zip : null ) . '" required>
	    </div>		

	    <input id="btnRegister" type="submit" name="register" value="Register"/>
	    </form>
	    ';
	}

	/**
	* Validate Registration Form
	*/
	public function registration_validation( $deviceID, $first_name, $last_name, $nickname, $username, $password, $email, $address, $city, $phone, $zip )  {	
		$this->reg_errors = new WP_Error();

		if ( empty( $username ) || empty( $password ) || empty( $email ) || empty( $first_name ) || empty( $last_name ) || empty( $address ) || empty( $city ) || empty( $phone ) || empty( $zip ) || empty( $deviceID ) ) {
		    $this->reg_errors->add('field', 'Required form field is missing');
		}
		if ( 4 > strlen( $username ) ) {
		    $this->reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
		}
		if ( 2 > strlen( $deviceID ) ) {
		    $this->reg_errors->add( 'deviceID_length', 'Device ID too short. At least 4 characters is required' );
		}
		if ( username_exists( $username ) )
		    $this->reg_errors->add('user_name', 'Sorry, that username already exists!');

		if ( ! validate_username( $username ) ) {
		    $this->reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
		}

		if ( 5 > strlen( $password ) ) {
	        $this->reg_errors->add( 'password', 'Password length must be greater than 5' );
	    }

	    if ( !is_email( $email ) ) {
		    $this->reg_errors->add( 'email_invalid', 'Email is not valid' );
		}

		if ( email_exists( $email ) ) {
		    $this->reg_errors->add( 'email', 'Email Already in use' );
		}

		if ( is_wp_error( $this->reg_errors ) ) {
 
		    foreach ( $this->reg_errors->get_error_messages() as $error ) {
		     
		        echo '<div>';
		        echo '<strong>ERROR</strong>:';
		        echo $error . '<br/>';
		        echo '</div>';
		         
		    }
		 
		}
	}

	/**
	* Complete User Registration
	*/
	public function complete_registration($deviceID, $first_name, $last_name, $nickname, $username, $password, $email, $address, $city, $phone, $zip) {
	
	    if ( 1 > count( $this->reg_errors->get_error_messages() ) ) {
	        $userdata = array(
	        'user_login'    =>   $username,
	        'user_email'    =>   $email,
	        'user_pass'     =>   $password,
	        'first_name'    =>   $first_name,
	        'last_name'     =>   $last_name,
	        'nickname'      =>   $nickname
	        );
	        echo '
	        <script>
	        	(function( $ ) {
					"use strict";

					// Get a reference to the database service

					firebase.database().ref("users/" + "'.$username.'").set({
					   	deviceID 	: 	"'.$deviceID.'",
					   	username 	: 	"'.$username.'",
					    firstName 	: 	"'.$first_name.'",
					    lastName 	: 	"'.$last_name.'",
					    email 		: 	"'.$email.'",
					    address 	: 	"'.$address.'",
					    city 		: 	"'.$city.'",
					    zipcode 	: 	"'.$zip.'",
					    phone 		: 	"'.$phone.'"
					}).then(function(data) {
						  console.log("Successfully Stored Data! "+ data);
						}).catch(function (error){
							 console.log(error);
					  });
	        	})( jQuery );
	        </script>';
	        
	        $user = wp_insert_user( $userdata );
	        echo 'Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';   
	    }
	}

	/**
	*	Main Function to control user registration
	*/
	public function custom_registration_function() {
	    // Validating Data | Security
	    // if ( isset($_POST['register'] )  && wp_verify_nonce($_POST['registration_nonce'], 'registration_nonce' ) ) {
		if ( isset($_POST['register'] ) ) {
	        $this->registration_validation(
		        $_POST['deviceID'],
		        $_POST['first_name'],
		        $_POST['last_name'],
		        $_POST['nickname'],
		        $_POST['username'],
		        $_POST['password'],
		        $_POST['email'],
	        	$_POST['address'],
	        	$_POST['city'],
	        	$_POST['phone'],
	        	$_POST['zip']		        
	        );
	         
	        // sanitize user form input | Security
	        global $deviceID, $first_name, $last_name, $nickname, $username, $password, $email, $address, $city, $phone, $zip;
	        $username   	=   sanitize_user( $_POST['username'] );
	        $password   	=   esc_attr( $_POST['password'] );
	        $email      	=   sanitize_email( $_POST['email'] );
	        $deviceID    	=   esc_url( $_POST['deviceID'] );
	        $first_name 	=   sanitize_text_field( $_POST['first_name'] );
	        $last_name  	=   sanitize_text_field( $_POST['last_name'] );
	        $nickname   	=   sanitize_text_field( $_POST['nickname'] );
	        $deviceID 		=   sanitize_text_field( $_POST['deviceID'] );
	        $address 		=   sanitize_text_field( $_POST['address'] );
	        $city 			=   sanitize_text_field( $_POST['city'] );
	        $phone 			=   sanitize_text_field( $_POST['phone'] );
	        $zip 			=   sanitize_text_field( $_POST['zip'] );
	 
	        // call @function complete_registration to create the user
	        // only when no WP_error is found | Security      
	        $this->complete_registration(
		        $deviceID,
		        $first_name,
		        $last_name,
		        $nickname,
		        $username,
		        $password,
		        $email,
		        $address,
		        $city,
		        $phone,
		        $zip
	        );
	    }
	 	//Displaying the signup form
	 	if(!is_user_logged_in()) {
		    $this->registration_form(
		        $deviceID,
		        $first_name,
		        $last_name,
		        $nickname,
		        $username,
		        $password,
		        $email,
		        $address,
		        $city,
		        $phone,
		        $zip
		        );
		}
	}

	public function login_form( $email, $password ) {
	 
	    echo '
	    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">	     
	     
	    <div>
	    <label for="email">Email <strong>*</strong></label>
	    <input id="email" type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '" required>
	    </div>

	    <div>
	    <label for="password">Password <strong>*</strong></label>
	    <input id="password" type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '" required>
	    </div>

	    <input id="btnLogin" type="submit" name="login" value="Login"/>
	    </form>
	    ';
	}

	public function login_validation( $email, $password )  {
		$this->login_errors = new WP_Error();

		if ( empty( $password ) || empty( $email ) ) {
		    $this->login_errors->add('field', 'Required form field is missing');
		}

	    if ( !is_email( $email ) ) {
		    $this->login_errors->add( 'email_invalid', 'Email is not valid' );
		}

		if ( !email_exists( $email ) ) {
		    $this->login_errors->add( 'email', 'Email does not exist in our system!' );
		}

		if ( is_wp_error( $this->login_errors ) ) {
 
		    foreach ( $this->login_errors->get_error_messages() as $error ) {
		     
		        echo '<div>';
		        echo '<strong>ERROR</strong>:';
		        echo $error . '<br/>';
		        echo '</div>';
		         
		    }
		 
		}
	}

	/**
	*	Main Function to control user login
	*/
	public function custom_login_function() {
	    // Validating Data | Security
	    // if ( isset($_POST['login']) && wp_verify_nonce($_POST['login_nonce'], 'login-nonce' ) ) {
		if ( isset($_POST['login']) ) {
	        $this->login_validation(
		        $_POST['email'],
		        $_POST['password']	        
	        );
	         
	        // sanitize user form input | Security
	        global $email, $password;
	        $email      	=   sanitize_email( $_POST['email'] );
	        $password   	=   esc_attr( $_POST['password'] );
	 
	        // call @function complete_registration to create the user
	        // only when no WP_error is found | Security      
 
			// this returns the user ID and other info from the user name
			$user = get_user_by( 'email', $_POST['email'] );
	 
			if(!$user) {
				// if the user name doesn't exist
				$this->login_errors->add('empty_email', 'Invalid Email!');
			}
	 
			if(!isset($_POST['password']) || $_POST['password'] == '') {
				// if no password was entered
				$this->login_errors->add('empty_password', 'Please enter a password');
			}
	 
			// check the user's login with their password
			if(!wp_check_password($_POST['password'], $user->user_pass, $user->ID)) {
				// if the password is incorrect for the specified user
				$this->login_errors->add('empty_password','Incorrect password');
			}
	 
			// only log the user in if there are no errors
			if ( 1 > count( $this->login_errors->get_error_messages() ) ) {				

	 			$creds = array(
			        'user_login'    => $_POST['email'],
			        'user_password' => $_POST['password'],
			        'remember'      => true
			    );
			 
			    $signin = wp_signon( $creds, false );
			 
			    if ( is_wp_error( $signin ) ) {
			        echo $signin->get_error_message();
			    }
				// wp_redirect(home_url()); exit;
			}
	    } 
	    if (empty(wp_get_current_user())) {
		 	//Displaying the signup form
		    $this->login_form(
		        $email,
		        $password
	        );
		}
	}
}
