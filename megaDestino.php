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
   

  <?php 
  $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);
  $n2 = filter_input(INPUT_POST, "n2", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);
  $n3 = filter_input(INPUT_POST, "n3", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);
  $n4 = filter_input(INPUT_POST, "n4", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);
  $n5 = filter_input(INPUT_POST, "n5", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);
  $n6 = filter_input(INPUT_POST, "n6", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);
  

  ?>
</body>

</html>