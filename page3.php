<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page 3</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <script type="module" src="script.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
  </head>
  <body id="body-p3">
    <?php echo'<p>Hello World</p>';?>
    <nav class="navbar navbar-expand-sm navbar-light bg-warning" aria-label="Fourth navbar example(Bootstrap 2023)">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.html">
          <u style="text-decoration: overline underline">D</u>aniel'
          <u style="text-decoration: overline underline">S</u>
        </a>
        <a href="/php/index.php" aria-current="php index file">php page</a>
        <button 
          class="navbar-toggler collapsed" 
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarsExample04"
          aria-controls="navbarsExample04"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <!--<span class="navbar-toggler-icon"></span>-->
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
          </svg>

        </button>
  
        <div class="navbar-collapse collapse" id="navbarsExample04" style="">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/page2.html">ZOUZOUS</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link disabled">HS</a>
            </li>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Autres</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Une Action du sous-menu</a></li>
                <li><a class="dropdown-item" href="#">Action 2</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form role="search">
            <input class="form-control" type="search" placeholder="Tapez une recherche ICI (form-ctrl)" aria-label="Search">
          </form>
        </div>
      </div>
    </nav>
    <main>
      <div class="container">
        <div class="row align-items-start col-12">
          <div class="col-2 justify-center">
            <p>
              col-2<br />
              ......<br />
            </p>
          </div>
          <div class="col-10">
            <h4 class="col-6">&nbsp;&nbsp;&nbsp;____ ___ ____</h4>
            <h3 id="col0" class="col-8">Page pour les tests...</h3>
            <h4 class="col-6">&nbsp;&nbsp;&nbsp;____ ___ ____</h4>
            <p class="col col-3 justify-right">
              ..................................<br />
              .....................<br />
              ..........<br />
              .........<br />
              ............<br />
              col-6<br />
              ........<br />
              ...........<br />
              ................<br />
              .................<br />
            </p>
          </div>
        </div>
      </div>
    </main> 
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
