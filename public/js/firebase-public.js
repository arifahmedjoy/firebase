(function( $ ) {
	'use strict';
	// Initialize Firebase
	var config = {
		apiKey: "AIzaSyDRZgadXQnt-QCi58K74ZdSjcWofM_0dWQ",
		authDomain: "customer-db-ef864.firebaseapp.com",
		databaseURL: "https://customer-db-ef864.firebaseio.com",
		projectId: "customer-db-ef864",
		storageBucket: "customer-db-ef864.appspot.com",
		messagingSenderId: "822096415910"
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
	* Ajax Call
	*/
	jQuery(document).ready(function(){
	    jQuery(".foobar").bind("click", function() {
	        jQuery(this).toggleClass('clicked');
	        jQuery.ajax({
	          type:'POST',
	          data:{action:'firebase_user_signup'},
	          url: "http://mysite/wp-admin/admin-ajax.php",
	          success: function(value) {
	            jQuery(this).html(value);
	          }
	        });
	    });
	});

	/**
	*	Hooks
	*/
	add_action('writeUserData',array($sample_plugin,'doAjax'));

})( jQuery );