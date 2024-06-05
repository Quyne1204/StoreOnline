<?php include "../views/Layouts/header.php" ?>

    <section>
        <h1>My Product:</h1>
        <ul>
            <li><?php echo $product->getTitle(); ?></li>
            <li><?php echo $product->getDescription(); ?></li>
            <li><?php echo $product->getPrice(); ?></li>
            <li><?php echo $product->getSku(); ?></li>
            <li><?php echo $product->getImage(); ?></li>
        </ul>
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

    <?php include "../views/Layouts/footer.php" ?>