<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/login.css">

    <title>Login</title>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="index.php?page=auth&aksi=authAdmin" method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">email</label>
        <input type="email" class="form-control" id="username" name="email_user">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password_user">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </div>
</body>
</html>