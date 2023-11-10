function existeGafete(){
    var clave = $("#clave").val().trim();
    
    if(clave == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Ingrese los datos',
        });
    }else{
        $.ajax({
            url:"./validarGafete",
            type: "POST",
            dataType: "json",
            data: {
                clave: clave
            },
            success: function(resp){
                //console.log(resp);
                window.location.assign(resp); 
            },
            error: function(err) {
                Swal.fire({
                    icon: 'error',
                    title: 'Lo sentimos',
                    text: err.responseText
                })
            }
        })
    }
}
