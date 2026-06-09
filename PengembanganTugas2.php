<!DOCTYPE html>
<html>
<head>
    <title>Tahun 1900 - 2020</title>
    <style>
        table {
            border-collapse: collapse;
            width: 230px;
            margin-top: 10px;
        }
        th, td {
            border: 2px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: white;
            font-weight: bold;
        }
        .kabisat { background-color: red; }
        .genap { background-color: gray; }
        .ganjil { background-color: white; }
    </style>
</head>
<body>
<form method="POST">
    Tahun 
    <input type="number" name="awal" value="<?php echo isset($_POST['awal']) ? $_POST['awal'] : 1900; ?>">
    s/d 
    <input type="number" name="akhir" value="<?php echo isset($_POST['akhir']) ? $_POST['akhir'] : 2020; ?>">
    <input type="submit" name="Input" value="Input">
</form>

<table>
    <tr>
        <th>Tahun</th>
        <th>Keterangan</th>
    </tr>

<?php
if (isset($_POST['Input'])) {

    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];

    for ($tahun = $awal; $tahun <= $akhir; $tahun++) {

        if ($tahun % 4 == 0) {
            $ket = "Kabisat";
            $class = "kabisat";
        } else if ($tahun % 2 == 0) {
            $ket = "Genap";
            $class = "genap";
        } else {
            $ket = "Ganjil";
            $class = "ganjil";
        }

        echo "<tr>
                <td class='$class'>$tahun</td>
                <td class='$class'>$ket</td>
              </tr>";
    }
}
?>
</table>

</body>
</html>