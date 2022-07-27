var error1 = document.getElementById('error1');
var error2 = document.getElementById('error2');
var error3 = document.getElementById('error3');
var error4 = document.getElementById('error4');

var formulario = document.getElementById('formulario');
var campo1 = document.getElementById('campo1');
var campo2 = document.getElementById('campo2');
var campo3 = document.getElementById('campo3');
var campo4 = document.getElementById('campo4');

formulario.addEventListener('submit', textoError);

function textoError(event){



    var campo1Value = campo1.value;
    var campo2Value = campo2.value;
    var campo3Value = campo3.value;
    var campo4Value = campo4.value;

    if(campo1Value === '' || null){

        event.preventDefault();
        error1.style.color = 'red';
        error1.textContent = 'Introducí el tipo de instrumento';
    

    }
    else{

        error1.style.color = 'green';
        error1.textContent = 'Dato Correcto';

        

    }

    if(campo2Value === ''){

        event.preventDefault();
        error2.style.color = 'red';
        error2.textContent = 'Introducí la Marca del instrumento';

    }
    else{

        error2.style.color = 'green';
        error2.textContent = 'Dato Correcto';

    }

    if(campo3Value === ''){

        event.preventDefault();
        error3.style.color = 'red';
        error3.textContent = 'Introducí el Modelo de Instrumento';

    }
    else{

        error3.style.color = 'green';
        error3.textContent = 'Dato Correcto';

    }

    if(campo4Value === ''){

        event.preventDefault();
        error4.style.color = 'red';
        error4.textContent = 'Introducí el Precio';

    }
    else{

        error4.style.color = 'green';
        error4.textContent = 'Dato Correcto';

    }
}


