<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <script src="{{ asset('js/propper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <title>Subject Page</title>
</head>
<body>


    <!-- Navigation Part -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Resulsect</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/results">Results</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/student">Student</a></li>
                  <li><a class="dropdown-item" href="/class">Class</a></li>
                  <li><a class="dropdown-item" href="/teacher">Teacher</a></li>
                  <li><a class="dropdown-item active" aria-current="page" href="/subject">Subject</a></li>
                  <li><a class="dropdown-item" href="/result">Result</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/admin">Admin</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <span class="navbar-text">
                Welcome to Resulsect.
            </span>
          </div>
        </div>
      </nav>



    <!-- Table Part -->
    <div class="card">
        <p class="card-header"><b> Menu / Subject</b></p>
    </div>
    <br>
      <div class="container">
          <div class="jumbotrom">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">All class details..</h5>

                  <p>Subject Cpmponents</p>

                </div>
            </div>
          </div>
      </div>

</body>
</html>