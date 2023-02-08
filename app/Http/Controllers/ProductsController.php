<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();
        print_r('<pre>'. print_r($products,true) . '<pre>');
    }

    public function insertarProducto(Request $req)
    {
        // $name,
        //                             $price,
        //                             $descripcion,
        //                             $stock
        $product = new Product();
        $product->name = $req->input('name');
        $product->price =$req->input('price');
        $product->descripcion =$req->input('descripcion');
        $product->stock = $req->input('stock');

        $product->save();
        echo($req->input('name'));
    }

    public function filter(Request $req)
    {
        if ($req->input('stock') == '>5')
        {
            $products = Product::where('stock', '>', 5);
        }
        else if ($req->input('stock') == '<5')
        {
            $products = Product::where('stock','<',5);
        }

        $products = $products->get()->toArray();

        return view ('filter',["arrayProducts" => $products]);
    }
}
