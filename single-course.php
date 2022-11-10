<?php 
    get_header('empty');

    while(have_posts()) { 
        the_post();    
        
        include(__DIR__ . '/courses/merchant-portal-scorm12-470aYEvZ/scormcontent/index.html');
    }

    get_footer('empty');
?>