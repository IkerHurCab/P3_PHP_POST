document.addEventListener('DOMContentLoaded', function () {
    const formulario = document.getElementById('formulario_emociones');
    let estadoEmocional = document.getElementById('estado_emocional');
    const colorGuardado = localStorage.getItem('colorFondo');
    if (colorGuardado) {
        document.body.style.backgroundColor = colorGuardado;
    }

    formulario.addEventListener('submit', function (event) {
        if (estadoEmocional.value === "") {
            alert("Por favor selecciona un estado emocional.");
            event.preventDefault(); 
        } else {
            cambiarColorDeFondo(estadoEmocional.value);
            localStorage.setItem('colorFondo', document.body.style.backgroundColor);
        }
    });

    function cambiarColorDeFondo(estado) {
        const colores = {
            "Feliz": "yellow",       
            "Triste": "lightblue",       
            "Energético": "orange",    
            "Relajado": "limegreen",      
            "Inspirado": "purple",     
            "Estresado": "red"      
        };

        document.body.style.backgroundColor = colores[estado];
    }
});
