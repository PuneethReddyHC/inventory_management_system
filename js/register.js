$(document).ready(function(){
	//Get User Information before checkout
	$("#signup_form").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "create_cust.php",
			method : "POST",
			data : $("#signup_form").serialize(),
			success : function(data){
				$(".overlay").hide();
				
				if (data == "register_success") {
					$("#signup_msg").html(data);
					$('#signup_form')[0].reset();

				}else if(data == "register_fail"){
					$("#signup_msg").html(data);
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})
	$("#register-form").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "create_cust.php",
			method : "POST",
			data : $("#register-form").serialize(),
			success : function(data){
				$(".overlay").hide();
				
				if (data == "register_success") {
					$("#signup_msg").html(data);
					$('#register-form')[0].reset();

				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})
	
	
    
})