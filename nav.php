<nav>
    <a class="<?php
    if (PATH_PARTS['filename'] == "index") {
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "about") {
        print 'activePage';
    }
    ?>" href="about.php">About Me</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "gallery") {
        print 'activePage';
    }
    ?>" href="gallery.php">Gallery</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "projects") {
        print 'activePage';
    }
    ?>" href="projects.php">Previous Work</a>


    <a class="<?php
    if (PATH_PARTS['filename'] == "contact") {
        print 'activePage';
    }
    ?>" href="contact.php">Contact</a>
</nav>