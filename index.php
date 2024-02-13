<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-secondary relative bg-img">
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="relative z-10 mx-auto p-4 bg-dark rounded shadow">
            <h4>Login Form</h4>
            <form action="functions/login.php" method="POST" class="form">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="user" name="user">
                    <label for="user">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="pass" name="pass">
                    <label for="pass">Password</label> 
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>
</html>