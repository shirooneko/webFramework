<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Film</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama genre</th>
            <th>Dibuat</th>
            <th>Diupdate</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($genre as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $row['nama_genre'] ?></td>
                <td><?php echo $row['created_at'] ?></td>
                <td><?= $row['updated_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>