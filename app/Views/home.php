<?= $this->extend('layout/template'); ?>
<?= $this->section('top-content'); ?>
<div class="text-light p-5 bg-success" id="playlist">
    <div class="row align-items-end g-0">
        <div class="col-2">
            <img src="album.png" alt="" width="100%">
        </div>
        <div class="col text-capitalize mx-3">
            playlist <br>
            <span class="text-capitalize lato-700 h1">Liked Songs</span><br>
            <span class="lato-700">Muhammad Ariiq Fiezayyan</span> - <?= count($songs); ?> songs
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('container'); ?>
<table class="table table-borderless align-middle" id="songs">
    <thead>
        <tr class="text-capitalize border-bottom">
            <th scope="col" class="text-success">#</th>
            <th scope="col" class="text-success">title</th>
            <th scope="col" class="text-success">album</th>
            <th scope="col" class="text-success">data added</th>
            <th scope="col" class="text-success">duration</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($songs as $key => $song) : ?>
            <tr>
                <th scope="row"><?= $key + 1; ?></th>
                <td>
                    <div class="row g-0">
                        <div class="col-auto">
                            <img src="album.png" alt="" width="50">
                        </div>
                        <div class="col-auto">
                            <div class="mx-2">
                                <a href="<?= base_url('/track/' . $song['id']); ?>" class="text-decoration-none text-dark"><?= $song['title']; ?></a><br>
                                <?= $song['singer']; ?>
                            </div>
                        </div>
                    </div>
                </td>
                <td><?= $song['album']; ?></td>
                <td>1 week ago</td>
                <td>4:49</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection(); ?>