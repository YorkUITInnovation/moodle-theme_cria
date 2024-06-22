<?php
$observers = array(
    array(
        'eventname'   => '\core\event\dashboard_viewed',
        'callback'    => '\theme_cria\events::redirect_user_to_home_page',
        'priority'    => 9999,
        'internal'    => false,
    ),
    array(
        'eventname'   => '\core\event\user_loggedin',
        'callback'    => '\theme_cria\events::redirect_user_to_home_page',
        'priority'    => 9999,
        'internal'    => false,
    ),
    array(
        'eventname'   => '\core\event\user_loggedinas',
        'callback'    => '\theme_cria\events::redirect_user_to_home_page',
        'priority'    => 9999,
        'internal'    => false,
    ),


);