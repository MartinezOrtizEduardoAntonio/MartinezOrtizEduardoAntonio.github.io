<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-x7b6e3t+Xq4sPb/dXzPbzIyDpZ7Vpg87O/J1pESCYbOh33PVpUoY7wNKcuO5br+v" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>
      body{
          background-color:#7771;
      }
    .table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }
    
    .table th, .table td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #dee2e6;
    }
    
    .table th {
      background-color: #007bff;
      color: #fff;
    }
    
    .table tbody tr:nth-child(even) {
      background-color: #f8f9fa;
    }
    
    .table-hover tbody tr:hover {
      background-color: #e2e6ea;
    }
    
    .table-striped tbody tr:nth-child(odd) {
      background-color: #f2f2f2;
    }
    
    .container{
        padding-left:8rem;
        padding-right:8rem;
    }
  </style>
</head>
<body>
<br>
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Password</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $server = "127.0.0.1:3306"; 
            $username = "u995592926_ejercicios_web"; 
            $password = "ProgWeb2";
            $database = "u995592926_ejercicios_web"; 
            $connection = new mysqli($server, $username, $password, $database);
            
            $user = $_POST['username'];
            $password = $_POST['password'];
            
            $query = "SELECT * FROM `usuarios` WHERE username = '".$user."' AND pass = '".$password."'";
            echo "<center>".$query."</center><br>";
            echo "<hr>";
            $result = mysqli_query($connection, $query);
    
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['pass'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
            }
            mysqli_close($connection);
        ?>
      </tbody>
    </table>
</div>
</body>
</html>
