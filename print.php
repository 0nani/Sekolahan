
<?php



$koneksi = mysqli_connect("localhost","root","","sekolahan");



// mengecek database error atau tidak

if (mysqli_connect_errno()){

    echo "Koneksi database gagal : " . mysqli_connect_error();

}

?>





<html>

<head>

    <title>Data Guru</title>
    <style type="text/css">
        .tandatangan{
            text-align: center; margin-left: 545px;
        }
        @media print {
            body{
                font-size: 11px;
            }
            .tandatangan{
                text-align: center; margin-left: 345px;
            }
        }

</style>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">




</head>
<body>
    <div class="container">
        <div style="text-align: center;">
        <h5>Data Guru SMK Palapa Semarang</h5>
        <h6>T. A 2023/2024</h6>
        <hr width="200px"/>
    </div>




    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="1%">No</th>
                <th>Nama Guru</th>
                <th>Guru Mapel</th>
                <th>Alamat</th>
                <th>Foto</th>
            </tr>
        </thead>
  


<tbody>
    <?php 
    $no = 1;
    $ambildata = mysqli_query($koneksi,"SELECT * FROM guru");
      while($d = mysqli_fetch_array($ambildata)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_guru']; ?></td>
            <td><?php echo $d['guru']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <?php
                if ($d['foto_guru'] == "") { ?>
                <img src="https://via.placeholder.com/500x500.png?text=PAS+FOTO+SISWA" style="width: 100px;height:100px;">
                <?php }else{ ?>
                <img src="foto/<?php echo $d['foto_guru']; ?>" style="width:100px;height:100px;">
                <?php } ?>

            </td>
        </tr>
        <?php
        }
      ?>
</tbody>


    </table>
    <div class="tandatangan">
        <br/>
        <b>Semarang, <?php echo date(' d / M / y'); ?></b>
        <p>Diketahui</p>
        <img src="foto/ttd.png" height="100px" width="100px"/>
        <hr width="200px"/>
        <p>Muslikin, S.Pd</p>
    </div>
    </div>
</body>
<script type="text/javascript">
    window.print();
    </script>
</html>