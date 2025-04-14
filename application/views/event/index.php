<!DOCTYPE html>
<html>

<head>
    <title>Event Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <h2>Daftar Event</h2>
    <a href="<?php echo site_url('event/add'); ?>" class="btn btn-sm btn-outline-secondary me-1">+ Tambah Event</a> |
    <a href="<?php echo site_url('pendaftaran/event_saya'); ?>" class="btn btn-sm btn-outline-secondary me-1">Lihat Event Saya</a> |
    <a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-sm btn-outline-secondary me-1">Logout</a>
    <br><br>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php elseif ($this->session->flashdata('info')): ?>
        <p style="color: blue;"><?php echo $this->session->flashdata('info'); ?></p>
    <?php endif; ?>

    <table border="1" cellpadding="8" class="table table-bordered table-striped">
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Jumlah Peserta</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($events as $event): ?>
        <tr>
            <td><?php echo $event->title; ?></td>
            <td><?php echo $event->description; ?></td>
            <td><?php echo $event->date; ?></td>
            <td><?php echo $event->location; ?></td>
            <td><?php echo $event->total_peserta; ?></td>
            <td>
            <a href="<?php echo site_url('event/edit/'.$event->id); ?>" class="btn btn-sm btn-outline-secondary me-1">Edit</a> |
            <a href="<?php echo site_url('event/delete/'.$event->id); ?>" class="btn btn-sm btn-outline-secondary me-1" onclick="return confirm('Hapus event ini?')">Hapus</a> |
            <a href="<?php echo site_url('pendaftaran/daftar/'.$event->id); ?>" class="btn btn-sm btn-outline-secondary me-1">Daftar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
