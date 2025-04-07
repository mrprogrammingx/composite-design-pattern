<?php

namespace App\Services;

class Input extends FormElement
{
    private $type;

    public function __construct(string $name, string $title, string $type)
    {
        parent::__construct($name, $title);
        $this->setType($type);
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function render(): string
    {
        return "\n" . '<label for="' . $this->getName() . '">' . $this->getTitle() . '</label> . ""' . "\n" .
                '<input type="' . $this->getType() . '" id="' . $this->getName() . '" name="' . $this->getName() . '">' . "\n";
    }
}
