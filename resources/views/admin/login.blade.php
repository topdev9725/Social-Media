@extends('layouts.app')

@section('styles')
<style>
    .btn-primary,
    .btn-primary:hover,
    .btn-primary:focus {
        width: unset!important;
        background: #FF335C;
        border-color: #FF335C;
        border-top-right-radius: .25rem!important;
        border-bottom-right-radius: .25rem!important;
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    @if(\Session::has('message'))
                        <p class="alert alert-info">
                            {{ \Session::get('message') }}
                        </p>
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h1>
                            <div class="login-logo">
                                <a href="#" style="color: #FF335C">
                                    MillionK
                                </a>
                            </div>
                        </h1>
                        <p class="text-muted">{{ trans('global.login') }}</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user" style="color:#FF335C"></i></span>
                            </div>
                            <input name="email" type="text" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="{{ trans('global.login_email') }}">
                            @if($errors->has('email'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </em>
                            @endif
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock" style="color:#FF335C"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="{{ trans('global.login_password') }}">
                            @if($errors->has('password'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </em>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" class="btn btn-primary px-4" value='{{ trans('global.login') }}'>
                                <label class="ml-2">
                                    <input name="remember" type="checkbox" /> {{ trans('global.remember_me') }}
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-link px-0" style="color: #FF335C">
                                    {{ trans('global.forgot_password') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
