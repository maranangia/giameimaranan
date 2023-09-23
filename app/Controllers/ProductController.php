<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new ProductModel();
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('product');
    }

    public function edit($id)
{
    // Fetch the existing product data by ID from the database
    $existingProduct = $this->product->find($id);

    if (!$existingProduct) {
        // Handle the case where the product with the given ID is not found (e.g., show an error message)
        return redirect()->to('product')->with('error', 'Product not found');
    }

    // Validate the form data and retrieve the updated values
    $data = [
        'productName' => $this->request->getVar('productName'),
        'productDescription' => $this->request->getVar('productDescription'),
        'productCategory' => $this->request->getVar('productCategory'),
        'productQuantity' => $this->request->getVar('productQuantity'),
        'productPrice' => $this->request->getVar('productPrice'),
    ];

    // Use the update method provided by CodeIgniter's Model to update the product
    $this->product->update($id, $data);

    // Redirect back to the product listing page or wherever you prefer
    return redirect()->to('edit')->with('success', 'Product updated successfully');
}


    public function Save()
    {
        $data = [
            'productName' => $this->request->getVar('productName'),
            'productDescription' => $this->request->getVar('productDescription'),
            'productCategory' => $this->request->getVar('productCategory'),
            'productQuantity' => $this->request->getVar('productQuantity'),
            'productPrice' => $this->request->getVar('productPrice'),
        ];
        $this->product->Save($data);
        return redirect()->to('product');

    }
    public function product($product)
    {
        echo $product;
    }
    public function maranangia()
    {
        $data ['product']= $this->product->findAll();
        return view('product', $data); 
    }
    public function index()
    {
      //
    }
}
