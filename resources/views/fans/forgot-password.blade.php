@extends('layouts.front')

@section('title', 'Personalized Videos & Fan Service from your Korean Wave Idols')

@section('styles')

<style>
.image-block {
    background: url("{{ asset('assets/images/girl.png') }}") no-repeat center center;
    background-size: cover;
    height: 100vh;
    /* filter: opacity(66%);
    -webkit-filter: opacity(66%); */
}
.custom-input {
    background: #fff!important;
    color: #000;
}
.inputWithIcon .custom-input {
    padding-right: 40px;
}
.title-part {
    margin: 100px 0px!important;
}

@media screen and (max-width: 1024px) {
    .form-block {
        border-radius: 15px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    .image-block {
        padding: 80px;
    }
    .idol-registration .form-block {
        height: 100%;
    }
}

@media (min-width: 575px) and (max-width: 768px) {
    .image-block {
        padding: 50px;
    }
    .idol-registration .form-block {
        height: 100%;
    }
}

@media (min-width: 320px) and (max-width: 575px) {
    .image-block {
        padding: 20px;
        vertical-align: middle;
        display: table-cell!important;
    }
    .idol-registration .form-block {
        height: initial;
        padding: 25px;
    }
    .idol-registration .title-part {
        margin: 50px 0px 30px;
    }
    .idol-registration .title-part {
        margin: 18px 0px 0px!important;
    }
    .idol-registration .title {
        font-size: 18px;
    }
    .idol-registration .sub-title {
        font-size: 12px;
    }
    .input-label {
        font-size: 12px;
        margin-left: 10px;
    }
    .inputWithIcon {
        margin: 0px;
    }
    .inputWithIcon .custom-input {
        padding-right: 40px;
        height: 34px!important;
        font-size: 12px;
    }
    .input-icon {
        top: 31px;
        width: 40px;
    }
    .fill-control-description {
        font-size: 12px;
    }
    .fill-control-indicator {
        top: 6px;
    }
    .forgot {
        font-size: 12px;
    }
    .custom-btn {
        height: 34px!important;
        font-size: 12px;
    }
    .login-part {
        margin: 15px 0px 20px!important;
    }
    .divider {
        margin-bottom: 20px!important;
    }
    .google {
        padding-right: 10px!important;
    }
    .facebook {
        padding-left: 10px!important;
    }
    .signup-part {
        margin-top: 20px;
    }
    .signup-part a {
        font-size: 12px;
    }
    .need-help {
        font-weight: 600;
        font-size: 14px;
        line-height: 23px;
    }
}

@media (min-width: 1024px) and (max-width: 1250px) {
    .idol-registration .form-block {
        padding: 40px 10px!important;
    }
    .idol-registration .title-part {
        margin: 30px 0px 30px;
    }
    .google-btn, .facebook-btn {
        font-size: 12px;
    }
    .idol-registration .title {
        font-size: 36px;
    }
    .idol-registration .sub-title {
        font-size: 20px;
    }
}
@media (min-width: 1250px) and (max-width: 1500px) {
    .google-btn, .facebook-btn {
        font-size: 12px;
    }
}
</style>
@endsection

@section('content')
<div class="content">
    <div class="container-fluid p-0 idol-registration">
        <div class="row m-0 fans desktop">
            <div class="col-12 col-sm-8 col-md-8 image-block">
                <div class="top">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/top-left-img.png') }}"></a>
                </div>
                <div class="image-title">
                    <h1 class="text-main-color mb-4">Reach<br>your idols</h1>
                    <h4 class="text-main-color">Get personalized fan service videos & interactions <br>with your favourite Korean Wave influencers & idols. <br>Spice up any occasion with you or your friends!</h4>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 form-block">
                <div style="display: table-cell;vertical-align: middle;">
                    <div class="title-part text-center">
                        <h2 class="text-white title">Forgot Password!</h2>
                        <h4 class="text-grey sub-title">Recover your password</h4>
                    </div>
                    <div class="register-part">
                        <form class="custom-form" action="{{ route('forget.password.post') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row m-0">
                                @if ($errors->has('email'))
                                <div class="col-12 col-sm-12 col-md-12">
                                    <span class="help-block pl-3 mb-2 d-block" style="color:#d61919">
                                        <p class="mb-0 text-center">{{ $errors->first('email') }}</p>
                                    </span>
                                </div>
                                @endif
                                @if (Session::has('message'))
                                <div class="col-12 col-sm-12 col-md-12">
                                    <span class="help-block pl-3 mb-4 d-block">
                                        <p class="mb-0 text-white text-center">{{ Session::get('message') }}</p>
                                    </span>
                                </div>
                                @endif
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="inputWithIcon">
                                        <label class="input-label">Email</label>
                                        <input type="email" name="email" placeholder="Email" class="custom-input" required>
                                        <img class="input-icon" src="{{ asset('assets/images/icons/mail.png') }}">
                                    </div>
                                </div>
                                <input name="role" type="hidden" value="2">
                                <div class="col-12 mt-4 mb-5">
                                    <button type="submit" class="btn custom-btn w-100">Send request password</button>
                                </div>
                                <div class="col-12 mt-4 mb-5 text-center">
                                    <a class="text-white">Need help?</a>
                                </div>
                                <div class="col-12 text-center" style="margin-top: 100px">
                                    <a class="text-white">Don't have an account?</a>
                                    <a class="text-main-color" href="{{ route('fans-signup') }}">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="row m-0 fans mobile image-block w-100">
                <div class="form-block">
                    <div class="title-part">
                        <h2 class="text-white title">Forgot Password!</h2>
                        <h4 class="text-grey sub-title">Reset your password</h4>
                    </div>
                    <div class="register-part">
                        <form class="custom-form" action="{{ route('forget.password.post') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row m-0">
                                @if ($errors->has('email'))
                                <div class="col-12 col-sm-12 col-md-12">
                                    <span class="help-block pl-3 mb-2 d-block" style="color:#d61919">
                                        <p class="mb-0 text-center">{{ $errors->first('email') }}</p>
                                    </span>
                                </div>
                                @endif
                                @if (Session::has('message'))
                                <div class="col-12 col-sm-12 col-md-12">
                                    <span class="help-block pl-3 mb-4 d-block">
                                        <p class="mb-0 text-white text-center">{{ Session::get('message') }}</p>
                                    </span>
                                </div>
                                @endif
                                <div class="col-12 col-sm-12 col-md-12 p-0">
                                    <div class="inputWithIcon">
                                        <label class="input-label">Email</label>
                                        <input type="email" name="email" placeholder="Email" class="custom-input" required>
                                        <img class="input-icon" src="{{ asset('assets/images/icons/mail.png') }}">
                                    </div>
                                </div>
                                <input name="role" type="hidden" value="2">
                                <div class="col-12 mt-4 mb-5 p-0 login-part">
                                    <button class="btn custom-btn w-100" type="submit">Send Request Password</button>
                                </div>
                                <div class="col-12 text-center mb-4">
                                    <a class="text-white need-help">Need help?</a>
                                </div>
                                <div class="col-12 text-center signup-part">
                                    <a class="text-white">Don't have an account?</a>
                                    <a class="text-main-color" href="{{ route('fans-signup') }}">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy'
        });
    })
</script>
@endsection
