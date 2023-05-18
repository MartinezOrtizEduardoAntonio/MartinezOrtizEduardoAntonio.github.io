console.log("Martinez Ortiz Eduardo Antonio");
console.log("18/6/2021");
console.log("---- ---- ----");
console.log(3.12416);
console.log("Martinez Ortiz Eduardo Antonio", "Mi edad es 21");
console.log("----- ---- ----");
console.log("Martinez Ortiz Eduardo Antonio" + "Mi edad es 21");

let x=100,y=50;
alert("El valor de X es "+x+" y el valor de Y es "+y);

function testFunction(){
    let x=3,y=4
    alert("El valor de X es "+x+" y el valor de Y es "+y);
}

testFunction();

/*--------------------------TARREA--------------------------*/
/*A)*/
let precioRosa=8, numRosa=70, tR=precioRosa*numRosa
let lirio=10, cant=50, totalL=lirio*cant
let tulipanCosto=2,cantTulipan=120 , ganancia=tulipanCosto*cantTulipan
let totalCaja=ganancia+totalL+tR
console.log("Rosa>>presio$"+precioRosa+" cantidad "+numRosa+" importe "+tR)
console.log("lirio>>presio$"+lirio+" cantidad "+cant+" importe "+totalL)
console.log("tulipanes>>presio$"+tulipanCosto+" cantidad "+cantTulipan+" importe "+ganancia)
console.log("total: "+totalCaja)

/*B)*/
const pR=8,pL=10,pT=2;
numRosa=70, tR=precioRosa*numRosa
cant=50, totalL=lirio*cant
cantTulipan=120 , ganancia=tulipanCosto*cantTulipan
totalCaja=ganancia+totalL+tR

alert(
    "Rosa>>presio$"+pR+" cantidad "+numRosa+" importe "+tR+
    " \nlirio>>presio$"+pL+" cantidad "+cant+" importe "+totalL+
    " \ntulipanes>>presio$"+pT+" cantidad "+cantTulipan+" importe "+ganancia+
    " \ntotal: "+totalCaja
)


