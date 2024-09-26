<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Cuenta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <style>
    body {
      background-color: #f0f0f0; /* Color de fondo para mayor contraste */
      color: #333;
    }
    .container {
      min-height: 100vh; /* Asegúrate de que la altura sea mínima para que se vea bien */
      background-image: url('https://s2.glbimg.com/xx1MZ-YJpDBtQAvBr3URHhED8uo=/620x620/e.glbimg.com/og/ed/f/original/2017/08/02/thinkstockphotos-629285904.jpg'); /* Fondo relacionado con algoritmos */
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      filter: brightness(0.7); /* Oscurecer el fondo para mejorar la legibilidad */
    }
    .card {
      opacity: 0.95;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.9); /* Fondo claro con transparencia */
      border: 1px solid #ddd;
      padding: 20px; /* Añadido padding para que el contenido no toque los bordes */
      width: 100%;
      max-width: 400px; /* Para que no sea demasiado ancha en pantallas grandes */
    }
    .footer-link {
      color: #007bff;
      text-decoration: none;
    }
    .footer-link:hover {
      text-decoration: underline;
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
        <h3 class="card-title text-center mb-4">Crear Cuenta</h3>
        <form method="POST" action="{{ route('register.post') }}">
          @csrf
          
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" id="email" required>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" name="telefono" class="form-control" id="telefono">
          </div>
          <div class="mb-3" id="especializacion-field" style="display:none;">
            <label for="especializacion" class="form-label">Especialización</label>
            <input type="text" name="especializacion" class="form-control" id="especializacion">
          </div>
          <div class="mb-3" id="matricula-field" style="display:none;">
            <label for="matricula" class="form-label">Matrícula</label>
            <input type="text" name="matricula" class="form-control" id="matricula">
          </div>
          <div class="mb-3" id="equipo-field" style="display:none;">
            <label for="equipo" class="form-label">Equipo</label>
            <input type="text" name="equipo" class="form-control" id="equipo">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
          
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
          </div>
          <div class="mb-3">
            <label for="role" class="form-label">Tipo de Usuario</label>
            <select name="role" class="form-select" id="role" required>
              <option value="" disabled selected>Selecciona un rol</option>
              <option value="docente">Docente/Tutor</option>
              <option value="estudiante">Estudiante</option>
              <option value="administrador">Administrador</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary w-100">Crear Cuenta</button>
        </form>
        <div class="mt-3 text-center">
          <p>¿Ya tienes cuenta? <a href="{{ route('login') }}" class="btn btn-link footer-link">Iniciar sesión</a></p>
        </div>
        <div class="mt-3 text-center">
          <a href="{{ url('/dashboard') }}" class="footer-link">Volver a la Página de Bienvenida</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Muestra y oculta campos dependiendo del rol seleccionado
    document.getElementById('role').addEventListener('change', function () {
      const role = this.value;
      document.getElementById('especializacion-field').style.display = role === 'docente' ? 'block' : 'none';
      document.getElementById('matricula-field').style.display = role === 'estudiante' ? 'block' : 'none';
      document.getElementById('equipo-field').style.display = role === 'estudiante' ? 'block' : 'none';
      document.getElementById('telefono-field').style.display = (role === 'docente' || role === 'administrador') ? 'block' : 'none';
    });
  </script>
</body>
</html>

