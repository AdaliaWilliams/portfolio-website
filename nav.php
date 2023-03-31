<nav>
    <a class="<?php
    if (PATH_PARTS['filename'] == "index") {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>


    <a class="<?php
    if (PATH_PARTS['filename'] == "contact") {
        print 'activePage';
    }
    ?>" href="contact.php">Contact</a>
</nav>