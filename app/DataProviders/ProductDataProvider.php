<?php

namespace App\DataProviders;

class ProductDataProvider
{
    public function getDefaultProductData(): array
    {
        return [
            'name' => 'Apple',
            'description' => 'A juicy apple',
            'photo' => [
                'caption' => 'Apple photo',
                'photo' => 'apple.jpg'
            ]
        ];
    }
}
