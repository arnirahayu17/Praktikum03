<?php
    require_once 'class_bmipasien.php';

    $data_bmi = [
        ['nama' => 'Arni', 'umur' => 19, 'jenis_kelamin' => 'perempuan', 'berat' => 55, 'tinggi' => 155],
        ['nama' => 'Ardianto', 'umur' => 22, 'jenis_kelamin' => 'Laki-laki', 'berat' => 65, 'tinggi' => 168],
        ['nama' => 'Arum', 'umur' => 27, 'jenis_kelamin' => 'Perempuan', 'berat' => 75, 'tinggi' => 158],
        ['nama' => 'Ayyub', 'umur' => 20, 'jenis_kelamin' => 'Laki-laki', 'berat' => 56, 'tinggi' => 165],
    ];
    $nomor=1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data BMI Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
body {
    padding: 2rem;
}
</style>
<body>
<div class="container">
    <table class="table table-dark table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Gender</th>
        <th scope="col">Umur</th>
        <th scope="col">Berat (Kg)</th>
        <th scope="col">Tinggi (cm)</th>
        <th scope="col">BMI</th>
        <th scope="col">Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($data_bmi as $tablebmi) {
                $bmi1 = new BmiPasien($tablebmi['nama'], $tablebmi['umur'], $tablebmi['jenis_kelamin'], $tablebmi['berat'], $tablebmi['tinggi']);
                $hasil = $bmi1->hasilBMI();
                $status = $bmi1->statusBMI();
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$bmi1->nama.'</td>';
                echo '<td>'.$bmi1->jenis_kelamin.'</td>';
                echo '<td>'.$bmi1->umur.'</td>';
                echo '<td>'.$bmi1->berat.'</td>';
                echo '<td>'.$bmi1->tinggi.'</td>';
                echo '<td>'.$hasil.'</td>';
                echo '<td>'.$status.'</td>';
                echo '</tr>';
                $nomor++;
            }
        ?>

    </tbody>
    </table>
</div>
</body>
</html>
