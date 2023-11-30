
$(document).ready(function(){

    var fecha = new Date(); //Fecha actual
    var ano = fecha.getFullYear(); //obteniendo año
    var mes = fecha.getMonth()+1; //obteniendo mes
    var dia = fecha.getDate(); //obteniendo dia
    

    $('#fechaActual').val(ano+"-"+mes+"-"+dia);
  
    mostrar_tabla ()
    
    $("#pacientes_alertas").change(function(){
            mostrar_tabla ()
    })

    $("#fechaActual").change(function(){
        mostrar_tabla ()
})

    


$(document).on('click', '.alertas',  function(){
    var ida=$(this).parents("tr").find("td").eq(2).text()
   
    $('#exampleModal').modal('show');
    $('#idAlerta').val(ida);
})

})

function mostrar_tabla(){
  $("#IdTabla").empty()
  var idP=$('#pacientes_alertas').val();
  var f=$('#fechaActual').val();
  var lineatr = ""
  $.ajax({
    url: "buscarDatos.php",
    type: "GET",
    data: {"nameIdPaciente":idP, "nameFecha":f},
    dataType: "json",
    success: function(respuesta){
      
        $.each(respuesta, function (key, value) {
            if (value.cumplida = 'S'){
                lineatr = "<tr class='bg-primary'>"
            }
            else{
                lineatr = "<tr class='bg-secundary'>"
            }

            $("#IdTabla").append(lineatr + 
            "<td>" + "</td>" +
            "<td>" + "</td>" +
            "<td>" + value.id_alerta + "</td>" + 
            "<td>" + value.horario + "</td>" + 
            "<td>" + value.fecha + "</td>" + 
            "<td>" + value.medicamento + "</td>" + 
            "<td>" + value.nombre_apellido + "</td>" +
            "<td>" + value.cumplida + "</td>" + 
            "<td> <button type='button' class='btn btn-primary alertas'><i class='bi bi-arrow-return-right'></i></button></td>" + 
            "</tr>"
            )
        })
    }
})
}
