<!DOCTYPE html>
<html>
<head>
    <title>Daftar Akun Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Form Registrasi Mahasiswa</h2>

    <form method="post" action="<?php echo site_url('auth/register_action'); ?>">
        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="name" required class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Username:</label>
            <input type="text" name="username" required class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Password:</label>
            <input type="password" name="password" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>

    <p class="mt-3">Sudah punya akun? <a href="<?php echo site_url('auth/login'); ?>">Login di sini</a></p>
</div>
</body>
</html>
