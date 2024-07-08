<?= $this->extend('layout/template'); ?>
<?= $this->section('top-content'); ?>
<div class="text-light p-5 bg-success" id="headerDetail">
    <div class="row align-items-end g-0">
        <div class="col-2">
            <img src="../album.png" alt="" width="100%">
        </div>
        <div class="col text-capitalize mx-3">
            Lagu <br>
            <span class="text-capitalize lato-700 h1"><?= $song['title']; ?></span><br>
            <?= $song['singer']; ?> - <?= $song['title']; ?> - <?= date('Y', strtotime($song['release'])); ?> - <?= $song['minutes_duration'] ?>:<?= sprintf('%02d', $song['seconds_duration']) ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('container'); ?>
<div id="song" class="mb-5">
    <h5>Track Populer oleh</h5>
    <h3 class="lato-700"><?= $song['singer']; ?></h3>
    <table class="table table-borderless align-middle" id="songs">
        <tbody>
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <tr>
                    <th scope="row"><?= $i + 1; ?></th>
                    <td><?= $song['title']; ?></td>
                    <td>1.000.000</td>
                    <td><?= $song['minutes_duration'] ?>:<?= sprintf('%02d', $song['seconds_duration']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <p>Lihat Semua</p>
</div>
<h3 class="lato-700">Rilis Populer oleh <?= $song['singer']; ?></h3>
<div class="row">
    <?php for ($i = 0; $i < 4; $i++) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="../album.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $song['singer']; ?></h5>
                    <p class="card-text"><?= date('Y', strtotime($song['release'])); ?> - <?= ($i % 2 == 0) ? 'Single' : 'Album'; ?></p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<?= $this->endSection(); ?>