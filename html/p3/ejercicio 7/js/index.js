/*
                                EJERCICIO I
*/
console.log("for");
for(var i=100;i>=0;i-=10){
    console.log(i);
}

console.log("while");
var i=100;
while(i>=0){
    console.log(i);
    i-=10;
}

console.log("do while");
i=100;
do{
    console.log(i);
    i-=10;
}while(i>=0);


//for infinito
console.log("for infinito");
var num=100;
for(;;){
    console.log(num);
    if(num>0){
        num-=10;
    }
    else break
}


/*
                                EJERCICIO II
*/
let numI=Number.parseFloat(prompt("Introduce el valor inicial ","10"));
let numF=Number.parseFloat(prompt("Introduce el valor final","10"));
let stp=Number.parseFloat(prompt("Introduce el valor del cambio (incremento/decremento)","1"));
let r="";


console.log("Ejercicio 2");
if(Number.isNaN(numI) || Number.isNaN(numI) || Number.isNaN(stp)){
    alert("Los valores deben ser numericos");
}
else{
    let banDec=(numI>numF) ,banInc=(numI<=numF);
    for(;;){
        if(stp>0){
            if(banDec){
                if (numI>=numF){
                    r+=numI+"\n";
                    console.log(numI);
                    numI-=stp
                }
                else break
            }
            else{
                if (numI<=numF){
                    r+=numI+"\n";
                    console.log(numI);
                    numI+=stp
                }
                else break
            }   
        }
    }
    alert("el resultado es: \n"+r);
}
