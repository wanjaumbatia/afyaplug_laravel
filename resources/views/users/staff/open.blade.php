@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">Open Requests</h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">{{count($staff)}} requests</span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">        
        <div class="userDatatable table-striped global-shadow border px-30 py-15 bg-white radius-xl w-100 mb-30">
        <div id="filter-form-container"></div>
            <div class="table-responsive">
                <table class="table mb-0 border table-borderless adv-table"  data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                   <thead>
                        <tr class="userDatatable-header">
                            <th>                               
                                <span class="userDatatable-title">name</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">email</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">phone</span>
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">gender</span>
                            </th>                            
                            <th class="text-center">
                                <span class="userDatatable-title">status</span>
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                    @foreach ($staff as $item)
                    <tr>
                        <td>
                            <div class="userDatatable-content">
                                {{$item->name}}                                  
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="">
                                {{$item->email}}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="userDatatable-content">
                                {{$item->phone}}
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="userDatatable-content">
                                @if($item->gender)
                                {{$item->gender}}
                                @endif
                            </div>
                        </td>                        
                        <td class="text-center">
                            <div class="">
                                <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">open</span>
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