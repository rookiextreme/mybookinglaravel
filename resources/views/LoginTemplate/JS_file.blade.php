@extends('login')
@section('VendorJS')
	<!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->
@endsection

@section('PageVendorJS')
	<!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->
@endsection

@section('ThemeJS')
	 <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->
@endsection

@section('PageJS')
	<!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/auth-login.js')}}"></script>
    <!-- END: Page JS-->
@endsection

