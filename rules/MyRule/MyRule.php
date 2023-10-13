<?php

namespace YOOtheme\MySpace\Rules;

use ZOOlanders\YOOessentials\Condition\ConditionRule;

class MyRule extends ConditionRule
{
    // validate the rule props
    public function resolveProps(object $props, object $node): object
    {
        if (!isset($props->fieldname)) {
            // throw an Exception if something is wrong
            throw new \RuntimeException('Not Valid Evaluation Arguments');
        }

        // return an array of validated props
        return (object) [
            'foo' => 'bar'
        ];
    }

    // evaluate the rule
    public function resolve($props, $node): bool
    {
        return true; // or false if the rule is not passing
    }
}
