@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">Email list</h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">{{count($emails)}} Emails</span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="userDatatable table-striped global-shadow border p-30 bg-white radius-xl w-100 mb-30">
        <div id="filter-form-container"></div>
            <div class="table-responsive">
                <table class="table mb-0 border table-borderless adv-table"  data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                    <thead>
                        <tr class="userDatatable-header">
                            <th>                               
                                <span class="userDatatable-title">email address</span>
                            </th>
                            <th class="text-center">                               
                                <span class="userDatatable-title">subject</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">message</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">attachment</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">user</span>
                            </th> 
                            <th class="text-center">
                                <span class="userDatatable-title">date</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">status</span>
                            </th>
                            <th class="text-center">                               
                                <span class="userDatatable-title">reference</span>                                      
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                    @foreach ($emails as $item)
                   <tr>
                    <td>
                        <div class="">
                            {{$item->to}}                                  
                        </div>
                    </td>
                    <td>
                        <div class="text-wrap">
                            {{$item->subject}}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content text-wrap">
                            {{$item->message}}
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="userDatatable-content">
                            @if($item->attachment)
                            {{$item->user->attachment}}
                            @endif
                        </div>
                    </td>   
                    <td class="text-center">
                        <div class="userDatatable-content">
                            @if($item->user)
                            {{$item->user->name}}
                            @endif
                        </div>
                    </td>   
                    <td class="text-center">
                        <div class="userDatatable-content">
                            {{$item->created_at->format('d/m/Y H:i')}}
                        </div>
                    </td>
                    <td class="text-center">
                        @if ($item->sent == true)
                        <div class="userDatatable-content d-inline-block">
                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">sent</span>
                        </div>
                        @elseif ($item->sent == false)
                        <div class="userDatatable-content d-inline-block">
                            <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status">not sent</span>
                        </div>
                        @else
                        @endif
                    </td>
                    <td class="text-center">  
                        <div class="userDatatable-content d-inline-block">
                            @if($item->reference)
                            <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">{{$item->reference}}</span>
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