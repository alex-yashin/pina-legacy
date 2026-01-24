<?php

use PinaLegacy\Composer;

function smarty_function_composer($params, &$view) {
    return Composer::draw($params['position'], $params, $view);
}
