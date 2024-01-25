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
                    <a class="btn btn-primary" href="{{url('/addenquiry')}}" role="button">Add Enquiry details</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>     
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S.No</th>

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">EnquiryDate</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Toure Date
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Adults
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">children
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Numberof Nights
                                        </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enquiry as $value)
                                
                                <tr>
                                <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$loop->index+1}}</p>
                                    </td>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <!--<div>
                                                <img src="./img/team-1.jpg" class="avatar me-3" alt="image">
                                            </div>-->
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$value->enquiry_datetime}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0"></p>{{$value->tour_date}}
                                    </td>
                                    <td class="align-middle text-center text-sm">{{$value->adult}}
                                        <p class="text-sm font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">{{$value->child}}
                                        <p class="text-sm font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">{{$value->no_of_night}}
                                        <p class="text-sm font-weight-bold mb-0"></p>
                                    </td>

                                    <td class="align-middle text-end">
                                    <input name="invisible" type="hidden" name="hiddenid" value="{{$value->id}}">

                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                        <a href="/enquiryedit/{{$value->id}}"><i style='font-size:24px' class='far'>&#xf044;</i> </a>
                                         <a href="#"> Delete <i class="bi bi-trash"></i>
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
