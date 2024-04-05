<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Practica3</title>
    </head>
    <body>
        <h1>Alta de productos</h1>
        <form action="altaproducto.php" method="post">
            <label>Folio</label>
            <input type="text" name="folio" id="folio" placeholder="Coloque el numero de folio"><br><br>
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Coloque el nombre del producto"><br><br>
            <label>Existencias</label>
            <input type="text" name="existencia" id="existencia" placeholder="Coloque la cantidad de producto en almacen"><br><br>
            <label>Precio de venta</label>
            <input type="text" name="precio" id="precio" placeholder="Coloque el precio de venta en decimales con punto"><br><br>
            <label>Precio de fabricacion</label>
            <input type="text" name="costo" id="costo" placeholder="Coloque el precio de fabricacion en decimales con punto"><br><br>
            <input type="submit" name="submit" id="submit" value="Agregar">
        </form>
    </body>
</html>