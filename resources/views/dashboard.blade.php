<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bienvenido a Score</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .main-content {
      height: 100vh;
      background-image: url('https://images.unsplash.com/photo-1517336714731-489689fd1ca8?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDF8fHNjb3JlJTIwY29udHJvbGxlcnxlbnwwfHx8fDE2MTA5Mzc3NTY&ixlib=rb-1.2.1&q=80&w=1080');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
    }
    .card {
      opacity: 0.9;
      border-radius: 10px;
    }
    footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 10px;
      position: relative;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <div class="main-content flex-fill">
    <div class="card text-center p-4">
      <h3 class="card-title">Bienvenido a Score</h3>
      <p class="card-text">Gestiona tus proyectos y accede a todas las funcionalidades que ofrecemos.</p>
      <div class="d-grid gap-2">
        <a href="index.html" class="btn btn-light btn-lg">Iniciar sesión</a>
        <a href="signup.html" class="btn btn-secondary btn-lg">Crear cuenta</a>
      </div>
    </div>
  </div>

  <footer class="footer">
    &copy; 2024 Score. Todos los derechos reservados.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>