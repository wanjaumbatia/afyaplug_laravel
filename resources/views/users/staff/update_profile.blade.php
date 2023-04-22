@extends('layouts.auth')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shop-breadcrumb">
                <div class="breadcrumb-main">                   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class=" checkout wizard8 global-shadow border px-sm-50 px-20 mb-30 bg-white radius-xl w-100">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="checkout-progress-indicator">
                            <div class="checkout-progress justify-content-center px-0">
                                <div class="step" id="1">
                                    <span id="1-span">1</span>
                                </div>
                                <div class="step" id="2">
                                    <span id="2-span">2</span>
                                </div>
                                <div class="step" id="3">
                                    <span id="3-span">3</span>
                                </div>
                            </div>
                            <div class="card-header border-bottom-0">
                                <h4>Please complete your professional profile</h4>
                                <p>Note that any wrongly submited information may lead to disqualification.</p>
                                <img class="svg" src="{{asset('img/svg/progress3.svg')}}" alt="">
                                <input hidden id='user_id' type="number" value="{{Auth::user()->id}}">
                            </div>
                        </div><!-- checkout -->
                    </div>
                    <div class="col-xl-7 col-lg-8 col-sm-10">
                        <div class="card checkout-shipping-form">
                            <div id="address_form">
                                <div class="card-header border-bottom-0 pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">1. work address</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="edit-profile__body">
                                        <form class="was-validated">
                                            <div class="form-group">
                                                <label for="name31">address</label>
                                                <input value="{{$profile->address}}" type="text" class="form-control" id="address" address="address" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="name62">area</label>
                                                <input value="{{$profile->address}}" type="text" class="form-control" id="area" name="area" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="phoneNumber">town</label>
                                                <input value="{{$profile->town}}" type="text" class="form-control" id="town" name="town" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="countryOption">
                                                    <label for="countryOption">
                                                        County / Region
                                                    </label>
                                                    <select class="custom-select is-valid select-arrow-none ih-medium  radius-xs b-light shadow-none color-light  fs-14 form-control" id="county" name="county" required>
                                                        <option selected disabled value=""></option>
                                                        <option {{$profile->county == 'Nairobi' ? 'selected':''}} value="Nairobi">Nairobi</option>
                                                        <option {{$profile->county == 'Mombasa' ? 'selected':''}} value="Mombasa">Mombasa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="button-group d-flex pt-3 mb-20 justify-content-end flex-wrap">
                                                <button type="submit" id="save_address_btn" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save
                                                    & Next<i class="ml-10 mr-0 las la-arrow-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="details_form">
                                <div class="card-header border-bottom-0 pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">2. Personal details</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group">
                                                <label for="id_number">id number</label>
                                                <input type="number" value="{{$profile->id_number}}" class="form-control" name="id_number" id="id_number" >
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth">date of birth</label>
                                                <input type="text" value="{{$profile->date_of_birth}}" class="form-control  ih-medium ip-gray radius-xs b-light" id="date_of_birth" name="date_of_birth">
                                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">gender</label>
                                                <select class="form-control" name="gender" id="gender">
                                                    <option value=""></option>
                                                    <option {{$profile->gender=="Male"?'selected':''}} value="Male">Male</option>
                                                    <option {{$profile->gender=="Female"?'selected':''}} value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="button-group d-flex pt-3 mb-20 justify-content-end flex-wrap">
                                                <button id="save_details_btn" href="#" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save
                                                    & Next<i class="ml-10 mr-0 las la-arrow-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>                            
                            <div id="specialization_form">
                                <div class="card-header border-bottom-0 pb-sm-0 pb-1 px-0">
                                    <h4 class="fw-500">3. Specialization</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="edit-profile__body">
                                        <form>
                                            <div class="form-group">
                                                <label for="id_number">Title</label>
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="date_of_birth">Specialty</label>
                                                <input type="text"   class="form-control" id="specialty" name="specialty">
                                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="gender">nurse regestration number</label>
                                                <input type="text"  class="form-control" id="nurse_license_number" name="nurse_license_number">
                                            </div>
                                            <div class="button-group d-flex pt-3 mb-20 justify-content-end flex-wrap">
                                                <button id="save_specialization_btn" class="btn text-white btn-primary btn-default btn-squared text-capitalize m-1">Save
                                                    & Next<i class="ml-10 mr-0 las la-arrow-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .card -->
                    </div><!-- ends: col -->
                </div>
            </div><!-- ends: col -->
            
        </div>
    </div><!-- End: .global-shadow-->
</div>
@endsection