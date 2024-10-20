<!DOCTYPE html>
<html lang="en">
<body>
<?php
// Array data nama, hobi, umur, dan kota
$data = array(
    array("nama" => "Aul", "hobi" => "Menari", "umur" => "22", "kota" => "Jakarta"),
    array("nama" => "Allya", "hobi" => "Memasak", "umur" => "25", "kota" => "Bandung"),
    array("nama" => "Sella", "hobi" => "Bernyanyi", "umur" => "23", "kota" => "Surabaya"),
    array("nama" => "Zahra", "hobi" => "Olahraga", "umur" => "21", "kota" => "Yogyakarta")
);

// Membuat satu tabel dengan field tambahan
echo "<table border='2' style='margin: 20px;'>";
echo "<tr><th>Nama</th><th>Hobi</th><th>Umur</th><th>Kota</th></tr>";
// Looping untuk menampilkan data dalam tabel
foreach ($data as $row) {
    echo "<tr>";
    echo "<td style='padding: 10px;'>" . $row['nama'] . "</td>"; // Nama
    echo "<td style='padding: 10px;'>" . $row['hobi'] . "</td>"; // Hobi
    echo "<td style='padding: 10px;'>" . $row['umur'] . "</td>"; // Umur
    echo "<td style='padding: 10px;'>" . $row['kota'] . "</td>"; // Kota
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
