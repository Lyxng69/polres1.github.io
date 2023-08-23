<?php
include "../koneksi.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['postdata'] = $_POST;
    unset($_POST);
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

if (array_key_exists('postdata', $_SESSION)) {
    $id_pengunjung = $_SESSION['id_pengunjung'];
    $tipe_layanan = $_SESSION['postdata']['jenis_layanan'];
    $kritik = $_SESSION['postdata']['kritik'];

    $sqlInsert = "INSERT INTO tbl_kritik_saran VALUES (NULL, '$id_pengunjung', '$tipe_layanan', '$kritik', NOW())";
    $query = mysqli_query($conn, $sqlInsert);

    if ($query) {
        echo "<div class='alert alert-success alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            Kritik & Saran Berhasil di Simpan
        </div>";
    } else {
         //echo '<script>console.log("' . mysqli_error($conn) . '")</script>';

        echo "<div class='alert alert-danger alert-dismissable'>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            Kritik & Saran Gagal di Simpan
        </div>";
    }

    unset($_SESSION['postdata']);
}

?>

<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
        <header class="section background-dark">
            <div class="line">
                <blockquote class="tr_bq text-center">
                    <h1 style="color: black;">Kritik & Saran</h1>
                    <hr>
                    <div class="container p-md">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="" method="POST">
                                    <div class="form-group">
                                        <label for="jenis_layanan" class="control-label col-md-4 text-left">Jenis Layanan</label>
                                        <div class="col-md-8">
                                            <select class="form-control" id="jenis_layanan" name="jenis_layanan">
                                                <option selected disabled value="">Pilih Jenis Layanan</option>
                                                <option value="sim">SIM</option>
                                                <option value="stnk">STNK</option>
                                                <option value="skck">SKCK</option>
                                                <option value="sabhara">Shabara</option>
                                                <option value="perijinan">Perijinan</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_layanan" class="control-label col-md-4 text-left">Kritik</label>
                                        <div class="col-md-8">
                                            <textarea name="kritik" id="kritik" rows="3" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <hr>
                                    <input type="submit" value="Simpan" class="btn-primary" name="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </blockquote>
            </div>
    </article>
</main>