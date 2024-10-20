<!DOCTYPE html>
<html>
<body>
<?php  
$days = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
  
for ($b = 0; $b < count($days); $b++) { // Menggunakan count() untuk mendapatkan jumlah elemen
echo "Pada Hari ke-" . ($b + 1) . ": " . $days[$b] . "<br>";
}
?> 
</body>
</html>