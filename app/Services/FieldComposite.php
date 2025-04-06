<?php

namespace App\Services;

abstract class FieldComposite extends FormElement
{
    protected array $fields = [];

    public function add(FormElement $field): void
    {
        $name = $field->getName();
        $this->fields[$name] = $field;
    }

    public function remove(FormElement $component): void
    {
        $this->fields = array_filter($this->fields, function ($child) use ($component) {
            return $child != $component;
        });
    }

    public function setData($data): void
    {
        foreach ($this->fields as $name => $field) {
            if (isset($data[$name])) {
                $field->setData($data[$name]);
            }
        }
    }

    public function getData(): array
    {
        $data = [];
        foreach ($this->fields as $name => $field) {
            $data[$name] = $field->getData();
        }
        return $data;
    }

    public function render(): string
    {
        $input = '';

        foreach ($this->fields as $name => $field) {
            $input .= $field->render();
        }

        return $input;
    }
}
