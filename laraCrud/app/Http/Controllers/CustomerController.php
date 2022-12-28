<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{
    //
    public function index(){
        $data = Customer::get();
        //return $data;
        return view('customer-list', compact('data'));

    }
    public function addCustomer(){
        return view('add-customer');
    }

    public function saveCustomer(Request $request){
       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        $stu = new Customer();
        $stu->name = $name;
        $stu->email = $email;
        $stu->phone = $phone;
        $stu->save();

        return redirect()->back()->with('success', 'Customer added sucessfully');
    }

    public function editCustomer($id){

        $data = Customer::where('id', '=', $id)->first();
        return view('edit-customer', compact('data'));

    }
    public function updateCustomer(Request $request){
  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        Customer::where('id', '=', $id)->update([

            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone

        ]);
        return redirect()->back()->with('success', 'Customer updated sucessfully');
    }

    public function deleteCustomer($id){

        Customer::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Customer deleted sucessfully');
    }

}
