$(function () {

    $('#select-semestre').on('change', metodo_listar);
 
 });

function metodo_listar()
{
    var genero = document.getElementById("select-semestre").value;

    $.get('lista_materias/'+genero+'', function (data){
        var html_select = '<option value="">SELECCIONE</option>';
        for (var i = 0; i < data.length; i++)
          html_select += '<option value="'+data[i].id+'">'+data[i].nombre+'</option>'
   
          $('#select-semestre2').html(html_select);
   
      });
}