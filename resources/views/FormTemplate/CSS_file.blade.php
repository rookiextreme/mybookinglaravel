@extends('form')
@section('VendorCSS')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->
@endsection

@section('ThemeCSS')
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/themes/semi-dark-layout.css')}}">
@endsection    

@section('PageCSS')
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->
@endsection

@section('CustomCSS')
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
@endsection