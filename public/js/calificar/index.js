$(document).on("click", "#btnAccesos", function (e) {
  e.preventDefault();
  let gafete = $("#clave_gafete").val().trim();
  let ponencia = $("#codigo_ponencia").val().trim();

  if (gafete == "" || ponencia == "") {
    Swal.fire({
      icon: "warning",
      title: "Complete correctamente los campos para continuar.",
    });
    return;
  }
  //VALIDAMOS LA INFO CON LA BD

  $.ajax({
    type: "post",
    dataType: "json",
    url: "./verificar",
    data: {
      gafete,
      ponencia,
    },
    success: function (data) {
      console.log(data);
      $("#accesos").submit();
    },
    error: function (jqXHR) {
      Swal.fire({
        icon: "error",
        title: "Lo sentimos",
        text: jqXHR.responseText,
        footer: "Código de error: " + jqXHR.status,
      });
      console.log(jqXHR);
    },
  });
  return;
  $("#accesos").submit();
});

$(function () {
  $('[data-toggle="popover"]').popover();
});
