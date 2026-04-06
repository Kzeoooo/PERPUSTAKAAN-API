<!DOCTYPE html>
<html>
<head>
    <title><?= esc($title) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1><?= esc($title) ?></h1>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= esc($error) ?></div>
            <a href="<?= site_url('books') ?>" class="btn btn-secondary">Kembali</a>
        <?php elseif ($book): ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= esc($book['title'] ?? '-') ?></h5>
                    <p class="card-text"><strong>Penulis:</strong> <?= esc($book['author'] ?? '-') ?></p>
                    <p class="card-text"><strong>Penerbit:</strong> <?= esc($book['publisher'] ?? '-') ?></p>
                    <p class="card-text"><strong>Tahun:</strong> <?= esc($book['year'] ?? '-') ?></p>
                    <p class="card-text"><strong>ISBN:</strong> <?= esc($book['isbn'] ?? '-') ?></p>
                    <p class="card-text"><strong>Stok:</strong> <?= esc($book['stock'] ?? '-') ?></p>
                </div>
            </div>
            <a href="<?= site_url('books') ?>" class="btn btn-secondary mt-3">Kembali ke Daftar Buku</a>
        <?php else: ?>
            <p>Buku tidak ditemukan.</p>
        <?php endif; ?>
    </div>
</body>
</html>
