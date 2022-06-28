<nav>
    <a class="<?php
    if (PATH_PARTS['filename'] == "index") {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "create") {
        print 'activePage';
    }
    ?>" href="create.php">Create An Outfit</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "shirts") {
        print 'activePage';
        }
    ?>" href="shirts.php">Tops</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "bottoms") {
        print 'activePage';
    }
    ?>" href="bottoms.php">Bottoms</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "dress") {
        print 'activePage';
    }
    ?>" href="dress.php">Dresses</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "shoes") {
        print 'activePage';
    }
    ?>" href="shoes.php">Shoes</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "accessories") {
        print 'activePage';
    }
    ?>" href="accessories.php">Accessories</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "form") {
        print 'activePage';
    }
    ?>" href="form.php">Add An Item</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "contact") {
        print 'activePage';
    }
    ?>" href="contact.php">Contact</a>