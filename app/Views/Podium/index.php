<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
  <title>Podium de ganadores - <?= $red . ' ' . $anio ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <script src="https://kit.fontawesome.com/cd008eda05.js" crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
  <!--<script src="//code.tidio.co/leucsw6pce16vxspleocxkahvrhmtneq.js" async></script>-->
  <!--<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/font_awesome/all.min.css"></link>-->
  <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Roboto:400,700");

    body {
      font-size: 16px;
      /*background: #fafafa;*/
      background-image: url("<?php echo base_url() . "/public/backgrounds/" . $red . ".png" ?>");
      padding: 20px;
    }

    .stars-outer-2022 {
      display: inline-block;
      position: relative;
      font-family: FontAwesome;
    }

    .stars-outer-2022::before {
      content: "\f006 \f006 \f006 \f006 \f006 \f006 \f006";
    }

    .stars-inner-2022 {
      position: absolute;
      top: 0;
      left: 0;
      white-space: nowrap;
      overflow: hidden;
      width: 0;
    }

    .stars-inner-2022::before {
      content: "\f005 \f005 \f005 \f005 \f005 \f005 \f005";
      color: #f8ce0b;
    }

    .stars-outer {
      display: inline-block;
      position: relative;
      font-family: FontAwesome;
    }

    .stars-outer::before {
      content: "\f006 \f006 \f006 \f006 \f006 \f006 \f006 \f006 \f006 \f006";
    }

    .stars-inner {
      position: absolute;
      top: 0;
      left: 0;
      white-space: nowrap;
      overflow: hidden;
      width: 0;
    }

    .stars-inner::before {
      content: "\f005 \f005 \f005 \f005 \f005 \f005 \f005 \f005 \f005 \f005";
      color: #f8ce0b;
    }


    section {
      padding: 50px;
      max-width: 80%;
      margin: 30px auto;
      background: white;
      background: white;
      backdrop-filter: blur(10px);
      box-shadow: 0px 15px 10px rgba(0, 0, 0, 0.3);
      border-radius: 20px;
      transition: transform 0.2s ease-in-out;
    }

    .container {
  display: flex;
  align-items: flex-end;
}

.podium__item {
  width: 100%;
}

.podium__rank {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 35px;
  color: #fff;
}

.podium__city {
  text-align: center;
  padding: 0 .5rem;
}

.podium__number {
  width: 27px;
  height: 75px;
}

.podium .first {
  min-height: 300px;
  background: #ffd700;
}

.podium .second {
  min-height: 200px;
  background: #393b3c;
}

.podium .third {
  min-height: 100px;
  background: #CD7F32;
}
  </style>
</head>

<body>

  <section>
  <h1 class='text-center'>Podium del Congreso <?= $red . ' ' . $anio ?></h1>
    <div class="row text-center">
      <div class="container podium">
        <div class="podium__item">
          <p class="podium__city segundo"></p>
          <div class="podium__rank second"><i class="fa-solid fa-trophy"></i></div>
        </div>
        <div class="podium__item">
          <p class="podium__city primero"></p>
          <div class="podium__rank first">
          <i class="fa-solid fa-trophy"></i>
          </div>
        </div>
        <div class="podium__item">
          <p class="podium__city tercero"></p>
          <div class="podium__rank third"><i class="fa-solid fa-trophy"></i></div>
        </div>
        </>
      </div>
      <div class="row">
        <hr>
        <h2 class="text-center">Mejores ponencias</h2>
      </div>
  </section>

  <section>
    <div class="row">
      <h3>Calificaciones de todas las ponencias</h3>
    </div>
      <div class="table-responsive">
        <table class="table" id="dt_podium">
          <thead>
            <tr>
              <th class="centered">ID</th>
              <th class="centered">Nombre</th>
              <th class="centered">Tipo de registro</th>
              <th class="centered">Clave de universidad</th>
              <th class="centered">Tipo de presentación</th>
              <th class="centered">Calificación</th>
              <th class="centered">IQuatro</th>
              <th class="centered">Ver mas</th>
            </tr>
          </thead>
          <tbody id="tbody_podium">

          </tbody>
        </table>
      </div>
    </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    let red = '<?= $red ?>';
    let anio = '<?= $anio ?>';
  </script>

  <script>
    let dataTable;
    let dataTableIsInitialized = false;
    // Variable para almacenar las filas seleccionadas
    var filasSeleccionadas = [];
    let enviar = $("#enviar");

    const dataTableOptions = {
      scrollC: '2000px',
      lengthMenu: [5, 10, 20, 100, 200, 500, 1000, 5000],
      columnDefs: [{
          className: 'text-center',
          targets: [0,1,2,3,4]
        },
        {
          orderable: false,
          targets: [3,4]
        },
        //{ width: '50%', targets: [0]},
        //{ sercheable: false, targets: [2]} //Quita el buscar en esas columnas

      ],
      rowReorder: {
        selector: 'td:nth-child(2)'
      },
      responsive: true,
      pageLength: 500, //Numero de registros por pagina
      destroy: true, //Decimos que la tabla es destruible
      language: {
        lengthMenu: 'Mostrar _MENU_ registros por página',
        zeroRecords: 'Ningun registro encontrado',
        info: 'Mostrando en _START_ a _END_ de un total de _TOTAL_ registros',
        infoEmpty: 'Ningun registro encontrado',
        infoFiltered: '(filtrados desde _MAX_ registros totales)',
        search: 'Buscar 🔎',
        loadingRecords: 'Cargando...',
        paginate: {
          first: 'Primero',
          last: 'Último',
          next: 'Siguiente',
          previous: 'Anterior'
        }
      },
      serverSide: true,
      processing: true,
      ajax: {
        url: `../getListado/${red}/${anio}`,
        type: 'get',
      },
      columns: [{
          data: 'submission_id'
        },
        {
          data: 'nombre'
        },
        {
          data: 'nombre_congreso'
        },
        {
          data: 'claveCuerpo'
        },
        {
          data: null,
          render: function(row){
            return row.tipo_registro.toUpperCase()
          }
        },
        {
          data: null,
          render: function(data, type, row) {
            if (anio == 2022) {
              //70 es el 100 porciento
              let cienPorciento = 70;
              let prom_star = data.promedio_general * 10;
              let simple_3 = (prom_star * 100) / cienPorciento;
              return `
              <div class="stars-outer-2022" title='Promedio general: ${data.promedio_general} / 7'>
                <div class="stars-inner-2022" title='Promedio general: ${data.promedio_general} / 7' style='width: ${simple_3}%'></div>
              </div>
              / ${data.c_calificaciones}
              `
            } else if(anio == 2023) {
              //70 es el 100 porciento
              let cienPorciento = 100;
              let prom_star = data.promedio_general * 10;
              let simple_3 = (prom_star * 100) / cienPorciento;
              console.log(data.prom_2_antes);
              return `
              <div class="stars-outer" title='Promedio general: ${data.promedio_general} / 10'>
                <div class="stars-inner" title='Promedio general: ${data.promedio_general} / 10' style='width: ${simple_3}%'></div>
              </div>
              / ${data.c_calificaciones}
              `
            }
            //return `<b>${data.promedio_general}</b><small> en base a ${data.c_calificaciones}</small>`
          }
        },
        {
          data: null,
          render: function(data, type, row) {
            return `<a href='https://iquatroeditores.org/revista/index.php/iquatro/workflow/index/${data.submission_id}/1' target='_BLANK' class='btn btn-dark'>Ir a <span class="text-danger">iQ</span>u<span class="text-danger">4</span>tro Editores</a>`
          }
        },
        {
          data: null,
          render: function(data,type, row){
            return `<a href='../ver/${data.submission_id}' class='btn btn-info text-white'>Ver mas <i class="fa-solid fa-plus"></i></a>`
          }
        },
      ],
      initComplete: function(settings, json) {
        if(json.data.length > 0){
          if(typeof json.data[0] !== 'undefined'){
            $(".primero").html(json.data[0]['nombre'])
          }

          if(typeof json.data[1] !== 'undefined'){
            $(".segundo").html(json.data[1]['nombre'])
          }
          
          if(typeof json.data[2] !== 'undefined'){
            $(".tercero").html(json.data[2]['nombre'])
          }
        }
        
      },
    }

    const initDataTable = async () => {
      if (dataTableIsInitialized) {
        dataTable.destroy();
      }

      dataTable = $('#dt_podium').DataTable(dataTableOptions);

      dataTableIsInitialized = true;

      $('#dt_podium tbody').on('click', '.texto-truncado', function() {
        // Obtener el objeto de celda correspondiente al texto truncado
        const cell = dataTable.cell($(this).parent());

        // Obtener el valor completo de la celda
        const fullText = cell.data();

        // Ocultar el tooltip
        $(this).attr('title', '');

        // Mostrar el texto completo
        $(this).text(fullText);

        // Agregar una clase CSS al elemento para indicar que se ha mostrado el texto completo
        $(this).addClass('texto-completo');
      });

      $('#dt_podium tbody').on('click', '.texto-completo', function() {
        // Obtener el objeto de celda correspondiente al texto completo
        const cell = dataTable.cell($(this).parent());

        // Obtener el valor truncado de la celda
        const truncatedText = cell.render('display')

        // Restablecer el texto truncado
        $(this).html(truncatedText);

        // Eliminar la clase CSS del elemento para indicar que se ha restablecido el texto truncado
        $(this).removeClass('texto-completo');
      });


    }

    window.addEventListener('load', async () => {
      await initDataTable();
    })

    function loaderScreen(screen) {
      $(document)
        .ajaxStart(function() {
          screen.fadeIn();
        })
        .ajaxStop(function() {
          screen.fadeOut()
        })
    }

    setInterval(() => {
      //initDataTable()
    }, 5000);
  </script>

</body>

</html>