<?php

namespace App\Http\Controllers;

use App\Services\ProductForm;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function __construct(public ProductForm $productForm)
    {
    }

    public function index(): void
    {
        $form = $this->productForm->getProductForm();

        $this->productForm->loadProductData($form);
        
        echo $this->productForm->renderProductForm($form);
    }
}
