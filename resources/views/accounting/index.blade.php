@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">Account Types </h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">list</span>
                </div>
            </div>
            <div class="action-btn">
                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-service">
                    <i class="las la-plus fs-16"></i>Add New</a>
                <!-- Modal -->
                <div class="modal fade new-member" id="new-service" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">New Account Type</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span data-feather="x"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="new-member-modal">
                                    <form method="POST" action="{{route('accounting.account_types.store')}}">
                                        @csrf
                                        <div class="form-group mb-20">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="name" />
                                        </div>        
                                        <div class="mt-2">
                                            <button class="btn btn-primary w-100">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        Home
    </div>
</div>
@endsection