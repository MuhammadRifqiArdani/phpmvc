<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h3>Data Guru</h3>
                <?php foreach ($data['guru'] as $guru) : ?>
                    <ul>
                        <li><?= $guru['penulis']; ?></li>
                        <li><?= $guru['judul']; ?></li>
                        <li><?= $guru['tulisan']; ?></li>
                    </ul>
                    <?php endforeach; ?>
            </div>
        </div>

    </div>
</body>