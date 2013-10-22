$(document).ready(function(){
$("#continuar").button(
    {
        icons:{
            primary:"ui-icon-star",
            secondary:"ui-icon-carat-1-e"
        }
    }
).css("font-size","16px").click(
    function(){
        $("#mensaje").hide("drop","slow");
        $("#ingreso").show("drop","slow");
        $("#reporte").show("drop","slow");
    }
    
);

$("#btn_guardar").button().click(
    function(){
        guardarDatos();
    }
);
});
function guardarDatos(){
    var num1 = $("#num1").val();
    var num2 = $("#num2").val();
    var oper = $("#oper").val();
   
   if(num1 !='' && num2 !='' && oper !=''){
       $.post(ruta+"welcome/guardarDatos",{num1:num1,oper:oper,num2:num2},function(){
            consultarDatos();
        }
   );
   }
   else{
       alert("Faltan datos por completar!")
   }
   consultarDatos();
}
function consultarDatos(){
    $.post(ruta+"welcome/consultar",
            {},
            function(vista,datos){
                $("#reporte").html(vista,datos);
                for(var i=0;i<$("#contador").val();i++){
                    $("#boton"+i).button();
                }
    });
}
function eliminar(id){
    $.post(ruta+"welcome/eliminar",{id:id}, function(){
            consultarDatos();
        }
    );
}