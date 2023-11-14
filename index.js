let btn_enviar = document.querySelector('#btn_enviar');
let btn_recibir = document.querySelector('#btn_recibir');
let nombre = document.querySelector('#nombre');
let email = document.querySelector('#email');
let enviar = '';

btn_enviar.addEventListener('click',()=>{


    $.ajax({
        type: 'post',
        url: 'conn.php',
        data: { enviar_nombre: nombre.value, enviar_email: email.value },
        success: function( respuesta ){
            console.log(respuesta)
        }
    })




})

/* btn_recibir.addEventListener('click',()=>{

    $.({
        type:'get',
        url: 'conn.php'
    })


}) */