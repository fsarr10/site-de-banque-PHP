<!DOCTYPE html>
<html>
<head>
    <title>Authentification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        header {
            background: linear-gradient(to right, #ff0000, #0000ff);
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="container mt-4">
        <div class="d-flex flex-column align-items-center">
            <div class="text-center">
                <h1 class="display-4">Authentification</h1>
            </div>
        </div>
    </header>

    <div class="container text-center">
    
        <form method="post" action="authentification.php">
            <div class="form-group text-center">
                <label for="numcompte">Numcompte :</label>
                <input type="text" id="numcompte" name="numcompte" class="form-control col-2 mx-auto" placeholder="Numero de compte" required>
            </div>

            <div class="form-group text-center">
                <label for="code">Code :</label>
                <input type="password" id="code" name="code" class="form-control col-2 mx-auto" placeholder="code" required>
            </div>

            <button class="btn btn-success" type="submit">Se connecter</button>
            <p></p>
            <p>Pas encore de compte? <a href="creation_client.php">Créer un compte</a></p>
        </form>
    </div>
</body>
</html>

