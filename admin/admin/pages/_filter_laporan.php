<form class="hidden-print" action="" method="POST" id="filter_form">
    <div class="row">
        <div class="col-md-12" style="padding: 0;">
            <label class="text-bold" style="font-size: 2rem;">Filter Data</label>
        </div>
        <div class="col-md-2" style="padding: 0;">
            <div class="form-group me-2">
                <label for="filter_tanggal_pembuatan">Tanggal Pembuatan</label>
                <input class="form-control datepicker" id="filter_tanggal_pembuatan" name="filter_tanggal_pembuatan" placeholder="Filter Tanggal" onchange="this.form.submit()">
            </div>
        </div>
        <div class="col-md-2" style="padding: 0;">
            <div class="form-group me-2">
                <label for="filter_bulan">Bulan Pembuatan</label>
                <select class="form-control" id="filter_bulan" name="filter_bulan" onchange="this.form.submit()">
                    <option selected disabled value="">Filter Bulan</option>
                    <option value="January">Januari</option>
                    <option value="February">Febuari</option>
                    <option value="March">Maret</option>
                    <option value="April">April</option>
                    <option value="May">Mei</option>
                    <option value="June">Juni</option>
                    <option value="July">Juli</option>
                    <option value="August">Agustus</option>
                    <option value="September">September</option>
                    <option value="October">Oktober</option>
                    <option value="November">November</option>
                    <option value="December">Desember</option>
                </select>
            </div>
        </div>
        <div class="col-md-2" style="padding: 0;">
            <div class="form-group me-2">
                <label for="filter_tahun">Tahun Pembuatan</label>
                <select class="form-control" id="filter_tahun" name="filter_tahun" onchange="this.form.submit()">
                    <option selected disabled value="">Filter Tahun</option>
                    <?php for ($i = 2019; $i <= 2023; $i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-12 d-flex inline-block align-items-center">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div class="pull-right">
                    <input type="submit" class="btn-primary" name="reset" value="Reset Filter">
                    <button type="button" class="btn-primary" onclick="window.print()">Print Laporan</button>
                </div>
            </div>
        </div>
    </div>
</form>