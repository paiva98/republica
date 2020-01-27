
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}



function loginAjax(){
   

        $('#formLogin').validate({
            rules: {
                email: { required: true, email: true},
                password: { required: true }
            },
            messages: {
                email: { required: 'Preencha o campo email', email: 'Informe um e-mail válido' },
                password: { required: 'Preencha o campo Senha' }

            },
            submitHandler: function( form ){
                var email = $("#loginModal input[name='email']").val();
                var password = $("#loginModal input[name='password']").val();
                
                $.ajax({
                    url: BASE_URL + 'ajax/login',
                    type: "POST",
                    data: {email: email, password: password},
                    dataType :'json',
                    success: function(json){          
                        
                        if (json.return == true) {
                            console.log("deu");
                            window.location.assign(BASE_URL  + "administrator");

                        }else if (json.return == false) {
                            shakeModal();
                        }
                      
                    },
                    error:function(json){
                        alert("Erro interno, tente novamente ou entre em contato em nosso site");              
                        console.log(json.return);
                    },

                });


                return false;
            }
        });
        
        
   
     
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("E-mail / ou senha incorretos !");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

jQuery(document).ready(function($) {

    "use strict";

        $('#form-profile').validate({
            rules: {
                confirm_password: { equalTo : "#password" }
            },
            messages: {
                confirm_password: { equalTo: 'Repita a senha por favor'}
                

            }
        });

        var email = $("#email_register"); 
        email.blur(function() {
            $("#resposta").show();
            $.ajax({ 
                url: BASE_URL + 'ajax/existing_email', 
                type: 'POST', 
                data:{"email" : email.val()}, 
                dataType :'json',
                    success: function(json){  
                      if (json.result > 0 || email.val() == "") {
                        $("#resposta").text("E-mail já existe ou está vazio");
                        email.focus();
                      }else{
                        $("#resposta").hide();
                      }
                     
                      
                    },
                    error:function(json){
                        alert("Erro interno, tente novamente ou entre em contato em nosso site");              
                        console.log(json.return);
                    },
            }); 
        }); 
        
        
    

});

   