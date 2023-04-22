@extends('layouts.app')
@section('content')
<div class="profile-setting ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">My profile</h4>                    
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4 col-sm-5">
                <!-- Profile Acoount -->
                <div class="card mb-25">
                    <div class="card-body text-center p-0">

                        <div class="account-profile border-bottom pt-25 px-25 pb-0 flex-column d-flex align-items-center ">
                            <div class="ap-img mb-20 pro_img_wrapper">
                                <input id="file-upload" type="file" name="fileUpload" class="d-none">
                                <label for="file-upload">
                                    <!-- Profile picture image-->
                                    <img class="ap-img__main rounded-circle wh-120" src="{{asset('storage/users-avatar/'.$user->avatar)}}" alt="profile">
                                    <span class="cross" id="remove_pro_pic">
                                        <span data-feather="camera"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="ap-nameAddress pb-3">
                                <h5 class="ap-nameAddress__title">{{$user->name}}</h5>
                                <p class="ap-nameAddress__subTitle fs-14 m-0">{{$user->role->name}}</p>
                            </div>
                        </div>
                        <div class="ps-tab p-20 pb-25">
                            <div class="nav flex-column text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <span data-feather="user"></span>Edit profile</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <span data-feather="settings"></span>Account
                                    setting</a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                    <span data-feather="key"></span>change password</a>                             
                                <a class="nav-link" id="v-pills-notification-tab" data-toggle="pill" href="#v-pills-notification" role="tab" aria-controls="v-pills-notification" aria-selected="false">
                                    <span data-feather="bell"></span>notification</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-logins" role="tab" aria-controls="v-pills-logins" aria-selected="false">
                                    <span data-feather="log-in"></span>Login Logs</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Profile Acoount End -->
            </div>
            <div class="col-xxl-9 col-lg-8 col-sm-7">
                <div class="mb-50">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade  show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <!-- Edit Profile -->
                            <div class="edit-profile">
                                <div class="card">
                                    <div class="card-header px-sm-25 px-3">
                                        <div class="edit-profile__title">
                                            <h6>Edit Profile</h6>
                                            <span class="fs-13 color-light fw-400">Update your personal
                                                information</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-8 col-lg-8 col-sm-10">
                                                <div class="edit-profile__body mx-lg-20">
                                                    <form>
                                                        <div class="form-group mb-20">
                                                            <label for="names">name</label>
                                                            <input type="text" class="form-control" id="names" value="{{$user->name}}">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="phoneNumber1">phone number</label>
                                                            <input type="tel" class="form-control" id="phoneNumber" value="{{$user->phone}}">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="phoneNumber1">role</label>
                                                            <input type="tel" class="form-control" id="role" value="{{$user->role->name}}">
                                                        </div>
                                                        <div class="form-group mb-20">
                                                            <label for="userBio">user bio</label>
                                                            <textarea class="form-control" id="userBio" rows="2">{{$user->role->bio}}</textarea>
                                                        </div>
                                                        <div class="button-group d-flex justify-content-end flex-wrap pt-30 mb-15">
                                                            <button class="btn btn-primary btn-default btn-squared text-capitalize">update profile
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit Profile End -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <!-- Edit Profile -->
                            <div class="edit-profile">
                                <div class="card">
                                    <div class="card-header  px-sm-25 px-3">
                                        <div class="edit-profile__title">
                                            <h6>Account setting</h6>
                                            <span class="fs-13 color-light fw-400">Update your username and manage your
                                                account</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                <div class="edit-profile__body">
                                                    <form>
                                                        <div class="form-group mb-1">
                                                            <label for="email45">email</label>
                                                            <input type="email" class="form-control" id="email45" placeholder="{{$user->email}}">
                                                        </div>

                                                        <div class="button-group d-flex justify-content-end flex-wrap pt-35">
                                                            <button type="submit" class="btn btn-primary btn-default btn-squared text-capitalize">Change Email
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                <div class="d-flex justify-content-between mt-1 align-items-center flex-wrap mb-35">
                                                    <div class="text-capitalize py-10">
                                                        <h6>close account</h6>
                                                        <span class="fs-13 color-light fw-400">Delete your account and
                                                            account
                                                            data</span>
                                                    </div>
                                                    <div class="my-sm-0 my-10 py-10">
                                                        <button class="btn btn-danger btn-default btn-squared fw-400 text-capitalize">close account
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit Profile End -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <!-- Edit Profile -->
                            <div class="edit-profile">
                                <div class="card">
                                    <div class="card-header  px-sm-25 px-3">
                                        <div class="edit-profile__title">
                                            <h6>change password</h6>
                                            <span class="fs-13 color-light fw-400">Change or reset your account
                                                password</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-lg-8 col-sm-10">
                                                <div class="edit-profile__body mx-lg-20">
                                                    <form>
                                                        <div class="form-group mb-20">
                                                            <label for="name">old passowrd</label>
                                                            <input type="password" class="form-control" id="password" name="password">
                                                        </div>
                                                        <div class="form-group mb-1">
                                                            <label for="password-field">new password</label>
                                                            <div class="position-relative">
                                                                <input id="password-field" type="password" class="form-control pr-50" name="new_password">
                                                                <span class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                            </div>
                                                            <small id="passwordHelpInline" class="text-light fs-13">Minimum
                                                                8
                                                                characters
                                                            </small>
                                                        </div>
                                                        <div class="button-group d-flex justify-content-center flex-wrap pt-45 mb-35">
                                                            <button class="btn btn-primary btn-default btn-squared text-capitalize">Save Changes
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Edit Profile End -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                            <!-- Edit Profile -->
                            <div class="edit-profile edit-social">
                                <div class="card">
                                    <div class="card-header px-sm-25 px-3">
                                        <div class="edit-profile__title">
                                            <h6>Notification Settings</h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="notification-content p-10 border mb-10">                                            
                                            <div class="global-shadow radius-xl bg-white">
                                                <div class="notification-content__body p-25 border-bottom">
                                                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                        <div class="div">
                                                            <h6>Receive Email Notifications</h6>
                                                        </div>
                                                        <div class="custom-control custom-switch my-lg-0 my-10">
                                                            <input type="checkbox" class="custom-control-input" id="nc5">
                                                            <label class="custom-control-label" for="nc5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notification-content__body p-25 border-bottom">
                                                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                        <div class="div">
                                                            <h6>Receive SMS Notifications</h6>
                                                        </div>
                                                        <div class="custom-control custom-switch my-lg-0 my-10">
                                                            <input type="checkbox" class="custom-control-input" id="nc6">
                                                            <label class="custom-control-label" for="nc6"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="notification-content__body p-25 border-bottom">
                                                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                                                        <div class="div">
                                                            <h6>Recieve Login alerts</h6>
                                                        </div>
                                                        <div class="custom-control custom-switch my-lg-0 my-10">
                                                            <input type="checkbox" class="custom-control-input" id="nc8">
                                                            <label class="custom-control-label" for="nc8"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Edit Profile End -->
                        </div>
                        <div class="tab-pane fade " id="v-pills-logins" role="tabpanel" aria-labelledby="v-pills-logins-tab">
                            <!-- Edit Profile -->
                            <div class="edit-profile edit-social">
                                <div class="card">
                                    <div class="card-header  px-sm-25 px-3">
                                        <div class="edit-profile__title">
                                            <h6>Login Logs</h6>
                                            <span class="fs-13 color-light fw-400">Check details about your account access.</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-12 col-lg-12 col-sm-12">
                                                <div class="edit-profile__body mx-lg-20">
                                                    <table class="table mb-0 table-borderless">
                                                    <thead>
                                                        <tr class="userDatatable-header">
                                                            <th>
                                                                <span class="userDatatable-title">
                                                                    Date
                                                                </span>
                                                            </th>
                                                            <th>
                                                                <span class="userDatatable-title">
                                                                    IP
                                                                </span>
                                                            </th>                                                        
                                                            <th>
                                                                <span class="userDatatable-title">
                                                                    Agent
                                                                </span>
                                                            </th>                                                        
                                                            <th class="text-center">
                                                                <span class="userDatatable-title">
                                                                    Location
                                                                </span>
                                                            </th>
                                                            <th class="text-center">
                                                                <span class="userDatatable-title">
                                                                    Coordinates
                                                                </span>
                                                            </th>
                                                            <th>
                                                                <span class="userDatatable-title">
                                                                    Logout
                                                                </span>
                                                            </th>
                                                            <th>
                                                                <span class="userDatatable-title">
                                                                    Status
                                                                </span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($user->authentications as $item)
                                                            <tr>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                        {{$item->login_at}}                                  
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                        {{$item->ip_address}}                                  
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                        {{$item->user_agent}}                                  
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="userDatatable-content">  
                                                                        {{$item->location['city']}}, {{$item->location['country']}}                                  
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="userDatatable-content">  
                                                                        {{$item->location['lat']}}, {{$item->location['lon']}}                                  
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="userDatatable-content">
                                                                        {{$item->logout_at}}                                  
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <div class="userDatatable-content">
                                                                        @if ($item->login_successful == true)
                                                                        <div class="userDatatable-content d-inline-block">
                                                                            <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">success</span>
                                                                        </div>
                                                                        @else ($item->login_successful == false)
                                                                        <div class="userDatatable-content d-inline-block">
                                                                            <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status">failed</span>
                                                                        </div>
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
                            <!-- Edit Profile End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection