<?php

namespace App\Services;

class Form extends FieldComposite
{
    protected $url;

    public function __construct(string $name, string $title, string $url)
    {
        parent::__construct($name, $title);
        $this->url = $url;
    }

    public function render(): string
    {
        $input = parent::render();
        return "<form action='{$this->url}'>\n<h3>{$this->getTitle()}</h3>\n$input</form>\n";
    }

}
