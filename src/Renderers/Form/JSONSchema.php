<?php

namespace Slowlyo\DcatAmis\Renderers\Form;

use Slowlyo\DcatAmis\Renderers\BaseRenderer;

/**
 * <b>JSONSchema</b><br/>
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/json-schema
 *
 * @method self schema($value) 指定 json-schema
 */
class JSONSchema extends BaseRenderer
{
    public $type = 'json-schema';
}
