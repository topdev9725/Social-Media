@extends('layouts.fans')

@section('title', 'Personalized Videos & Fan Service from your Korean Wave Idols')

@section('styles')
<style>
.container-fluid {
    padding: 0px!important;
}
.featured .featured-video {
    padding: 0px 25px;
}
@media (max-width: 574px) {
    .container-fluid {
        padding: 10px!important;
    }
    .footer .container-fluid {
        padding: 0px!important;
    }
    .featured .featured-video {
        padding: 0px;
    }
}
</style>
@endsection

@section('content')
    @php
        $idol_info = DB::table('idol_info')->where('idol_user_id', $order['order_idol_id'])->first();
    @endphp
<div class="row featured payment-success mb-5 m-0">
    <div class="col-12 col-sm-8 col-md-8">
        <div class="title-part">
            <div class="w-100">
                <h2 class="text-white">Order Confirmation</h2>
                <p class="text-grey">Please check your order</p>
                <div class="divider"></div>
            </div>
            <div class="row mx-0 mb-5">
                @php
                    $fans =  DB::table('users')->where('id', $order['order_fans_id'])->first();
                @endphp
                <div class="col-sm-6 col-md-6 col-6">
                    <div class="order-confirm-profile">
                        <h4 class="text-white">Requested from</h4>
                        <div class="d-flex">
                            @if($fans->photo)
                            <img class="img-circle mr-3" src="{{ asset('assets/images/img/'.$fans->photo) }}">
                            @else
                            <img class="img-circle mr-3" src="{{ asset('assets/images/no-image.jpg') }}">
                            @endif
                            <div class="profile-detail mt-1">
                                <p class="text-grey mb-2">{{ '@'.$fans->user_name }}</p>
                                <p class="text-main-color mb-0">{{ $fans->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-6">
                    <div class="order-confirm-profile">
                        <h4 class="text-white">Occasion</h4>
                        <div class="d-flex">
                            @php
                                $occasion = DB::table('occasions')->where('occasion_id', $order['order_occasion'])->first();
                            @endphp
                            <div class="profile-detail mt-1">
                                <p class="text-grey mb-2">Occasion Type</p>
                                <p class="text-main-color mb-0">{{ $occasion->occasion_name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-6">
                    <div class="order-confirm-profile pt-0">
                        <h4 class="text-white">For who?</h4>
                        <div class="d-flex">
                            <div class="profile-detail mt-1">
                                <p class="text-grey mb-2">{{ $order['order_who_for'] == 1? 'For me' : 'Someone else' }}</p>
                                <p class="text-main-color mb-0">{{ $order['order_to'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-6">
                    <div class="order-confirm-profile pt-0">
                        <h4 class="text-white">Language </h4>
                        <div class="d-flex">
                            <div class="profile-detail mt-1">
                                <p class="text-grey mb-2">Language request for this personalized video</p>
                                @if($order['order_lang'] == 1)
                                <p class="text-main-color mb-0">English</p>
                                @elseif($order['order_lang'] == 2)
                                <p class="text-main-color mb-0">Korean</p>
                                @else
                                <p class="text-main-color mb-0">Both(English and Korean)</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-part d-flex">
            <div>
                <h2 class="text-white">Your personalized video request detail</h2>
                <p class="text-grey">This is your detail request</p>
            </div>
            <div class="m-auto" style="margin-right: 0px!important">
                <!-- <p class="mb-0" style="font-size: 16px;color:#898989">27 May 2021</p> -->
            </div>
        </div>
        <div class="w-100">
            <h5 class="text-white">Instructions</h5>
            <div class="instruction">
                <!-- <p style="font-size: 16px;color:#898989">Here is the instruction from you for your idols</p><br> -->
                <p class="text-white" style="font-size: 16px">
                    {{ $order['order_introduction'] }}
                </p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-4 col-md-4 payment-next featured-video">
        <div class="lang-preference pb-0 mb-3" style="background: #2b2b2b!important;">
            <div class="row m-0 mb-3">
                <div class="col-12 title">
                    <div class="d-flex">
                        <h4 class="text-white">Summary</h4>
                    </div>
                    <p class="mb-0">Your detail payment</p>
                </div>
                <div class="col-12 how-content">
                    <div class="divider mb-3"></div>
                    <div class="payment-info mb-2">
                        <div class="d-flex" style="position: relative">
                            <h5 class="text-white">Request Fee</h5>
                            <h5 class="text-white">${{ $order['order_price'] }}</h5>
                        </div>
                        <!-- <div class="d-flex" style="position: relative">
                            <h5 class="text-white">Platform Fee(5%)</h5>
                            <h5 class="text-white">${{ number_format($order['order_price'] * 0.05, 2) }}</h5>
                        </div> -->
                    </div>
                    <div class="divider mb-3 ml-0" style="width:100%!important"></div>
                    <div class="d-flex mb-2 total">
                        <h5 class="text-white">Total</h5>
                        <h5 class="text-main-color">${{ number_format($order['order_price'] + $order['order_price'] * 0.05, 2) }}</h5>
                    </div>
                    <div class="divider mb-3"></div>
                    <form action="{{ route('payment-success') }}" method="get">
                        <div class="submit">
                            <button type="submit" class="btn custom-btn w-100" style="font-size: 16px">Book Now -
                                ${{ $order['order_price'] + $order['order_price'] * 0.05 }}</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="standard-delivery" style="margin: 0px -10px;border-radius: 0px 0px 10px 10px;">
                <span>Standard delivery from 3-7 days</span>
            </div>
        </div>
        <div class="lang-preference mb-3">
            <div class="row m-0">
                <div class="col-12 title mb-2">
                    <div class="d-flex">
                        <h4 class="text-white">Transaction Detail</h4>
                    </div>
                </div>
                <!-- @if($order['order_payment_method'] == 2)
                <div class="col-12 mb-2">
                    <div style="border: 1px solid #fff;border-radius: 10px;padding: 15px">
                        <h5 class="text-white">Payment Method</h5>
                        <div class="d-flex">
                            <img src="{{ asset('assets/images/master-card.png') }}">
                            <p class="text-main-color mb-0 ml-2">Mastercard</p>
                            <p class="ml-2 mb-0">***2423</p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-12 mb-2">
                    <div style="border: 1px solid #fff;border-radius: 10px;padding: 15px">
                        <h5 class="text-white">Payment Method</h5>
                        <div class="d-flex">
                            <p class="text-main-color mb-0 ml-2">Visa</p>
                            <p class="ml-2 mb-0">***2423</p>
                        </div>
                    </div>
                </div>
                @endif -->
                <div class="col-12 how-content transaction">
                    <div class="content-item mb-3">
                        <div class="my-auto user-name">
                            <p class="mb-0 text-white">Request Fee</p>
                        </div>
                        <div class="m-auto user-rating" style="margin-right:0px!important">
                            <p class="mb-0 text-white">${{ $order['order_price'] }}</p>
                        </div>
                    </div>
                    <!-- <div class="content-item mb-3">
                        <div class="my-auto user-name">
                            <p class="mb-0 text-white">Platform Fee</p>
                        </div>
                        <div class="m-auto user-rating" style="margin-right:0px!important">
                            <p class="mb-0 text-white">${{ number_format($order['order_fee'], 2) }}</p>
                        </div>
                    </div> -->
                    <div class="content-item">
                        <div class="my-auto user-name">
                            <p class="mb-0 text-white" style="font-weight: 700;font-size:16px!important">Total</p>
                        </div>
                        <div class="m-auto user-rating" style="margin-right:0px!important">
                            <p class="mb-0 text-main-color" style="font-weight: 700;font-size:16px!important">${{ number_format($order['order_total_price'], 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lang-preference">
            <div class="row m-0">
                <div class="col-12 title mb-2">
                    <div class="d-flex">
                        <h4 class="text-white">Idols</h4>
                    </div>
                </div>
                <div class="col-12 how-content">
                    <div class="content-item mb-3">
                        <div class="user-img">
                            <img src="{{ asset('assets/images/img/'.$idol_info->idol_photo) }}" class="img-circle">
                        </div>
                        <div class="ml-3 my-auto user-name">
                            <p class="mb-0">{{ '@'.$idol_info->idol_user_name }}</p>
                            <p class="text-main-color mb-0">{{ $idol_info->idol_full_name }}</p>
                        </div>
                        <!-- <div class="m-auto user-rating" style="margin-right:0px!important">
                            <p class="mb-0">Rating</p>
                            <p class="text-main-color mb-0">{{ $idol_info->idol_rating }}/5</p>
                        </div> -->
                    </div>
                    <!-- <div class="content-item mb-3">
                        <div class="my-auto user-name">
                            <p class="mb-0">Email</p>
                            <p class="text-main-color mb-0">{{ $idol_info->idol_email }}</p>
                        </div>
                        <div class="m-auto user-rating" style="margin-right:0px!important">
                            <p class="mb-0">Fans</p>
                            <p class="text-main-color mb-0">{{ $idol_info->idol_fans }}/Fans</p>
                        </div>
                    </div>
                    <div class="content-item">
                        <div class="my-auto user-name">
                            <p class="mb-0">Country</p>
                            <p class="text-main-color mb-0">Singapore</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $(document).on('click', '.occasion-item', function() {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    });
    $(document).on('click', '.first-block', function() {
        if($(this).hasClass('deactive')) {
            $(this).removeClass('deactive');
            $('.first-block').not(this).each(function(){
                $(this).addClass('deactive');
            });
        }
    });
    $(document).on('click', '.done-btn', function() {
        location.href = "{{ route('order-list') }}";
    })
});
</script>
@endsection