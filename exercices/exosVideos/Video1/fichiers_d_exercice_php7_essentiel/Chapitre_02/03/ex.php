<?php

$name = "Julien";
$hello = sprintf("Hello %s!", $name);

$number = 5;
$number2 = 10;

echo $number + $number2;

?>

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php echo $hello; ?>

<?php

$name = "Christophe";
$hello = sprintf("Hello %s!", $name);

?>

<?php echo $hello; ?>

</body>
</html>