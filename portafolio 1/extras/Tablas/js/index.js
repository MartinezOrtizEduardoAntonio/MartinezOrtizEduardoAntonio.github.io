var n=20; //número de filas  
//creamos la matriz bidimensional A(n,n)  
var A=new Array(n);  
for (var i=1;i<=n;i++) {  
 A[i] = new Array(n);  
}  
//alimentamos la matriz  
for(i=1;i<=n;i++){  
 for(j=1;j<=i;j++){  
  A[i][j]=combina(i-1,j-1);  
 }  
}  
//imprimimos los resultados  
var texto='';  
for(i=1;i<=n;i++){  
 for(j=1;j<=i;j++){  
  texto+=A[i][j];  
  texto+= " ";  
 }  
 texto+= "<br>";  
}  
document.getElementById("resultado").innerHTML =  
texto;  
//función que calcula el número combinatorio p sobre q  
function combina(p,q){  
 return  Math.round(fact(p)/(fact(q)*fact(p-q)));   
}  
//función que calcula el factorial  
function fact(h){  
 var f=1;  
 if (h!==0){  
  for (k=1;k<=h;k++){  
   f*=k;  
  }  
 }  
 return f;  
}  