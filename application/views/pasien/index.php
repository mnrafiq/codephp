<div class="col-md-12">
    <h3>
        Daftar Pasien
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nilai BMI</th>
                <th>Status BMI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($list_pasien as $pasien) {
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$pasien->kode?></td>
                <td><?=$pasien->nama?></td>
                <td><?=$pasien->gender?></td>
                <td><?=$pasien->tmp_lahir?></td>
                <td><?=$pasien->tgl_lahir?></td>
                <td><?=$pasien->nilai_bmi?></td>
                <td><?=$pasien->status_bmi?></td>
            </tr>
            <?php
                 $nomor++;
                 }
            ?>
        </tbody>
    </table>
</div>