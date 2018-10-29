function valida_num(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}



function valida_letra(e){
    tecla = (document.all) ? e.keyCode : e.which;
     
    if (tecla==32){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[A-Za-z]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}



function valida_letra_num(e){
    tecla = (document.all) ? e.keyCode : e.which;
     
    if (tecla==32){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[A-Za-z0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}