
function ImprimirDatos(){
    let nombre = (document.getElementById('nombre').value)

    if(nombre === ""){
        alert("Señor no puede imprimir el campo vació, o que algun problema")
    }else{
        document.getElementById('resultado').innerHTML = nombre

    }

}