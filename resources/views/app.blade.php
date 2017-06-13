@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"></link>
@endsection

@section('content')
    <div id="app" class="app-wrapper">
        <transition :name="transitionName" :mode="transitionMode">
            <router-view></router-view>
        </transition>
    </div>
    <div class="hide">
        <svg xmlns="http://www.w3.org/2000/svg">
            <symbol id="icon-close" viewBox="0 0 14 14"><g fill="currentColor"><polygon points="14 1.4 12.6 0 7 5.6 1.4 0 0 1.4 5.6 7 0 12.6 1.4 14 7 8.4 12.6 14 14 12.6 8.4 7"></polygon></g></symbol>
            <symbol id="icon-arrow-left" viewBox="15 14 12 22"><g fill="currentColor"><path d="M19.7572926,30.244435 L10.933521,21.4188991 C10.4742038,20.9595819 10.4742038,20.2147352 10.9338151,19.755418 C11.3934264,19.2961008 12.138273,19.2961008 12.5972961,19.755418 L20.5891802,27.7493604 L28.5810642,19.755418 C29.0403814,19.2961008 29.785228,19.2961008 30.2445452,19.755418 C30.7038624,20.2147352 30.7038624,20.9592878 30.2448393,21.4188991 L21.4210677,30.244435 C21.2002308,30.4649778 20.9011748,30.5890699 20.5891802,30.5890699 C20.2771856,30.5890699 19.9781295,30.4649778 19.7572926,30.244435 Z" transform="translate(20.589070, 25.000000) rotate(-270.000000) translate(-20.589070, -25.000000)"></path></g></symbol>
            <symbol id="icon-arrow-right" viewBox="15 14 12 22"><g fill="currentColor"><path d="M19.7572926,30.244435 L10.933521,21.4188991 C10.4742038,20.9595819 10.4742038,20.2147352 10.9338151,19.755418 C11.3934264,19.2961008 12.138273,19.2961008 12.5972961,19.755418 L20.5891802,27.7493604 L28.5810642,19.755418 C29.0403814,19.2961008 29.785228,19.2961008 30.2445452,19.755418 C30.7038624,20.2147352 30.7038624,20.9592878 30.2448393,21.4188991 L21.4210677,30.244435 C21.2002308,30.4649778 20.9011748,30.5890699 20.5891802,30.5890699 C20.2771856,30.5890699 19.9781295,30.4649778 19.7572926,30.244435 Z" transform="translate(20.589070, 25.000000) rotate(270.000000) translate(-20.589070, -25.000000)"></path></g></symbol>
        </svg>
    </div>
@endsection

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
