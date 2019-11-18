$(function () {

    $('#select-nombre').on('change', actionVerPrecio);

    $('#btn-total').on('click', calcularTotal);
 
 });

 function calcularTotal(){
     
    var cantidad = document.getElementById("cantidad").value;
    var precio = document.getElementById("select-precio").value;

    console.log(cantidad,' ', precio);

    var total = cantidad * precio;

    var txtTotal = document.getElementById("total"); 
    txtTotal.value = total;
 }

function actionVerPrecio()
{
    var id = document.getElementById("select-nombre").value;

    console.log(id);
    $.get('JSON/getPrecios/'+id,  function (data){
        var html_select = '<option value="">SELECCIONE</option>';
        for (var i = 0; i < data.length; i++)
          html_select += '<option value="'+data[i].precio_unitaria+'">'+data[i].precio_unitaria+'</option>'   
          $('#select-precio').html(html_select);
   
      });
}

function actionLoadProductos(){

}