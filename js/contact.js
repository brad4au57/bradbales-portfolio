$(document).ready(function(){
	$('#submit').click(function(){
		let name = $('#name').val();
		let email = $('#email').val();
		let message = $('#message').val();
		let mailData = {
			name: name,
			email: email,
			message: message
		} 
		// 'name=' + name + ' ' + 'email=' + email + ' ' + 'message=' + message;

		if(name != '' && email != '' && message !=''){
			$.ajax({
				url: './mail.php',
				type: 'POST',			
				data: mailData,
				success: function(data){
					console.log("Form Hidden");
					$('.form').css('display','none');				
					$('.form-success').show();
				},
				error: function(){
					$('.form').css('display','none');
					$('.form-error').show();
				}
			});
			return false;			
		}else{
			alert('You must fill out the whole form');
		}
	});
});