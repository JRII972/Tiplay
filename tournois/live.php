<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Organisateur de tournois d'E-Sport en Martinique.">
    
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Live · TIPLAY</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/product/">

    <!-- Bootstrap core CSS -->
<link href="../res/css/bootstrap.min.css" rel="stylesheet" >
<link href="../res/css/standar.css" rel="stylesheet">
<script type="text/javascript" >
  function initElement()
{
  var p = document.getElementById("click");
  // NOTE: showAlert(); ou showAlert(param); NE fonctionne PAS ici.
  // Il faut fournir une valeur de type function (nom de fonction déclaré ailleurs ou declaration en ligne de fonction).
  p.onclick = openStream(GNjStWG2vLU, YT);
};

  function openStream(videoID, platform) {
    var creating = browser.tabs.create({
      active: 'true',
      url: './stream.php?id=' + videoId + 'platform=' + platform
    });
  };
</script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../res/css/product.css" rel="stylesheet">
  </head>
  <body onload="initElement();">
    <nav class="site-header sticky-top py-1" style="width: 100%;">
      <div class="container navBar">
        <a class="py-2" href="index.html" aria-label="Product">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Evénements</a>
        <a class="py-2 d-none d-md-inline-block" href="./tournois/lobi.php">Tournois</a>
        <a class="py-2 d-none d-md-inline-block" href="./partenaire.html">Partenaire</a>
        <a class="py-2 d-none d-md-inline-block" href="./support.html">Support</a>
        <a class="py-2 d-none d-md-inline-block" href="./contact.html">Contact</a>
        <a class="py-2 d-none d-md-inline-block"  href="./tournois/live.html">
          <div style="display: flex; flex-direction: row; align-content: center;">
            Live
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false">
              <circle cx="10" cy="13" r="5" fill="#f05454" /><!--for green #6bf054 -->
            </svg>
          </div>
        </a>
        <a class="navBarButton-icon">
          <button type="button" id="mobileNavOpen" class="navBarButton mobileMenu" aria-expanded="false">
            <span  aria-hidden="true">
              <svg class="svg-inline--fa jwi-menu fa-w-16" aria-hidden="true" focusable="false" data-prefix="jwf-jw-icons"
                data-icon="menu" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-fa-i2svg="">
                <path fill="white"
                  d="M22.5 7h-21a.5.5 0 010-1h21a.5.5 0 010 1zM22.5 13h-21a.5.5 0 010-1h21a.5.5 0 010 1zM22.5 19h-21a.5.5 0 010-1h21a.5.5 0 010 1z">
                </path>
              </svg>
          </button>
        </a>
      </div>
  
</nav>
    <div class="body-center">
      <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      
      
        <div class=" bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3" 4>
            <h2 class="display-5">TIPLAY Parties</h2>
            <p class="lead">Prouvez que vous êtes le meillieur</p>
          </div>
          <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../res/img/fifa_banière.jpg') ; 
        background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
        </div>
      </div>
      
      <p class="d-mb-flex flex-mb-equal">
        Dolore anim laboris pariatur et amet nisi. Cillum irure culpa ea eu mollit pariatur amet aute cupidatat ullamco exercitation aliquip consectetur. Officia mollit adipisicing in ullamco dolor velit velit aliquip ex. Ullamco esse quis voluptate eu non ea dolore duis officia eu dolore ad elit nisi. Consectetur dolor aliqua quis nisi velit.

Quis Lorem aliqua nulla esse et consequat reprehenderit sunt cillum labore excepteur adipisicing sunt. Nisi excepteur incididunt et aliquip cillum laborum incididunt minim laboris duis fugiat ut officia mollit. Ut veniam ut laboris aute in exercitation qui.        
      </p>
      
      <!-- Ici crée une boucle qui vas généré les capsules vers les vidéos -->
       <?php /*
          foreach ($xmlPartie->partie as $partie) {
              $name = $partie->nom;
              $date = DateTime::createFromFormat(trim($partie->horaire[0]['format']," \t\r\n\x0b"),trim($partie->horaire," \t\r\n\x0b"));
              $description = $partie->description;
              $price = (float)$partie->prix;
              $img = $partie->image;  
        */ ?>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3" >
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" onclick="window.open(
                './stream.php?id=GNjStWG2vLU&platform=YT',
                '_blank'
            );
            " id="click">
            <div class="my-3 p-3">
              <h2 class="display-5">Baima</h2>
              <p class="lead">Bientôt</p>
            </div>
            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../res/img/coming soon.jpg') ; 
        background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
          </div>
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Learn To loose</h2>
              <p class="lead">Bientôt</p>
            </div>
            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('../res/img/coming soon.jpg') ; 
          background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
          </div>
         
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Comming soon</h2>
              <p class="lead">Bientôt</p>
            </div>
            <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('./res/img/coming soon.jpg') ; 
            background-size: cover; background-position: center; background-repeat: no-repeat;"></div>
          </div>
        </div>
      
          <?php /*
          } */?>
    </div>
  </body>
<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2019-2020</small>
      <a href="https://www.instagram.com/tiplaymq/" target="_blank">
        <svg class="icon" width="35" height="35">
          <use xlink:href="./res/img/svg/standar.svg#instagram"></use>
        </svg>
      </a>
      <a href="https://www.facebook.com/tiplaymq/" target="_blank">
        <svg class="icon" width="35" height="35">
          <use xlink:href="./res/img/svg/standar.svg#facebook" ></use>
        </svg>
      </a>
      <a href="https://www.twitch.com/tiplaymq/" target="_blank">
        <svg class="icon" width="35" height="35">
          <use xlink:href="./res/img/svg/standar.svg#twitch" ></use>
        </svg>
      </a>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Cool stuff</a></li>
        <li><a class="text-muted" href="#">Random feature</a></li>
        <li><a class="text-muted" href="#">Team feature</a></li>
        <li><a class="text-muted" href="#">Stuff for developers</a></li>
        <li><a class="text-muted" href="#">Another one</a></li>
        <li><a class="text-muted" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Resource</a></li>
        <li><a class="text-muted" href="#">Resource name</a></li>
        <li><a class="text-muted" href="#">Another resource</a></li>
        <li><a class="text-muted" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Business</a></li>
        <li><a class="text-muted" href="#">Education</a></li>
        <li><a class="text-muted" href="#">Government</a></li>
        <li><a class="text-muted" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="text-muted" href="#">Team</a></li>
        <li><a class="text-muted" href="#">Locations</a></li>
        <li><a class="text-muted" href="#">Privacy</a></li>
        <li><a class="text-muted" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>
