$("#gafete, #gafete2").on("click", function () {
  var bool = $("#check").is(":checked");
  if (bool == false) {
    swal.fire({
      icon: "warning",
      title: "Favor de aceptar las condiciones para continuar",
    });
  } else {
    window.location.assign("./plataforma/"+red+'/'+anio+'/inicio');
  }
});
