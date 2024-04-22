<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/style.css') }}">
    <!-- END: Custom CSS-->
<style>
    .ProfileR_Nav{
        padding: 0.8rem 1rem;
        position: relative;
        transition: 300ms ease all;
        backface-visibility: hidden;
        min-height: calc(100% - 3.35rem);
        border-radius: 8px;
        z-index: 12;
        border: 0.45px solid rgba(255, 255, 255, 1);
        background: rgba(244, 242, 166, 1);
        box-shadow: 0px 0px 11.274335861206055px 1.1274335384368896px rgba(112, 112, 112, 0.15);
    }
    .header-navbar.floating-nav{
        background: #ffcc34 !important;
    }
</style>
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('dashboard.layouts.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('dashboard.layouts.sidebar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            @yield('Main_content')
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    @include('dashboard.layouts.footer')
    <!-- END: Footer-->
    @include('dashboard.layouts.scripts')
    @yield('js')


    <!-- Cancellation Modal -->
<div class="modal fade" id="cancellationmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content canellation-modal-content">
            <div class="modal-header cancellation-header">
                <h5 class="modal-title" id="exampleModalLabel">Cancellation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Reason for Cancellation :</label>
                        <select class="cancel-modal-select">
                        <option value="" disabled selected>Select a reason</option>
                            <option value="">Reason 2</option>
                            <option value="">Reason 4</option>
                            <option value="">Reason 5</option>
                            <option value="">Reason 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control cancel-textarea" id="message-text"
                            placeholder="Add description"></textarea>
                    </div>
                </form>
                <div class="modal-note">
                    <p>Note :</p>
                    <p>Lorem ipsum is placeholder text commonly used in the
                        graphic, print, and publishing industries for previewing
                        layouts and visual mockups.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cancelation-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn req-cancel-btn">Request Cancellation</button>
            </div>
        </div>
    </div>
</div>
</body>
<!-- END: Body-->

</html>