@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Edit Customer Details'])
   <!-- <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ auth()->user()->firstname ?? 'Firstname' }} {{ auth()->user()->lastname ?? 'Lastname' }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            Public Relations
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>--->
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row"> 
            <div class="col-md-8">
                <div class="card">
                    <form role="form" method="POST" action=  "{{ route('customerupdate', $customer->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Edit Customer</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input class="form-control" type="text" name="title" value="{{ old('title',$customer->title) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">FirstName</label>
                                        <input class="form-control" type="text" name="first_name" value="{{ old('first_name',$customer->first_name) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">LastName</label>
                                        <input class="form-control" type="text" name="last_name" value="{{ old('last_name',$customer->last_name) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email</label>
                                        <input class="form-control datepicker"  id="" type="text" name="email" value="{{ old('email',$customer->email) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">DOB</label>
                                        <input class="form-control" type="text" name="dob"  value="{{ old('dob',$customer->dob) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Mobile</label>
                                        <input class="form-control" type="text" name="mobile" value="{{ old('mobile',$customer->mobile) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Phone</label>
                                        <input class="form-control" type="text" name="phone" value="{{ old('phone',$customer->phone) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Gender</label>
                                        <input class="form-control" type="text" name="gender" value="{{ old('gender',$customer->gender) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control" type="textarea" name="address" value="{{ old('address',$customer->address) }}" required>
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
                                        <input class="form-control" type="text" name="pincode" value="{{ old('pincode',$customer->pincode) }}" required>
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
                               <!-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Address</label>
                                        <input class="form-control" type="text" name="address"
                                            value="{{ old('address', auth()->user()->address) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <input class="form-control" type="text" name="city" value="{{ old('city', auth()->user()->city) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <input class="form-control" type="text" name="country" value="{{ old('country', auth()->user()->country) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal code</label>
                                        <input class="form-control" type="text" name="postal" value="{{ old('postal', auth()->user()->postal) }}">
                                    </div>
                                </div>--->
                            </div>
                            <hr class="horizontal dark">
                            <!--<p class="text-uppercase text-sm">About me</p>-->
                            <div class="row">
                                <!--<div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">About me</label>
                                        <input class="form-control" type="text" name="about"
                                            value="{{ old('about', auth()->user()->about) }}">
                                    </div>
                                </div>-->
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
