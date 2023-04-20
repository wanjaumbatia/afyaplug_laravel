@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">{{$role->name}} role</h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">{{count($role->users)}} Users</span>
                </div>
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
                                <span class="userDatatable-title">Provider</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">join date</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">status</span>
                            </th>
                            <th>
                                <span class="userDatatable-title float-right">actions</span>
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                    @foreach ($role->users as $item)
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
                                {{$item->role->name}}
                            </div>
                        </td>                        
                        <td>
                            <div class="userDatatable-content">
                                {{$item->provider}}
                            </div>
                        </td>
                        <td>
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
                                <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status">in active</span>
                            </div>
                            @else
                            
                            @endif
                        </td>
                        <td>
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                <li>
                                    <a href="#" class="view">
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