<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up | Lia's Coffee</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body class="auth-body">
  <div class="auth-container">
    <h2>Create Account ☕</h2>
    <form action="/signup/register" method="post">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" class="btn-primary">Sign Up</button>
      <p>Already have an account? <a href="/login">Sign in</a></p>
    </form>
  </div>
</body>
</html>
