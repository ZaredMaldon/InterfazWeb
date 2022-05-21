$(document).ready(function(event){
   
    $("#Cerrar_Popup1").click(function(event){
        $("#Ov1").fadeOut(800,function(){
            $("#Ov1").removeClass("active");
            
        });
       
    });
    $("#Cerrar_Popup2").click(function(event){
        $("#Ov2").fadeOut(800,function(){
           
            $("#Ov2").removeClass("active");
            
        });
       
    });
    $("#Cerrar_Popup3").click(function(event){
        $("#Ov3").fadeOut(800,function(){
           
            $("#Ov3").removeClass("active");
       
        })
    });
    $("#Cerrar_Popup4").click(function(event){
        $("#Ov4").fadeOut(800,function(){
        
            $("#Ov4").removeClass("active");
    
    });
});
    $("#Cerrar_Popup5").click(function(event){
        $("#Ov5").fadeOut(800,function(){
           
            $("#Ov5").removeClass("active");
       
    });
});
    $("#Cerrar_Popup6").click(function(event){
        $("#Ov6").fadeOut(800,function(){
               
            $("#Ov6").removeClass("active");
       
    });
});
    $("#Siguiente1").click(function(event){
       
        $("#Ov1").fadeOut(1000,function(){
            $("#Ov2").addClass("active");
            $("#Ov1").removeClass("active");
            
        });
       
    });
    $("#Siguiente2").click(function(event){
       
        $("#Ov2").fadeOut(1000,function(){
           
            $("#Ov3").addClass("active");
            $("#Ov2").removeClass("active");
            
        });
       
    });
    $("#Siguiente3").click(function(event){
       
        $("#Ov3").fadeOut(1000,function(){
           
            $("#Ov4").addClass("active");
            $("#Ov3").removeClass("active");
            
        });
       
    });
    $("#Siguiente4").click(function(event){
       
        $("#Ov4").fadeOut(1000,function(){
           
            $("#Ov5").addClass("active");
            $("#Ov4").removeClass("active");
            
        });
       
    });
    $("#Siguiente5").click(function(event){
       
        $("#Ov5").fadeOut(1000,function(){
           
            $("#Ov6").addClass("active");
            $("#Ov5").removeClass("active");
            
        });
       
    });

});