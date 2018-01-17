(function( $ ) {
	'use strict';
	// Initialize Firebase
	const config = {
		apiKey: 'AIzaSyDRZgadXQnt-QCi58K74ZdSjcWofM_0dWQ',
		authDomain: 'customer-db-ef864.firebaseapp.com',
		databaseURL: 'https://customer-db-ef864.firebaseio.com',
		projectId: 'customer-db-ef864',
		storageBucket: 'customer-db-ef864.appspot.com',
		messagingSenderId: '822096415910'
	};
	firebase.initializeApp(config);

	// Get a reference to the database service
	const database = firebase.database();
	

	/** Storing User's Data into the Database
	*	All variables are String Type
	*/
	function writeUserData(username, deviceID, firstName, lastName, address, city, zipcode, email, phone) {
	  database.ref('users/' + username).set({
	    deviceID : deviceID,
	    firstName: firstName,
	    lastName: lastName,
	    email: email,
	    address: address,
	    city: city,
	    zipcode: zipcode,
	    phone : phone
	  }).then(function(data) {
		  console.log('Successfully Stored Data! '+ data);
		}).catch(function (error){
			 console.log(error);
	  });
	}

	/** Updating User's Data into the Database
	*	All variables are String Type
	*/
	function updateUserData(username, deviceID, firstName, lastName, address, city, zipcode, email, phone) {
	  database.ref('users/' + username).update({
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
	/**
	 * Get The Last Data
	 */
	function getLastFromList(ref, cb) {
		ref.limitToLast(1).once("value", function (snapshot) {
			cb(snapshot.val());
		});
	}

    // getLastFromList(database.ref('users'), function (val) {
    // 	console.log(val);
    //     alert(JSON.stringify(val));
    // });

	/** Deleting User's Data from the Database
	*	username = Id of the user to be deleted
	*/
	function deleteUserData(username) {
	  database.ref('users/' + username).remove();
	}	

})( jQuery );