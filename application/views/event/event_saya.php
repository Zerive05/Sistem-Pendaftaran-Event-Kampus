<!DOCTYPE html>
<html>
<head>
    <title>Event yang Saya Ikuti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Event yang Saya Ikuti</h2>
    <a href="<?php echo site_url('event'); ?>" class="btn btn-secondary mb-3">← Kembali ke Semua Event</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Lokasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?php echo $event->title; ?></td>
                <td><?php echo $event->description; ?></td>
                <td><?php echo $event->date; ?></td>
                <td><?php echo $event->location; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
