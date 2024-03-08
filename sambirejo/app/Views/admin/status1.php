<style>
    ul li a[href="status1"] {
    color: white;
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/status.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?= $judul ;?></title>
</head>

<body>

    <div class="grid">
        <div class="table-container">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th style="text-align: center;">Nomor</th>
                        <th style="text-align: center;">Kode Pesanan</th>
                        <th style="text-align: center;">Nama</th>
                        <th style="text-align: center;">No handphone</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Tiket</th>
                        <th style="text-align: center;">Paket</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $counter = 1; foreach ($pesanan as $row): ?>
                        <tr>
                            <td><?= $counter++ ?></td>
                            <td class="bold" style="color: grey;"><?= $row['kode'] ;?></td>
                            <td class="bold"><?= $row['nama'] ;?></td>
                            <td>
                                <a href="https://wa.me/<?= $row['no_hp'] ;?>" target="_blank">
                                    <?= $row['no_hp'] ;?>
                                </a>
                            </td>
                            <td>
                                <a href="mailto:<?= $row['email'] ;?>" target="_blank">
                                    <?= $row['email'] ;?>
                                </a>
                            </td>
                            <td class="bold"><?= $row['tiket'] ;?></td>
                            <td class="bold"><?= $row['paket'] ;?></td>
                            <td style="text-align: center;" class="status">
                                <?php 
                                    if ($row['status']==1) {
                                        echo '<a href="status/status1/'.$row['id'].'" class="btn btn-success">Sudah bayar</a>';
                                    } else {
                                        echo '<a href="status/status1/'.$row['id'].'" class="btn btn-danger">Belum bayar</a>';
                                    }
                                    
                                ;?>
                            </td>
                            <td>
                                <a href="status/delete1/<?= $row['id'] ;?>" class="btn btn-danger"><i class="fa fa-trash" style="font-size:20px;"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <a href="status/deleteAll1" class="btn btn-danger center">Delete All</a>

        <script src="js/detail-table.js"></script>

</body>

</html>