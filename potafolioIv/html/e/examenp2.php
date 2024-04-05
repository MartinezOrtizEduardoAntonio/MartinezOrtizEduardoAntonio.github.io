<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>MenuEP2</title>
</head>
<body>
    <h1>Examen Parcial 2</h1>
    <form action="prim50.php" method="post">
        <input type="submit" name="pri50" id="pri50" value="Registros 1 a 50">
    </form>
    <h2>Busqueda por ID</h2>
    <form action="idbuscar.php" method="post">
        <input type="text" name="id" id="id" placeholder="Coloque un numero">
        <br><br>
        <input type="submit" name="idbusc" id="idbusc" value="Busca por ID">
    </form>
    <h2>Dominio Google</h2>
    <form action="dominiogoogle.php" method="post">
        <input type="submit" name="egoogle" id="egoogle" value="Personas con E-mail de google">
    </form>
    <h2>Apellidos Douglas o Mathews</h2>
    <form action="apellidodougmath.php" method="post">
        <input type="submit" name="dougMath" id="dougMath" value="Personas con apellidos Douglas o Mathews">
    </form>
</body>
</html>