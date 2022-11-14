function validar() {
    document.getElementById("mensaje").innerHTML = "";
    let user = document.getElementById("user").value;
    console.log("El usuario es: " + user);
    let pasw = document.getElementById("pasw").value;
    console.log("La contraseña es: " + pasw);
    if (comprobarUser(user)) {
        document.getElementById("mensaje").innerHTML += "El usuario cumple con los requisitos. <br>";
    } else {
        document.getElementById("mensaje").innerHTML += "El usuario no cumple con los requisitos. <br>";
    }
    if(comprobarPasw(pasw)){
        document.getElementById("mensaje").innerHTML += "La contraseña indicada es correcta. <br>";
    }
    
    
}
function comprobarUser(user) {
    letras = 'abcdefghijklmnñopqrstuvwxyz1234567890';
    disparadorUser = false;
    for (let index = 0; index < user.length && disparadorUser == false; index++) {
        const element = user[index];
        if(!letras.includes(element)){
            disparadorUser = true;
        }
        
    }
    if (user == "") {
        disparadorUser = true;
    }
    if (disparadorUser == false) {
        return true;
    }else {
        return false;
    }

}

function comprobarMayus(params) {
    letrasMayus = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
    disparadorMayus = false;
    //Comprobador Mayusculas
    if(!letrasMayus.includes(params)){
            disparadorMayus = true;
    }
    if (!disparadorMayus) {
        return true;
    }else {
        return false;
    }    
}


function comprobarMinus(params) {
    letrasMinus = 'abcdefghijklmnñopqrstuvwxyz';
    disparadorMinus = false;
    if(!letrasMinus.includes(params)){
        disparadorMinus = true;
    }
    if (!disparadorMinus) {
        return true;
    }else {
        return false;
    }
}

function comprobarNum(params) {
    numeros = '1234567890';
    disparadorNumero = false;
    if (!numeros.includes(params)) {
            disparadorNumero = true;
    }
    if (!disparadorNumero) {
        return true;
    }else {
        return false;
    }

}

function comprobarCaracterRaro(params) {
    disparadorCaracterRaro = false;
    
    if(params.charCodeAt(0) >= 33 && params.charCodeAt(0) <= 47){
            disparadorCaracterRaro = true;
        }
        if (params.charCodeAt(0) >= 58 && params.charCodeAt(0) <= 64) {
            disparadorCaracterRaro = true;
        }
        if (params.charCodeAt(0) >= 91 && params.charCodeAt(0) <= 96) {
            disparadorCaracterRaro = true;
        }
    if (disparadorCaracterRaro) {
        return true;
    }else {
        return false;
    }

    
}

function comprobarPasw(pasw) {
    
    contieneMayuscula = false;
    contieneMinuscula = false;
    contieneNumero = false;
    contieneCarRaro = false;

    for (let index = 0; index < pasw.length; index++) {
        const element = pasw[index];

        if (comprobarMayus(element)) {
            contieneMayuscula = true;
        }
        if (comprobarMinus(element)) {
            contieneMinuscula = true;
        }
        if (comprobarNum(element)) {
            contieneNumero = true;
        }
        if (comprobarCaracterRaro(element)) {
            contieneCarRaro = true;
        }
    }

    if (contieneMayuscula && contieneMinuscula && contieneNumero && contieneCarRaro) {
        return true;
    }else {
        if (!contieneMayuscula) {
            document.getElementById("mensaje").innerHTML += "La contraseña debe contener una mayusculas. <br>";
        }
        if (!contieneMinuscula) {
            document.getElementById("mensaje").innerHTML += "La contraseña debe contener una minusculas. <br>";
        }
        if (!contieneNumero) {
            document.getElementById("mensaje").innerHTML += "La contraseña debe contener un numero. <br>";
        }
        if (!contieneCarRaro) {
            document.getElementById("mensaje").innerHTML += "La contraseña debe contener un caracter raro. <br>";
        }
        return false;
    }
}