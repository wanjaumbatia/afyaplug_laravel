@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">Currency Setup </h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">list</span>
                </div>
            </div>
            <div class="action-btn">
                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-service">
                    <i class="las la-plus fs-16"></i>Set Currency</a>
                <!-- Modal -->
                <div class="modal fade new-member" id="new-service" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">Set Currecy</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span data-feather="x"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="new-member-modal">
                                    <form method="POST" action="{{route('accounting.settings.currency.store')}}">
                                        @csrf
                                        <div class="form-group mb-20">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="name" />
                                        </div>  
                                        <div class="form-group mb-20">
                                            <label for="">Code</label>
                                            <input type="text" class="form-control" name="code" />
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
            <div class="card card-default card-md mb-4">
                <div class="card-body py-md-30">
                    <form action="#">
                        <div class="form-group row mb-n25">
                            <div class="col-md-6 mb-15">
                                <div>
                                    <label>Name</label>
                                    <input type="text" disabled class="form-control  ih-medium ip-lightradius-xs b-light" value="{{$entity->name}}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-15">
                                <div>
                                    <label>Multicurrency</label>
                                    @if($entity->multi_currency==0)
                                    <input type="text" disabled class="form-control  ih-medium ip-lightradius-xs b-light" value="No">
                                    @else
                                    <input type="text" disabled class="form-control  ih-medium ip-lightradius-xs b-light" value="Yes">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <div>
                                    <label>Currency</label>
                                    <input type="text" disabled class="form-control  ih-medium ip-lightradius-xs b-light" value="{{$entity->currency->toString()}}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-25">
                                <div>
                                    <label>Reporting Currency</label>
                                    <input type="text" disabled class="form-control  ih-medium ip-lightradius-xs b-light" value="{{$entity->reportingCurrency->toString()}}">
                                </div>
                            </div>
                        </div>

                        <div class="mt-25 userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
                            <div class="table-responsive">                        <table class="table mb-0 table-borderless">
                    <thead>
                        <tr class="userDatatable-header">
                            <th class="text-center">
                                <span class="userDatatable-title">
                                    Name
                                </span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">
                                    Code
                                </span>
                            </th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($currencies as $item)
                            <tr>
                                <td class="text-center">
                                    <div class="userDatatable-content">
                                        {{$item->tostring()}}                                  
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="userDatatable-content">
                                        {{$item->currency_code}}                                  
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                   </table>
                </div>
            </div>
                </div>
                </div>        
    </div>
</div>
@endsection