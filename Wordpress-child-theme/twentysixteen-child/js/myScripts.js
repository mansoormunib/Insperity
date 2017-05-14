jQuery(document).ready(function($){

    $("#book_download").validate({
        rules: {
            firstname: "required",
            lastname: "required",
            phone: "required",
            companyname: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            firstname: "Please enter your First name",
            lastname: "Please enter your Last name",
            email: "Please enter valid email address",
            phone: "Please enter valid phone number",
            companyname: "Please enter compnay name"
        }
    });

    $( "#book_download" ).submit(function( event ) {
      if ($(this).valid()) {
        $( '<div class="loading">Loading</div>' ).appendTo( $( this ) );

        var action = 'download_book_ajax';
        var dataString = 'action='+action+'&'+$( this ).serialize();
        $.ajax({
			type: "POST",
			url: URL.ajaxurl,
			data: dataString,
			cache: false,
			success: function(response){
				$( '.loading' ).remove();
				if(response != 'not_found_error') {
                    $('#form_fields').hide();
                    $('#output').html(response).show();
				}else{
                    alert("error");
				}
			}
    	});
      }
      event.preventDefault();
    });


});
