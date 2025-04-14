<!DOCTYPE html>
<html>


<head>
    <title>Event Kampus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
<div class="container mt-5">
    <h2>Login Mahasiswa</h2>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo site_url('auth/login_action'); ?>" class="mb-4">
        <label>Username:</label><br>
        <input type="text" name="username" required class="form-control mb-2"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required class="form-control mb-2"><br><br>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <!-- Tombol Registrasi -->
    <form action="<?php echo site_url('auth/register'); ?>" method="get" class="mb-4" style="margin-top:10px;">
        <button type="submit" class="btn btn-primary">Daftar Akun Baru</button>
    </form>
</div>
</body>

</html>