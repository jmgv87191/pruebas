$(document).ready(function(){
    let input_buscar = document.querySelector('#search');
    let enviar_mensaje = "";

    input_buscar.addEventListener('input',()=>{
        enviar_mensaje = input_buscar.value;

        $.ajax({
            type:"post",
            url: "php/buscar.php",
            data: { enviar_mensaje },
            success: function(respuesta){
                console.log(respuesta)
            }
        })


    })



})