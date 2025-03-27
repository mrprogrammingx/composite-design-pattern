<?php

namespace App\Services;

use App\Contracts\FormElementInterface;

abstract class FormElement implements FormElementInterface
{
    protected $name;
    protected $title;
    protected $data;

    public function __construct(string $name, string $title)
    {
        $this->setName($name);
        $this->setTitle($name);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    abstract public function render(): string;
}
