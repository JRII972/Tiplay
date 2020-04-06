
/**Gestion des session */
<?php  
    session_start();
    $_SESSION['role'] = 'administrateur';
    $_SESSION['role'] = 'gestionnaire';
    $_SESSION['role'] = 'client';
    $_SESSION['role'] = 'invité';

    $_SESSION['connected'] = 0;


function est_connected(): bool {
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return !empty($_SESSION['connected']);
}

function forceConnection(): bool {
    unset($_SESSION['connected']);
    header('Location: /login.php');
    return true;
}


/**Player gestion */


function player_exist($recherche): bool {
    foreach ($PlayerXml->player->pseudo as $pseudo => $sp) {
        if ($recherche == $pseudo) {
            return true;
        }
    }
    return false;
}

function player_connect($pseudo): bool {
    if (!player_exist($pseudo)){
        return false;
    }
    if (session_status() === PHP_SESSION_NONE){
        session_start();
    }
    return true;
}

function new_player($nom, $prenom, $pseudo, $sexe, $date_of_brith): bool{
    $PlayerXml = simplexml_load_file(__DIR__.DIRECTORY_SEPARATOR.'player.xml');

    $newplayer = $PlayerXml->addChild('player');
    $newplayer->addAttribute('id','-1');
    $newplayer->addAttribute('role','client');
    $newplayer->addAttribute('time',date('d/m/Y H:i:s'));

    $newplayer->addChild('information');
    $newplayer->information->addChild('date_of_brith',date_format(date_create($date_of_brith),'d/m/Y'));
    $newplayer->information->date_of_brith->addAttribute('format','d/m/Y');
    $newplayer->information->addChild('sexe',$sexe);
    $newplayer->information->addChild('nom',$nom);
    $newplayer->information->addChild('prenom',$prenom);
    $newplayer->information->addChild('pseudo',$pseudo);

    $newplayer->addChild('gamePlayed');
    $newplayer->gamePlayed->addAttribute('number','0');

    $newplayer->addChild('tournaments');
    $newplayer->tournaments->addAttribute('number','0');

    $newplayer->addChild('registred');

    $newplayer->saveXML();
    echo $newplayer;
    return player_connect($pseudo);
}
?>

