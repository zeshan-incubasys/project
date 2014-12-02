$(document).ready(function(){
	$('.section .edit-form').hide();
	$('.btn-area').on("click", ".edit", function(){
		if($('.edit-form').hasClass('active')){
			$('.edit-form').removeClass('active');
			$('.edit-form').slideUp(500);
		}else{
			$('.edit-form').addClass('active');
			$('.edit-form').slideDown(500);
		}
	});	
	
	$('.btn-login').click(function(e){
		e.preventDefault();
		
		var user = $.trim($('.user').val());
		var pass = $.trim($('.pass').val());
		var result = '';
		
		if(user == ''){
			result += "<p>Please Enter Username.</p>";
		}
		if(pass == ''){
			result += "<p>Please Enter Password.</p>";
		}
		if(result == ''){
			$('.message-area').fadeIn(500).removeClass('error').addClass('loading').html('Connecting to the Server, Please Wait!!');
			$.post('php/login-validation.php', { user: user, pass: pass }, function(data){
				
				if(data == "0"){
					$(document.location = 'index.php');
				}else{
					$('.message-area').fadeIn(500).removeClass('loading').addClass('error').html('<strong class="title">Please correct the following errors:</strong>'+data);
					$('.message-area').delay(5000).fadeOut(500);
				}
				
			});	
		}else{
			$('.message-area').fadeIn(500).removeClass('loading').addClass('error').html('<strong class="title">Please correct the following errors:</strong>'+result);
			$('.message-area').delay(5000).fadeOut(500);
		}
	
	});
	
	tinymce.init({
		selector: "textarea",
		plugins: "code",
		toolbar: "code insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		menubar : false
	});
	
});	