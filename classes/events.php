<?php

namespace theme_cria;

class events
{
    public static function redirect_user_to_home_page() {
        global $CFG;
        $config = get_config('theme_cria');
        if ($config->redirect_url) {
            redirect($CFG->wwwroot . $config->redirect_url);
        }
    }
}