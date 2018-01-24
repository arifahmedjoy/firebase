<?php

/**
 * The public-facing functionality of the plugin.
 *
<<<<<<< HEAD
 * @link       http://example.com
 * @since      1.0.0
=======
 * @link       https://www.arifahmed.info
 * @since      4.9.5
>>>>>>> a27bb71... RC Version
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
<<<<<<< HEAD
	 * @since    1.0.0
=======
	 * @since    4.9.5
>>>>>>> a27bb71... RC Version
	 * @access   private
	 * @var      string    $firebase    The ID of this plugin.
	 */
	private $firebase;

	/**
	 * The version of this plugin.
	 *
<<<<<<< HEAD
	 * @since    1.0.0
=======
	 * @since    4.9.5
>>>>>>> a27bb71... RC Version
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The version of this plugin.
	 *
<<<<<<< HEAD
	 * @since    1.0.0
=======
	 * @since    4.9.5
>>>>>>> a27bb71... RC Version
	 * @access   private
	 * @var      string    $reg_errors    The Errors of this plugin.
	 */
	private $reg_errors;
<<<<<<< HEAD
	private $login_errors;
=======
	public $login_errors;
>>>>>>> a27bb71... RC Version
	private $profile_errors;

	private $logged_in;

	/**
	 * Initialize the class and set its properties.
	 *
<<<<<<< HEAD
	 * @since    1.0.0
=======
	 * @since    4.9.5
>>>>>>> a27bb71... RC Version
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
<<<<<<< HEAD
	 * @since    1.0.0
=======
	 * @since    4.9.5
>>>>>>> a27bb71... RC Version
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

		wp_enqueue_style( 'bootstrap4-reboot', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap-reboot.css', array(), '4.0.0', 'all' );
		wp_enqueue_style( 'bootstrap4','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );		
		wp_enqueue_style( $this->firebase, plugin_dir_url( __FILE__ ) . 'css/firebase-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
<<<<<<< HEAD
	 * @since    1.0.0
=======
	 * @since    4.9.5
>>>>>>> a27bb71... RC Version
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
<<<<<<< HEAD
		wp_enqueue_script( 'bootstrap4-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'bootstrap4-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->firebase.'-public', plugin_dir_url( __FILE__ ) . 'js/firebase-public.js', array( 'firebase' ), $this->version, false );
=======
		wp_enqueue_script( $this->firebase.'-public', plugin_dir_url( __FILE__ ) . 'js/firebase-public.js', array( 'firebase' ), $this->version, false );
		wp_enqueue_script( 'bootstrap4-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'bootstrap4-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js', array( 'jquery' ), $this->version, true );
>>>>>>> a27bb71... RC Version

	}

	/**
	*	Registration Form
	*/
<<<<<<< HEAD
	public function registration_form( $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip ) {
	 
	    echo '
		<div class="container">
      <form id="firebaseSignup" action="' . $_SERVER['REQUEST_URI'] . '" method="post">
=======
	public function registration_form( $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip ) {	 
	    ?>
	<script>
		(function($){
			$(".profile").hide("fast");
		})( jQuery );
	</script>
	<div class="container">
      <form id="firebaseSignup" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
>>>>>>> a27bb71... RC Version

        <div class="row justify-content-center">
          <div class="col-4">
            <div class="form-group">
              <label for="deviceID">Device ID <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="deviceID" type="text" name="deviceID" value="' . ( isset( $_POST['deviceID']) ? $deviceID : null ) . '" required>
=======
              <input class="form-control" id="deviceID" type="text" name="deviceID" value="<?php echo ( isset( $_POST['deviceID']) ? $deviceID : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>
          
          <div class="col-4">
            <div class="form-group">
              <label for="nickname">Device Nickname</label>
<<<<<<< HEAD
              <input class="form-control" id="nickname" type="text" name="nickname" value="' . ( isset( $_POST['nickname']) ? $nickname : null ) . '">
=======
              <input class="form-control" id="nickname" type="text" name="nickname" value="<?php echo ( isset( $_POST['nickname']) ? $nickname : null ) ?>">
>>>>>>> a27bb71... RC Version
            </div>
          </div>
        </div>

        <div class="row justify-content-center">           
          <div class="col-4">
            <div class="form-group">
              <label for="firstname">First Name <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="first_name" type="text" name="first_name" value="' . ( isset( $_POST['first_name']) ? $first_name : null ) . '" required>
=======
              <input class="form-control" id="first_name" type="text" name="first_name" value="<?php echo ( isset( $_POST['first_name']) ? $first_name : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="website">Last Name <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="last_name" type="text" name="last_name" value="' . ( isset( $_POST['last_name']) ? $last_name : null ) . '" required>
=======
              <input class="form-control" id="last_name" type="text" name="last_name" value="<?php echo ( isset( $_POST['last_name']) ? $last_name : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>           
        </div>

        <div class="row justify-content-center">          
          <div class="col-4">
            <div class="form-group">
              <label for="username">Username <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="username" type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '" required>
=======
              <input class="form-control" id="username" type="text" name="username" value="<?php echo ( isset( $_POST['username'] ) ? $username : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="email">Email <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="email" type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '" placeholder="" required>
=======
              <input class="form-control" id="email" type="text" name="email" value="<?php echo ( isset( $_POST['email']) ? $email : null ) ?>" placeholder="" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>
         </div>

         <div class="row justify-content-center">

          <div class="col-4">
            <div class="form-group">
              <label for="password">Password <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="password" type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '" required>
=======
              <input class="form-control" id="password" type="password" name="password" value="<?php echo ( isset( $_POST['password'] ) ? $password : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="confirmPassword">Confirm Password <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="confirmPassword" type="password" name="confirmPassword" value="' . ( isset( $_POST['confirmPassword'] ) ? $confirmPassword : null ) . '" required>
=======
              <input class="form-control" id="confirmPassword" type="password" name="confirmPassword" value="<?php echo ( isset( $_POST['confirmPassword'] ) ? $confirmPassword : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-4">
            <div class="form-group">
              <label for="phone">Phone <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="phone" type="text" name="phone" value="' . ( isset( $_POST['phone']) ? $phone : null ) . '" required>
=======
              <input class="form-control" id="phone" type="text" name="phone" value="<?php echo ( isset( $_POST['phone']) ? $phone : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>
          
          <div class="col-4">
            <div class="form-group">
              <label for="zip">Zipcode <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="zip" type="text" name="zip" value="' . ( isset( $_POST['zip']) ? $zip : null ) . '" required>
=======
              <input class="form-control" id="zip" type="text" name="zip" value="<?php echo ( isset( $_POST['zip']) ? $zip : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>
        </div>

        <div class="row justify-content-center">          
          
          <div class="col-4">
            <div class="form-group">
              <label for="address">Address <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="address" type="text" name="address" value="' . ( isset( $_POST['address']) ? $address : null ) . '" required>
=======
              <input class="form-control" id="address" type="text" name="address" value="<?php echo ( isset( $_POST['address']) ? $address : null ) ?>" required>
>>>>>>> a27bb71... RC Version
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="city">City <strong>*</strong></label>
<<<<<<< HEAD
              <input class="form-control" id="city" type="text" name="city" value="' . ( isset( $_POST['city']) ? $city : null ) . '" required>
            </div>
          </div>
        </div>

=======
              <input class="form-control" id="city" type="text" name="city" value="<?php echo ( isset( $_POST['city']) ? $city : null ) ?>" required>
            </div>
          </div>
        </div>
		<?php wp_nonce_field( 'firebase_registration', '_firebase_registration' ); ?>
>>>>>>> a27bb71... RC Version
      <div class="row justify-content-center">
        <input class="btn btn-primary text-center" id="btnRegister" type="submit" name="register" value="Register"/>
      </div>
      <div class="clearfix"></div>
      </form>
    </div>
<<<<<<< HEAD
	    ';
=======
	    <?php
>>>>>>> a27bb71... RC Version
	}

	/**
	* Validate Registration Form
	*/
	public function registration_validation( $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip )  {	
		$this->reg_errors = new WP_Error();
<<<<<<< HEAD

=======
		global $wpdb;
>>>>>>> a27bb71... RC Version
		if ( empty( $username ) || empty( $password ) || empty( $confirmPassword ) || empty( $email ) || empty( $first_name ) || empty( $last_name ) || empty( $address ) || empty( $city ) || empty( $phone ) || empty( $zip ) || empty( $deviceID ) ) {
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
		
		if ( $password !== $confirmPassword ) {
	        $this->reg_errors->add( 'password', 'Password & Confirm Password did not match' );
	    }

	    if ( !is_email( $email ) ) {
		    $this->reg_errors->add( 'email_invalid', 'Email is not valid' );
		}

		if ( email_exists( $email ) ) {
		    $this->reg_errors->add( 'email', 'Email Already in use' );
		}
<<<<<<< HEAD
=======
		
		if ( $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", $deviceID ) ) ) {
		    $this->reg_errors->add( 'deviceid_exist', 'Sorry, this Device ID already exists!' );
		}

		if ( $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", $phone ) ) ) {
		    $this->reg_errors->add( 'phone_exist', 'Sorry, this Phone Number already exists!' );
		}
>>>>>>> a27bb71... RC Version

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
<<<<<<< HEAD
=======
	        $user = wp_insert_user( $userdata );
	        var_dump($user);

	        /**
	        *	Adding User's Meta Data
	        */
	        add_user_meta( $user, 'deviceID', $deviceID, true );
	        add_user_meta( $user, 'phone', $phone, true );

	        add_user_meta( $user, 'address', $address );
	        add_user_meta( $user, 'city', $city );
	        add_user_meta( $user, 'zipcode', $zip );

>>>>>>> a27bb71... RC Version
	        echo '
	        <script>
	        	(function( $ ) {
					"use strict";

					// Get a reference to the database service

					firebase.database().ref("users/" + "'.$username.'").set({
						online 			: 	false,
					   	deviceID 		: 	"'.$deviceID.'",
						deviceNickname 	: 	"'.$nickname.'",
					   	username 		: 	"'.$username.'",
					    firstName 		: 	"'.$first_name.'",
					    lastName 		: 	"'.$last_name.'",
					    email 			: 	"'.$email.'",
					    address 		: 	"'.$address.'",
					    city 			: 	"'.$city.'",
					    zipcode 		: 	"'.$zip.'",
					    phone 			: 	"'.$phone.'"
					}).then(function(data) {
						  console.log("Successfully Stored Data! "+ data);
<<<<<<< HEAD
=======
						  $("#firebaseSignup").hide("fast");
>>>>>>> a27bb71... RC Version
						}).catch(function (error){
							 console.log(error);
					  });
	        	})( jQuery );
	        </script>';
	        
<<<<<<< HEAD
	        $user = wp_insert_user( $userdata );
	        echo '<div class="alert alert-success">Registration complete. Goto <a href="' . get_site_url() . '/login/">login page</a>.</div>
			<script>
				(function ($) {
    				"use strict";
					$("#firebaseSignup").hide();
				})(jQuery);
			</script>
=======
	        echo '<div class="alert alert-success">Registration complete. Goto <a href="' . get_site_url() . '/login/">login page</a>.</div>
>>>>>>> a27bb71... RC Version
			';
	    }
	}

	/**
	*	Main Function to control user registration
	*/
	public function custom_registration_function() {
	    // Validating Data | Security
<<<<<<< HEAD
	    // if ( isset($_POST['register'] )  && wp_verify_nonce($_POST['registration_nonce'], 'registration_nonce' ) ) {
		if ( isset($_POST['register'] ) ) {
=======
	    if ( isset($_POST['register'] )  && wp_verify_nonce($_POST['_firebase_registration'], 'firebase_registration' ) ) {

>>>>>>> a27bb71... RC Version
	        $this->registration_validation(
		        $_POST['deviceID'],
		        $_POST['first_name'],
		        $_POST['last_name'],
		        $_POST['nickname'],
		        $_POST['username'],
		        $_POST['password'],
				$_POST['confirmPassword'],
		        $_POST['email'],
	        	$_POST['address'],
	        	$_POST['city'],
	        	$_POST['phone'],
	        	$_POST['zip']
	        );
	         
	        // sanitize user form input | Security
	        global $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip;
	        $username   	=   sanitize_user( $_POST['username'] );
	        $password   	=   esc_attr( $_POST['password'] );
			$confirmPassword   	=   esc_attr( $_POST['confirmPassword'] );
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
				$confirmPassword,
		        $email,
		        $address,
		        $city,
		        $phone,
		        $zip
		        );
		} else {
			// Displaying the Logout Form
			$this->logout_form();
			if ( isset($_POST['logout']) ) {
		    	wp_logout();
		    	$this->logged_in = false;
		    	$user = wp_get_current_user();
		    	echo '
			        <script>
			        	(function( $ ) {
							"use strict";

							// Get a reference to the database service

							firebase.database().ref("users/" + "'.$user->data->user_login.'").update({
							    online : false
							  })
							.then(function(data) {
								  console.log("Successfully Stored Data! "+ data);
								}).catch(function (error){
									 console.log(error);
							  });
			        	})( jQuery );
			        </script>';
		    	wp_logout_url();
		    }
		}
	}

	public function login_form( $email, $password ) {
	 
<<<<<<< HEAD
	    echo '
	    <div class="container">
      <form id="firebaseLogin" action="' . $_SERVER['REQUEST_URI'] . '" method="post">       
=======
	    ?>
	    <script>
			(function($){
				"use strict";

				$(".profile").hide("fast");

			})( jQuery );
		</script>
	    <div class="container">
      <form id="firebaseLogin" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">       
>>>>>>> a27bb71... RC Version
       
      <div class="row justify-content-center">
        <div class="col-4">
          <div class="form-group">
            <label for="email">Email <strong>*</strong></label>
<<<<<<< HEAD
            <input class="form-control" id="email" type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '" required>
=======
            <input class="form-control" id="email" type="text" name="email" value="<?php echo ( isset( $_POST['email']) ? $email : null ); ?>" required>
>>>>>>> a27bb71... RC Version
          </div>
        </div>
        
        <div class="col-4">
          <div class="form-group">
            <label for="password">Password <strong>*</strong></label>
<<<<<<< HEAD
            <input class="form-control" id="password" type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '" required>
          </div>
        </div>
      </div>

=======
            <input class="form-control" id="password" type="password" name="password" value="<?php echo ( isset( $_POST['password'] ) ? $password : null ); ?>" required>
          </div>
        </div>
      </div>
		<?php wp_nonce_field( 'firebase_login', '_firebase_login' ); ?>
>>>>>>> a27bb71... RC Version
      <div class="row justify-content-center">
        <input class="btn btn-primary" id="btnLogin" type="submit" name="login" value="Login"/>
      </div>
      </form>
    </div>
<<<<<<< HEAD
	    ';
=======
	 <?php
>>>>>>> a27bb71... RC Version
	}

	public function logout_form( ) {
	 	$user = wp_get_current_user();	 	

	 	if (!empty($user->data->display_name)){
<<<<<<< HEAD
		    echo '
				<div class="container">
			    <form id="firebaseLogout" action="' . $_SERVER['REQUEST_URI'] . '" method="post">	     
			     
			    <div class="row justify-content-center">
			    	'.$user->data->display_name.' , click on the logout button to logout!
			    <p>&nbsp;</p>

			    <input class="btn btn-danger" id="btnLogout" type="submit" name="logout" value="Logout"/>
			    </div>
				</form>
				</div>
		    ';
		} else {
		    echo '
			    <div class="container">
				<form id="firebaseLogout" action="' . $_SERVER['REQUEST_URI'] . '" method="post">	     
			     			    
				<div class="row justify-content-center">
			    	You have successfully Loggedin!			    
					<p>&nbsp;</p>
			    	<input class="btn btn-danger" id="btnLogout" type="submit" name="logout" value="Logout"/>
				</div>
				
			    </form>
				</div>
		    ';			
		}
	}

	public function login_validation( $email, $password )  {
		$this->login_errors = new WP_Error();
=======
		    ?>
		    <script>
		    	(function($){
		    		"use strict";
		    		$('.signup').hide("fast");
		    		$('.login').hide("fast");
		    		$('.profile').show("fast").after('<form id="firebaseLogout" action="<?php echo get_site_url().'/login/'; ?>" method="post"><input class="btn btn-danger" id="btnLogout" type="submit" name="logout" value="Logout"/></div></form>');
			 		$(location).attr("href", 'http://wordpress/profile/');

		    	})( jQuery );
		    </script>
			    
		    <?php
		}
	}

	public function login_validation( $email, $password, $error = true )  {
		
		$this->login_errors = new WP_Error();
		$user = get_user_by( 'email', $_POST['email'] );
>>>>>>> a27bb71... RC Version

		if ( empty( $password ) || empty( $email ) ) {
		    $this->login_errors->add('field', 'Required form field is missing');
		}

	    if ( !is_email( $email ) ) {
		    $this->login_errors->add( 'email_invalid', 'Email is not valid' );
		}

		if ( !email_exists( $email ) ) {
		    $this->login_errors->add( 'email', 'Email does not exist in our system!' );
		}

<<<<<<< HEAD
		if ( is_wp_error( $this->login_errors ) ) {
=======
		if(!isset($_POST['password']) || $_POST['password'] == '') {
			// if no password was entered
			$this->login_errors->add('empty_password', 'Please enter a password');
		}
 
		// check the user's login with their password
		if($user)
		{
			if(!wp_check_password($_POST['password'], $user->data->user_pass, $user->ID)) {
				// if the password is incorrect for the specified user
				$this->login_errors->add('empty_password','Incorrect password');
			}
		}

		if ( is_wp_error( $this->login_errors ) && $error ) {
>>>>>>> a27bb71... RC Version
 
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
<<<<<<< HEAD
	    // if ( isset($_POST['login']) && wp_verify_nonce($_POST['login_nonce'], 'login-nonce' ) ) {	    
		if ( isset($_POST['login']) ) {
=======
	    if ( isset($_POST['login']) && wp_verify_nonce($_POST['_firebase_login'], 'firebase_login' ) ) {
	    echo "NONCE Validated!";	    
>>>>>>> a27bb71... RC Version
	        $this->login_validation(
		        $_POST['email'],
		        $_POST['password']	        
	        );
	         
	        // sanitize user form input | Security
	        global $email, $password;
	        $email      	=   sanitize_email( $_POST['email'] );
	        $password   	=   esc_attr( $_POST['password'] );
	 
	        // call @function complete_registration to create the user
<<<<<<< HEAD
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
 			
	 		// 	$creds = array(
			 //        'user_login'    => $_POST['email'],
			 //        'user_password' => $_POST['password'],
			 //        'remember'      => true
			 //    );
			 //    var_dump($creds);
				// var_dump($user->ID);
				do_action( 'userLogin', $user);

				// wp_clear_auth_cookie();
			 //    $signin = wp_signon( $creds, false );          
				// wp_set_current_user( $user->ID, $user->data->user_login );

// 			    wp_set_auth_cookie( $user->ID, true );
// 				do_action( 'wp_login', $user->data->user_login );
// 				wp_redirect(get_site_url() . '/profile/'); exit;
// 				var_dump($user->ID);
			    // do_action( 'wp_login', $user->data->user_login, $user->data->user_login );
// 				wp_set_current_user( $user->ID );
// 			    wp_set_auth_cookie( $user->ID, true, false );
			 
			  //   if ( is_wp_error( $signin ) ) {
			  //       echo $signin->get_error_message();
			  //   } else {
=======
	        // only when no WP_error is found | Security		
			
			// only log the user in if there are no errors
			if ( 1 > count( $this->login_errors->get_error_messages() ) ) {
				echo "string";
>>>>>>> a27bb71... RC Version
			    	$this->logged_in = true;
					
			    	echo '
				        <script>
				        	(function( $ ) {
								"use strict";

								// Get a reference to the database service

								firebase.database().ref("users/" + "'.$user->data->user_login.'").update({
								    online : true
								  })
								.then(function() {
									  console.log("Successfully Stored Data!");
									}).catch(function (error){
										 console.log(error);
								  });
				        	})( jQuery );
				        </script>';
<<<<<<< HEAD
					// do_action( 'custom_footer_script', $code );
			    // }
=======

>>>>>>> a27bb71... RC Version
			 wp_redirect(get_site_url() . '/profile/'); exit;
			}
	    }
	    if ( isset($_POST['logout']) ) {
	    	wp_logout();
	    	$this->logged_in = false;
	    	$user = wp_get_current_user();
<<<<<<< HEAD
	    	$code = '
=======
	    	echo '
>>>>>>> a27bb71... RC Version
		        <script>
		        	(function( $ ) {
						"use strict";

						// Get a reference to the database service

						firebase.database().ref("users/" + "'.$user->data->user_login.'").update({
						    online : false
						  })
						.then(function(data) {
							  console.log("Successfully Stored Data! "+ data);
							}).catch(function (error){
								 console.log(error);
						  });
		        	})( jQuery );
		        </script>';
<<<<<<< HEAD
			wp_add_inline_script( 'firebase', $code );
=======
>>>>>>> a27bb71... RC Version
	    	wp_logout_url();
	    }
	    
	    if ( !is_user_logged_in() ) {
		 	//Displaying the login form
		    $this->login_form(
		        $email,
		        $password
	        );
		} else {
			// Displaying the Logout Form
			$this->logout_form();
		}
	}
	













	/**
	*	Profile Form
	*/
	public function profile_form( $user ) 
	{
	 	?>
		<script>
			var firebaseData = [];
			(function ($) {
				"use strict";
<<<<<<< HEAD
				/**
				*	Menus to Hide
				*/
				$("#menu-item-207").hide();
				$("#menu-item-217").hide();

				firebase.database().ref("users/" + "<?php echo $user->data->user_login; ?>").once("value")
				.then(function(snapshot) {
					snapshot.forEach(function(childSnapshot) {
						console.log(childSnapshot.val());
					    firebaseData[childSnapshot.key] = childSnapshot.val();
					  });
					$('#deviceID').val(firebaseData['deviceID']);
					$('#nickname').val(firebaseData['deviceNickname']);
					$('#first_name').val(firebaseData['firstName']);
					$('#last_name').val(firebaseData['lastName']);
					$('#username').val(firebaseData['username']);
					$('#email').val(firebaseData['email']);
					$('#address').val(firebaseData['address']);
					$('#city').val(firebaseData['city']);
					$('#phone').val(firebaseData['phone']);
					$('#zip').val(firebaseData['zipcode']);
					console.log(firebaseData);
				});
=======
				// Hide Links
				$(".signup").hide("fast");
				$(".login").hide("fast");
				$('.profile').show("fast").after('<form id="firebaseLogout" action="<?php echo get_site_url().'/login/'; ?>" method="post"><input class="btn btn-danger" id="btnLogout" type="submit" name="logout" value="Logout"/></div></form>');
				// Incase PHP Function Does Not Work
				// firebase.database().ref("users/" + "<?php echo $user->data->user_login; ?>").once("value")
				// .then(function(snapshot) {
				// 	snapshot.forEach(function(childSnapshot) {
				// 		//console.log(childSnapshot.val()); //For Debug Only
				// 	    firebaseData[childSnapshot.key] = childSnapshot.val();
				// 	  });
				// 	$('#deviceID').val(firebaseData['deviceID']);
				// 	$('#nickname').val(firebaseData['deviceNickname']);
				// 	$('#first_name').val(firebaseData['firstName']);
				// 	$('#last_name').val(firebaseData['lastName']);
				// 	$('#username').val(firebaseData['username']);
				// 	$('#email').val(firebaseData['email']);
				// 	$('#address').val(firebaseData['address']);
				// 	$('#city').val(firebaseData['city']);
				// 	$('#phone').val(firebaseData['phone']);
				// 	$('#zip').val(firebaseData['zipcode']);
				// 	// console.log(firebaseData); //For Debug Only
				// });
>>>>>>> a27bb71... RC Version
			})( jQuery );
		</script>
	 		
		<div class="container">
	      <form id="firebaseProfile" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
			
<<<<<<< HEAD

			<div class="row justify-content-center device id-0">
	          <div class="col-4">
	            <div class="form-group">
	              <label for="deviceID">Device ID <strong>*</strong></label>
	              <input class="form-control" id="deviceID" type="text" name="deviceID" value="" required disabled>
=======
<?php
	
	$devices = explode(',', get_user_meta($user->ID, 'deviceID', true));
	$nicknames = explode(',', get_user_meta($user->ID, 'nickname', true));
	if (sizeof($devices) > 1) {

		for ($i=0; $i < sizeof($devices); $i++) {

?>
			<div class="row justify-content-center device id-0">
	          <div class="col-4">
	            <div class="form-group">
	              <label for="deviceID">Device ID <?php echo $i; ?><strong>*</strong></label>
	              <input class="form-control" id="deviceID-<?php echo $i; ?>" type="text" name="deviceID[]" value="<?php echo $devices[$i]; ?>" required disabled>
	            </div>
	          </div>
	          
	          <div class="col-4">
	            <div class="form-group">
	              <label for="nickname">Device Nickname <?php echo $i; ?><strong>*</strong></label>
	              <input class="form-control" id="nickname-<?php echo $i; ?>" type="text" name="nickname[]" value="<?php echo $nicknames[$i]; ?>" required disabled>
	            </div>
	          </div>
	        </div>
<?php
	 }		
	} else { ?>
		<div class="row justify-content-center device id-0">
	          <div class="col-4">
	            <div class="form-group">
	              <label for="deviceID">Device ID <strong>*</strong></label>
	              <input class="form-control" id="deviceID" type="text" name="deviceID[]" value="<?php echo $get_user_meta($user->ID, 'deviceID', true); ?>" required disabled>
>>>>>>> a27bb71... RC Version
	            </div>
	          </div>
	          
	          <div class="col-4">
	            <div class="form-group">
	              <label for="nickname">Device Nickname <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="nickname" type="text" name="nickname" value="none" required disabled>
	            </div>
	          </div>
	        </div>

=======
	              <input class="form-control" id="nickname" type="text" name="nickname[]" value="<?php echo get_user_meta($user->ID, 'nickname', true); ?>" required disabled>
	            </div>
	          </div>
	        </div>
	<?php }	?>
>>>>>>> a27bb71... RC Version

		    <a href="#firebaseProfile" id="addDevice" class="btn btn-success float-right">Add New Device</a>
	        
	        <div class="clearfix"></div>
	        <div class="row justify-content-center">           
	          <div class="col-4">
	            <div class="form-group">
	              <label for="firstname">First Name <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="first_name" type="text" name="first_name" value="" required disabled>
=======
	              <input class="form-control" id="first_name" type="text" name="first_name" value="<?php echo get_user_meta($user->ID, 'first_name', true); ?>" required disabled>
>>>>>>> a27bb71... RC Version
	            </div>
	          </div>

	          <div class="col-4">
	            <div class="form-group">
	              <label for="website">Last Name <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="last_name" type="text" name="last_name" value="" required disabled>
=======
	              <input class="form-control" id="last_name" type="text" name="last_name" value="<?php echo get_user_meta($user->ID, 'last_name', true); ?>" required disabled>
>>>>>>> a27bb71... RC Version
	            </div>
	          </div>           
	        </div>

	        <div class="row justify-content-center">          
	          <div class="col-4">
	            <div class="form-group">
	              <label for="username">Username <strong>*</strong></label>
	              <input class="form-control" id="username" type="text" name="username" value="<?php echo $user->data->user_login; ?>" required disabled>
	            </div>
	          </div>

	          <div class="col-4">
	            <div class="form-group">
	              <label for="email">Email <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="email" type="text" name="email" value="" placeholder="<?php echo $user->data->user_email; ?>" required disabled>
=======
	              <input class="form-control" id="email" type="text" name="email" value="" placeholder="<?php echo $user->data->user_login; ?>" required disabled>
>>>>>>> a27bb71... RC Version
	            </div>
	          </div>
	         </div>

	         <div class="row justify-content-center password">

	          <div class="col-4">
	            <div class="form-group">
	              <label for="password">Password <strong>*</strong></label>
	              <input class="form-control" id="password" type="password" name="password" value="nill" required disabled>
	            </div>
	          </div>

	          <div class="col-4">
	            <div class="form-group">
	              <label for="confirmPassword">Confirm Password <strong>*</strong></label>
	              <input class="form-control" id="confirmPassword" type="password" name="confirmPassword" value="nill" required disabled>
	            </div>
	          </div>
	        </div>

	        <div class="row justify-content-center">
	          <div class="col-4">
	            <div class="form-group">
	              <label for="phone">Phone <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="phone" type="text" name="phone" value="" required disabled>
=======
	              <input class="form-control" id="phone" type="text" name="phone" value="<?php echo get_user_meta($user->ID, 'phone', true); ?>" required disabled>
>>>>>>> a27bb71... RC Version
	            </div>
	          </div>
	          
	          <div class="col-4">
	            <div class="form-group">
	              <label for="zip">Zipcode <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="zip" type="text" name="zip" value="" required disabled>
=======
	              <input class="form-control" id="zip" type="text" name="zip" value="<?php echo get_user_meta($user->ID, 'zipcode', true); ?>" required disabled>
>>>>>>> a27bb71... RC Version
	            </div>
	          </div>
	        </div>

	        <div class="row justify-content-center">          
	          
	          <div class="col-4">
	            <div class="form-group">
	              <label for="address">Address <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="address" type="text" name="address" value="" required disabled>
=======
	              <input class="form-control" id="address" type="text" name="address" value="<?php echo get_user_meta($user->ID, 'address', true); ?>" required disabled>
>>>>>>> a27bb71... RC Version
	            </div>
	          </div>

	          <div class="col-4">
	            <div class="form-group">
	              <label for="city">City <strong>*</strong></label>
<<<<<<< HEAD
	              <input class="form-control" id="city" type="text" name="city" value="" required disabled>
	            </div>
	          </div>
	        </div>

=======
	              <input class="form-control" id="city" type="text" name="city" value="<?php echo get_user_meta($user->ID, 'city', true); ?>" required disabled>
	            </div>
	          </div>
	        </div>
			<?php wp_nonce_field( 'firebase_profile', '_firebase_profile' ); ?>
>>>>>>> a27bb71... RC Version
	      <div class="row justify-content-center">
	      	<a id="btnProfile" href="#firebaseProfile" class="btn btn-primary">Update Profile</a>
	      	<span>&nbsp;</span>
	        <input class="btn btn-success hidden" id="btnUpdate" type="submit" name="profile" value="Edit Profile"/>
	        <span>&nbsp;</span>
	        <a id="btnProfileCancel" href="#firebaseProfile" class="btn btn-danger hidden">Cancel</a>
	      </div>
	      <div class="clearfix"></div>
	      </form>
	    </div>
	    <script>
	    	(function( $ ) {
				"use strict";
<<<<<<< HEAD
				var clicked = 0;

				$("#btnUpdate").hide();
				$("#btnProfileCancel").hide();

				$("#btnProfile").click(function(e){
					$(this).hide();
					$("#btnUpdate").show();
					$("#btnProfileCancel").show();
=======
				var clicked = "<?php echo sizeof($devices) ?>";

				$("#btnUpdate").hide("fast");
				$("#btnProfileCancel").hide("fast");

				$("#btnProfile").click(function(e){
					$(this).hide("fast");
					$("#btnUpdate").show("fast");
					$("#btnProfileCancel").show("fast");
>>>>>>> a27bb71... RC Version
					$("#firebaseProfile").each(function(index, el) {
					
						$(this).find("input").removeAttr('disabled');

					});
				});

				$("#btnProfileCancel").click(function(e){
<<<<<<< HEAD
					$(this).hide();
					$("#btnUpdate").hide();
					$("#btnProfile").show();
					$("#firebaseProfile").each(function(index, el) {
					
						$(this).find("input").attr('disabled');
=======
					$(this).hide("fast");
					$("#btnUpdate").hide("fast");
					$("#btnProfile").show("fast");
					$("#firebaseProfile").each(function(index, el) {
					
						$(this).find("input").attr('disabled', 'disabled');
>>>>>>> a27bb71... RC Version

					});
				});

				$("#addDevice").click(function(event) {
<<<<<<< HEAD
					alert(".device.id-"+clicked);
					$(".device.id-"+clicked).after('<div class="row justify-content-center device id-'+ (clicked+1) +'"><div class="col-4"><div class="form-group"><label for="deviceID">Device ID <strong>*</strong></label><input class="form-control" id="deviceID" type="text" name="deviceID" value="" required></div></div><div class="col-4"><div class="form-group"><label for="nickname">Device Nickname <strong>*</strong></label><input class="form-control" id="nickname" type="text" name="nickname" value="none" required></div></div></div>');
					$("#btnUpdate").show();
					$("#btnProfileCancel").show();
					$("#btnProfile").hide();
=======
					$(".device.id-"+clicked).after('<div class="row justify-content-center device id-'+ (clicked+1) +'"><div class="col-4"><div class="form-group"><label for="deviceID">Device ID '+ (clicked+1) +' <strong>*</strong></label><input class="form-control" id="deviceID-'+ (clicked+1) +'" type="text" name="deviceID[]" value="device'+ (clicked+1) +'" required></div></div><div class="col-4"><div class="form-group"><label for="nickname">Device Nickname '+ (clicked+1) +'<strong>*</strong></label><input class="form-control" id="nickname-'+ (clicked+1) +'" type="text" name="nickname[]" value="nickname'+ (clicked+1) +'" required></div></div></div>');
					$("#btnUpdate").show("fast");
					$("#btnProfileCancel").show("fast");
					$("#btnProfile").hide("fast");
>>>>>>> a27bb71... RC Version
					$("#firebaseProfile").each(function(index, el) {
					
						$(this).find("input").removeAttr('disabled');

					});
					clicked++;
				});
<<<<<<< HEAD
=======

>>>>>>> a27bb71... RC Version
			})( jQuery );
	    </script>
	    <?php
	}

	/**
	* Validate Profile Form
	*/
	public function profile_validation( $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip )  {	
		
<<<<<<< HEAD
=======
		global $wpdb;
>>>>>>> a27bb71... RC Version
		$this->profile_errors = new WP_Error();
		$user = wp_get_current_user();

		if ( empty( $username ) || empty( $password ) || empty( $confirmPassword ) || empty( $email ) || empty( $first_name ) || empty( $last_name ) || empty( $address ) || empty( $city ) || empty( $phone ) || empty( $zip ) || empty( $deviceID ) ) {
		    $this->profile_errors->add('field', 'Required form field is missing');
		}
		if ( 4 > strlen( $username ) ) {
		    $this->profile_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
		}
<<<<<<< HEAD
		if ( 2 > strlen( $deviceID ) ) {
		    $this->profile_errors->add( 'deviceID_length', 'Device ID too short. At least 4 characters is required' );
=======
		foreach ($deviceID as $value) {
			# MultiValues Device IDs
			if ( 2 > strlen( $value ) ) {
			    $this->profile_errors->add( 'deviceID_length', 'Device ID ('.$value.') too short. At least 2 characters is required' );
			}
			
			if ( $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", '%'.$value.'%' ) ) ) {
			    $this->profile_errors->add( 'deviceid_exist', 'Sorry, this Device ID ('.$value.') already exists!' );
			}
		}

		if ( (get_user_meta($user->ID, 'phone', true) != $phone) && $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", $phone ) ) ) {
		    $this->profile_errors->add( 'phone_exist', 'Sorry, this Phone Number already exists!' );
>>>>>>> a27bb71... RC Version
		}
		if ( !username_exists( $username ) )
		    $this->profile_errors->add('user_name', 'Sorry, that username does not exists!');

		if ( ! validate_username( $username ) ) {
		    $this->profile_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
		}

		if ( $password != 'nill' && 5 > strlen( $password ) ) {
	        $this->profile_errors->add( 'password', 'Password length must be greater than 5' );
	    }
		
		if ( $password !== $confirmPassword ) {
	        $this->profile_errors->add( 'password', 'Password & Confirm Password did not match' );
	    }

	    if ( !is_email( $email ) ) {
		    $this->profile_errors->add( 'email_invalid', 'Email is not valid' );
		}

		if ( is_wp_error( $this->profile_errors ) ) {
 
		    foreach ( $this->profile_errors->get_error_messages() as $error ) {
		     
		        echo '<div>';
		        echo '<strong>ERROR</strong>:';
		        echo $error . '<br/>';
		        echo '</div>';
		         
		    }
		 
		}
	}

	/**
	* Complete User Profile
	*/
	public function complete_profile($deviceID, $first_name, $last_name, $nickname, $username, $password, $email, $address, $city, $phone, $zip) {
	
	    if ( 1 > count( $this->profile_errors->get_error_messages() ) ) {
<<<<<<< HEAD
	        $userdata = array(
=======
	    	$user = wp_get_current_user();
	        $userdata = array(
	        	'ID'		=>	$user->ID,
>>>>>>> a27bb71... RC Version
	        'user_login'    =>   $username,
	        'user_email'    =>   $email,
	        'user_pass'     =>   $password,
	        'first_name'    =>   $first_name,
	        'last_name'     =>   $last_name,
<<<<<<< HEAD
	        'nickname'      =>   json_encode($nickname)
=======
	        'nickname'      =>   $nickname
>>>>>>> a27bb71... RC Version
	        );
	        if($password === 'nill') {
	        	unset($userdata['user_pass']);
	        }
<<<<<<< HEAD
=======
	        $user = wp_update_user( $userdata );

	        /**
	        *	Adding User's Meta Data
	        */
	        update_user_meta( $user, 'deviceID', $deviceID );
	        update_user_meta( $user, 'phone', $phone );

	        update_user_meta( $user, 'address', $address );
	        update_user_meta( $user, 'city', $city );
	        update_user_meta( $user, 'zipcode', $zip );

>>>>>>> a27bb71... RC Version
	        echo '
	        <script>
	        	(function( $ ) {
					"use strict";

					// Get a reference to the database service

					firebase.database().ref("users/" + "'.$username.'").update({
						online 			: 	false,
					   	deviceID 		: 	"'.$deviceID.'",
						deviceNickname 	: 	"'.$nickname.'",
					   	username 		: 	"'.$username.'",
					    firstName 		: 	"'.$first_name.'",
					    lastName 		: 	"'.$last_name.'",
					    email 			: 	"'.$email.'",
					    address 		: 	"'.$address.'",
					    city 			: 	"'.$city.'",
					    zipcode 		: 	"'.$zip.'",
					    phone 			: 	"'.$phone.'"
					}).then(function(data) {
						  console.log("Successfully Updated Data! "+ data);
						}).catch(function (error){
							 console.log(error);
					  });
	        	})( jQuery );
	        </script>';
	        
<<<<<<< HEAD
	        $user = wp_update_user( $userdata );
=======
>>>>>>> a27bb71... RC Version
	        echo '<div class="alert alert-success">Profile has been updated successfully.</div>
			<script>
				(function ($) {
    				"use strict";
<<<<<<< HEAD
					$("#firebaseProfile :input").prop("disable", true);
					$("#btnUpdate").hide();
					$("#btnProfile").show();
=======
					$("#firebaseProfile :input").attr("disabled","disabled");
					$("#btnUpdate").hide("fast");
					$("#btnProfile").show("fast");
>>>>>>> a27bb71... RC Version
				})(jQuery);
			</script>
			';
	    }
	}

	/**
	*	Main Function to control user registration
	*/
	public function custom_profile_function() {
<<<<<<< HEAD
	    // Validating Data | Security
	    // if ( isset($_POST['register'] )  && wp_verify_nonce($_POST['registration_nonce'], 'registration_nonce' ) ) {
		$user = wp_get_current_user();
		if ( isset($_POST['profile'] ) ) {
=======
		$user = wp_get_current_user();
	    // Validating Data | Security
	    if ( isset($_POST['profile'] )  && wp_verify_nonce($_POST['_firebase_profile'], 'firebase_profile' ) ) {
	    	echo "NONCE Validated!";

>>>>>>> a27bb71... RC Version
	        $this->profile_validation(
		        $_POST['deviceID'],
		        $_POST['first_name'],
		        $_POST['last_name'],
		        $_POST['nickname'],
		        $_POST['username'],
		        $_POST['password'],
				$_POST['confirmPassword'],
		        $_POST['email'],
	        	$_POST['address'],
	        	$_POST['city'],
	        	$_POST['phone'],
	        	$_POST['zip']
	        );
	         
	        // sanitize user form input | Security
	        global $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip;
	        $username   	=   sanitize_user( $_POST['username'] );
	        $password   	=   esc_attr( $_POST['password'] );
			$confirmPassword   	=   esc_attr( $_POST['confirmPassword'] );
	        $email      	=   sanitize_email( $_POST['email'] );
<<<<<<< HEAD
	        $deviceID    	=   esc_url( $_POST['deviceID'] );
	        $first_name 	=   sanitize_text_field( $_POST['first_name'] );
	        $last_name  	=   sanitize_text_field( $_POST['last_name'] );
	        $nickname   	=   sanitize_text_field( $_POST['nickname'] );
	        $deviceID 		=   sanitize_text_field( $_POST['deviceID'] );
=======
	        $deviceID    	=   sanitize_text_field( implode(',', $_POST['deviceID']) );
	        $first_name 	=   sanitize_text_field( $_POST['first_name'] );
	        $last_name  	=   sanitize_text_field( $_POST['last_name'] );
	        $nickname   	=   sanitize_text_field( implode(',', $_POST['nickname']) );
>>>>>>> a27bb71... RC Version
	        $address 		=   sanitize_text_field( $_POST['address'] );
	        $city 			=   sanitize_text_field( $_POST['city'] );
	        $phone 			=   sanitize_text_field( $_POST['phone'] );
	        $zip 			=   sanitize_text_field( $_POST['zip'] );
	 
	        // call @function complete_registration to create the user
	        // only when no WP_error is found | Security      
<<<<<<< HEAD
	        $this->complete_profile(
		        json_encode($deviceID),
		        $first_name,
		        $last_name,
		        json_encode($nickname),
=======
	        
	    	$this->complete_profile(
		        $deviceID,
		        $first_name,
		        $last_name,
		        $nickname,
>>>>>>> a27bb71... RC Version
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
	 	if(is_user_logged_in()) {
	 		
		    $this->profile_form( $user );

		} else {
			
	    	echo '
	    		<div class="container">
	    			<div class="row justify-content-center">
	    				<div class="col-6">
	    					<div class="alert alert-danger" role="alert">Please login first to view this page</div>
	    					<a href="/login/" class="btn btn-primary">Login</a>
	    				</div>
	    			</div>
	    		</div>
	    	';
	    }
	}
}