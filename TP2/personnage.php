<?php
require_once 'classes/Personnage.php';
include("partials/header.php");
include("partials/menu.php");

use classes\Personnage as Personnage;

$p1 = new Personnage("Luke", "player.png", 27, Personnage::HOMME, 5, 4);
$p2 = new Personnage("Katy", "playerF.png", 22, Personnage::FEMME, 3, 6);
$p3 = new Personnage("Marc", "playerM.png", 33, Personnage::HOMME, 7, 2);
$p4 = new Personnage("Jeanne", "playerF.png", 25, Personnage::FEMME, 4, 5);

$persos = Personnage::$lesPersonnages;
?>

    <h2> Personnage : </h2>

<?php foreach ($persos as $perso) {
    $perso->afficherPersonnage();
}

include("partials/footer.php");
?>