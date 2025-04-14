<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Event</h2>
    <form method="post" action="<?php echo site_url('event/update/'.$event->id); ?>">
        <div class="mb-3">
            <label class="form-label">Judul:</label>
            <input type="text" name="title" value="<?php echo $event->title; ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi:</label>
            <textarea name="description" required class="form-control"><?php echo $event->description; ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal:</label>
            <input type="date" name="date" value="<?php echo $event->date; ?>" required class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lokasi:</label>
            <input type="text" name="location" value="<?php echo $event->location; ?>" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
