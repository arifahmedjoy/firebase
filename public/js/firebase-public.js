(function( $ ) {
	'use strict';
	// Initialize Firebase
	var config = {
		apiKey: 'AIzaSyDRZgadXQnt-QCi58K74ZdSjcWofM_0dWQ',
		authDomain: 'customer-db-ef864.firebaseapp.com',
		databaseURL: 'https://customer-db-ef864.firebaseio.com',
		projectId: 'customer-db-ef864',
		storageBucket: 'customer-db-ef864.appspot.com',
		messagingSenderId: '822096415910'
	};
	firebase.initializeApp(config);

	// Get a reference to the database service
	var database = firebase.database();
	// Insert Dummy Data
	writeUserData('02', '005', 'Arif Ahmed', 'Joy', 'Mirpur', 'Dhaka', '1216', 'joy_joy@live.com', '5175075751');
	updateUserData('02', '007', 'Arif Ahmed', 'Joy', 'Mirpur 02', 'Dhaka', '1216', 'joy_joy@live.com', '5175075751');
	// deleteUserData('02');

	var bigOne = $('#wpcf7-f9837-p31-o1');
	var dbRef = firebase.database().ref().child('text');
	dbRef.on('value', snap => bigOne.append(snap.val()));

	/** Storing User's Data into the Database
	*	All variables are String Type
	*/
	function writeUserData(userId, deviceID, firstName, lastName, address, city, zipcode, email, phone) {
	  firebase.database().ref('users/' + userId).set({
	    deviceID : deviceID,
	    firstName: firstName,
	    lastName: lastName,
	    email: email,
	    address: address,
	    city: city,
	    zipcode: zipcode,
	    phone : phone
	  });
	}

	/** Updating User's Data into the Database
	*	All variables are String Type
	*/
	function updateUserData(userId, deviceID, firstName, lastName, address, city, zipcode, email, phone) {
	  firebase.database().ref('users/' + userId).update({
	    deviceID : deviceID,
	    firstName: firstName,
	    lastName: lastName,
	    email: email,
	    address: address,
	    city: city,
	    zipcode: zipcode,
	    phone : phone
	  });
	}

	/** Deleting User's Data from the Database
	*	userId = Id of the user to be deleted
	*/
	function deleteUserData(userId) {
	  firebase.database().ref('users/' + userId).remove();
	}

	/**
	 * Submit Button Control
	 */
	 
	 $('#um-submit-btn').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		
		 var validator = $( 'form' ).validate({
			 rules: {
			 	'deviceId-135': {
		 		  required: true,
		 		  minlength: 2
			 	},
			 	'first_name-135': {
		 		  required: true,
		 		  minlength: 2
			 	},
			 	'last_name-135': {
		 		  required: true,
		 		  minlength: 2
			 	},		  
			 	'user_password-135': {
			 		required: true,
			 		minlength: 7
			 	},		  
			 	'confirm_user_password-135': {
			 		required: true,
			 		minlength: 7
			 	},
			 	'address': {
		 		  required: true,
		 		  minlength: 5
			 	},
			 	'user_email-135': {
		 		  required: true,
		 		  email: true,
		 		  minlength: 5
			 	},
			 	'phone_number-135' : {
		 		  required: true,
		 		  phoneUS: true,
		 		  minlength: 2
			 	},
			 	'zip-135': {
		 		  required: true,
		 		  minlength: 5
			 	}
			 },
			  messages: {
			  	'deviceId-135': {
				    required: 'This field is required.',
				    minlength: jQuery.validator.format('Please, at least {0} characters are necessary')
				},
				'first_name-135': {
				    required: 'This field is required.',
				    minlength: jQuery.validator.format('Please, at least {0} characters are necessary')
				},
				'last_name-135': {
				    required: 'This field is required.',
				    minlength: jQuery.validator.format('Please, at least {0} characters are necessary')
				},
				'user_password-135': {
				    required: 'This field is required.',
		 		    minlength: jQuery.validator.format('Please, at least {0} characters are necessary!')
				},
				'confirm_user_password-135': {
				    required: 'This field is required.',
		 		    minlength: jQuery.validator.format('Please, at least {0} characters are necessary!')
				},
				'address': {
				    required: 'This field is required.',
		 		    minlength: jQuery.validator.format('Please, enter a valid address!')
				},
				'user_email-135': {
				    required: 'This field is required.',
		 		    minlength: jQuery.validator.format('Please, enter a valid email address!')
				},
				'phone_number-135': {
				    required: 'This field is required.',
		 		    minlength: jQuery.validator.format('Please, at least {0} characters are necessary!')
				},
				'zip-135': {
				    required: 'This field is required.',
		 		    minlength: jQuery.validator.format('Please, enter a valid zipcode!')
				}
			  }
		 	 });
			
			validator.form();
			var pCheck;
			if ($('#user_password-135').val() == $('#confirm_user_password-135').val()) {
				pCheck = true;
				$('#user_password-135').parent().find('.error').remove();
			} else {
				pCheck = false;
				$('#user_password-135').parent().append('<label class="error" for="confirm_user_password-135">Password did not match.</label>');
			}
			if (validator.valid() && pCheck) {
				var values = {};
				$.each($('form').serializeArray(), function(i, field) {
				    values[field.name] = field.value;
				});
				// values = JSON.parse(values);
				$('#um-submit-btn').parent().append('05' + values["deviceId-135"]+ values["first_name-135"]+ values["last_name-135"]+ values["address"]+ values["zip-135"]+ values["user_email-135"]+ values["phone_number-135"]);
				writeUserData("05", values["deviceId-135"], values["first_name-135"], values["last_name-135"], values["address"], values["zip-135"], values["user_email-135"], "2665265121");
				alert(JSON.stringify(values)+'VALIDATED!!!');

			}
	 	});

	/**
	* Ajax Call
	*/
// 	jQuery(document).ready(function(){
// 	    jQuery('.foobar').bind('click', function() {
// 	        jQuery(this).toggleClass('clicked');
// 	        jQuery.ajax({
// 	          type:'POST',
// 	          data:{action:'firebase_user_signup'},
// 	          url: 'http://mysite/wp-admin/admin-ajax.php',
// 	          success: function(value) {
// 	            jQuery(this).html(value);
// 	          }
// 	        });
// 	    });
// 	});

})( jQuery );