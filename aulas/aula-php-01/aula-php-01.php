<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="author" content="Eduardo Ono">
    <meta name="keywords" content="php">
    <title>aula-php-01</title>
  </head>
  <body>
    <p>
      <?php
$a = 1;
$b = 2;
$c = 3;

for ($i = 0; $i < 10; $i++) {
    $a = $a + 1;
    if ($i % 2 == 0) {
        $b = $b + 2;
    } else {
        $b = $b + $a;
    }
}

$c = $a + $b + $c;
echo "$c";
?>
 <br>
    </p>
    
  </body>
</html>
