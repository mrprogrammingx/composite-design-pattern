<?php

namespace App\Services;

use App\Contracts\FormElementInterface;
use App\DataProviders\ProductDataProvider;

class ProductForm
{

    public function __construct(private FormElementInterface $form, public ProductDataProvider $productDataProvider)
    {
    }

    public function getProductForm(): FormElement
    {
        $form = clone $this->form;
        $form->add(new Input('name', 'Name', 'text'));
        $form->add(new Input('description', 'Description', 'text'));
        
        $picture = new Fieldset('photo', 'Product photo');
        $picture->add(new Input('caption', 'Caption', 'text'));
        $picture->add(new Input('photo', 'Photo', 'file'));
        $form->add($picture);

        return $form;
    }

    public function loadProductData(FormElementInterface $form, array $data = []): void
    {
        if(empty($data)){
            $data = $this->productDataProvider->getDefaultProductData();
        }

        $form->setData($data);
    }

    public function renderProductForm(FormElementInterface $form): string
    {
        return $form->render();
    }
}
