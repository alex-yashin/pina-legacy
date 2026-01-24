<?php

function smarty_block_content($params, $content, &$view, &$repeat)
{
    if (empty($params['name'])) {
        return '';
    }
    
    if ($content === null) {
        return '';
    }
    
    \PinaLegacy\Request::setPlace($params['name'], $content);
    return '';
}