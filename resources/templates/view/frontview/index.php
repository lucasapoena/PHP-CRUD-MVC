<?php

    $allow_widgets = $_REQUEST['allow_widgets'];
    foreach ($allow_widgets as $widget){
        include_once (ROOT_PATH . "/resources/templates/view/widgets/".$widget.".php");
    }
