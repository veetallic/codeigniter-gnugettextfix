<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function gnugettext() {
    if (
            !function_exists('bindtextdomain') &&
            !function_exists('textdomain') &&
            !function_exists('_') &&
            !function_exists('ngettext')) {
        require_once 'application/helpers/gnugettext.php';
    }
}
