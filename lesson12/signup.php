<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div class="signup">
        <form action="form-signin" action="register.php" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

            <label for="inputName" class="sr-only">Name</label>
            <input type="text" id="inputName" class="form-control" placeholder="Name" name="name" required autofocus>

            <label for="inputSurname" class="sr-only">Surname</label>
            <input type="text" id="inputSurname" class="form-control" placeholder="Surname" name="surname" required autofocus>

            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username" required autofocus>

            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="Password" name="password" required autofocus>

            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>

            <small>Already have account?<a href="login.php">Log in</a></small>

            <p class="mt-5 mb-3 text-muted">Digital School &copy; 2023</p>
        </form>
    </div>
    
    <script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>