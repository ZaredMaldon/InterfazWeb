$(document).ready(function(){
    $.ajax({
        type: "POST",
        url: "../Dashboard_SubidosRecientemente.php",
        // data: "data",
        // dataType: "dataType",
        success: function (response) {
            let respuesta=JSON.parse(response);
            alert(respuesta);
           
        }
    });

});
