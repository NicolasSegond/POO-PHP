<?php

require_once 'Fruits.php';
require_once 'Panier.php';

$apple = new Fruits('Apple', 100, 1, 'https://apple.jpg');
$cerise = new Fruits('Cerise', 150, 2, 'https://cerise.jpg');
$banana = new Fruits('Banana', 150, 2, 'https://banana.jpg');

$panier1 = new Panier();
$panier1->addPanier($apple);
$panier1->addPanier($cerise);
$panier1->addPanier($banana);

$panier2 = new Panier();
$panier2->addPanier($apple);

$panier3 = new Panier();
$panier3->addPanier($cerise);

$listPanier = array();
$listPanier[] = $panier1;
$listPanier[] = $panier2;
$listPanier[] = $panier3;
?>

<form action="" method="POST">
    <select name="panier">
        <?php foreach($listPanier as $panier) { ?>
            <option value="<?php print $panier->__toString(); ?>"><?php print $panier->__toString(); ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Valider">
</form>

<?php

if(isset($_POST['panier'])) {
    print $_POST['panier'];
}

