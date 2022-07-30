<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Category;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    
        // $customers = DB::table('customer')
        //     ->join('category','category.id_category','=', 'customer.category_id')
        //     ->select('customer.*','category.description as category_id')
        //     ->get();

        // return view('customer.read', compact('customers'));

        $customers = Customer::all();
        return view('customer.index')->with('customers', $customers);

        // Return view('carpeta.plantilla', compact('customers,$customers,categories,$categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $customer = new Customer();
        $customer->name = $request->get('name');
        $customer->address = $request->get('address');
        $customer->phone_number = $request->get('phone_number');
        $customer->category_id = $request->get('category_id');

        $customer->save();

        return redirect('/customer');
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
        $customer = Customer::find($id);
        return view('customer.edit')->with('customer', $customer);
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
        $customer = Customer::find($id);
        $customer->name = $request->get('name');
        $customer->address = $request->get('address');
        $customer->phone_number = $request->get('phone_number');
        $customer->category_id = $request->get('category_id');

        $customer->save();

        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer = Customer::find($id);

        $customer->delete();

        return redirect('/customer');
    }
}
