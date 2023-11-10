$("#gafete, #gafete2").on("click", function () {
  var bool = $("#check").is(":checked");
  var bool2 = $("#check2").is(":checked");
  if (bool == false) {
    swal.fire({
      icon: "warning",
      title: "Favor de aceptar las condiciones para continuar",
    });
    return;
  }

  if (bool2 == false) {
    swal.fire({
      icon: "warning",
      title: "Favor de autorizar la captura y uso de su imagen para la difusión y promoción de materiales",
    });
    return;
  }

  window.location.assign("./plataforma/" + red + "/" + anio + "/inicio");
});
