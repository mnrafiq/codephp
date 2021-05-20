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
                <th>Nilai BMI</th>
                <th>Status BMI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($list_bmi as $bmi) {
            ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$pasien->kode?></td>
                <td><?=$pasien->nama?></td>
                <td><?=$pasien->gender?></td>
                <td><?=$pasien->nilaiBMI?></td>
                <td><?=$pasien->statusBMI?></td>
            </tr>
            <?php
                 $nomor++;
                 }
            ?>
        </tbody>
    </table>
</div>