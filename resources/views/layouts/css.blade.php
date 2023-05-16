<!-- Favicon -->
{{-- <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/logo.svg') }}" /> --}}

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

<!-- Icons. Uncomment required icon fonts -->
<link rel="stylesheet" href="{{ asset('vendor/fonts/boxicons.css') }}" />

{{-- <link rel="stylesheet" href="{{ asset('assets/vendor/css/bootstrap.css') }}" /> --}}
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset('vendor/css/core.css') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}"
    class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/datatable/datatables/dataTables.bootstrap5.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/sweet-alert/sweetalert2.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/libs/filepond/filepond.min.css') }}" />
<!-- Vendors CSS -->
<link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

<link rel="stylesheet" href="{{ asset('vendor/libs/apex-charts/apex-charts.css') }}" />
<style>
    .iconClass {
        position: relative;
    }

    .iconClass span {
        position: absolute;
        top: 0px;
        right: 0px;
        display: block;
    }

    .pr-2 {
        padding: 0.5rem;
    }
</style>

<!-- Page CSS -->

<!-- Helpers -->
<script src="{{ asset('/vendor/js/helpers.js') }}"></script>

<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
<script src="{{ asset('/js/config.js') }}"></script>
