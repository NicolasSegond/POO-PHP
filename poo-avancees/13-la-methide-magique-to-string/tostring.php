<?php

require_once 'Paragraph.php';
$paragraph = new Paragraph('Hello, World!');
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <?php echo $paragraph; ?>
    </body>
</html>
