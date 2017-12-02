//User login function
function sleep() {
            location.reload();
        }
jQuery(document).on('submit','#f-login', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: 'assets/mysql-php/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){

        }
    })
    .done(function(callback){
        console.log(callback);
        if (!callback.error) {
            console.log("Data matched: Login Successful");
            $('#login').modal('hide');
            $('#myAlert').show('fade');
            setTimeout(function() {
                $('#myAlert').hide('fade');
            },2500);
            $('#linkClose').click(function(e) {
                $('#myAlert').hide('fade');
            });
            setTimeout(sleep, 2500);
        } 
        else {
            console.log("Data abnormal: Login Failure");
            $('#login').modal('hide');
            $('#myAlert2').show('fade');

            setTimeout(function() {
                $('#myAlert2').hide('fade');
            },2500);
            $('#linkClose2').click(function(e) {
                $('#myAlert2').hide('fade');
            });
        }
    })
    .fail(function(resp){
        console.log("The request couldn't be loaded (Login)");

    })
    .always(function(){
        console.log("Completed");
    });
});

//User sign up function
jQuery(document).on('submit','#f-signup', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: 'assets/mysql-php/sign-up.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){

		}
	})
	.done(function(callback){
		console.log(callback);
		if (!callback.error) {
			console.log("Sign Up Successful");
			$('#signupModal').modal('hide');
            $('#altsuccsignup').show('fade');
            
            setTimeout(function() {
                $('#altsuccsignup').hide('fade');
            },2500);
		} 
		else {
			console.log("Sign Up Failure");
			$('#signupModal').modal('hide');
			$('#altfailsignup').show('fade');
            
            setTimeout(function() {
                $('#altfailsignup').hide('fade');
            },2500);
		}
	})
	.fail(function(callback){
		console.log(callback.responseText);
		console.log("The request couldn't be loaded (Sign Up)");
		
	})
	.always(function(){
		console.log("Completed");
	});
});

//////////////////////////////////////////////////////////
jQuery(document).on('submit','#f-ssrevoc', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: 'assets/mysql-php/ss-revoc.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){

		}
	})
	.done(function(callback){
		console.log(callback);
		if (!callback.error) {
			console.log("Successful");
			$('#signupModal').modal('hide');
            $('#altsuccsignup').show('fade');
            
            setTimeout(function() {
                $('#altsuccsignup').hide('fade');
            },2500);
		} 
		else {
			console.log("Failure");
			$('#signupModal').modal('hide');
			$('#altfailsignup').show('fade');
            
            setTimeout(function() {
                $('#altfailsignup').hide('fade');
            },2500);
		}
	})
	.fail(function(callback){
		console.log(callback.responseText);
		console.log("The request couldn't be loaded (...)");
		
	})
	.always(function(){
		console.log("Completed");
	});
});

//Submit Product
jQuery(document).on('submit','#to-sell-form', function(event){
	event.preventDefault();

	jQuery.ajax({
		url: 'assets/mysql-php/to-sell.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function(){

		}
	})
	.done(function(callback){
		console.log(callback);
		if (!callback.error) {
			console.log("Successful");
			myDropzone.processQueue(); 
            $('#altsuccsignup').show('fade');
            setTimeout(function() {
                $('#altsuccsignup').hide('fade');
            },2500);
		} 
		else {
			console.log("Failure");
			$('#altfailsignup').show('fade');
            
            setTimeout(function() {
                $('#altfailsignup').hide('fade');
            },2500);
		}
	})
	.fail(function(callback){
		console.log(callback.responseText);
		console.log("The request couldn't be loaded (...)");
		
	})
	.always(function(){
		console.log("Completed");
	});
});

//Search
jQuery(document).on('submit','#search', function(event){
	event.preventDefault();
    $.ajax({
        method: "post",
        url:"solicitud.php",
        data:$(this).serialize(),
        success:function(resp){
                window.location.assign("search_results.php")
        }
    });
});