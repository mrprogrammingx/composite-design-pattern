<?php

namespace App\Services;

class ProductForm
{
    public function getProductForm(): FormElement
    {
        $form = new Form('product', 'Add product', '/product/add');
        $form->add(new Input('name', 'Name', 'text'));
        $form->add(new Input('description', 'Description', 'text'));
        
        $picture = new Fieldset('photo', 'Product photo');
        $picture->add(new Input('caption', 'Caption', 'text'));
        $picture->add(new Input('photo', 'Photo', 'file'));
        $form->add($picture);

        return $form;
    }

    public function loadProductData(FormElement $form, array $data = []): void
    {
        if($data === []){
            $data = [
                'name' => 'Apple',
                'description' => 'A juicy apple',
                'photo' => [
                    'caption' => 'Apple photo',
                    'photo' => 'apple.jpg'
                ]
            ]; 
        }

        $form->setData($data);
    }

    public function renderProductForm(FormElement $form): string
    {
        return $form->render();
    }
}
