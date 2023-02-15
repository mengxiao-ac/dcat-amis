<?php

if (!function_exists('amis')) {
    function amis($type = null)
    {
        $component = \MengxiaoAc\DcatAmis\Renderers\Component::make();

        if ($type) {
            $component->setType($type);
        }

        return $component;
    }
}
