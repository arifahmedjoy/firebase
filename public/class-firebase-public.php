<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.arifahmed.info
 * @since      4.9.5
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
	 * @since    4.9.5
	 * @access   private
	 * @var      string    $firebase    The ID of this plugin.
	 */
	private $firebase;

	/**
	 * The version of this plugin.
	 *
	 * @since    4.9.5
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * The version of this plugin.
	 *
	 * @since    4.9.5
	 * @access   private
	 * @var      string    $reg_errors    The Errors of this plugin.
	 */
	private $reg_errors;
	private $profile_device_errors;
	private $profile_info_errors;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    4.9.5
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
	 * @since    4.9.5
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
		wp_enqueue_style( 'open-iconic-bootstrap','https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css', array(), '1.1.1', 'all' );
		wp_enqueue_style( $this->firebase, plugin_dir_url( __FILE__ ) . 'css/firebase-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    4.9.5
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
		wp_enqueue_script( 'bootstrap4-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'bootstrap4-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js', array( 'jquery' ), $this->version, true );

	}

	/**
	*	Registration Form
	*/
	public function registration_form( $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip ) {	 
	    ?>
	<div class="container">
      <form id="firebaseSignup" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">

        <div class="row justify-content-center">
          <div class="col-4">
            <div class="form-group">
              <label for="deviceID">Device ID <strong>*</strong></label>
              <input class="form-control" id="deviceID" type="text" name="deviceID" value="<?php echo ( isset( $_POST['deviceID']) ? $deviceID : null ) ?>" required>
            </div>
          </div>
          
          <div class="col-4">
            <div class="form-group">
              <label for="nickname">Device Nickname</label>
              <input class="form-control" id="nickname" type="text" name="nickname" value="<?php echo ( isset( $_POST['nickname']) ? $nickname : null ) ?>">
            </div>
          </div>
        </div>

        <div class="row justify-content-center">           
          <div class="col-4">
            <div class="form-group">
              <label for="firstname">First Name <strong>*</strong></label>
              <input class="form-control" id="first_name" type="text" name="first_name" value="<?php echo ( isset( $_POST['first_name']) ? $first_name : null ) ?>" required>
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="website">Last Name <strong>*</strong></label>
              <input class="form-control" id="last_name" type="text" name="last_name" value="<?php echo ( isset( $_POST['last_name']) ? $last_name : null ) ?>" required>
            </div>
          </div>           
        </div>

        <div class="row justify-content-center">          
          <div class="col-4">
            <div class="form-group">
              <label for="username">Username <strong>*</strong></label>
              <input class="form-control" id="username" type="text" name="username" value="<?php echo ( isset( $_POST['username'] ) ? $username : null ) ?>" required>
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="email">Email <strong>*</strong></label>
              <input class="form-control" id="email" type="text" name="email" value="<?php echo ( isset( $_POST['email']) ? $email : null ) ?>" placeholder="" required>
            </div>
          </div>
         </div>

         <div class="row justify-content-center">

          <div class="col-4">
            <div class="form-group">
              <label for="password">Password <strong>*</strong></label>
              <input class="form-control" id="password" type="password" name="password" value="<?php echo ( isset( $_POST['password'] ) ? $password : null ) ?>" required>
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="confirmPassword">Confirm Password <strong>*</strong></label>
              <input class="form-control" id="confirmPassword" type="password" name="confirmPassword" value="<?php echo ( isset( $_POST['confirmPassword'] ) ? $confirmPassword : null ) ?>" required>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-4">
            <div class="form-group">
              <label for="phone">Phone <strong>*</strong></label>
              <input class="form-control" id="phone" type="text" name="phone" value="<?php echo ( isset( $_POST['phone']) ? $phone : null ) ?>" required>
            </div>
          </div>
          
          <div class="col-4">
            <div class="form-group">
              <label for="zip">Zipcode <strong>*</strong></label>
              <input class="form-control" id="zip" type="text" name="zip" value="<?php echo ( isset( $_POST['zip']) ? $zip : null ) ?>" required>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">          
          
          <div class="col-4">
            <div class="form-group">
              <label for="address">Address <strong>*</strong></label>
              <input class="form-control" id="address" type="text" name="address" value="<?php echo ( isset( $_POST['address']) ? $address : null ) ?>" required>
            </div>
          </div>

          <div class="col-4">
            <div class="form-group">
              <label for="city">City <strong>*</strong></label>
              <input class="form-control" id="city" type="text" name="city" value="<?php echo ( isset( $_POST['city']) ? $city : null ) ?>" required>
            </div>
          </div>
        </div>
		<?php wp_nonce_field( 'firebase_registration', '_firebase_registration' ); ?>
      <div class="row justify-content-center">
        <input class="btn btn-primary text-center" id="btnRegister" type="submit" name="register" value="Register"/>
      </div>
      <div class="clearfix"></div>
      </form>
    </div>
	    <?php
	}

	/**
	* Validate Registration Form
	*/
	public function registration_validation( $deviceID, $first_name, $last_name, $nickname, $username, $password, $confirmPassword, $email, $address, $city, $phone, $zip )  {	
		$this->reg_errors = new WP_Error();
		global $wpdb;
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
		
		if ( $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", $deviceID ) ) ) {
		    $this->reg_errors->add( 'deviceid_exist', 'Sorry, this Device ID already exists!' );
		}

		if ( $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", $phone ) ) ) {
		    $this->reg_errors->add( 'phone_exist', 'Sorry, this Phone Number already exists!' );
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
	        $register_user = wp_insert_user( $userdata );

		    if (!is_wp_error($register_user)) {
		        /**
		        *	Adding User's Meta Data
		        */
		        add_user_meta( $user, 'deviceID', $deviceID, true );
		        add_user_meta( $user, 'phone', $phone, true );

		        add_user_meta( $user, 'address', $address );
		        add_user_meta( $user, 'city', $city );
		        add_user_meta( $user, 'zipcode', $zip );		        

		    } else{
		        echo '<div>';
		        echo '<strong>ERROR</strong>:';
		        echo $register_user->get_error_message() . '<br/>';
		        echo '</div>';
		    }
	        echo '
	        <script>
	        	(function( $ ) {
					"use strict";

					// Get a reference to the database service

					firebase.database().ref("users/" + "'.$username.'").set({
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
						  $("#firebaseSignup").hide("fast");
						}).catch(function (error){
							 console.log(error);
					  });
	        	})( jQuery );
	        </script>';
	        
	        echo '<div class="alert alert-success">Registration complete. Goto <a href="' . get_site_url() . '/login/">login page</a>.</div>
			';

			wp_redirect( site_url('profile/') ); exit;
	    }
	}

	/**
	*	Main Function to control user registration
	*/
	public function custom_registration_function() {
	    // Validating Data | Security
	    if ( isset($_POST['register'] )  && wp_verify_nonce($_POST['_firebase_registration'], 'firebase_registration' ) ) {

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
		}
	}

	/**
	*	Profile Form
	*/
	public function profile_form( $user ) 
	{
	 	?>
		<!-- <script>
			var firebaseData = [];
			(function ($) {
				"use strict";
				// Hide Links
				// $(".signup").hide("fast");
				// $(".login").hide("fast");
				// $('.profile').show("fast").after('<a href="<?php echo wp_logout_url(); ?>" class="col-2 btn btn-danger" title="logout">Logout</a>');
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
			})( jQuery );
		</script> -->
	 		
		<div class="container">
	      	<div class="row justify-content-center pb-3">
	      		<div id="toggle" class="btn-group" role="group" aria-label="Profile Form">
				  <button id="devices" type="button" class="btn btn-secondary" aria-pressed="true">My Devices</button>
				  <button id="infos" type="button" class="btn btn-secondary">My Information</button>
				</div>
	      	</div>

      	<form id="firebaseProfileDevice" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
			<div class="row justify-content-center device">
		    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deviceModal">Add New Device</button>
		    </div>
			<?php

				$devices = explode(',', get_user_meta($user->ID, 'deviceID', true));
				$nicknames = explode(',', get_user_meta($user->ID, 'nickname', true));
				if (sizeof($devices) > 1) {

					for ($i=0; $i < sizeof($devices); $i++) {

			?>
			<div class="row justify-content-center device id-0">
	          <div class="col-4">
	            <div class="form-group">
	              <label for="deviceID-<?php echo $i; ?>">Device ID <?php echo $i; ?><strong>*</strong></label>
	              <input class="form-control deviceID" id="deviceID-<?php echo $i; ?>" type="text" name="deviceID[]" value="<?php echo $devices[$i]; ?>" required disabled>
	            </div>
	          </div>
	          
	          <div class="col-4">
	            <div class="form-group">
	              <label for="nickname-<?php echo $i; ?>">Device Nickname <?php echo $i; ?> <a class="editMe float-right" href="#firebaseProfileDevice">&nbsp;<span class="oi oi-pencil"></span></a></label>
	              <input class="form-control nickname" id="nickname-<?php echo $i; ?>" type="text" name="nickname[]" value="<?php echo $nicknames[$i]; ?>" disabled>
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
	              <input class="form-control deviceID" id="deviceID" type="text" name="deviceID[]" value="<?php echo get_user_meta($user->ID, 'deviceID', true); ?>" required disabled>
	            </div>
	          </div>
	          
	          <div class="col-4">
	            <div class="form-group">
	              <label for="nickname">Device Nickname <a class="editMe float-right" href="#firebaseProfileDevice">&nbsp;<span class="oi oi-pencil"></span></a></label>
	              <input class="form-control nickname" id="nickname" type="text" name="nickname[]" value="<?php echo get_user_meta($user->ID, 'nickname', true); ?>" disabled>
	            </div>
	          </div>
	        </div>
	<?php }	?>
		<input type="hidden" id="editedDevice" name="editedDevice" value="0">
	<?php wp_nonce_field( 'firebase_profile_device', '_firebase_profile_device' ); ?>
    <div class="row justify-content-center device">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deviceModal">Add New Device</button>
    </div>
    <span>&nbsp;</span>
	<script>
		(function($){
			"use strict";

			$('.editMe').click(function (e) {
				var device = $(this).parent().parent().parent().parent().find('input.deviceID').val();
				var nickname = $(this).parent().parent().find('input').val();
				$(this).parent().parent().find('input').removeAttr('disabled');
				if ($('#saveDevice').val() != 'Save') {
					$(this).parent().parent().find('input').after('<input id="saveDevice" class="float-right btn btn-success" type="submit" value="Save" name="saveDevice" />');
				}
				$('#editedDevice').val(device);

			});

		})(jQuery);
	</script>
	</form>

	<!-- New Device Modal -->
	<div class="modal fade" id="deviceModal" tabindex="-1" role="dialog" aria-labelledby="deviceModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="deviceModalLabel">Add your new device</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="firebaseProfileDevice" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
						
						<div class="row justify-content-center device id-0">
							<div class="col-4">
								<div class="form-group">
									<label for="deviceID">Device ID <strong>*</strong></label>
									<input class="form-control deviceID" id="deviceID" type="text" name="deviceID" value="" required>
								</div>
							</div>
							
							<div class="col-4">
								<div class="form-group">
									<label for="nickname">Device Nickname</label>
									<input class="form-control nickname" id="nickname" type="text" name="nickname" value="">
								</div>
							</div>
						</div>
						<input type="hidden" name="newDevice" value="1">
						<?php wp_nonce_field( 'firebase_profile_device', '_firebase_profile_device' ); ?>
					<div class="modal-footer">
						<input class="btn btn-success" type="submit" value="Save" name="saveDevice" />
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	        

	<form id="firebaseProfileInfo" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	        
	        	<div class="row justify-content-center info">           
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="firstname">First Name <strong>*</strong></label>
	        	      <input class="form-control" id="first_name" type="text" name="first_name" value="<?php echo get_user_meta($user->ID, 'first_name', true); ?>" required>
	        	    </div>
	        	  </div>
	        	
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="website">Last Name <strong>*</strong></label>
	        	      <input class="form-control" id="last_name" type="text" name="last_name" value="<?php echo get_user_meta($user->ID, 'last_name', true); ?>" required>
	        	    </div>
	        	  </div>           
	        	</div>
	        	
	        	<div class="row justify-content-center info">          
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="username">Username <strong>*</strong></label>
	        	      <input class="form-control" id="username" type="text" name="username" value="<?php echo $user->data->user_login; ?>" required disabled>
	        	    </div>
	        	  </div>
	        	
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="email">Email <strong>*</strong></label>
	        	      <input class="form-control" id="email" type="text" name="email" value="<?php echo $user->data->user_email; ?>" placeholder="<?php echo $user->data->user_email; ?>" required>
	        	    </div>
	        	  </div>
	        	 </div>
	        	
	        	<div class="row justify-content-center info">
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="phone">Phone <strong>*</strong></label>
	        	      <input class="form-control" id="phone" type="text" name="phone" value="<?php echo get_user_meta($user->ID, 'phone', true); ?>" required>
	        	    </div>
	        	  </div>
	        	  
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="zip">Zipcode <strong>*</strong></label>
	        	      <input class="form-control" id="zip" type="text" name="zip" value="<?php echo get_user_meta($user->ID, 'zipcode', true); ?>" required>
	        	    </div>
	        	  </div>
	        	</div>
	        	
	        	<div class="row justify-content-center info">          
	        	  
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="address">Address <strong>*</strong></label>
	        	      <input class="form-control" id="address" type="text" name="address" value="<?php echo get_user_meta($user->ID, 'address', true); ?>" required>
	        	    </div>
	        	  </div>
	        	
	        	  <div class="col-4">
	        	    <div class="form-group">
	        	      <label for="city">City <strong>*</strong></label>
	        	      <input class="form-control" id="city" type="text" name="city" value="<?php echo get_user_meta($user->ID, 'city', true); ?>" required>
	        	    </div>
	        	  </div>
	        	</div>
	        
			<div class="clearfix"></div>

			<?php wp_nonce_field( 'firebase_profile_info', '_firebase_profile_info' ); ?>
			<div class="row justify-content-center">
				<input class="btn btn-success" id="btnSaveInfo" type="submit" name="saveInfo" value="Save"/>
			</div>
			<div class="clearfix"></div>
		</form>
		</div>
	    <script>
	    	(function( $ ) {
				"use strict";
				
				$('#firebaseProfileDevice').show('fast');
				$("#firebaseProfileInfo").hide('fast');

				$('#devices').click(function(event) {
					$('#firebaseProfileDevice').show('fast');
					$("#firebaseProfileInfo").hide('fast');
				});
				$('#infos').click(function(event) {
					$('#firebaseProfileDevice').hide('fast');
					$("#firebaseProfileInfo").show('fast');
				});

				$("#username").attr('disabled', 'disabled');				

			})( jQuery );
	    </script>
	    <?php
	}

	/**
	* Validate Profile Device Form
	*/
	public function profile_device_validation( $deviceID, $nickname = '', $new = '' )  {
		
		global $wpdb;
		$this->profile_device_errors = new WP_Error();
		$user = wp_get_current_user();

		if ( empty( $deviceID ) ) {
		    $this->profile_device_errors->add('field', 'Device ID is missing');
		}
		if (!empty($new)) {

			foreach ($deviceID as $value) {
				# MultiValues Device IDs
				if ( 2 > strlen( $value ) ) {
				    $this->profile_device_errors->add( 'deviceID_length', 'Device ID ('.$value.') too short. At least 2 characters is required' );
				}
				
				if ( $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", '%'.$value.'%' ) ) ) {
				    $this->profile_device_errors->add( 'deviceid_exist', 'Sorry, this Device ID ('.$value.') already exists!' );
				}
			}

		} else {

		    if ( 2 > strlen( $deviceID ) ) {
			    $this->profile_device_errors->add( 'deviceID_length', 'Device ID ('.$deviceID.') too short. At least 2 characters is required' );
			}
			
			if ( $wpdb->query( $wpdb->prepare( "SELECT * FROM $wpdb->usermeta WHERE meta_value = %s", '%'.$deviceID.'%' ) ) ) {
			    $this->profile_device_errors->add( 'deviceid_exist', 'Sorry, this Device ID ('.$deviceID.') already exists!' );
			}
		}

		if ( is_wp_error( $this->profile_device_errors ) ) {
 
		    foreach ( $this->profile_device_errors->get_error_messages() as $error ) {
		     
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
	public function complete_device_profile($deviceID, $nickname, $new, $pos = '') {
	
	    if ( 1 > count( $this->profile_device_errors->get_error_messages() ) ) {
	    	
	    	$user = wp_get_current_user();	        

	        if ($new) {

	        	$deviceID  	= get_user_meta($user->ID, 'deviceID', true).','.$deviceID;
		        $nickname 	= get_user_meta($user->ID, 'nickname', true).','.$nickname;
	        	
		        update_user_meta( $user->ID, 'deviceID', $deviceID );
		        update_user_meta( $user->ID, 'nickname', $nickname );

	        } else {
		        /**
		        *	Updating User's Meta Data
		        */

		        update_user_meta( $user->ID, 'deviceID', $deviceID );
		        update_user_meta( $user->ID, 'nickname', $nickname );
	        }


	        echo '
	        <script>
	        	(function( $ ) {
					"use strict";

					// Get a reference to the database service

					firebase.database().ref("users/" + "'.$username.'").update({
					   	deviceID 		: 	"'.$deviceID.'",
						deviceNickname 	: 	"'.$nickname.'"
					}).then(function(data) {
						  console.log("Successfully Updated Data! "+ data);
						}).catch(function (error){
							 console.log(error);
					  });
	        	})( jQuery );
	        </script>';
	        
	        echo '<div class="alert alert-success">Devices has been updated successfully.</div>
			<script>
				(function ($) {
    				"use strict";
					$("#firebaseProfileDevice :input").attr("disabled","disabled");
				})(jQuery);
			</script>
			';
	    }
	}

	/**
	* Validate Profile Form
	*/
	public function profile_validation( $deviceID, $first_name, $last_name, $nickname, $username, $email, $address, $city, $phone, $zip )  {	
		
		global $wpdb;
		$this->profile_errors = new WP_Error();
		$user = wp_get_current_user();

		if ( empty( $username ) || empty( $email ) || empty( $first_name ) || empty( $last_name ) || empty( $address ) || empty( $city ) || empty( $phone ) || empty( $zip ) || empty( $deviceID ) ) {
		    $this->profile_errors->add('field', 'Required form field is missing');
		}
		if ( !empty( $username ) ) {
		    $this->profile_errors->add( 'username_added', 'Sorry! You can\'t change the username!');
		}
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
	public function complete_profile($deviceID, $first_name, $last_name, $nickname, $username, $email, $address, $city, $phone, $zip) {
	
	    if ( 1 > count( $this->profile_errors->get_error_messages() ) ) {
	    	$user = wp_get_current_user();
	        $userdata = array(
	        	'ID'		=>	$user->ID,
	        'user_login'    =>   $username,
	        'user_email'    =>   $email,
	        'first_name'    =>   $first_name,
	        'last_name'     =>   $last_name,
	        'nickname'      =>   $nickname
	        );

	        $user = wp_update_user( $userdata );

	        /**
	        *	Adding User's Meta Data
	        */
	        update_user_meta( $user, 'deviceID', $deviceID );
	        update_user_meta( $user, 'phone', $phone );

	        update_user_meta( $user, 'address', $address );
	        update_user_meta( $user, 'city', $city );
	        update_user_meta( $user, 'zipcode', $zip );

	        echo '
	        <script>
	        	(function( $ ) {
					"use strict";

					// Get a reference to the database service

					firebase.database().ref("users/" + "'.$username.'").update({
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
	        
	        echo '<div class="alert alert-success">Profile has been updated successfully.</div>
			<script>
				(function ($) {
    				"use strict";
					$("#firebaseProfile :input").attr("disabled","disabled");
					$("#btnUpdate").hide("fast");
					$("#btnProfile").show("fast");
				})(jQuery);
			</script>
			';
	    }
	}

	/**
	*	Main Function to control user registration
	*/
	public function custom_profile_function() {
		$user = wp_get_current_user();
	    // Validating Data | Security
	    if ( isset($_POST['saveDevice'] )  && wp_verify_nonce($_POST['_firebase_profile_device'], 'firebase_profile_device' ) ) {

	    	$this->profile_device_validation(
		        $_POST['deviceID'],
		        $_POST['nickname'],
	        	$_POST['newDevice']
	        );

	        // sanitize user form input | Security
	        global $deviceID, $nickname, $isNew;
	        $deviceID    	=   sanitize_text_field( (!isset($_POST['newDevice']) ) ? implode(',', $_POST['deviceID']) : $_POST['deviceID'] );
	        $nickname   	=   sanitize_text_field( (!isset($_POST['newDevice']) ) ? implode(',', $_POST['nickname']) : $_POST['nickname'] );
	        $isNew			=	(!isset($_POST['newDevice']) ? false : true );
	 
	        // call @function complete_registration to create the user
	        // only when no WP_error is found | Security      
	        
	    	$this->complete_device_profile(
		        $deviceID,
		        $nickname,
		        $isNew,
		        $_POST['editedDevice']
	        );

	    }

	    if ( isset($_POST['saveInfo'] )  && wp_verify_nonce($_POST['_firebase_profile_info'], 'firebase_profile_info' ) ) {	    	

	        $this->profile_validation(
		        $_POST['deviceID'],
		        $_POST['first_name'],
		        $_POST['last_name'],
		        $_POST['nickname'],
		        $_POST['username'],
		        $_POST['email'],
	        	$_POST['address'],
	        	$_POST['city'],
	        	$_POST['phone'],
	        	$_POST['zip']
	        );
	         
	        // sanitize user form input | Security
	        global $deviceID, $first_name, $last_name, $nickname, $username, $email, $address, $city, $phone, $zip;
	        $username   	=   sanitize_user( $_POST['username'] );
	        $email      	=   sanitize_email( $_POST['email'] );
	        $deviceID    	=   sanitize_text_field( implode(',', $_POST['deviceID']) );
	        $first_name 	=   sanitize_text_field( $_POST['first_name'] );
	        $last_name  	=   sanitize_text_field( $_POST['last_name'] );
	        $nickname   	=   sanitize_text_field( implode(',', $_POST['nickname']) );
	        $address 		=   sanitize_text_field( $_POST['address'] );
	        $city 			=   sanitize_text_field( $_POST['city'] );
	        $phone 			=   sanitize_text_field( $_POST['phone'] );
	        $zip 			=   sanitize_text_field( $_POST['zip'] );
	 
	        // call @function complete_registration to create the user
	        // only when no WP_error is found | Security      
	        
	    	$this->complete_profile(
		        $deviceID,
		        $first_name,
		        $last_name,
		        $nickname,
		        $username,
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

		}
	}
}