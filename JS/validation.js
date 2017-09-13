$(function() {
  //Necesario para sustituir el select común de HTML5 por el de Materialize
   $('select').material_select();
   $("#password2").blur(function (){
     if($("#password2").val() == $("#password").val()){
       $("#btnAlta").prop('disabled',false);
     }
     $("#btnAlta").prop('disabled',true);
   });
});
