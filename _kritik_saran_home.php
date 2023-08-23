<?php
include "koneksi.php";

$sql = "SELECT * FROM tbl_kritik_saran ORDER BY created_date DESC";

$queryKritikSaran = mysqli_query($conn, $sql);
if (mysqli_num_rows($queryKritikSaran) > 0) :
?>
    <header class="section background-dark" style="height: 90%;">
        <h1 class="text-bold text-center" style="font-weight: bold;">Kritik & Saran</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <tbody>
                    <?php while ($row = mysqli_fetch_array($queryKritikSaran)) : ?>
                        <tr>
                            <td><?= strtoupper($row['tipe_layanan']) . ' : ' . $row['kritik'] ?></td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </header>
<?php endif ?>

<style scoped>
    .table-responsive {
        max-height: 350px !important;
        height: 300px !important;
        width: 100%;
        overflow-y: auto;
        border: 2px solid black;
        background-color: #fff;
        border-collapse: collapse;
        font-weight: bold;
    }
</style>

<script type="text/javascript">
    var $el = $(".table-responsive");

    function anim() {
        var st = $el.scrollTop();
        var sb = $el.prop("scrollHeight") - $el.innerHeight();
        $el.animate({
            scrollTop: st < sb / 2 ? sb : 0
        }, 4000, anim);
    }

    function stop() {
        $el.stop();
    }
    
    anim();
    $el.hover(stop, anim);
</script>