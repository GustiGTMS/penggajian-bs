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
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Tambah data penggajian</h2>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="bg-dark text-white" class="card-body">
                    <div class="form-group row">
                        <div class="row mb-3 mt-3" >
                            
                            <label style="color: dark;" class="col-2">ID</label>
                            <div class="col-10 mb-3">
                                <input name="id" class="form-control" type="number" placeholder="Isikan ID">
                            </div>

                            <label style="color: dark;" class="col-2">Karyawan NIK</label>
                            <div class="col-10 mb-3">
                                <input name="karyawan_nik" class="form-control" type="number" placeholder="Isikan Karyawan NIK">
                            </div>

                            <label style="color: dark;" class="col-2">Tahun</label>
                            <div class="col-10 mb-3">
                                <input name="tahun" class="form-control" type="number" placeholder="Isikan Tahun">
                            </div>
                            <label style="color: dark;" class="col-2">Bulan</label>
                            <div class="col-10 mb-3">
                                <input name="bulan" class="form-control" type="number" placeholder="Isikan Bulan">
                            </div>
                            <label style="color: dark;" class="col-2">Gaji bayar</label>
                            <div class="col-10 mb-3">
                                <input name="gaji_bayar" class="form-control" type="number" placeholder="Isikan Gaji bayar">
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