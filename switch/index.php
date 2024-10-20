<!DOCTYPE html>
<html>
<body>
<?php
$favGenre = "rock"; 
switch ($favGenre) {
  case "classic":
    echo "Genre lagu favorit Anda adalah classic!";
    break;
  case "jazz":
    echo "Genre lagu favorit Anda adalah jazz!";
    break;
  case "rock":
    echo "Genre lagu favorit Anda adalah rock!";
    break;
  case "romance":
    echo "Genre lagu favorit Anda adalah romance!";
    break;
  default:
    echo "Genre lagu favorit Anda tidak terdaftar!";
}
?>
 
</body>
</html>