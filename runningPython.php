<!DOCTYPE html>
<html>
<body>

<h1>Here be pythons</h1>

<?php
$output = shell_exec('python r2.py -r 6 -n 1 -x 49');
echo "<p> The python script said </p>";
echo "<pre>$output</pre>";
?>

</body>
</html>
