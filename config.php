<?php

// load rules manually if autoload is not implemented
require_once __DIR__ . '/rules/MyRule/MyRule.php';

use YOOtheme\MySpace\Rules\MyRule;

return [

    // declare rules
    'yooessentials-condition-rules' => [
        MyRule::class => __DIR__ . '/rules/MyRule/config.json',
    ]

];
