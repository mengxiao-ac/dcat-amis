<?php

namespace Slowlyo\DcatAmis\Renderers\Form;

use Slowlyo\DcatAmis\Renderers\BaseRenderer;

/**
 * <b>Input-Group 输入框组合</b><br/>
 * 输入框组合选择器 可用于输入框与其他组件进行组合。
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-group
 *
 * @method self className($value) CSS 类名
 * @method self body($value) 表单项集合
 */
class InputGroup extends BaseRenderer
{
    public $type = 'input-group';
}
