<?php

$name = "Julien";
$hello = "<h1 class=\"title\">My first PHP page</h1>";

?>

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php echo sprintf('%s %s!', $hello, $name); ?>

</body>
</html>