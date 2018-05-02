<html>
<head>
    <title><?php echo $judul; ?></title>
</head>
<body>
    <center><h1>DAFTAR BUKU</center></h1>
    <div align="center">
    <table border="1">
        <thead>
        <tr>
            <th>Kode Buku</th>
            <th>Judul </th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Kategori buku</th>
            <th>Kondisi</th>
            <th>Tanggal Beli</th>
        </tr>
    </thead>
    <tbody>
            <?php
                foreach($user as $a){
        ?>
                <tr>
            <td><?php echo $a->kode_buku; ?></td>
            <td><?php echo $a->judul; ?></td>
            <td><?php echo $a->pengarang; ?></td>
            <td><?php echo $a->penerbit; ?></td>
            <td><?php echo $a->tahun_terbit; ?></td>
            <td><?php echo $a->kategori_buku; ?></td>
            <td><?php echo $a->kondisi; ?></td>
            <td><?php echo $a->tgl_beli; ?></td>
        </tr>
           <?php } ?>
    </tbody>
    </table>
  </div>
</body>
</html>
