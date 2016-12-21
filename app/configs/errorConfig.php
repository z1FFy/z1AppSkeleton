<?php
error_reporting(E_ALL); # Report all errors
ini_set('display_errors', 0); # Disable standard php error reporting

register_shutdown_function(function () { # Customize error reporting
    $error = error_get_last();
    if ($error && ($error['type'] == E_ERROR || $error['type'] == E_PARSE || $error['type'] == E_COMPILE_ERROR)) {
        if (strpos($error['message'], 'Allowed memory size') === 0) {
            ini_set('memory_limit', (intval(ini_get('memory_limit'))+64)."M");
            dbg("PHP Fatal: not enough memory in ".$error['file'].":".$error['line']);
        } else {
            dbg("PHP Fatal: ".$error['message']." in ".$error['file'].":".$error['line']);
        }
    }
});