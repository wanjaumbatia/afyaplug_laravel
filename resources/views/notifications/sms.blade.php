@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="breadcrumb-main user-member justify-content-sm-between ">
            <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                <div class="d-flex align-items-center user-member__title justify-content-center mr-sm-25">
                    <h4 class="text-capitalize fw-500 breadcrumb-title">SMS list</h4>
                    <span class="sub-title ml-sm-25 pl-sm-25">10 SMS</span>
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
                                <span class="userDatatable-title">phone number</span>                                      
                            </th>
                            <th>                               
                                <span class="userDatatable-title">message</span>                                      
                            </th>
                            <th>                               
                                <span class="userDatatable-title">sent on</span>                                      
                            </th>
                            <th>                               
                                <span class="userDatatable-title">user</span>                                      
                            </th>
                            <th>                               
                                <span class="userDatatable-title">order id</span>                                      
                            </th>
                            <th class="text-center">
                                <span class="userDatatable-title">status</span>
                            </th> 
                            <th>                               
                                <span class="userDatatable-title">reference</span>                                      
                            </th>
                        </tr>
                    </thead>
                   <tbody>
                   
                   </tbody>
                </table>
            </div>           
        </div>
    </div>
</div>
@endsection