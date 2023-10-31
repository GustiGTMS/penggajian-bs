<?php
require'../../config/config.php';
require'../../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
<!-- End Navbar -->

<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Karyawan</h2>

    

    <!--card-->
    <section class="container">
        <div class="card">
            <div class="card-header">
            <a href="tambah"  class="btn bg-primary" style=" margin-left:10px; color: white;" >Tambah</a>
            </div>
        
            <div class="card-body shadow-lg p-3 mb-5 bg-body rounded">
                <table style="width:100%" class="table" id="example" class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Mulai</th>
                        <th scope="col">Gaji Pokok</th>
                        <th scope="col">Status Karyawan</th>
                        <th scope="col">Bagian</th>
                        <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $karyawan = $koneksi->query("SELECT * FROM karyawan");
                        while($data = $karyawan->fetch_array()){
                        ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $data['NIK'] ?>
                            <td><?= $data['NAMA'] ?>
                            <td><?= $data['tanggal_mulai'] ?>
                            <td><?= $data['gaji_pokok'] ?>
                            <td><?= $data['status_karyawan'] ?>
                            <td><?= $data['bagian_id'] ?>
                            <td>
                                <a href="edit?id=<?=$data['NIK']?>" class="btn bg-success" style="color: white;" >Edit</a>
                                <a href="proses?id=<?= $data['NIK']?>"  class="btn bg-danger" style="color: white;" >Hapus</a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    </table>
            </div>
        </div>
    </section>
    <!--End card-->
    <?php
    include '../../templates/script.php';
    ?>
</body>


</html>

<script>
    new DataTable('#example');
</script>