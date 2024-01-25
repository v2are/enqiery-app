@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Enquiry Management'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <!--<div class="alert alert-light" role="alert">
                This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it
                <strong>
                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                        here
                    </a>
                </strong>
            </div>-->
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Enquiry</h6>
                    <a class="btn btn-primary" href="{{url('/addcustomer')}}" role="button">Add Customer details</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>     
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S.No</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mobile</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">address
                                    </th>
                                   <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Adults
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">children
                                    </th>-->
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        city
                                        </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customer as $value)
                            

                                <tr>
                                <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$loop->index+1}}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"></p>{{$value->first_name}}
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"></p>{{$value->mobile}}
                                    </td>
                                    <td>
                                    
                                        <div class="d-flex px-3 py-1">
                                           <!-- <div>
                                                <img src="./img/team-1.jpg" class="avatar me-3" alt="image">
                                            </div>-->
                                            <div class="d-flex flex-column justify-content-center">
                                               
                                            </div>
                                        </div>
                                        <p class="text-sm font-weight-bold mb-0"></p>{{$value->email}}
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"></p>{{$value->address}}
                                    </td>
                                    <!--<td class="align-middle text-center text-sm">{{$value->adult}}
                                        <p class="text-sm font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">{{$value->child}}
                                        <p class="text-sm font-weight-bold mb-0"></p>
                                    </td>-->
                                    <td class="align-middle text-center text-sm">{{$value->city}}
                                        <p class="text-sm font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="align-middle text-end">
                                    <input name="invisible" type="hidden" name="hiddenid" value="{{$value->id}}">

                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                        <a href="{{ route('cutomerupdate', $value->id) }}"> <i style='font-size:24px' class='far'>&#xf044;</i> </a>
                                        &nbsp;&nbsp;&nbsp;<a href="{{ route('customerdelete', $value->id) }}" onclick="return confirm('Are you sure you want to DELETE?')"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i>


                                                </a>
                                        </div>
                                    </td>
                                </tr>
                                
                                @endforeach
                                <!--<tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-2.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Creator</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Creator</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0">Edit</p>
                                            <p class="text-sm font-weight-bold mb-0 ps-2">Delete</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div>
                                                <img src="./img/team-3.jpg" class="avatar me-3" alt="image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">Member</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">Member</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">22/03/2022</p>
                                    </td>
                                    <td class="align-middle text-end">
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                            <p class="text-sm font-weight-bold mb-0 cursor-pointer">Edit</p>
                                            <p class="text-sm font-weight-bold mb-0 ps-2 cursor-pointer">Delete</p>
                                        </div>
                                    </td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
