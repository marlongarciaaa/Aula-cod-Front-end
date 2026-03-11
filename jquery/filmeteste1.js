   $(document).ready(function(){
   
   $("#btnMostrar").click(function(){
    $("#listaFilmes").show();
});

$("#btnOcultar").click(function(){
    $("#listaFilmes").hide();
});

});

$(".filme").mouseenter(function(){
    $(this).css("background-color","#08910fff");
});

$(".filme").mouseleave(function(){
    $(this).css("background-color","#ffffffff");
});
 