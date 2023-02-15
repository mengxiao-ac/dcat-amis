<?php

namespace MengxiaoAc\DcatAmis;

use Dcat\Admin\Admin;

class DcatAmis
{
    public static function requireAssets()
    {
        Admin::css(self::getFullPath([
            'amis/sdk.css',
            'amis/helper.css',
            'amis/iconfont.css',
            'css/animate.min.css',
            'css/common.css',
            'amis/thirds/tinymce/skins/ui/oxide/skin.css',
        ]));

        Admin::js(self::getFullPath([
            'amis/sdk.js',
            'js/history.js',
            'js/axios.min.js',
        ]));
    }

    private static function getFullPath($assets)
    {
        $baseStaticPath = 'vendor/dcat-admin-extensions/MengxiaoAc/dcat-amis/static/';

        foreach ($assets as $k => $v) {
            $assets[$k] = $baseStaticPath . $v;
        }

        return $assets;
    }
}
