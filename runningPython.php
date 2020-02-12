<!DOCTYPE html>
<html>
<body>

<h1>Here be pythons</h1>

<?php
$output = shell_exec('python r.py');
echo "<p> The python script said </p>";
echo "<pre>$output</pre>";
?>

</body>
</html>