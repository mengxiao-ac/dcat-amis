<?php

namespace MengxiaoAc\DcatAmis\Renderers\Form;

/**
 * <b>TreeSelect 树形选择器</b><br/>
 *
 * @link https://aisuda.bce.baidu.com/amis/zh-CN/components/form/treeselect
 *
 * @method self hideNodePathLabel($value) 是否隐藏选择框中已选择节点的路径 label 信息
 * @method self onlyLeaf($value) 只允许选择叶子节点
 */
class TreeSelect extends InputTree
{
    public $type = 'tree-select';
}
