<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sale;
use App\Product;
use Session;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::orderBy('date', 'desc')->paginate(10);
        return view('sale.index', compact('sales'));
    }
    public function today() {
        $sales = Sale::where('date', date('Y-m-d'))->get();
        return view('sale.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::where('quantity', '>',  0)->get();
        return view('sale.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'product_id' => 'required',
        'quantity' => 'required',
      ]);
      $product_id = $request->input('product_id');
      $quantity = $request->input('quantity');
      $quantity = $request->input('quantity');
      $product = Product::find($product_id);
      if ($quantity > $product->quantity) {
          return redirect()->back()->withErrors('Asking quantity is more than stock');
      }
      $product->quantity = $product->quantity - $quantity;
      $product->save();
      Sale::create([
        'product_id' => $product_id,
        'quantity' => $quantity,
        'price' => $product->price,
        'date' => date('Y-m-d')
      ]);
      Session::flash('message', 'Sales record added successfully');
      return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Sale::find($id)->delete();
      Session::flash('message', 'One item delete from sales inventory');
      return redirect()->back();
    }
}
