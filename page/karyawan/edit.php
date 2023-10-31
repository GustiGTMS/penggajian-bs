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

<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM karyawan WHERE NIK = '$id'")->fetch_array();
?>

<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Edit Data Karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="bg-dark text-white" class="card-body">
                    <div class="form-group row">
                        <div class="row mb-3 mt-3" >
                            
                            <label style="color: dark;" class="col-2">NIK</label>
                            <div class="col-10 mb-3">
                                <input name="NIK" class="form-control" type="number" placeholder="Isikan NIK" value="<?=$data['NIK'] ?>" readonly>
                            </div>

                            <label style="color: dark;" class="col-2">Nama</label>
                            <div class="col-10 mb-3">
                                <input name="NAMA" class="form-control" type="text" placeholder="Isikan Nama" value="<?=$data['NAMA'] ?>">
                            </div>

                            <label style="color: dark;" class="col-2">Tanggal Mulai</label>
                            <div class="col-10 mb-3">
                                <input name="tanggal_mulai" class="form-control" type="date" placeholder="Isikan Tanggal mulai" value="<?=$data['tanggal_mulai'] ?>">
                            </div>
                            <label style="color: dark;" class="col-2">Gaji Pokok</label>
                            <div class="col-10 mb-3">
                                <input name="gaji_pokok" class="form-control" type="number" placeholder="Isikan gaji pokok" value="<?=$data['gaji_pokok'] ?>">
                            </div>

                            <label style="color: dark;" class="col-2">Status Karyawan</label>
                            <div class="col-10 mb-3">
                                <select class="form-control" id="" name="status_karyawan">
                                    <option value="TETAP"<?= $data['status_karyawan'] =='TETAP' ? "selected" : ""?>>TETAP</option>
                                    <option value="MAGANG"<?= $data['status_karyawan'] =='MAGANG' ? "selected" : ""?>>MAGANG</option>
                                    <option value="KONTRAK"<?= $data['status_karyawan'] =='KONTRAK' ? "selected" : ""?>>KONTRAK</option>
                                </select>
                            </div>

                            <label style="color: dark;" class="col-2">Bagian</label>
                            <div class="col-10 mb-3">
                                <select class="form-control" name="bagian_id">
                                    <option value="">>>Pilih<<</option>
                                    <?php
                                    $bagian = $koneksi->query("SELECT * FROM bagian");

                                    foreach($bagian as $row){
                                    ?>
                                    <option value="<?= $row['id']?>"
                                    <?php if ($row['id'] == $data['bagian_id']) {
                                        echo "selected";
                                    } ?>
                                    ><?= $row['nama']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Test Anda Bukan Robot</label>
                    </div>
                    <button type="submit" name="edit" class="btn-success">
                    Edit
                    </button>
                </div>
            </div>
        </form>
    </section>
</body>
<!--End card-->
<?php
    include '../../templates/script.php';
    ?>
</html>

<script>
    new DataTable('#example');
</script>