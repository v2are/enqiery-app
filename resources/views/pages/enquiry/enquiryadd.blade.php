@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Enquiry Details'])
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
                    <form role="form" method="POST" action="{{ url('/getenquirydetails') }}" enctype="multipart/form-data">
                        @csrf
                      
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Enquiry</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Name</label>
                                        <input class="form-control" type="text" name="name_enquiry" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Title</label>
                                        <input class="form-control" type="text" name="title" value=""required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Contact Number</label>
                                        <input class="form-control" type="text" name="contact_num" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tour Date</label>
                                        <input class="form-control datepicker"  id="datepicker" type="text" name="tour_date" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Adult</label>
                                        <input class="form-control" type="text" name="adult"  value="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Child</label>
                                        <input class="form-control" type="text" name="child" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Infant</label>
                                        <input class="form-control" type="text" name="infant" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">No of Nights</label>
                                        <input class="form-control" type="text" name="no_of_night" value="" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Budget</label>
                                        <input class="form-control" type="text" name="budget" value="" required>
                                    </div>
                                </div>
                              
                                <div class="col-md-4">
                                    <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Enquiry Source </label>
                                    <select class="form-control" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ..." name="enquiry_source" required>
                                    <option>Choose Enquiry Source</option>
                                    @foreach($source as $sourcevalue)
                                        <option value="{{$sourcevalue->id}}">{{$sourcevalue->title}}</option>
                                        @endforeach
                                        
                                    </select>
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Enquiry Status</label>
                                        <select class="form-control" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ..." name="enquiry_status" required>
                                        <option value='1'>Select Status</option>
                                        <option value='2'>on process</option>
                                        <option value ='3'>pending</option>
                                        
                                    </select>
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
            <div class="col-md-4">
                <div class="card card-profile">
                    <!--<img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">-->
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                           <!-- <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="/img/team-2.jpg"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>-->
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <!--<a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                    class="ni ni-collection"></i></a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                    class="ni ni-email-83"></i></a>-->
                        </div>
                    </div>
                   <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">22</span>
                                        <span class="text-sm opacity-8">Adults</span>
                                    </div>
                                    <div class="d-grid text-center mx-4">
                                        <span class="text-lg font-weight-bolder">10</span>
                                        <span class="text-sm opacity-8">Child</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">89</span>
                                        <span class="text-sm opacity-8">Infant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h5>
                            Title<span class="font-weight-light">, 35</span>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Enquiry Source
                            </div>
                            <div class="h6 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Enquiry Status
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>SubmitedBy
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @include('layouts.footers.auth.footer')
    </div>
@endsection
