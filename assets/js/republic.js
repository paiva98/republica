jQuery(document).ready(function($) {

    "use strict";

        $('#form-submit').validate({
            rules: {
                name: { required: true, minlength: 3 },
                single_rooms: { number: true },
                collective_rooms : { number: true },
                culture : { required: true },
                value_housing : {required: true, number: true },
                total_residents : { number: true },
                street : { required: true },
                number : { required: true },
                neighborhood : {required: true},
                city : { required: true },
                state : { required: true },
                zip : {required: true}
            },
            messages: {
                name: { required: 'Campo obrigatório', minlength: "Nome precisa ter 3 letras no mínimo " },
                single_rooms: { number: "Campo númerico" },
                collective_rooms: { number: "Campo númerico" },
                culture: { required: 'Campo obrigatório'},
                value_housing: { required: 'Campo obrigatório'},
                value_housing: { number: "Campo númerico" },
                total_residents: { number: "Campo númerico" },
                street : { required: 'Campo obrigatório'},
                number : { required: 'Campo obrigatório'},
                neighborhood : { required: 'Campo obrigatório'},
                city : { required: 'Campo obrigatório'},
                state : { required: 'Campo obrigatório'},
                zip : { required: 'Campo obrigatório'}
            }
        });

        var name = $("#form-submit-title"); 
        name.blur(function() {
            $("#resposta").show();
            $.ajax({ 
                url: BASE_URL + 'ajax/existing_name_republic', 
                type: 'POST', 
                data:{"name" : name.val()}, 
                dataType :'json',
                    success: function(json){  
                      if (json.result > 0 || name.val() == "") {
                        $("#resposta").text("Nome já existe ou está vazio");
                        name.focus();
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


function readURL(input) {
    var atual = $(input).attr("data-id");
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('.file-upload').eq(atual).css("background-image", "url(" + e.target.result + ")");
      $('.file-upload span').eq(atual).text("Essa miniatura, não representa a qualidade real");
      $('#gallery').find('.subtitle').eq(atual).prop("disabled", false);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}

$(".file-upload-input").change(function() {
  readURL(this);
});

   