<?php

require_once 'Fruits.php';
require_once 'Panier.php';

// Création des fruits
$apple = new Fruits('Apple', 100, 1, 'https://apple.jpg');
$cerise = new Fruits('Cerise', 150, 2, 'https://cerise.jpg');
$banana = new Fruits('Banana', 150, 2, 'https://banana.jpg');

// Création des paniers
$panier1 = new Panier();
$panier1->addPanier($apple);
$panier1->addPanier($cerise);
$panier1->addPanier($banana);

$panier2 = new Panier();
$panier2->addPanier($apple);

$panier3 = new Panier();
$panier3->addPanier($apple);

$paniers = [$panier1, $panier2, $panier3];

// Formulaire de sélection de panier
?>
<form method="POST" action="">
    <input type="text" name="nouveauPanier" placeholder="Panier">
    <input type="text" name="cerise" placeholder="Cerise">
    <input type="text" name="apple" placeholder="Apple">
    <input type="submit" name="submitPanier" value="Ajouter au panier">
</form>

<?php
// Traitement du formulaire
if (isset($_POST['submitPanier'])) {
    // Récupération des données du formulaire
    $nouveauPanierName = filter_input(INPUT_POST, 'nouveauPanier');
    $ceriseCount = filter_input(INPUT_POST, 'cerise', FILTER_VALIDATE_INT);
    $appleCount = filter_input(INPUT_POST, 'apple', FILTER_VALIDATE_INT);

    // Ajout des fruits dans le nouveau panier
    if ($nouveauPanierName !== null && $ceriseCount !== false && $appleCount !== false) {
        $nouveauPanier = new Panier();
        for ($i = 0; $i < $ceriseCount; $i++) {
            $nouveauPanier->addPanier(new Fruits('Cerise', 150, 2, 'https://cerise.jpg'));
        }
        for ($i = 0; $i < $appleCount; $i++) {
            $nouveauPanier->addPanier(new Fruits('Apple', 100, 1, 'https://apple.jpg'));
        }

        // Ajout du nouveau panier au tableau $paniers
        $paniers[] = $nouveauPanier;

        echo "Panier ajouté avec succès.";
    } else {
        echo "Veuillez saisir des valeurs valides pour le panier, les cerises et les pommes.";
    }
}

?>

<form method="post" action="">
    <label for="select_panier">Sélectionnez un panier :</label>
    <select name="select_panier" id="select_panier">
        <?php
        // Génération dynamique des options
        foreach ($paniers as $index => $panier) {
            $fruitsNames = array_map(function ($fruit) {
                return $fruit->getName();
            }, $panier->getPanier());
            $optionText = "Panier " . ($index + 1) . ": " . implode(", ", $fruitsNames);
            echo "<option value='panier$index'>$optionText</option>";
        }
        ?>
    </select>
    <input type="submit" value="Afficher le panier sélectionné">
</form>

<?php

// Traitement du formulaire
if (isset($_POST['select_panier'])) {
    // Récupération de la sélection du panier
    $selectedPanierIndex = filter_input(INPUT_POST, 'select_panier', FILTER_SANITIZE_NUMBER_INT);

    // Affichage du panier sélectionné
    if (isset($paniers[$selectedPanierIndex])) {
        $selectedPanier = $paniers[$selectedPanierIndex];
        echo "Panier sélectionné (Panier " . ($selectedPanierIndex + 1) . "):";
        foreach ($selectedPanier->getPanier() as $fruit) {
            echo $fruit->__toString() . PHP_EOL;
        }
    } else {
        echo "Panier non valide.";
    }
}
?>
