@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<div class="content-body step_formsrecieved">
    <div class="DashBoard_Stack d-none">
        <div class="Stack_Cards">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">Total Contracts</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">6078</h2>
                                <p>Profit is 80% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart" class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">Unsigned Contracts</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">6078</h2>
                                <p>Profit is 30% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart2" class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">My Contracts</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">6078</h2>
                                <p>Profit is 50% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart3" class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">Recent Transactions</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">$151k</h2>
                                <p>Profit is 40% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart4" class=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-0 py-2">
                            <h4 class="card-title">Recent Activity</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th>Recipient Name</th>
                                        <th>Duration</th>
                                        <th>Creation Date</th>
                                        <th>Status</th>
                                        <th>Completion</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1</span>
                                        </td>
                                        <td>Peter Charls</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">2</span>
                                        </td>
                                        <td>Ronald Frest</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">3</span>
                                        </td>
                                        <td>Jack Obes</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Horizontal Wizard -->
    <div class="wizard">
        <div class="wizard-inner pb-4">
            {{-- <div class="connecting-line"></div> --}}
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="D_step1Nav active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true">
                        <span class="round-tab">1</span> 
                        <i>Welcome</i>
                    </a>
                </li>
                <li role="presentation" class="D_step2Nav disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
                        <span class="round-tab">2</span> 
                        <i>Your Role</i>
                    </a>
                </li>
                <li role="presentation" class="D_step3Nav disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab">
                        <span class="round-tab">3</span>
                        <i>Personal Information</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <section class="MultiForm_Wrap tabs_section">
        <div class="InnerForm_Wrap">
            <div class="Step_First FormStepLine">
                @include('dashboard.create_contract.step-1')
                @include('dashboard.create_contract.step-2')
                @include('dashboard.create_contract.step-3')
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            // $(".backBtn").prop("disabled", true);

            // // Click event for Next button
            // $(".startedBtn").click(function() {
            //     var currentStep = $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li.active').index();
            //     $(".step" + (currentStep + 1)).addClass("hidetest");
            //     $(".step" + (currentStep + 2)).removeClass("hidetest");
            //     $(".backBtn").prop("disabled", false);
            //     $('.wizard-inner .nav-tabs li, .DotsLeft .nav-tabs li').eq(currentStep).next('li').find('a').click();
            // });

            // // Click event for Back button
            // $(".backBtn").click(function() {
            //     var currentStep = $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li.active').index();
            //     $(".step" + (currentStep + 1)).addClass("hidetest");
            //     $(".step" + currentStep).removeClass("hidetest");
            //     $(".backBtn").prop("disabled", currentStep === 1);
            //     $('.wizard-inner .nav-tabs li, .DotsLeft .nav-tabs li').eq(currentStep - 1).find('a').click();
            // });

            // // Click event for navigation tabs
            // $('.nav-tabs').on('click', 'li', function() {
            //     var clickedIndex = $(this).index();
            //     var currentStep = $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li').index();

            //     $(".step" + (currentStep + 1)).addClass("hidetest");
            //     $(".step" + (clickedIndex + 1)).removeClass("hidetest");

            //     $(".backBtn").prop("disabled", clickedIndex === 0);
            //     $(".startedBtn").prop("disabled", clickedIndex === 2);

            //     $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li.active').removeClass('active');
            //     $(this).addClass('active');
            // });

            $('.Get_StartedBtn').on('click', function(){
                $('.D_step1').addClass('d-none');
                $('.D_step2').removeClass('d-none');
                if (!$('.D_step2').hasClass('d-none')) {
                    $('.D_step1Nav').removeClass('active').addClass('disable');
                    $('.D_step2Nav').addClass('active').removeClass('disable');
                }
            });
            $('.Back_D1').on('click', function(){
                $('.D_step1').removeClass('d-none');
                $('.D_step2').addClass('d-none');
                if ($('.D_step2').hasClass('d-none')) {
                    $('.D_step1Nav').addClass('active').removeClass('disable');
                    $('.D_step2Nav').removeClass('active').addClass('disable');
                }
            })

            $('.Next_D3').on('click', function(){
                $('.D_step2').addClass('d-none');
                $('.D_step3').removeClass('d-none');
                if (!$('.D_step3').hasClass('d-none')) {
                    $('.D_step2Nav').removeClass('active').addClass('disable');
                    $('.D_step3Nav').addClass('active').removeClass('disable');
                }
            });
            $('.Back_D2').on('click', function(){
                $('.D_step2').removeClass('d-none');
                $('.D_step3').addClass('d-none');
                if ($('.D_step3').hasClass('d-none')) {
                    $('.D_step2Nav').addClass('active').removeClass('disable');
                    $('.D_step3Nav').removeClass('active').addClass('disable');
                }
            })

            $('.Sendertabs input[type="radio"][value="individual"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.Individual_Wrap').removeClass('d-none');
                    $('.D_step3').addClass('d-none');
                }
            });
            $('.Sendertabs input[type="radio"][value="company"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.CompanyInformation_Wrap').removeClass('d-none');
                    $('.D_step3').addClass('d-none');
                }
            });
            $('.Back_D_Step3').on('click', function(){
                $('.Individual_Wrap').addClass('d-none');
                $('.CompanyInformation_Wrap').addClass('d-none');
                $('.D_step3').removeClass('d-none');
            })
        });

        $(document).ready(function(){
            
            // Listen for changes in the radio button selection
            $('.Sendertabs input[type="radio"]').change(function() {
                // Remove active class from all Sendertabs
                $('.Sendertabs').removeClass('active');
                
                // Check if any radio button is checked
                if($(this).is(':checked')){
                    $(this).closest('.Sendertabs').addClass('active');
                }
            });

            // Listen for clicks on the document body
            $(document.body).on('click', function(event) {
                // Check if the clicked element is not within the Sendertabs area
                if (!$(event.target).closest('.Sendertabs').length) {
                    // Remove active class from all Sendertabs
                    $('.Sendertabs').removeClass('active');
                }
            });
        });
    </script>
@endsection