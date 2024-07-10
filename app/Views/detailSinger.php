<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');

        body {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .lato-900 {
            font-weight: 900;
        }

        .lato-700 {
            font-weight: 700;
        }
    </style>
    <title><?= $title ?? ''; ?></title>
</head>

<body>
    <div class="bg-green-400 p-20 text-white" id="headerDetail">
        <h6>Artis Terferifikasi</h6>
        <h1 class="uppercase lato-700"><?= $singer['name']; ?></h1>
    </div>
    <hr>
    <div class="mx-96 mt-10">
        <div id="song" class="mb-5">
            <h3 class="lato-700">Populer</h3>
            <table class="table table-borderless" id="songs">
                <tbody>
                    <?php foreach (explode(',', $singer['all_songs']) as $key => $value) : ?>
                        <tr>
                            <td scope="row"><?= $key + 1; ?></td>
                            <td scope="row"><?= rtrim($value, substr($value, -1)); ?></td>
                            <td scope="row">1.000.000</td>
                            <td scope="row">4:50</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>Lihat Semua</p>
        </div>
        <h3 class="lato-700">Tentang</h3>
        <div class="row mb-5">
            <div class="card text-bg-dark">
                <div class="card-body">
                    <img src="{{ asset('singer.jpg') }}" class="card-img-top my-3" alt="..." style="width: 15%; border-radius: 25%">
                    <h5 class="card-title">1.000.000 pendengar bulanan</h5>
                    <p class="card-text"><?= $singer['description'] ?? ''; ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>