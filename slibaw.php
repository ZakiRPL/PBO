<?php
require 'anjir.php';

$ki = query ("SELECT * FROM nilai");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slibaww</title>
</head>
<body>
    <h1>DATA NILAI</h1>
    <table border="1">
        <thead>
            <th>no</th>
            <th>nama</th>
            <th>kelas</th>
            <th>mapel</th>
    <?php $o = 1;?>
    <?php foreach ($ki as $yu) :?>
    </thead>
    <tbody>
        <tr>
            <td><?= $o;?></td>
            <td><?php echo $yu ['nama'];?></td>
            <td><?php echo $yu ['kelas'];?></td>
            <td><?php echo $yu ['mapel'];?></td>
    </tr>
    <?php $o++?>
<?php endforeach;?>
    </tbody>
    </table>
</body>
</html>