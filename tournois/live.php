<?php require('../src/header.php') ?>

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
  
<?php require('../src/footer.php') ?>