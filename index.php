<?php

    include("functions.php");

    include("views/header.php");

    if ($_GET['page'] == 'timeline') {
        
        include("views/timeline.php");
        
    } else if ($_GET['page'] == 'yourtweets') {
        
        include("views/yourtweets.php");
        
    } else if ($_GET['page'] == 'search') {
        
        include("views/search.php");
        
    } else if ($_GET['page'] == 'publicprofiles') {
        
        include("views/publicprofiles.php");
        
    } else {

        include("views/home.php");
        
    }
        
    include("views/footer.php");


?>