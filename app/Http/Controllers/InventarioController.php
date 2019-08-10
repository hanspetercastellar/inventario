<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bodega;
use App\Producto;

class InventarioController extends Controller
{
    public function index(Request $request)
    {
        $prod= Producto::buscar($request->get('prod'))->orderBy('producto_id','DESC')->paginate(5);
        return view('index')->with('prod',$prod);
    }
}
