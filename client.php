<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      body {
          background-image: url(bank4.avif);
          background-size: cover;
           }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold">Client</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class='nav-item active'>
               <a href="versement_client.php"><button class='btn btn-dark rounded-pill' type='submit'>Versement</button></a>
              </li>
              <li class='nav-item active'>
               <a href="retrait_client.php"><button class='btn btn-dark rounded-pill' type='submit'>Retrait</button></a>
              </li>
              <li class='nav-item active'>
               <a href="transfert_client.php"><button class='btn btn-dark rounded-pill' type='submit'>Transfert</button></a>
              </li>
              <li class='nav-item active'>
               <a href="payement.php"><button class='btn btn-dark rounded-pill' type='submit'>Payement</button></a>
              </li>
               <li class='nav-item active'>
               <a href="consultation_client.php"><button class='btn btn-dark rounded-pill' type='submit'>Consultation</button></a>
              </li>
        </ul>
        </div>
        <div class='collapse navbar-collapse' id='navbarNav'>
            <ul class='navbar-nav ml-auto container justify-content-end'>
                <li class='nav-item active'>
                    <a href="index.php"><button class='btn btn-danger rounded-pill' type='submit'>Se déconnecter</button></a>
                </li>
            </ul>
        </div>
 </div>
</nav>
    <div class="container mt-4 text-center">
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Falilou's Bank</h1>
    </div>

</body>
</html>
