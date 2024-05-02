<?php
    function show_message($message){
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <!-- Bootstrap CSS -->
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
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
                <h4 class='alert-heading'>$message</h4>
                <hr>
            </div>
        </div>
        
        <!-- Bootstrap JS (opcional si no necesitas funcionalidades de Bootstrap JS) -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
        </body>
        </html>
        ";
    }

    function show_message_error($message){
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <!-- Bootstrap CSS -->
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
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
                <h4 class='alert-heading'>$message</h4>
                <hr>
            </div>
        </div>
        
        <!-- Bootstrap JS (opcional si no necesitas funcionalidades de Bootstrap JS) -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
        </body>
        </html>
        ";
    }
?>