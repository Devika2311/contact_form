<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="validate.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
            <p>Back to homepage <a href="home.php">Click Me </a>
        </form>
    </div>
</body>
</html>

