<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Enquirysource;
use DateTime;
use Validator;

class EnquiryController extends Controller
{
    public function index(){

        $enquiry = Enquiry::all(); 
        return view('pages.enquiry.enquirymanagement',compact('enquiry'));

    }
    public function enquiryadd(){
        $source = Enquirysource::all(['id', 'title']);
        return view('pages.enquiry.enquiryadd', compact('source'));
        //return view('pages.enquiry.enquiryadd');

    }

    public function getenquirydetails(Request $request){

        $validation = Validator::make($request->all(),
        [
            'title'=>'required',
            'name'=>'required',
            'contact_num'=>'required',
            'adult' =>'required',
            'child'=>'required',
            'no_of_night'=>'required',
            'tour_date'=>'required',
            'budget'=>'required',
            'enquiry_status'=>'required',
            'enquiry_source'=>'required',
            //'submit_by'=>'required',
        ]);
        // "<pre>";print_r($request->name_enquiry);exit;
        $enquiry=new Enquiry;
        $enquiry->title=$request->title;

        $enquiry->name=$request->name_enquiry;

        $enquiry->contact_num=$request->contact_num;

        $enquiry->adult=$request->adult;

        $enquiry->child=$request->child;

        $enquiry->no_of_night=$request->no_of_night;

        $dateObject = DateTime::createFromFormat('m/d/Y', $request->tour_date);
        $formattedDate = $dateObject->format('Y-m-d');
        $enquiry->tour_date=$formattedDate;
        $enquiry->infant	=$request->infant	;

        $enquiry->budget=$request->budget;
        $enquiry->enquiry_status=$request->enquiry_status;

        $enquiry->enquiry_source=$request->enquiry_source;
        //$enquiry->submit_by=$request->submit_by;
        $enquiry->save();
        $enquiry = Enquiry::all(); 
        return view('pages.enquiry.enquirymanagement',compact('enquiry'));    
    }

        public function enquiryedit(Request $request,$id){
            $enquiry = Enquiry::where('id',$id)->first(); 
            $source = Enquirysource::all(['id', 'title']);
            return view('pages.enquiry.enquiryedit', compact('enquiry', 'source' ));
            
        //return view('pages.enquiry.enquiryedit',compact('enquiry'));

    }

    public function update(Request $request){
        //dd($request);
        $validation = Validator::make($request->all(),
        [
            'title'=>'required',
            'name'=>'required',
            'contact_num'=>'required',
            'adult' =>'required',
            'child'=>'required',
            'no_of_night'=>'required',
            'tour_date'=>'required',
            'budget'=>'required',
            'enquiry_status'=>'required',
            'enquiry_source'=>'required',
            //'submit_by'=>'required',
        ]);
  
        $enquiry = Enquiry::where('id',$request->rowid)->first();

        $enquiry->title=$request->title;
        $enquiry->name	=$request->name_enquiry;
        $enquiry->contact_num=$request->contact_num;
        $enquiry->adult=$request->adult;

        $enquiry->child=$request->child;

        $enquiry->no_of_night=$request->no_of_night;
       // $myDateTime = DateTime::createFromFormat('Y-m-d', $request->tour_date);
        $newDateString = $request->tour_date;

        $enquiry->tour_date=$newDateString;
        $enquiry->budget=$request->budget;

        $enquiry->infant	=$request->infant	;
        $enquiry->enquiry_status=$request->enquiry_status;

        $enquiry->enquiry_source=$request->enquiry_source;
        //$enquiry->submit_by=$request->submit_by;
        $enquiry->save();
        
        $enquiry = Enquiry::all(); 
        return view('pages.enquiry.enquirymanagement',compact('enquiry'));    
    }

    public function destroy($id){
        $enquiry = Enquiry::where('id',$id)->first();
        $enquiry->delete();
        return back()->withSucess('Deleted sucessfully!');


    }
   

   
    
}
