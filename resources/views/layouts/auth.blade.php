<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="shortcut icon" href="/assets/images/favicon.ico"/>
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="row w-100 m-0">
                    <div class="content-wrapper full-page-wrapper d-flex align-items-center">
                        <div class="card col-lg-3 mx-auto">
                            <div class="card-body px-5 py-5 text-left">
                                <h3 class="card-title text-center mb-3">
                                    <img src="/assets/images/logo.svg" style="width:50%; min-width:200px; margin-bottom:20px">
                                </h3>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="/assets/js/misc.js"></script>
    </body>
</html>
