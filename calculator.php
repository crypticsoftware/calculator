<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
$result = '';

if ($num1 == 1 && $num2 == 1 && $operation == 'add') {
  $result = 'MY POWER IS STRONGER THAN YOU THINK!!!!';
} else {
  if ($operation == 'add') {
    $result = $num1 + $num2;
  } elseif ($operation == 'subtract') {
    $result = $num1 - $num2;
  } elseif ($operation == 'multiply') {
    $result = $num1 * $num2;
  } elseif ($operation == 'divide') {
    if ($num2 == 0) {
      $error = 'Error: Division by zero is undefined.';
    } else {
      $result = $num1 / $num2;
    }
  }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cryptic Calculator - Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center">Cryptic Calculator</h1>
      <?php if (isset($error)) { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
      <?php } else { ?>
        <div class="alert alert-success">The result is: <?php echo $result == 'MY POWER IS STRONGER THAN YOU THINK!!!!' ? $result : $result; ?></div>
      <?php } ?>
      <a href="index.html" class="btn btn-primary">Back to Calculator</a>
    </div>
  </body>
</html>
