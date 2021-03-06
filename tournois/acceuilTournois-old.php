
<?php

$xmlPartie = simplexml_load_file('../data/xml/partie.xml');


?>

<!DOCTYPE html>
<!-- PAGE_Acceuil_Tournois 29/02/2020 22:12 WEBDEV 23 23.0.127.0 -->
<html lang="fr" class="htmlstd html5">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Acceuil_Tournois</title>
    <meta name="generator" content="WEBDEV">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .wblien,
        .wblienHorsZTR {
            border: 0;
            background: transparent;
            padding: 0;
            text-align: center;
            box-shadow: none;
            _line-height: normal;
            color: #6e7d87;
        }

        .wblienHorsZTR {
            border: 0 !important;
            background: transparent !important;
            outline-width: 0 !important;
        }

        .wblienHorsZTR:not([class^=l-]) {
            box-shadow: none !important;
        }

        a:active {}

        a:visited {}

        *::-moz-selection {
            color: #FFFFFF;
            background-color: #9EAFBA;
        }

        ::selection {
            color: #FFFFFF;
            background-color: #9EAFBA;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../res/res/standard.css?100014310c1f2">
    <link rel="stylesheet" type="text/css" href="../res/res/static.css?1000210820683">
    <style type="text/css">
        .webdevclass-riche {
            transition: font-size 300ms;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../res/css/Evolution190EvolutionGrayVolution_rwd.css?10000e38b0b44">
    <link rel="stylesheet" type="text/css" href="../res/css/Tiplay190EvolutionGrayVolution_rwd.css?1000012b62e75">
    <link rel="stylesheet" type="text/css" href="../res/css/palette-GrayVolution_rwd.css?100008a7cf86b">
    <link rel="stylesheet" type="text/css" href="../res/css/PAGE_Acceuil_Tournois_style.css?10000648da722">
    <style type="text/css">
        body {
            line-height: normal;
            height: auto;
            min-height: 100%;
            color: #333333;
        }

        body {}

        html {
            background-image: url('../res/img/fond-jeux.jpg');
            background-position: left center;
            background-size: cover;
            background-color: #e5e5e5;
        }

        #page {
            position: relative;
            background-position: left center;
            background-color: #f0efef;
        }

        html {
            height: 100%;
            overflow-x: hidden;
        }

        body,
        form {
            height: auto;
            min-height: 100%;
            margin: 0 auto !important;
            box-sizing: border-box;
        }

        html,
        form {
            height: 100%;
        }

        body {
            background: none;
        }

        .l-2,
        .l-8 {
            background-color: #FFFFFF;
        }

        #A1,
        #bzA1 {
            border-top: none;
            border-right: solid 1px #ac2925;
            border-bottom: solid 2px #ac2925;
            border-left: solid 1px #ac2925;
            border-collapse: collapse;
            empty-cells: show;
            border-spacing: 0;
        }

        .dzA2 {
            width: 100%;
            ;
            overflow-x: hidden;
            ;
            overflow-y: hidden;
            position: static;
            max-height: 130px;
        }

        #A8,
        #bzA8 {
            border-top: none;
            border-right: solid 1px #e5e5e5;
            border-bottom: solid 2px #d3d3d3;
            border-left: solid 1px #e5e5e5;
            border-collapse: collapse;
            empty-cells: show;
            border-spacing: 0;
        }

        #A3,
        #tzA3 {
            font-size: medium;
            font-size: 1rem;
            font-weight: bold;
        }

        #A6,
        #tzA6 {
            font-size: x-large;
            font-size: 1.5rem;
            text-align: center;
        }

        .wbplanche {
            background-repeat: repeat;
            background-position: 0% 0%;
            background-attachment: scroll;
            background-size: auto auto;
            background-origin: padding-box;
        }

        .wbplancheLibInc {
            _font-size: 1px;
        }
    </style>
</head>

<body  class="wbRwd">
    


    <form name="PAGE_ACCEUIL_TOURNOIS" action="Acceuil-Tournois.html" target="_self" method="post" class="clearfix">
        <div class="h-0"><input type="hidden" name="WD_JSON_PROPRIETE_" value="" /><input type="hidden"
                name="WD_BUTTON_CLICK_" value=""><input type="hidden" name="WD_ACTION_" value=""></div>
        <div class="clearfix pos1">
            <div id="page" class="clearfix ancragecenter pos2" data-window-width="480" data-window-height="600"
                data-width="480" data-height="600"
                data-media="[{'query':'@media only all and (min-width: 481px)','attr':{'data-window-width':'480','data-width':'481'}},{'query':'@media only all and (min-width: 841px)','attr':{'data-window-width':'840','data-width':'841'}}]">
                <div class="clearfix ancragecenter pos3">
                    <div class="clearfix ancragecenter pos4">
                        <div class="clearfix ancragecenter pos5">
                            <div class="clearfix ancragecenter pos6">
                                <table style=" width:100%;">
                                    <tr>
                                        <td id="A6" class="TXT-Titre-Normal padding webdevclass-riche">
                                            <p>Partie&nbsp;</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="clearfix ancragecenter pos7">
                                <table
                                    style=" width:100%; background-color:#ffffff;border-collapse:separate;border-spacing: 2px;"
                                    id="A1">
                                    <!---Boucle affichage des parties -->
									<?php
                                        foreach ($xmlPartie->partie as $partie) {
                                            $name = $partie->nom;
                                            $date = DateTime::createFromFormat(trim($partie->horaire[0]['format']," \t\r\n\x0b"),trim($partie->horaire," \t\r\n\x0b"));
                                            $description = $partie->description;
                                            $price = (float)$partie->prix;
                                            $img = $partie->image;  
                                            ?>
                                    <tr>
                                        
                                        <td style=" background-color:#ffffff;">
                                            <div class="clearfix pos8">
                                                <div class="clearfix pos9">
                                                    <div class="clearfix pos10">
                                                        <div class="clearfix pos11">
                                                            <div class="clearfix pos12">
                                                                <div class="lh0 dzSpan dzA2" id="dzA2" style=""><img
                                                                        src="<?php
                                                                                if ($img <> '') {
                                                                                    echo $img ;
                                                                                } else {
                                                                                    echo '\res\img\partie\noPicture.jpg' ;
                                                                                }; ?>" alt=""
                                                                        id="A2" class="Image padding"
                                                                        style=" width:100%;display:block;border:0;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix pos13">
                                                            <div class="clearfix pos14">
                                                                <table
                                                                    style=" width:100%; background-color:#ffffff;border-collapse:separate;border-spacing:0;"
                                                                    id="A8">
                                                                    <tr>
                                                                        <td style=" background-color:#ffffff;">
                                                                            <div class="clearfix ancragecenter pos15">
                                                                                <div
                                                                                    class="clearfix ancragecenter pos16">
                                                                                    <div
                                                                                        class="clearfix ancragecenter pos17">
                                                                                        <table style=" width:100%;">
                                                                                            <tr>
                                                                                                <td id="A3"
                                                                                                    class="TXT-Normal padding webdevclass-riche">
                                                                                                    <p><?= $name ?></p>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                    <div
                                                                                        class="clearfix ancragecenter pos19">
                                                                                        <table
                                                                                            style=" width:100%;height:16px;">
                                                                                            <tr>
                                                                                                <td id="tzA4"
                                                                                                    class="Normal padding">
                                                                                                    <?= $date->format( 'H:i') ?>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                    <div
                                                                                        class="clearfix ancragecenter pos19">
                                                                                        <table style=" width:100%;">
                                                                                            <tr>
                                                                                                <td id="A5"
                                                                                                    class="TXT-Normal padding webdevclass-riche">
                                                                                                    <p><?= $description ?></p>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                    <div
                                                                                        class="clearfix ancragecenter pos20">
                                                                                        <input type="submit" id="A7"
                                                                                            value="Participer <?php if ($price > 0) {
                                                                                    echo $price.' €';
                                                                                } ?> "
                                                                                            class="btn-avertissement wblien padding webdevclass-riche"
                                                                                            style="width:100%;height:auto;min-height:24px;width:100%;height:auto;min-height:24px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;display:inline-block;">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <?php
                                        } ?>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>