<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(){
        return view('supplier.index');
    }

    public function create(){
        return view('supplier.create');

    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'mobilenumber'=> 'required|numeric'
        ]);

        $newSupplier = supplier::create($data);

        return redirect(route('supplier.index'));

    }
}
