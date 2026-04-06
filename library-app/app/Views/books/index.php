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
        <?php endif; ?>
        
        <form method="get" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari buku..." value="<?= $search ?? '' ?>">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
        
        <?php if (empty($books)): ?>
            <p>Tidak ada buku ditemukan.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($books as $book): ?>
                        <tr>
                            <td><?= $book['id'] ?></td>
                            <td><a href="<?= site_url('books/' . $book['id']) ?>"><?= esc($book['title']) ?></a></td>
                            <td><?= esc($book['author'] ?? '-') ?></td>
                            <td><?= esc($book['publisher'] ?? '-') ?></td>
                            <td><?= esc($book['year'] ?? '-') ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
        
        <a href="<?= site_url('/') ?>" class="btn btn-secondary">Kembali ke Beranda</a>
    </div>
</body>
</html>
