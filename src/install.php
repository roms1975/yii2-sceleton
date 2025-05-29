<?php

    echo "Start install\n";

    mkdir("controllers");
    mkdir("views/layouts", 0777, true);
    mkdir("views/site", 0777, true);
    mkdir("web");
    mkdir("config");
    
    copy("src/SiteController.php", "controllers/SiteController.php");
    copy("src/views/layouts/main.php", "views/layouts/main.php");
    copy("src/views/site/index.php", "views/site/index.php");
    copy("src/web/index.php", "web/index.php");
    copy("src/config/config.php", "config/config.php");
?>