<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
<main>

<?php 
    $usuarios = array(
        array(1038768186,"Luis","Lopez",3186545764,"glopez@gmail.com"),
        array(1038770197,"James","Lopez",318200200,"jameslopez@gmail.com"),
        array(1038769452,"Cristina","Restrepo",3128933359,"krizzruiz@gmail.com"),
        array(98508124,"Ivan","Lopez",3196228191,"joseivan@gmail.com")

    );
?>
<table class="table table-danger">
  <thead class="table table-dark">
    <tr>
      <th scope="col">Documento</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
     
    </tr>
  </thead>
  <tbody>
   <?php foreach($usuarios as $usuario):?>
   
    <tr>
      <th scope="row"><?php echo($usuario[0])?></th>
      <td><?php echo($usuario[1])?></td>
      <td><?php echo($usuario[2])?></td>
      <td><?php echo($usuario[3])?></td>
      <td><?php echo($usuario[4])?></td>
    </tr>
    
    <?php endforeach ?>
    
  </tbody>
</table>
</main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>