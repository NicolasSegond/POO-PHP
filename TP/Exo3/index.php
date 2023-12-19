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

// Affichage des paniers
print 'Panier 1:';
foreach ($panier1->getPanier() as $fruit) {
    print $fruit->__toString() . PHP_EOL;
}

print 'Panier 2:';
foreach ($panier2->getPanier() as $fruit) {
    print $fruit->__toString() . PHP_EOL;
}

// Formulaire de sélection de panier
?>
    <form method="post" action="">
        <label for="select_panier">Sélectionnez un panier :</label>
        <select name="select_panier" id="select_panier">
            <?php
            // Génération dynamique des options
            $paniers = [$panier1, $panier2, $panier3];
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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