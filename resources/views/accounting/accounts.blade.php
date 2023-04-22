@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">Accounts</h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">list</span>
                </div>
            </div>
            <div class="action-btn">
                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-account">
                    <i class="las la-plus fs-16"></i>Create New</a>
                <!-- Modal -->
                <div class="modal fade new-member" id="new-account" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">Add Account</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span data-feather="x"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="new-member-modal">
                                    <form method="POST" action="{{route('accounting.accounts.store')}}">
                                        @csrf
                                        <div class="form-group mb-10">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="name" />
                                        </div>                                          
                                        <div class="form-group mb-10">
                                            <label for="">Type</label>
                                            <select id="select-search" class="form-control" name="type">
                                                @foreach($account_types as $item)
                                                <option value="{{$item}}">{{$item}}</option>
                                                @endforeach
                                            </select>
                                        </div>                                        
                                        <div class="form-group mb-10">
                                            <label for="">Category</label>
                                            <select id="select-search1" class="form-control" name="category">
                                                @foreach($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>                                        
                                        <div class="form-group mb-10">
                                            <label for="">Description</label>
                                            <textarea class="form-control" name="description"></textarea>
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
                <div class="card-body">
                    <div class="col-lg-12">        
                        <div class="userDatatable table-striped global-shadow bg-white radius-xl w-100 mb-30">
                        <div id="filter-form-container"></div>
                            <div class="table-responsive">
                                <table class="table mb-0 border table-borderless adv-table"  data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                    <thead>
                                        <tr class="userDatatable-header">
                                            <th>                               
                                                <span class="userDatatable-title"> account</span>                                      
                                            </th>
                                            <th class="text-center">                               
                                                <span class="userDatatable-title"> code</span>                                      
                                            </th>
                                            <th class="text-center">                               
                                                <span class="userDatatable-title"> account type</span>                                      
                                            </th>
                                            <th class="text-center">                               
                                                <span class="userDatatable-title">currency</span>                                      
                                            </th>
                                            <th class="text-center">                               
                                                <span class="userDatatable-title">category</span>                                      
                                            </th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    @foreach ($accounts as $item)
                                    <tr>
                                        <td>
                                            <div class="userDatatable-content">
                                                {{$item->toString()}}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="userDatatable-content">
                                                {{$item->code}}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="userDatatable-content">
                                                {{$item->type}}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="userDatatable-content">
                                                {{$item->currency->name}}
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="userDatatable-content">
                                                @if($item->category)
                                                {{$item->category->name}}
                                                @endif
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
</div>        
</div>
@endsection