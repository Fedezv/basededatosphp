var formulario = document.getElementById('formulario');
var campo1 = document.getElementById('campo1');
var campo2 = document.getElementById('campo2');
var campo3 = document.getElementById('campo3');
var campo4 = document.getElementById('campo4');

formulario.addEventListener('submit', rellenarCampos);

function rellenarCampos(){

    var campo1Value = campo1.value;
    var campo2Value = campo2.value;
    var campo3Value = campo3.value;
    var campo4Value = campo4.value;

    if(campo1Value === ''){

        alert('Te faltó llenar el campo Instrumento');

    }
    else{

        alert('Instrumento OK');

    }

    if(campo2Value === ''){

        alert('Te faltó llenar el campo Marca');

    }
    else{

        alert('Marca OK');

    }
    if(campo3Value === ''){

        alert('Te faltó llenar el campo Modelo');

    }
    else{

        alert('Modelo OK');

    }
    if(campo4Value === ''){

        alert('Te faltó llenar el campo Precio');

    }
    else{

        alert('Precio OK');

    }


}