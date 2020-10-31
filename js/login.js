$("#login-form").on("submit",function(event){
    event.preventDefault();
    $(".overlay").show();
    $.ajax({
        url	:	"login-backend.php",
        method:	"POST",
        data	:$("#login-form").serialize(),
        success	:function(data){
            if(data == "login_success"){
                window.location.href = "Customer.php";
            }else{
                $("#e_msg").html(data);
                $(".overlay").hide();
            }
        }
    })
})