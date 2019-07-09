<?php

namespace App\Http\Controllers;
namespace App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index() {
    $products=Product::All();
    return 'ciao';
  }
}
