<!DOCTYPE html>
<html>
<head>
    <title>Event Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Tambah Event</h2>
    <form method="post" action="<?php echo site_url('event/store'); ?>">
        <div class="mb-3">
            <label class="form-label">Judul:</label>
            <input type="text" name="title" required class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi:</label>
            <textarea name="description" required class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal:</label>
            <input type="date" name="date" required class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lokasi:</label>
            <input type="text" name="location" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
</body>
</html>
