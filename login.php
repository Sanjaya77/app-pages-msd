<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="stylesheet">
    <title>Log in</title>
</head>
<body>
    <main class="login">
        <div class="login-box">
            <form id="form" class="form">
                <h2>Sign in</h2>
                <div class="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Enter username" />
                <small>Error message</small>
                </div>
                <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter email" />
                <small>Error message</small>
                </div>
                <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter password" />
                <small>Error message</small>
                </div>
                <div class="form-control">
                <label for="password2">Confirm Password</label>
                <input
                    type="password"
                    id="password2"
                    placeholder="Enter password again"
                />
                <small>Error message</small>
                </div>
                <button class="btn-l mt" type="submit">Submit</button>
            </form>
        </div>
    </main>
    <script src="js/login.js"></script>
  </body>
</body>
</html>