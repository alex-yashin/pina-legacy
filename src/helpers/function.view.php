<?php

function smarty_function_view($params, &$view) {
    return \PinaLegacy\Templater::processView($params, $view);
}
