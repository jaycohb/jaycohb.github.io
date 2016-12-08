<?php

echo 'Idziesz na impreze? (y/n) <input type="text" name="t"><input type="submit" name="ok" value="Wyślij">';

if(isset($_POST['ok'])){
  $w = $_POST['t'];
  if($w == 'y'){
    echo 'JEEEEEEEEJ, teraz zescreenuj i wyślij na grupę';
  }
  if($w == 'n'){
    echo 'Zły wybór';
  }
}

?>
