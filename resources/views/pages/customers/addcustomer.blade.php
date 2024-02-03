@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Add Customer Details'])
   
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row"> 
            <div class="col-md-8">
                <div class="card">
                    <form role="form" method="POST" action="{{ url('/getcustomerdetails') }}" enctype="multipart/form-data">
                        @csrf
                        
                      
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Customer</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input class="form-control" type="text" name="title" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">FirstName</label>
                                        <input class="form-control" type="text" name="first_name" value=""required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">LastName</label>
                                        <input class="form-control" type="text" name="last_name" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <input class="form-control"   type="text" name="email" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">DOB</label>
                                        <input class="form-control" type="text" name="dob"  id="datepicker" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Mobile</label>
                                        <input class="form-control" type="text" name="mobile" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Phone</label>
                                        <input class="form-control" type="text" name="phone" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Gender </label>
                                    <select class="form-control" data-toggle="select" title="Simple select" name="gender" data-live-search="true" data-live-search-placeholder="Search ..." name="enquiry_source" required>
                                    <option>Choose Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>   
                                    </select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control" type="textarea" name="address" value="" required>
                                    </div>
                                </div>
                               <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Country </label>
                                    <select class="form-control" data-toggle="select" title="Simple select" id="country-dropdown" name="country" required>
                                    <option>Choose Country</option>
                                    @isset($countries)
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                     @endisset   
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">State </label>
                                    <select class="form-control" data-toggle="select" title="Simple select" name="state" id="state-dropdown" required>
                                    <option>Choose State</option>
                                    @isset($states)
                                    @foreach($states as $statesvalue)
                                        <option value="{{statesvalue->name}}">{{$statesvalue->name}}</option>
                                        @endforeach
                                    @endisset
                                    </select> 
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">City </label>
                                    <select class="form-control" data-toggle="select" title="Simple select" id="city-dropdown" name="city"required>
                                    <option>Choose Cities</option>
                                    @isset($cities)
                                    @foreach($cities as $citiesvalue)
                                        <option value="{{$citiesvalue->id}}">{{$citiesvalue->name}}</option>
                                        @endforeach
                                    @endisset
                                        
                                    </select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Pincode</label>
                                        <input class="form-control" type="text" name="pincode" value="" required>
                                    </div>
                                </div>
                            <div class="">
                            <div class="d-flex align-items-center">
                                <p class="mb-2"></p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                            </div>
                             
                            <hr class="horizontal dark">
                           <!--<p class="text-uppercase text-sm">Contact Information</p>-->
                           <div class="row">
                               
                            </div>
                            <hr class="horizontal dark">
                            <!--<p class="text-uppercase text-sm">About me</p>-->
                            <div class="row">
                               
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
            
                </div>
            </div>
        </div>
       
 
        @include('layouts.footers.auth.footer')
    </div>
   
@endsection
