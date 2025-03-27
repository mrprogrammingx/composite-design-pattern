<?php

namespace App\Contracts;

interface FormElementInterface
{
    public function getName(): string;

    public function setName(string $name): void;

    public function setTitle(string $title): void;

    public function getTitle(): string;

    public function setData($data): void;

    public function getData();

    public function render(): string;

}
