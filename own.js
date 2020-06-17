$(document).ready(function() {
  
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(e){
        readURL(this);
    });

     $("#submit").css("display","none");
     $("#img").css("display","none");   
    
     
    //hide display and disable inputs & buttons

    $("#edit").on('click' , function(){
    $("#edit").text("Close");   
   $('input[type = "text"] , #password , #img').removeAttr("disabled"); 
   $("#submit").css("display","inline");   
   $("#img").css("display","inline");



   if( $("#edit").text() == "Close" ){
   
       $("#edit").on('click' , function(){ 
           $("#edit").text("Edit");
           $('input[type = "text"], #email , #password , #img').attr("disabled","disabled"); 
           $("#submit").css("display","none");   
           $("#img").css("display","none");

                       
       });
   }
    });
      
});



