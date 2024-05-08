<?php
    function show_message($message){
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <!-- Bootstrap CSS -->
            <style>
                /* Estilos personalizados aquí */
                body {
                    background-color: #f8f9fa;
                    padding-top: 50px;
                }
                .container {
                    max-width: 600px;
                }
            </style>
        </head>
        <body>
        
        <div class='container'>
            <div class='alert alert-success' role='alert'>
                <h4 class='alert-heading'>" . htmlspecialchars($message) . "</h4>
                <hr>
            </div>
        </div>
        </body>
        </html>
        ";
    }

    function show_message_error($message){
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <style>
                /* Estilos personalizados aquí */
                body {
                    background-color: #f8f9fa;
                    padding-top: 50px;
                }
                .container {
                    max-width: 600px;
                }
            </style>
        </head>
        <body>
        
        <div class='container'>
            <div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>" . htmlspecialchars($message) . "</h4>
                <hr>
            </div>
        </div>
        </body>
        </html>
        ";
    }
?>