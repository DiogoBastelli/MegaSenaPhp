<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">

    
    <h1>Mega Sena</h1>
    
    <form action="megaDestino.php" method= "post"> 

<div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">primeiro numero </span>
    <input type="number" class="form-control" min="1" max="60" name="n1[]" >
</div>
   <br>

   <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Segundo numero </span>
    <input type="number" class="form-control" min="1" max="60" name="n2[]" >
</div>
   <br>

   <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Terceiro numero </span>
    <input type="number" class="form-control" min="1" max="60" name="n3[]" >
</div>
   <br>

   <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Quarto numero </span>
    <input type="number" class="form-control" min="1" max="60" name="n4[]" >
</div>
   <br>

   <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Quinto numero </span>
    <input type="number" class="form-control" min="1" max="60" name="n5[]" >
</div>
   <br>

   <div class="input-group flex-nowrap">
    <span class="input-group-text" id="addon-wrapping">Sexto numero </span>
    <input type="number" class="form-control" min="1" max="60" name="n6[]" >
</div>
   <br>

    <button type= "submit" class= "btn btn-primary w-25 d-block mx-auto">Sortear</button>

<?php  
$numeroSorteado = rand(1,60);
?>

<?php echo $numeroSorteado?>
</div>
</body>

</html>