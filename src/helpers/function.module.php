<?php

function smarty_function_module($params, &$view)
{
    return \PinaLegacy\Templater::processModule($params, $view);
}
