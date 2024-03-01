<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body bg-light">
                        <div class="text-center">
                            <h5>Halaman Login</h5>
                        </div>
                        <form action="proses_login.php" method="post" autocomplete="off">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required>
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="password" class="form-control" required>
                                <button type="button" class="btn btn-outline-secondary" id="togglePassword"><i class="far fa-eye-slash"></i></button>
                            </div>
                            <div class="d-grid mt-2">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                        <hr>
                        <p>Belum punya akun ? <a href="register.php">Silahkan Register dulu</a></p>
                        <a href="index.php" class="btn btn-dark">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>UKK 2024</p>
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.innerHTML = type === 'password' ? '<i class="far fa-eye-slash"></i>' : '<i class="far fa-eye"></i>';
        });
    </script>
</body>

</html>
