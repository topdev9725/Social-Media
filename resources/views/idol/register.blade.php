@extends('layouts.front')

@section('title', 'Welcome to MillionK')

@section('styles')
<style>
.block-1 {
    height: 100vh;
}
.block-2 {
    background: #121212;
    padding-top: 70px;
    padding-bottom: 110px;
}
.block-3 {
    background: #171717;
    padding-bottom: 70px;
    padding-top: 70px;
}
.bg-img {
    height: 100vh;
    object-fit: cover;
    position: absolute;
    z-index: -1;
}
.hand-img {
    position: absolute;
    top: 35px;
    right: 0px;
}
.gradient {
    margin-top: -126px;
    height: 160px;
    width: 100%;
    z-index: 999;
    background: linear-gradient(180deg, rgb(19 19 19 / 67%) 30%, rgb(18 18 18) 70%);
}
.welcome-millionk {
    margin-top: 300px;
    margin-left: 70px;
}
.block-3-text {
    margin-bottom: 60px;
}
.block-title {
    font-size: 40px;
    letter-spacing: 6px;
    margin-bottom: 50px;
}
.horizontal-red-bar {
    width: 100px;
    height: 3px;
    background-color: #FF335C;
    margin: auto;
    margin-bottom: 40px;
}
.text-color {
    color: #fcfcfc!important;
}
.font-16 {
    font-size: 16px;
}
.item-title {
    margin: 30px 0px 20px;
    font-size: 18px;
}
.footer-text {
    padding: 10px;
    margin-left: 15px;
}
.footer-social {
    padding: 10px;
}
.footer-subscribe {
    width: 600px;
}
.footer-subscribe-part {
    background: #121212;
    padding: 10px 30px 0px;
}

@media screen and (max-width:768px) {
    .footer-subscribe {
        width: 460px!important;
    }
    .welcome-millionk {
        margin-left: 0px!important;
    }
    .main-text {
        font-size: 46px!important;
    }
}

@media screen and (max-width:475px) {
    .block-2 {
        background: #121212;
        padding-top: 30px;
        padding-bottom: 30px;
    }
    .footer-subscribe {
        width: unset!important;
    }
    .footer-subscribe-part {
        padding: 10px 0px 0px!important;
    }
    .footer-subscribe-input {
        height: 36px!important;
        font-size: 12px!important;
    }
    .footer-subscribe-btn {
        height: 36px!important;
        font-size: 12px!important;
    }
    .footer-subscribe-icon {
        top: 9px!important;
    }
    .footer-text {
        margin-left: 0px!important;
    }
    .block-3-text {
        margin-bottom: 30px;
    }
    .block-title {
        font-size: 18px!important;
        letter-spacing: 4px;
        margin-bottom: 30px;
    }
    .horizontal-red-bar {
        margin-bottom: 30px;
    }
    .item-title {
        font-size: 16px;
    }
    p, h5 {
        font-size: 14px!important;
    }
    .create-showcase {
        margin-bottom: 35px;
    }
    a {
        font-size: 14px;
    }
    .welcome-millionk {
        margin-top: 200px;
        margin-left: 0px;
    }
    .comming {
        font-size: 10px;
    }
    .comming:before {
        content: "this this"
    }
    .main-text {
        font-size: 20px!important;
    }
    .description {
        font-size: 12px;
    }
}
</style>
@endsection

@section('content')
<div class="content">
    <div>
        <img class="bg-img w-100" src="{{ asset('assets/images/bg.png') }}">
    </div>
    <div class="container-fluid p-0" style="height: 100%!important">
        <div class="block-1">  
            <div class="top desktop">
                <img src="{{ asset('assets/images/top-left-img.png') }}">
            </div>
            <div class="row desktop m-0">
                <div class="col-12 d-flex pr-0">
                    <div class="welcome-millionk">
                        <div class="">
                            <span class="comming text-white">Welcome to Millionk</span>
                        </div>
                        <h1 class="text-white main-text">MEET THE WORLD'S FIRST<br> HALLYU CELEBRITY PLATFORM</h1>
                        <h3 class="description">Create & Earn by Fulfilling personalized<br> videos from your fans worldwide.</h3>
                        <div class="input-group mb-3 mt-5">
                            <button class="btn btn-primary custom-btn" style="height: 45px" type="submit">APPLY NOW</button>
                        </div>
                    </div>
                    <div class="middle-hand">
                        <img src="{{ asset('assets/images/hand.png') }}" class="hand-img">
                    </div>
                </div>
            </div>
            <div class="row mobile m-0">
                <div class="col-12 d-flex">
                    <div class="welcome-millionk text-center">
                        <div class="">
                            <span class="comming text-white">Welcome to Millionk</span>
                        </div>
                        <h1 class="text-white main-text">MEET THE WORLD'S FIRST HALLYU CELEBRITY PLATFORM</h1>
                        <h3 class="description">Create & Earn by Fulfilling personalized videos from your fans worldwide.</h3>
                        <div class="input-group mb-3 mt-5" style="justify-content: center">
                            <button class="btn btn-primary custom-btn" style="height: 30px;font-size: 10px" type="submit">APPLY NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="gradient"></div>
        <div class="block-2 text-center">
            <h1 class="text-color block-title">CONNECT WITH YOUR FRIENDS WORLDWIDE</h1>
            <div class="horizontal-red-bar"></div>
            <div class="container">
                <div class="row m-0">
                    <div class="col-12 col-sm-4 col-md-4 create-showcase">
                        <img src="{{ asset('assets/images/create_showcase.png') }}" style="border-radius: 50%">
                        <h4 class="text-main-color text-uppercase item-title">Create Showcase</h4>
                        <p class="text-color font-16">Your own pricing for personalized videos<br>for your fans</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 create-showcase">
                        <img src="{{ asset('assets/images/showcase.png') }}" style="border-radius: 50%">
                        <h4 class="text-main-color text-uppercase item-title">Showcase</h4>
                        <p class="text-color font-16">Choosen personalized videos you have<br>given for your fans</p>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 create-showcase">
                        <img src="{{ asset('assets/images/next_gen.png') }}" style="border-radius: 50%">
                        <h4 class="text-main-color text-uppercase item-title">Next-Gen</h4>
                        <p class="text-color font-16">Take the next step in connecting with<br>your fans through personalized videos</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-3">
            <div class="text-center block-3-text">
                <h1 class="text-color block-title">APPLY TO JOIN MILLIONK AS AN IDOL NOW</h1>
                <div class="horizontal-red-bar"></div>
                <h5 class="text-color desktop" style="font-size: 24px;">If you are part of the Korean Wave sweeping the globe, you can apply<br>here and we will get in touch with you within 72hours.</h5>
                <h5 class="text-color mobile">If you are part of the Korean Wave sweeping the globe, you can apply here and we will get in touch with you within 72hours.</h5>
            </div>
            <div class="container">
                <form class="custom-form">
                    <div class="row m-0">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="inputWithIcon">
                                <label class="input-label">Your Name</label>
                                <input type="text" placeholder="Your name" class="custom-input">
                                <!-- <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i> -->
                                <img class="input-icon" src="{{ asset('assets/images/icons/user.png') }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="inputWithIcon">
                                <label class="input-label">Phone Number(Never Shared)</label>
                                <input type="text" placeholder="Phone number" class="custom-input">
                                <img class="input-icon" src="{{ asset('assets/images/icons/phone.png') }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="inputWithIcon">
                                <label class="input-label">Email</label>
                                <input type="text" placeholder="Email" class="custom-input">
                                <img class="input-icon" src="{{ asset('assets/images/icons/mail.png') }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="inputWithIcon">
                                <label class="input-label">Where can we find you?</label>
                                <input type="text" placeholder="Twitter" class="custom-input">
                                <img class="input-icon" src="{{ asset('assets/images/icons/twitter.png') }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="inputWithIcon">
                                <label class="input-label">Your handle/Username</label>
                                <input type="text" placeholder="User name" class="custom-input">
                                <img style="top:39px" class="input-icon" src="{{ asset('assets/images/icons/a.png') }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="inputWithIcon">
                                <label class="input-label">How many followers do you have?</label>
                                <input type="text" placeholder="20" class="custom-input">
                                <img class="input-icon" src="{{ asset('assets/images/icons/user3.png') }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="inputWithIcon">
                                <label class="input-label">Anything else we should know about you?</label>
                                <textarea class="custom-textarea" style="height:120px!important" placeholder="Let us know about you..."></textarea>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <button class="btn btn-primary custom-btn w-100" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
        <!-- mobile -->
        <div class="m-top mobile">
            <div class="top-bar">
                <img class="logo-img" src="{{ asset('assets/images/top-left-img.png') }}">
                <div class="right-side-icons">
                    <i class="fa fa-search" style="color: #FF335C"></i>
                    <i class="fa fa-bell-o text-white"></i>
                    <i class="fa fa-navicon text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container-fluid m-0" style="height: 100%!important">
            <div class="row footer-subscribe-part">
                <div class="col-12 col-sm-4 col-md-4 my-auto">
                    <h5 class="text-color">Join our mailing list</h5>
                    <p style="color:#898989">Be the first to know about the newest<br>stars & talents coming on MillionK</p>
                </div>
                <div class="col-12 col-sm-8 col-md-8" style="text-align: -webkit-right;">
                    <form class="custom-form d-flex my-auto footer-subscribe">
                        <div class="inputWithIcon" style="width: 73%">
                            <input type="text" placeholder="Email" class="footer-subscribe-input custom-input">
                            <img style="top: 16px" class="input-icon footer-subscribe-icon" src="{{ asset('assets/images/icons/a.png') }}">
                        </div>
                        <button class="btn btn-primary custom-btn m-auto footer-subscribe-btn" style="margin-right: 0px!important;width: 25%" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="row desktop" style="padding: 10px 30px;background:#171717">
                <div class="col-sm-8 col-md-8 d-flex" style="margin: 10px 0px">
                    <img src="{{ asset('assets/images/top-left-img.png') }}" style="height: 46px;margin: 0px 10px;">
                    <div class="footer-text">
                        <p class="text-main-color mb-0">About</p>
                    </div>
                    <div class="footer-text">
                        <p class="text-main-color mb-0">Request an Idol</p>
                    </div>
                    <div class="footer-text">
                        <p class="text-main-color mb-0">FAQ</p>
                    </div>
                    <div class="footer-text">
                        <p class="text-main-color mb-0">Help</p>
                    </div>
                    <div class="footer-text">
                        <p class="text-main-color mb-0">Contact Us</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 d-flex" style="justify-content: flex-end;margin: 10px 0px">
                    <div class="footer-social">
                        <img src="{{ asset('assets/images/icons/facebook.png') }}" style="height: 18px">
                    </div>
                    <div class="footer-social">
                        <img src="{{ asset('assets/images/icons/instagram.png') }}" style="height: 18px">
                    </div>
                    <div class="footer-social">
                        <img src="{{ asset('assets/images/icons/gmail.png') }}" style="height: 18px">
                    </div>
                </div>
                <div class="col-12">
                    <div style="height: 1px;background: #898989;width:100%"></div>
                </div>
                <div class="col-12 d-flex" style="margin: 20px 0px 10px;">
                    <div class="my-auto">
                        <p class="mb-0" style="color:#898989">Copyright © 2021 Lumiworks.pte.Ltd.All rights reserved.</p>
                    </div>
                    <div class="my-auto" style="position: absolute;right:15px">
                        <a href="#" class="text-main-color mr-5">Privacy policy</a>
                        <a href="#" class="text-main-color">Tearms of service</a>
                    </div>
                </div>
            </div>
            <div class="mobile">
                <div class="row" style="background:#171717">
                    <div class="col-6 d-flex" style="margin: 10px 0px">
                        <img src="{{ asset('assets/images/top-left-img.png') }}" style="height: 46px;margin: 0px 10px;">
                    </div>
                    <div class="col-6 d-flex" style="margin: 10px 0px;justify-content: flex-end;">
                        <div class="footer-social">
                            <img src="{{ asset('assets/images/icons/facebook.png') }}" style="height: 18px">
                        </div>
                        <div class="footer-social">
                            <img src="{{ asset('assets/images/icons/instagram.png') }}" style="height: 18px">
                        </div>
                        <div class="footer-social">
                            <img src="{{ asset('assets/images/icons/gmail.png') }}" style="height: 18px">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-text">
                            <a class="text-main-color mb-0">About</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-text">
                            <a class="text-main-color mb-0">Help</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-text">
                            <a class="text-main-color mb-0">Request an Idol</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-text">
                            <a class="text-main-color mb-0">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-text">
                            <a class="text-main-color mb-0">FAQ</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer-text">
                        </div>
                    </div>
                    <div class="col-12 text-center" style="padding: 10px 15px;border-top: 1px solid #2b2b2b;">
                        <a href="#" class="text-main-color">Privacy policy</a>
                    </div>
                    <div class="col-12 text-center" style="padding: 10px 15px">
                        <a href="#" class="text-main-color">Tearms of service</a>
                    </div>
                    <div class="col-12 text-center" style="padding: 10px 15px;margin-bottom:20px">
                        <p class="mb-0" style="color:#898989">Copyright © 2021 Lumiworks.pte.Ltd<br>All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection