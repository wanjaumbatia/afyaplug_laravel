@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">users list</h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">{{count($users)}} Users</span>
                </div>
            </div>
            <div class="action-btn">
                <a href="#" class="btn px-15 btn-primary" data-toggle="modal" data-target="#new-member">
                    <i class="las la-plus fs-16"></i>Add New User</a>
                <!-- Modal -->
                <div class="modal fade new-member" id="new-member" role="dialog" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content  radius-xl">
                            <div class="modal-header">
                                <h6 class="modal-title fw-500" id="staticBackdropLabel">New User</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span data-feather="x"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="new-member-modal">
                                    <form method="POST" action="{{route('users.invite')}}">
                                        @csrf
                                        <div class="form-group mb-20">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="name" />
                                        </div>                                        
                                        <div class="form-group mb-20">
                                            <label for="">Email Address</label>
                                            <input type="email" class="form-control" name="email" />
                                        </div>
                                        <div class="form-group mb-20">
                                            <label for="">Phone</label>
                                            <input type="text" class="form-control"  name="phone" />
                                        </div>

                                        <div class="form-group mb-20">
                                            <label for="">Role</label>
                                            <select name="role_id" id="select-search" class="form-control ">
                                                @foreach($roles as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mt-2">
                                            <button class="btn btn-primary w-100">Invite</button>
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
                            <th>
                                <span class="userDatatable-title">email</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">phone</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">role</span>
                            </th>                            
                            <th>
                                <span class="userDatatable-title">Last login</span>
                            </th>                            
                            <th>
                                <span class="userDatatable-title">Last Ip Address</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">join date</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">status</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">Change Status</span>
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <td>
                            <div class="userDatatable-content">
                                {{$item->name}}                                  
                            </div>
                        </td>
                        <td>
                            <div class="">
                                {{$item->email}}
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                {{$item->phone}}
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                @if($item->role)
                                {{$item->role->name}}
                                @endif
                            </div>
                        </td>                        
                        <td>
                            <div class="userDatatable-content">
                                @if($item->lastSuccessfulLoginAt())
                                {{$item->lastSuccessfulLoginAt()->format('d/m/Y H:i')}}
                                @endif
                            </div>
                        </td>
                        <td>
                            <div class="userDatatable-content">
                                @if($item->lastSuccessfulLoginIp())
                                <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">
                                {{$item->lastSuccessfulLoginIp()}}
                                </span>
                                @endif
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="userDatatable-content">
                                {{$item->created_at->format('d/m/Y H:i')}}
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
                        <td class="text-center">  
                            <div class="userDatatable-content d-inline-block">                          
                            @if ($item->enabled)
                            <a href="{{route('users.change_status', $item->id)}}" class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status">disable</a>
                            @else
                            <a href="{{route('users.change_status', $item->id)}}" class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status">activate</a>
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
@endsection