<?php

namespace Slowlyo\DcatAmis\Renderers\Form;

/**
 * <b>JSONSchema Editor</b><br/>
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/json-schema-editor
 *
 * @method self rootTypeMutable($value) 顶级类型是否可配置
 * @method self showRootInfo($value) 是否显示顶级类型信息
 * @method self disabledTypes($value) 用来禁用默认数据类型，默认类型有：string、number、interger、object、number、array、boolean、null
 * @method self definitions($value) 用来配置预设类型
 */
class JSONSchemaEditor extends FormItem
{
    public $type = 'json-schema-editor';
}
