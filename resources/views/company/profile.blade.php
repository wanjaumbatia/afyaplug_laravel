@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">Company Profile</h4>
                </div>
            </div>
            <div class="action-btn">
                @if ($company == null)
                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#company_profile">
                    <i class="las la-plus fs-16"></i>Create</a>
                    <!-- Modal -->
                <div class="modal fade new-member" id="company_profile" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">Profile Form</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span data-feather="x"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <form method="POST" action="{{route('company.store')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <input type="hidden" name="id">
                                                <div class="form-group mb-20">
                                                    <label for="">Name</label>
                                                    <input type="text" id="name" class="form-control" name="name" />
                                                </div>     
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group mb-20">
                                                    <label for="">Email Address</label>
                                                    <input type="email" id="email" class="form-control" name="email" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group mb-20">
                                                    <label for="">Phone</label>
                                                    <input type="text" id="phone" class="form-control" name="phone" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group mb-20">
                                                    <label for="">Address</label>
                                                    <input type="text" id="address" class="form-control" name="address" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <button class="btn btn-primary w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                @else
                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#edit_company_profile">
                    <i class="las la-pen fs-16"></i>Edit</a>
                <!-- Modal -->
                <div class="modal fade new-member" id="edit_company_profile" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">Edit Form</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span data-feather="x"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <form method="POST" action="{{route('company.store')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <input type="hidden" name="id" value="{{$company->id}}">
                                                <div class="form-group mb-20">
                                                    <label for="">Name</label>
                                                    <input type="text" id="name" class="form-control" value="{{$company->name}}" name="name" />
                                                </div>     
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group mb-20">
                                                    <label for="">Email Address</label>
                                                    <input type="email" id="email" class="form-control" value="{{$company->email}}" name="email" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group mb-20">
                                                    <label for="">Phone</label>
                                                    <input type="text" id="phone" class="form-control" value="{{$company->phone}}" name="phone" />
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group mb-20">
                                                    <label for="">Address</label>
                                                    <input type="text" id="address" class="form-control" value="{{$company->address}}" name="address" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <button class="btn btn-primary w-100">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                @endif
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
            <div class="table-responsive">
                <table class="table mb-0 table-borderless">
                    <thead>
                        <tr class="userDatatable-header">
                            <th>                               
                                <span class="userDatatable-title">name</span>
                                      
                            </th>
                            <th>
                                <span class="userDatatable-title">email</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">phone</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">address</span>
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                    @if($company)
                    <tr>
                        <td>
                            <div class="userDatatable-content">
                                {{$company->name}}                                  
                            </div>
                        </td>
                        <td>
                            <div class="">
                                {{$company->email}}
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{$company->phone}}
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{$company->address}}
                            </div>
                        </td>   
                    </tr>
                    @endif
                   </tbody>
                </table>
            </div>           
        </div>
    </div>
</div>

@endsection