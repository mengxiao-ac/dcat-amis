<?php

namespace MengxiaoAc\DcatAmis\Renderers;

/**
 * @method self className($value)
 * @method self x($value)
 * @method self y($value)
 * @method self w($value)
 * @method self h($value)
 * @method self data($value)
 */
class BaseRenderer implements \JsonSerializable
{
    public $type;

    public $view = 'dcat-amis::index';

    public static function make()
    {
        return new static();
    }

    public function __call($name, $arguments)
    {
        $this->$name = array_shift($arguments);

        return $this;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function toJson()
    {
        return json_encode($this);
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public function setView($view)
    {
        $view && $this->view = $view;

        return $this;
    }

    public function render()
    {
        return view($this->view, ['amisJson' => $this->toJson()]);
    }
}
