@extends('user.layouts.master')
@section('title') @lang('translation.Dashboards') @endsection
@section('css')

<link href="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.css') }}" rel="stylesheet">

@endsection
@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboard @endslot
@slot('title') Welcome ! @endslot
@endcomponent

<div class="row">
    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Sales</span>
                        <h4 class="mb-3">
                            $<span class="counter-value" data-target="354.5">0</span>k
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+$20.9k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>

                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart1" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Items</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="1256">0</span>
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-danger-subtle text-danger">-29 Trades</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart2" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col-->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Average Sales</span>
                        <h4 class="mb-3">
                            $<span class="counter-value" data-target="7.54">0</span>M
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+ $2.8k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart3" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-3 col-md-6">
        <!-- card -->
        <div class="card card-h-100">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Order Delivery</span>
                        <h4 class="mb-3">
                            <span class="counter-value" data-target="18.34">0</span>%
                        </h4>
                        <div class="text-nowrap">
                            <span class="badge bg-success-subtle text-success">+5.32%</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div>
                    <div class="flex-shrink-0 text-end dash-widget">
                        <div id="mini-chart4" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row-->

<div class="row">
    <div class="col-xl-8">
        <!-- card -->
        <div class="card">
            <!-- card body -->
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-center mb-4">
                    <h5 class="card-title me-2">Market Overview</h5>
                    <div class="ms-auto">
                        <div>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <div>
                            <div id="market-overview" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts"></div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="p-4">
                            <div class="mt-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            1
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Mobile Phones</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+5.4%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            2
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Smart Watch</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+6.8%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            3
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Protable Acoustics</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12 fw-medium">-4.9%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            4
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Smart Speakers</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-success-subtle text-success font-size-12 fw-medium">+3.5%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm m-auto">
                                        <span class="avatar-title rounded-circle bg-light text-dark font-size-13">
                                            5
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="font-size-14">Camcorders</span>
                                    </div>

                                    <div class="flex-shrink-0">
                                        <span class="badge rounded-pill bg-danger-subtle text-danger font-size-12 fw-medium">-0.3%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-2">
                                <a href="" class="btn btn-primary w-100">See All Balances <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row-->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Selling Products</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown align-self-start">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-horizontal-rounded font-size-18 text-dark"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Copy</a>
                            <a class="dropdown-item" href="#">Save</a>
                            <a class="dropdown-item" href="#">Forward</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>

            </div><!-- end card header -->

            <div class="card-body px-0 pt-2 ">
                    <div class="table-responsive border-0 px-3" data-simplebar style="max-height: 395px;">
                        <table class="table align-middle table-nowrap ">
                            <tbody>
                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="{{ URL::asset('./assets/images/product/img-1.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">Half sleeve T-shirt</a></h5>
                                            <span class="text-muted">$240.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">243K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">145 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="{{ URL::asset('./assets/images/product/img-2.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">Light blue T-shirt</a></h5>
                                            <span class="text-muted">$650.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Out Of Stock</a></p>
                                        <span class="text-muted">1,253K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bx-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">260 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="{{ URL::asset('./assets/images/product/img-3.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark">Black Color T-shirt</a></h5>
                                            <span class="text-muted">$325.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">2,586K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">220 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="{{ URL::asset('./assets/images/product/img-4.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark"></a>Hoodie (Blue)</h5>
                                            <span class="text-muted">$170.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">4,565K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">165 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="{{ URL::asset('./assets/images/product/img-5.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark"></a>Half sleeve T-Shirt</h5>
                                            <span class="text-muted">$150.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Out Of Stock</a></p>
                                        <span class="text-muted">5,265K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bx-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">165 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 50px;">
                                        <div class="avatar-md me-4">
                                            <img src="{{ URL::asset('./assets/images/product/img-6.png') }}" class="img-fluid" alt="">
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            <h5 class="font-size-15"><a href="" class="text-dark"></a>Green color T-shirt</h5>
                                            <span class="text-muted">$120.00</span>
                                        </div>
                                    </td>

                                    <td>
                                        <p class="mb-1"><a href="" class="text-dark">Available</a></p>
                                        <span class="text-muted">125K</span>
                                    </td>

                                    <td>
                                        <div class="text-end">
                                            <ul class="mb-1 ps-0">
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bxs-star text-warning"></li>
                                                <li class="bx bx-star text-warning"></li>
                                            </ul>
                                            <span class="text-muted mt-1">165 Sales</span>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->


</div>
<!-- end row-->

@endsection
@section('script')

<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/allchart.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/admin-resources/admin-resources.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/fontawesome.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
