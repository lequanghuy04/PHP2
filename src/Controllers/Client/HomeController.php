<?php
namespace Admin\BaseWd18407\Controllers\Client;

use Admin\BaseWd18407\Commons\Controller;
use Admin\BaseWd18407\Commons\Helper;
use Admin\BaseWd18407\Models\Product;
class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'Huy';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }

}