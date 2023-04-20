@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">roles list</h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">{{count($roles)}} Roles</span>
                </div>
            </div>
            <div class="action-btn">
                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-role">
                    <i class="las la-plus fs-16"></i>Add New Role</a>
                <!-- Modal -->
                <div class="modal fade new-member" id="new-role" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">New Role</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span data-feather="x"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="new-member-modal">
                                    <form method="POST" action="{{route('roles.store')}}">
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
        <div class="userDatatable global-shadow border p-30 bg-white radius-xl w-100 mb-30">
            <div class="table-responsive">
                <table class="table mb-0 table-borderless">
                    <thead>
                        <tr class="userDatatable-header">
                            <th>                               
                                <span class="userDatatable-title">name</span>
                                      
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">status</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">user count</span>
                            </th>
                            <th>
                                <span class="userDatatable-title float-right">actions</span>
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                    @foreach ($roles as $item)
                    <tr>
                        <td>
                            <div class="userDatatable-content">
                                {{$item->name}}                                  
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($item->enabled == true)
                            <div class="userDatatable-content d-inline-block">
                                <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">active</span>
                            </div>
                            @elseif ($item->enabled == false)
                            <div class="userDatatable-content d-inline-block">
                                <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status">disabled</span>
                            </div>
                            @else                            
                            @endif
                        </td>
                        <td>
                            <div class="userDatatable-content text-center">
                                {{count($item->users)}} users                       
                            </div>
                        </td>
                        <td>
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                <li>
                                    <a href="{{route('roles.show', $item->id)}}" class="view">
                                        <span data-feather="eye"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="edit">
                                        <span data-feather="edit"></span></a>
                                </li>
                                <li>
                                    <a href="#" class="remove">
                                        <span data-feather="trash-2"></span></a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                   </tbody>
                </table>
            </div>           
        </div>
    </div>
</div>
@endsection