<?php
  header('Access-Control-Allow-Origin: *', false);	

  function getParameter ($var) {
    if (isset ($_GET [$var])) {  
      return $_GET[$var];
    }

    if (isset ($_POST [$var])) {  
      return $_POST [$var];
    }
  }

  $numRand = getParameter ("numRand");
  $min = getParameter ("min");
  $max = getParameter ("max");

  $cl = 'python r2.py';
  if ($numRand) {
    $cl .= ' -r '.$numRand;
  }
  if ($min) {
    $cl .= ' -n '.$min;
  }
  if ($max) {
    $cl .= ' -x '.$max;
  }

  //echo $cl;
  $output = shell_exec($cl);

  echo $output;
	

?>  
