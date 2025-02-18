<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Product;

class TokoController extends Controller
{
    public function index(){
        return view('toko/index');
    }

    public function detail(){
        return view('toko/detail');
    }

    public function about(){
        return view('toko/about');
    }

    public function admin(){
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function create(){
        return view('toko/create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product created successfully');
    }

    public function edit(Product $product){
        return view('toko/edit', compact('product'));
    }
    public function update(Request $request, Product $product){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $product->update($request->all());
        return redirect()->route('produk.admin')->with('success', 'Product update successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('produk.admin')->with('success', 'Product deleted successfully');
    }

    // Customer
    public function customers(){
        $customers = Customer::all();
        return view('toko/customers', compact('customers'));
    }

    public function AddCustomer(){
        return view('toko/addcustomer');
    }

    public function NewCustomer(Request $request){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.view')->with('success', 'Customer created successfully');
    }

    public function editcustomer(customer $customer){
        return view('toko/editcustomer', compact('customer'));
    }
    public function updatecustomer(Request $request, customer $customer){
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_hp' => 'required'
        ]);

        $customer->update($request->all());
        return redirect()->route('customers.view')->with('success', 'Customer update successfully');
    }

    public function destroycustomer(customer $customer){
        $customer->delete();
        return redirect()->route('customers.view')->with('success', 'Customer deleted successfully');
    }
}
