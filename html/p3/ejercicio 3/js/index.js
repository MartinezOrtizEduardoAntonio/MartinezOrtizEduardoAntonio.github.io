
//boleans
let varBoolean_1=true;
let varBoolean_2=Boolean(false);
let varBoolean_3=Boolean(1);
let varBoolean_4=Boolean(Infinity);
let varBoolean_5=Boolean("");
//num
let var_1=25;
let var_2="45";
let var_3=Number(3.1416);
let var_4=Number("3.1416");
let var_5=Number(true);

console.log(typeof var_1,var_2);
console.log(typeof var_2,var_3);
console.log(typeof var_3,var_4);
console.log(typeof var_4,var_5);

let number=Number("3.15");
let inte=BigInt(3);
let str=String(Infinity);
let varUnderfined;


alert(
    "var voolean es de tipo "+ typeof varBoolean_1 + " y su valor es "+varBoolean_1+"\n"+
    "var int es de tipo "+ typeof number + " y su valor es "+number+"\n"+
    "var bigint es de tipo "+ typeof inte + " y su valor es "+inte+"\n"+
    "var str es de tipo "+ typeof str + " y su valor es "+str+"\n"+
    "var underfined es de tipo "+ typeof varUnderfined + " y su valor es "+varUnderfined+"\n"
)


