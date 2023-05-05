<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="<?php echo base_url("librerias/bootstrap/css/bootstrap.min.css")?>">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> <!-- DataTables -->
    <!--<script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>-->
    <title>Lista de asistencia</title>
</head>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
    left: 50%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

button{
    margin-left: 50%;
    transform: translateX(-50%);
}


.searchdiv{
    position: absolute;
    top: -15px;
    left: 56%;
}

.tabla{
    position: relative;
}

/*.dataTables_filter, .dataTables_info { display: none; }*/

</style>
<body>
    
<h1>Lista de asistencia</h1>


<div class="tabla">
    <!--<div id="searchdiv" class="searchdiv" style="width: 60%;margin: auto;">-->
    <!--    <label for="s" class="assistive-text">Buscar</label>-->
    <!--    <input type="search" class="txt-search" placeholder="Buscar..." name="search" id="search" onkeyup="buscar_participante()">-->
    <!--</div>-->
    
    <br>
    <div class="container">
        <table style="margin: 0 auto;" class="display" id="asistencia">
        <thead>
            <tr>
                <th style="width: 100px;">ID</th>
                <th style="width: 400px;">Nombre</th>
                <th style="width: 200px;">Red</th>
                <th style="width: 200px;">Cuerpo académico</th>
                <th style="width: 200px;">Año</th>
                <th style="width: 200px;">Gafete</th>
                <th style="width: 200px;">Contraseña de ponencia</th>
                <th style="width: 200px;">Clave de ponencia</th>
                <th style="width: 200px;">Código de ponencia IQuatro</th>
                <th style="width: 200px;">Tipo de asistencia registrado</th>
                <th style="width: 200px;">Asistencia presencial</th>
                <th style="width: 200px;">Kit presencial</th>
                <th style="width: 200px;">Asistencia virtual</th>
                <th style="width: 200px;">Kit virtual</th>
            </tr>
        </thead>
        <tbody id="datos_participantes">
            
        </tbody>
    </table>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>


<script>
    var base_url = "<?php echo base_url()?>/";

    $(document).ready(function () {
    tabla = $('#asistencia').DataTable({            
        "lengthChange": false,
        "scrollX":true,
        "autoWidth": false,
        responsive: false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "ajax": {
                    type:"POST",
                    url:base_url + "MainController/getParticipantes",
                    dataSrc:"",
                    data:""
                },
                "columns":[
                    {
                        "data":"id"
                    },
                    {
                        "data":"nombre"
                    },
                    {
                        "data":"red"
                    },
                    {
                        "data":"claveCuerpo"
                    },
                    {
                        "data":"anio"
                    },
                    {
                        "data":"clave_gafete"
                    },
                    {
                        "data":"password_ponencia"
                    },
                    {
                        "data":"clave_ponencia"
                    },
                    {
                        "data":"codigo_ponencia"
                    },
                    {
                        "data":"tipo_asistencia"
                    },
                    {
                        "data":"Asistencia_presencial"
                    },
                    {
                        "data":"Kit_presencial"
                    },
                    {
                        "data":"Asistencia_virtual"
                    },
                    {
                        "data":"Kit_virtual"
                    }
                ]
    });
});


    var fecha = "";
    setInterval(actualizar, 2000);
 
    function actualizar(){
        $.ajax({
            url: base_url + "/MainController/actualizarDatos",
            type: "POST",
            data:{
                "fecha": fecha
            }, 
            success: function(resp){
                var resultado = JSON.parse(resp);
                console.log(resultado);
                if(resultado["resultado"] == "actualizarFecha"){ // damos un valor a la variable global fecha y traemos los datos de la base de datos
                    fecha = resultado["ultima_fecha"];
                    tabla.ajax.reload(null, false);
                }else{
                    if(resultado["resultado"] == "existe_actualizacion"){
                        
                        fecha = resultado["ultima_fecha"];
                        tabla.ajax.reload(null, false);
                    }
                }
            },
            statusCode: {
                400: function(xhr){
                    
                }
            }
        })
    }
    
       function asistencia(id){
      $.ajax({
            url:"MainController/asistencia",
            type: "POST",
            data:{
                "id": id
            }, success: function(resp){
                // $('#asistencia').DataTable();
                tabla.ajax.reload(null, false);
                },
                statusCode: {
                    400: function(xhr){
                    }
                }
        })
        
   }
   
   function eliminar_asistencia(id){
       $.ajax({
            url:"MainController/eliminar_asistencia",
            type: "POST",
            data:{
                "id": id
            }, success: function(resp){
                // $('#asistencia').DataTable();
                tabla.ajax.reload(null, false);
                },
                statusCode: {
                    400: function(xhr){
                    }
                }
        })
   }
   
   function kit(id){
      $.ajax({
            url:"MainController/kit",
            type: "POST",
            data:{
                "id": id
            }, success: function(resp){
                // $('#asistencia').DataTable();
                tabla.ajax.reload(null, false);
                },
                statusCode: {
                    400: function(xhr){
                    }
                }
        })
   }
   
   function eliminar_kit(id){
       $.ajax({
            url:"MainController/eliminar_kit",
            type: "POST",
            data:{
                "id": id
            }, success: function(resp){
                // $('#asistencia').DataTable();
                tabla.ajax.reload(null, false);
                },
                statusCode: {
                    400: function(xhr){
                    }
                }
        })
   }
   
   function kit_virtual(id){
      $.ajax({
            url:"MainController/kit_virtual",
            type: "POST",
            data:{
                "id": id
            }, success: function(resp){
                // $('#asistencia').DataTable();
                tabla.ajax.reload(null, false);
                },
                statusCode: {
                    400: function(xhr){
                    }
                }
        })
   }
   
   function eliminar_kit_virtual(id){
       $.ajax({
            url:"MainController/eliminar_kit_virtual",
            type: "POST",
            data:{
                "id": id
            }, success: function(resp){
                // $('#asistencia').DataTable();
                tabla.ajax.reload(null, false);
                },
                statusCode: {
                    400: function(xhr){
                    }
                }
        })
   }
</script>

</body>
</html>