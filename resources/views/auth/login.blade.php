<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    body {
      background-color: #f0f0f0;
      color: #333;
    }

    .container {
      min-height: 100vh;
      background-image: url('https://s2.glbimg.com/xx1MZ-YJpDBtQAvBr3URHhED8uo=/620x620/e.glbimg.com/og/ed/f/original/2017/08/02/thinkstockphotos-629285904.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      filter: brightness(0.7);
    }

    .card {
      opacity: 0.95;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.9);
      border: 1px solid #ddd;
      padding: 20px;
      width: 100%;
      max-width: 400px; /* Para que no sea demasiado ancha en pantallas grandes */
    }

    .form-label {
      color: #007bff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .footer-link {
      color: #007bff;
      text-decoration: none;
    }

    .footer-link:hover {
      text-decoration: underline;
    }

    /* Para hacer que se vea bien en dispositivos móviles */
    @media (max-width: 576px) {
      .container {
        padding: 10px; /* Para evitar que el contenido toque los bordes */
      }

      .card {
        padding: 15px; /* Ajusta el padding para pantallas pequeñas */
      }

      h3 {
        font-size: 1.5rem; /* Ajustar el tamaño del título en pantallas pequeñas */
      }

      .btn {
        font-size: 0.9rem; /* Botones un poco más pequeños para pantallas pequeñas */
      }
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Contenido principal -->
  <div class="container d-flex justify-content-center align-items-center">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Inicio de Sesión</h3>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
        </form>
        <div class="mt-3 text-center">
          <p>¿No tienes cuenta? <a href="{{ route('register') }}" class="btn btn-link footer-link">Crear una Cuenta</a></p>
        </div>
        <div class="mt-3 text-center">
          <a href="{{ url('/dashboard') }}" class="footer-link">Volver a la Página de Bienvenida</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
