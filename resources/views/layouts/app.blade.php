<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Admin Dashboard')</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Make static sidebar fill height on md+ */
    @media (min-width: 768px) {
      .sidebar-static {
        position: sticky;
        top: 0;
        height: 100dvh;
        overflow-y: auto;
      }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  @include('partials.navbar')

  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      @include('partials.sidebar')

      <!-- Main Content -->
      <main class="col-12 col-md-9 col-lg-10 p-3 p-md-4">
        @yield('content')
      </main>
    </div>
  </div>

  @stack('scripts')

  <!-- Bootstrap JS (bundle includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script>
    // Example client-side validation
    (() => {
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          } else {
            event.preventDefault();
            const toast = new bootstrap.Toast(document.getElementById('saveToast'));
            toast.show();
            form.reset();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();

    // Theme toggle (dark/light) using data-bs-theme
    const themeToggle = document.getElementById('themeToggle');
    const root = document.documentElement;
    const stored = localStorage.getItem('bs-theme') || 'light';
    root.setAttribute('data-bs-theme', stored);

    themeToggle.addEventListener('click', () => {
      const current = root.getAttribute('data-bs-theme') === 'dark' ? 'light' : 'dark';
      root.setAttribute('data-bs-theme', current);
      localStorage.setItem('bs-theme', current);
    });
  </script>
</body>

</html>