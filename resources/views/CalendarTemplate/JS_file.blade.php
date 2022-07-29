@extends('calendar')
@section('VendorJS')    
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
@endsection

@section('PageVendorJS') 
    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->
@endsection

@section('ThemeJS') 
    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->
@endsection

@section('PageJS') 
    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-calendar-events.js"></script>
    <script src="../../../app-assets/js/scripts/pages/app-calendar.js"></script>
    <!-- END: Page JS-->
@endsection