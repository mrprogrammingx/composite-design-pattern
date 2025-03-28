<?php

namespace App\Services;

class Fieldset extends FieldComposite
{
    public function render(): string
    {
        $input = parent::render();

        return "\n<fieldset><legend>{$this->getTitle()}</legend>\n{$input}</fieldset>\n";
    }

}
