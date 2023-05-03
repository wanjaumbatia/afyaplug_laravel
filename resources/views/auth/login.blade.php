@extends('layouts.auth')

@section('content')
<div class="signUP-admin">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                <div class="signUP-admin-left signIn-admin-left position-relative">
                    <div class="signUP-overlay">
                        <img class="svg signupTop" src="{{asset('img/svg/signuptop.svg')}}" alt="img" />
                        <img class="svg signupBottom" src="{{asset('img/svg/signupbottom.svg')}}" alt="img" />
                    </div><!-- End: .signUP-overlay  -->
                    <div class="signUP-admin-left__content">
                        <div class="text-capitalize mb-md-30 mb-15 d-flex align-items-center justify-content-md-start justify-content-center">
                            <img width="55px" src="img/top_logo.png" alt="" srcset="">
                           <span class="text-dark">Afya Plug</span>
                        </div>
                        <h1>Convenience in Health Care</h1>
                    </div><!-- End: .signUP-admin-left__content  -->
                    <div class="signUP-admin-left__img">
                        <img class="img-fluid svg" src="{{asset('img/svg/signupIllustration.svg')}}" alt="img" />
                    </div><!-- End: .signUP-admin-left__img  -->
                </div><!-- End: .signUP-admin-left  -->
            </div><!-- End: .col-xl-4  -->
            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                <div class="signUp-admin-right signIn-admin-right  p-md-40 p-10">
                    <div class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                        <p class="mb-0">
                            Don't have an account?
                            <a href="/register" class="color-primary">
                                Sign up
                            </a>
                        </p>
                    </div><!-- End: .signUp-topbar  -->
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-12">
                            <div class="edit-profile mt-md-25 mt-0">
                                <div class="card border-0">
                                    <div class="card-header border-0  pb-md-15 pb-10 pt-md-20 pt-10 ">
                                        <div class="edit-profile__title">
                                            <h6>Sign up to <span class="color-primary">Afya Plug</span></h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                        <div class="edit-profile__body">
                                            <div class="form-group mb-20">
                                                <label for="username">Email Address</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control" name="password">
                                                    <div class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></div>
                                                </div>
                                            </div>
                                            <div class="signUp-condition signIn-condition">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="check-1">
                                                    <label for="check-1">
                                                        <span class="checkbox-text">Keep me logged in</span>
                                                    </label>
                                                </div>
                                                <a href="#">forget password</a>
                                            </div>
                                            <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button class="btn btn-primary w-100 btn-default btn-squared mr-15 text-capitalize lh-normal px-50 py-15 signIn-createBtn ">
                                                    sign in
                                                </button>
                                            </div>
                                            <p class="social-connector text-center mb-sm-25 mb-15  mt-sm-30 mt-20"><span>Or</span></p>
                                            <div class="button-group d-flex align-items-center justify-content-center">
                                                <ul class="signUp-socialBtn">
                                                    <li>
                                                        <button class="radius-md wh-48"><img class="svg" src="img/svg/google.svg" alt="img" /> </button>
                                                    </li>
                                                    <li>
                                                        <button class="radius-md wh-48"><img class="svg" src="img/svg/facebook.svg" alt="img" /></button>
                                                    </li>
                                                    <li>
                                                        <button class="radius-md wh-48"><img class="svg" src="img/svg/twitter.svg" alt="img" /></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>                                        
                                        </form>
                                    </div><!-- End: .card-body -->
                                </div><!-- End: .card -->
                            </div><!-- End: .edit-profile -->
                        </div><!-- End: .col-xl-5 -->
                    </div>
                </div><!-- End: .signUp-admin-right  -->
            </div><!-- End: .col-xl-8  -->
        </div>
    </div>
</div><!-- End: .signUP-admin  -->
@endsection
