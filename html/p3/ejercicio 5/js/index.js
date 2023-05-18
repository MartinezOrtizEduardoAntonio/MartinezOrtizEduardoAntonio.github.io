
let dog={
    age:3.
};
dog.age=7
console.log(dog);

let varAnchura=prompt("Introduce el valor de la anchura ","20");
let varAltura=prompt("Introduce el valor de la altura ","10");
let varLongitud=prompt("Introduce el valor de la longitud ","50");


/*
    varAnchura=varAnchura ? varAnchura : 1;
    varAltura=varAltura ? varAltura : 1;
    varLongitud=varLongitud ? varLongitud : 1;
*/



let bandAncho,bandAlto,bandLargo; 
var strError="Los valores no son correctos: ";

bandAncho=varAnchura ? true : false;
bandAlto=varAltura ? true : false;
bandLargo=varLongitud ? true : false;

if(!bandAncho){
    strError+="\n - anchura";
}
if(!bandAlto){
    strError+="\n - alto";
}
if(!bandLargo){
    strError+="\n - largo";
}

if(bandAncho && bandAlto && bandLargo){
    alert("el volumen de la caja es de :"+(varAnchura*varAltura*varLongitud)+"unidades cubicas");
}
else{
    alert(strError);
}