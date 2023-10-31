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
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Tambah data karyawan</h2>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="bg-dark text-white" class="card-body">
                    <div class="form-group row">
                        <div class="row mb-3 mt-3" >
                            
                            <label style="color: dark;" class="col-2">NIK</label>
                            <div class="col-10 mb-3">
                                <input name="NIK" class="form-control" type="number" placeholder="Isikan NIK">
                            </div>

                            <label style="color: dark;" class="col-2">Nama</label>
                            <div class="col-10 mb-3">
                                <input name="NAMA" class="form-control" type="text" placeholder="Isikan Nama">
                            </div>

                            <label style="color: dark;" class="col-2">Tanggal Mulai</label>
                            <div class="col-10 mb-3">
                                <input name="tanggal_mulai" class="form-control" type="date" placeholder="Isikan Tanggal mulai">
                            </div>
                            <label style="color: dark;" class="col-2">Tanggal Mulai</label>
                            <div class="col-10 mb-3">
                                <input name="gaji_pokok" class="form-control" type="number" placeholder="Isikan gaji pokok">
                            </div>

                            <label style="color: dark;" class="col-2">Status Karyawan</label>
                            <div class="col-10 mb-3">
                                <select class="form-control" id="" name="status_karyawan">
                                    <option selected>Open this select menu</option>
                                    <option value="TETAP">TETAP</option>
                                    <option value="MAGANG">MAGANG</option>
                                    <option value="KONTRAK">KONTRAK</option>
                                </select>
                            </div>

                            <label style="color: dark;" class="col-2">Bagian</label>
                            <div class="col-10 mb-3">
                                <select class="form-control" name="bagian_id">
                                    <option selected>Open this select menu</option>
                                    <?php
                                    $bagian = $koneksi->query("SELECT * FROM bagian");

                                    foreach($bagian as $row){
                                    ?>
                                    <option value="<?= $row['id']?>"><?= $row['nama']?></option>
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
                    <button type="submit" name="simpan" class="btn-success">
                    Simpan
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