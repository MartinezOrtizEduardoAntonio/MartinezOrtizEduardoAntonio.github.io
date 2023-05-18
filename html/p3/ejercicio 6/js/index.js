
n=2
n**=3
console.log("false"||false);
//console.log("1"=1);

let num1=Number.parseFloat(prompt("Introduce un numero","20"));
let num2=Number.parseFloat(prompt("Introduce el segundo numero","10"));
let op=prompt("Introduce la operacion que deceas realizar + - / *","+");
resultado=0

function imprimirRespuesta(){
    alert("el resultado de "+num1+op+num2+"="+resultado)
}

function imprimirError(){
    alert("operacion invalida");
}

if (Number.isNaN(num1) || Number.isNaN(num2)){
    imprimirError();
}
else{
    switch(op){
        case "+":
            resultado=num1+num2;
            imprimirRespuesta();
        break;
        case "-":
            resultado=num1-num2;
            imprimirRespuesta();
        break;
        case "/":
            resultado=num1/num2;
            imprimirRespuesta();
        break;
        case "*":
            resultado=num1*num2;
            imprimirRespuesta();
        break;
        default:
            imprimirError();
    }    
}