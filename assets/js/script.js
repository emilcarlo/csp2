/*LOGIN AUTHERNTICATION*/
  	$('input[name=login]').on('click', function(){
	    var login_user = $('input[name=login_user]').val()
	    var login_pwd = $('input[name=login_pwd]').val()
	    $.ajax({
	    	method: 'post',
	      	url: 'authenticate.php',
	      	data: {
		        login : true,
		        login_user : login_user,
		        login_pwd : login_pwd
	      	},
	      	success: function(data){
		        console.log(data);
		        if(data=='invalid'){
			        $('#login_error').css('color','red')
			        $('#login_error').html('Login failed. Please try again.<a href=#> Forgot Password.</a>')
	        	} 
	        	else {
	            	$('#login_form').submit()
	        	}
	      	}
	    })
 	 })

/*REGISTRATION FIELD VALIDATION*/
	$('input[name=reg_user]').on('input', function(){
    	var reg_user = $('input[name=reg_user]').val()
	    $.ajax({
	      	method: 'post',
	      	url: 'authenticate.php',
	      	data: {
	        	register : true,
	        	reg_user : reg_user
	    	},
      		success: function(data){
	        	console.log(data);
		        if(data=='invalid'){
		          	$('#username_error').css('color','red')
		          	$('#username_error').html('<i class="fa fa-times" aria-hidden="true"></i>')
		        } 
		        else if(data=='valid'){
		          	$('#username_error').css('color','green')
		          	$('#username_error').html('<i class="fa fa-check" aria-hidden="true"></i>')    
		        }
	      	}
    	})
  	})    

	$('input[name=conf_pwd]').on('input', function(){
  		if($('input[name=reg_pwd]').val() != $('input[name=conf_pwd]').val()){
		    $('input[name=register]').attr('disabled',true)
		    $('#pw_error').css('color','red')
		    $('#pw_error').html('<i class="fa fa-times" aria-hidden="true"></i>')
  		} 
  		else {
		    $('input[name=reg_button]').removeAttr('disabled')
		    $('#pw_error').css('color','green')
		    $('#pw_error').html('<i class="fa fa-check" aria-hidden="true"></i>')
  		}
	})

/*REGISTRATION SUBMISSION*/
	$(document).ready(function () {
    	$("#reg_button").click(function () {
      		$("#reg_form").submit();
    	});
  	});

  	/*REGISTRATION FIELD VALIDATION*/
$('input[name=add_reg_user]').on('input', function(){
    var add_reg_user = $('input[name=add_reg_user]').val()
    $.ajax({
      method: 'post',
      url: 'add_from_admin.php',
      data: {
        add : true,
        add_reg_user : add_reg_user
      },
      success: function(data){
        console.log(data);
        if(data=='invalid'){
          $('#add_username_error').css('color','red')
          $('#add_username_error').html('<i class="fa fa-times" aria-hidden="true"></i>')
        } else if(data=='valid'){
          $('#add_username_error').css('color','green')
          $('#add_username_error').html('<i class="fa fa-check" aria-hidden="true"></i>')    
        }
      }
    })
  }) 

$('input[name=add_conf_pwd]').on('input', function(){
  if($('input[name=add_reg_pwd]').val() != $('input[name=add_conf_pwd]').val()){
    $('input[name=register]').attr('disabled',true)
    $('#add_pw_error').css('color','red')
    $('#add_pw_error').html('<i class="fa fa-times" aria-hidden="true"></i>')
  } else {
    $('input[name=add]').removeAttr('disabled')
    $('#add_pw_error').css('color','green')
    $('#add_pw_error').html('<i class="fa fa-check" aria-hidden="true"></i>')
  }
})

  $(document).ready(function () {
    $("#add_reg_button").click(function () {
      $("#add_reg_form").submit();
    });
  });