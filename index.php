<?php
$dataSiswa = [
    [
        "Nama" => "Devin Aufarizqi Zufarino",
        "Alamat" => "Kudus",
        "Foto_Diri" => "devin.jpg"
    ],

    [
        "Nama" => "Maulana Zakky Pahlevi",
        "Alamat" => "Kudus",
        "Foto_Diri" => "zakky.jpeg"
    ],

    [
        "Nama" => "Muhammad Raehan Robban",
        "Alamat" => "Pekalongan",
        "Foto_Diri" => "raehan.jpg"
    ],

    [
        "Nama" => "Muhammad Samy Syafta",
        "Alamat" => "Depok",
        "Foto_Diri" => "samy.jpg"
    ],

    [
        "Nama" => "Rasyid Nafsyarie",
        "Alamat" => "Godong",
        "Foto_Diri" => "rasyid.jpg"
    ],

];





?>

<!DOCTYPE html>
<html lang="en">
<hefluid>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Kelompok 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</hefluid>
<div class="container-fluid ">
    <h1 class="text-center fw-bold mt-5 mb-5">Kelompok 2</h1>
    <table class="table table-bordered border-primary">
        <tr class="table-warning text-center">
            <th>
                Foto Ganteng
            </th>
            <th>
                Nama
            </th>
            <th>
                Alamat
            </th>

        </tr>
        <?php foreach ($dataSiswa as $siswa) : ?>
            <tr class="table-secondary text-center text-wrap">
                <td class="border-rounded">
                    <img src="img/<?= $siswa["Foto_Diri"] ?>" alt="" style="width: 120px" class="mx-auto d-block">
                </td>
                <td>
                    <?= $siswa["Nama"] ?>
                </td>
                <td>
                    <?= $siswa["Alamat"] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<body>

</body>

</html>