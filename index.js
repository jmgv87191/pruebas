$(document).ready(function(){

    let input_buscar = document.querySelector("#search");
    let mensaje = "";

    input_buscar.addEventListener('input',()=>{
        mensaje = input_buscar.value

        $.ajax({
            type: "post",
            url: "./php/buscar.php",
            data: {mensaje},
            succcess: function(respuesta){
                console.log(respuesta)
            }
        })



    })


})