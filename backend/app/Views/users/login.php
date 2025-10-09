<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Lia's Coffee</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body class="auth-body">
  <div class="auth-container">
    <h2>Welcome Back ☕</h2>
    <form action="/login/authenticate" method="post">
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" class="btn-primary">Sign In</button>
      <p>Don’t have an account? <a href="/signup">Sign up</a></p>
    </form>
  </div>
</body>
</html>
