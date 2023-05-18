function sumarCuadrado(){
    var b=document.getElementById("varBase").value;
    var a=document.getElementById("varAltura").value;
    total=a*b;

    document.getElementById("varArea").value=total
}

function sumarCubo(){
    sumarCuadrado()
    var area=document.getElementById("varArea").value;
    var p=document.getElementById("varProfundidad").value;
    total=p*area;

    document.getElementById("varVolumen").value=total;
}


function calcularAreaCubo(){
    var aristas=document.getElementById("varArista").value**2;
    document.getElementById("varAreaCubo").value=aristas;
}

function calcularVolumenCubo(){
    var aristas=document.getElementById("varArista").value**2*2;
    document.getElementById("varVolumenCubo").value=aristas;
}

function calcularCudrados(){
    calcularAreaCubo();
    calcularVolumenCubo();
}

function geoLocation(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
    }
    else{
        alert("geolocalizacion no soportada por el navegador...");
    }
}

function showPosition(position){
    document.getElementById("data").innerHTML="latitud: "+position.coords.latitude;
    document.getElementById("map").innerHTML="<br>latitud: "+position.coords.longitude;
    var latlon=position.coords.latitude+","+position.coords.longitude;
    latlon="22.1222460,-100.984250";
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg";
    document.getElementById("map").innerHTML="<img src='"+img_url+"'>"
}

function aumentaContador(){
    if(typeof(Storage)!="undefined"){
        if(localStorage.contador_1){
            localStorage.contador_1++;
        }
        else{
            localStorage.contador_1=1;
        }

        document.getElementById("contador_1").value=localStorage.contador_1;
    }
    else{
        alert("Almacenamiento no soportado por el navegador");
    }
}

function aumentaContador2(){
    if(typeof(Storage)!="undefined"){
        if(sessionStorage.contador_2){
            sessionStorage.contador_2++;
        }
        else{
            sessionStorage.contador_2=1;
        }
        document.getElementById("contador_2").value=sessionStorage.contador_2;
    }
    else{
        alert("Almacenamiento no soportado por el navegador");
    }
}