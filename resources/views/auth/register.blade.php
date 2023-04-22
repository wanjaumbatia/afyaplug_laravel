@extends('layouts.auth')
@section('content')
<div class="signUP-admin">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-5 p-0">
                <div class="signUP-admin-left position-relative">
                    <div class="signUP-overlay">
                        <img class="svg signupTop" src="img/svg/signuptop.svg" alt="img" />
                        <img class="svg signupBottom" src="img/svg/signupbottom.svg" alt="img" />
                    </div>
                    <div class="signUP-admin-left__content">
                        <div class="text-capitalize mb-md-30 mb-5 d-flex align-items-center justify-content-md-start justify-content-center">
                            <a class="wh-36 bg-primary text-white radius-md mr-10 content-center" href="index.html">a</a>
                            <span class="text-dark">Afya Plug</span>
                        </div>
                        <h1>Convenience In Health Care</h1>
                    </div>
                    <div class="signUP-admin-left__img">
                        <img class="img-fluid svg" src="img/svg/signupIllustration.svg" alt="img" />
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-8">
                <div class="signUp-admin-right  p-md-40 p-5">
                    <div class="signUp-topbar d-flex align-items-center justify-content-md-end justify-content-center mt-md-0 mb-md-0 mt-20 mb-1">
                        <p class="mb-0">
                            Already have an account?
                            <a href="/login" class="color-primary">
                                Sign in
                            </a>
                        </p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-12 ">
                            <div class="edit-profile mt-0">
                                <div class="card border-0">
                                    <div class="card-header border-0  pt-md-20 ">
                                        <div class="edit-profile__title">
                                            <h6>Sign up to <span class="color-primary">Afya Plug</span></h6>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="edit-profile__body">                                            
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-group mb-30">
                                                    <label for="name">name</label>
                                                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                                                </div>                                           
                                                <div class="form-group mb-30">
                                                    <label for="email">Email Address</label>
                                                    <input type="text" class="form-control" name="email" placeholder="name@example.com">
                                                </div>
                                                <div class="form-group mb-15">
                                                    <label for="password-field">password</label>
                                                    <div class="position-relative">
                                                        <input id="password-field" type="password" class="form-control" name="password">
                                                        <span class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-15">
                                                    <label for="password-field">Password Confirmation</label>
                                                    <div class="position-relative">
                                                        <input id="password-field" type="password" class="form-control" name="password_confirmation">
                                                        <span class="fa fa-fw fa-eye-slash text-light fs-16 field-icon toggle-password2"></span>
                                                    </div>
                                                </div>
                                                <div class="button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                    <button type="submit" class="btn w-100 btn-primary btn-default btn-squared text-capitalize lh-normal px-50 py-15 signUp-createBtn signIn-createBtn">
                                                        Create Account
                                                    </button>
                                                </div>                                            
                                            </form>
                                            <p class="social-connector text-center mb-md-25 mb-15  mt-md-30"><span>Or</span></p>
                                            <div class="w-100 button-group d-flex align-items-center justify-content-center">
                                                <ul class="signUp-socialBtn">
                                                    <li>
                                                        <button class="radius-md wh-48 content-center"><img class="svg" src="img/svg/google.svg" alt="img" /> </button>
                                                    </li>
                                                    <li>
                                                        <button class="radius-md wh-48 content-center"><img class="svg" src="img/svg/facebook.svg" alt="img" /></button>
                                                    </li>
                                                    <li>
                                                        <button class="radius-md wh-48 content-center"><img class="svg" src="img/svg/twitter.svg" alt="img" /></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection