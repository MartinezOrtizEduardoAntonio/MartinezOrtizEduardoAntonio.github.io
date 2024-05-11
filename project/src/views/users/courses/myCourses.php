<?php
    //Solamente el administrador va a poder dar de alta a usuarios
    require_once '../../../lib/database.php';
    require_once '../../../lib/show.php';
    require_once '../../../partials/navbar.php';
    session_start(); //activate the session 


    $connection = connection_with_database();
    $query = "SELECT course.id, course.name, course.description, course.link, course.prices, course.status, course.available_date, course.available_time, course.id_teacher FROM my_course INNER JOIN course ON my_course.id_course = course.id 
    WHERE my_course.id_users = '{$_SESSION['user_id']}'";
    $result = mysqli_query($connection, $query) or die("Error al consultar usuario: " . mysqli_error());
?>

<div class="container">
    <label for="">My course</label>
    <hr>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th></th>
                <th>prices</th>
                <th>Activate</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($values = mysqli_fetch_array($result)){
                    $status = $values['status'] == 1 ? "true" : "false";

                    echo "
                        <tr>
                            <td>{$values['name']}</td>
                            <td>{$values['description']}</td>
                            <td>
                                <video width='320' height='180' controls>
                                    <source src='{$values['link']}' type='video/mp4'>
                                </video>
                            </td>
                            <td>{$values['prices']}</td>
                            <td>{$status}</td>
                            <td><button class='btn btn-secondary' onclick=\"print_facture('{$values['name']}', '{$values['description']}', '{$values['prices']}', '{$values['available_date']}')\">Print Ticket</button></td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</div>


<script>
function print_facture(name, description, price, date) {
    // Definir la estructura del documento PDF
    var docDefinition = {
        content: [
            { text: 'Factura', style: 'header' },
            { text: `Name: ${name}` },
            { text: `Description: ${description}` },
            { text: `Price: ${price}` },
            { text: `Date: ${date}` }
        ],
        styles: {
            header: {
                fontSize: 18,
                bold: true,
                margin: [0, 0, 0, 10]
            }
        }
    };

    // Generar el documento PDF
    pdfMake.createPdf(docDefinition).download('factura.pdf');
}

</script>
<?php
    require_once '../../../partials/footer.php';
?>