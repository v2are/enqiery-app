<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Enquirysource;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use Validator;
use Response;
use Redirect;

class CustomerController extends Controller
{
    public function index(){
     $customer = Customer::all(); 
        return view('pages.customers.viewcustomer',compact('customer'));

    }

    public function customeradd(){
    $data['countries'] = Country::get(["name","id"]);
    return view('pages.customers.addcustomer',$data);
    }

    public function getState(Request $request)
    {  
        $data['states'] = State::where("country_id",$request->country_id)->get(["name","id"]);
        return response()->json($data);
    }

    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }

    public function getcustomerdetails(Request $request){

        $validation = Validator::make($request->all(),
        [
            'title'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender' =>'required',
            'dob'=>'required',
            'mobile'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required',
            'pincode'=>'required',
            'state'=>'required',
            'country'=>'required',
        ]);
        // "<pre>";print_r($request->name_enquiry);exit;
        $customer=new Customer;
        $customer->title=$request->title;

        $customer->first_name=$request->first_name;

        $customer->last_name=$request->last_name;

        $customer->gender=$request->gender;

        $customer->dob=$request->dob;

        $customer->mobile=$request->mobile;

        $customer->phone=$request->phone;
        $customer->email	=$request->email;

        $customer->address=$request->address;
        $customer->city=$request->city;

        $customer->pincode=$request->pincode;
        $customer->state=$request->state;
        $customer->country=$request->country;
        $customer->save();
        $customer = Customer::all(); 
        return view('pages.customers.viewcustomer',compact('customer'));    
    }

    public function customeredit(Request $request,$id){
        $customer = Customer::where('id',$id)->first(); 
        $data['countries'] = Country::get(["name","id"]);
         return view('pages.customers.editcustomer', compact('customer'),$data);

    }

    public function customerupdate(Request $request,$id){
        $validation = Validator::make($request->all(),
        [
            'title'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender' =>'required',
            'dob'=>'required',
            'mobile'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required',
            'pincode'=>'required',
            'state'=>'required',
            'country'=>'required',
        ]);
      
        // "<pre>";print_r($request->name_enquiry);exit;
        $customer = Customer::where('id',$id)->first();
        //$customer = Customer::where('id',$request->rowid)->first();
        //echo print_r($customer);exit;
        $customer->title=$request->title;


        $customer->first_name=$request->first_name;

        $customer->last_name=$request->last_name;

        $customer->gender=$request->gender;

        $customer->dob=$request->dob;

        $customer->mobile=$request->mobile;

        $customer->phone=$request->phone;
        $customer->email=$request->email;

        $customer->address=$request->address;
        $customer->city=$request->city;

        $customer->pincode=$request->pincode;
        $customer->state=$request->state;
        $customer->country=$request->country;
        $customer->save();

        $customer = Customer::all(); 
        return view('pages.customers.viewcustomer',compact('customer'));    
    }

    public function destroy($id){
        $customer = customer::where('id',$id)->first();
        $customer->delete();
        return back()->withSucess('Deleted sucessfully!');


    }



}
