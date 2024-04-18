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
            <div class="Step_First FormStepLine position-relative">
                @include('dashboard.create_contract.steps.step-1')
                @include('dashboard.create_contract.steps.step-2')
                @include('dashboard.create_contract.steps.step-3')
                @include('dashboard.create_contract.steps.step-4')
                @include('dashboard.create_contract.steps.step-5')
                @include('dashboard.create_contract.steps.step-6')
                @include('dashboard.create_contract.steps.step-7')
                <div class="row MultiForm_WrapHide">
                    <section class="MultiForm_Wrap other_page">
                        @include('dashboard.create_contract.forms')
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {

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
            });
            $('.Next_Step4').on('click', function(){
                $('.Individual_Wrap, .CompanyInformation_Wrap').addClass('d-none');
                $('.S_Step4').removeClass('d-none');
                if (!$('.D_step4').hasClass('d-none')) {
                    $('.D_step1Nav').addClass('active').removeClass('disable');
                    $('.D_step2Nav, .D_step3Nav').removeClass('active').addClass('disable');
                }
            });


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

            ////////////////
            $('.S_StepBack_4').on('click', function(){
                $('.S_Step4').removeClass('d-none');
                $('.S_Step5').addClass('d-none');
                if ($('.D_step5').hasClass('d-none')) {
                    $('.D_step3Nav').addClass('active').removeClass('disable');
                    $('.D_step2Nav, .D_step1Nav').removeClass('active').addClass('disable');
                }
                if (!$('.S_Step7').hasClass('d-none')) {
                    $('.D_step1Nav').addClass('active').addClass('disable');
                    $('.D_step2Nav').removeClass('active').removeClass('disable');
                }
            });
            $('.Goto_Step3').on('click', function(){
                $('.S_Step4').addClass('d-none');
                $('.D_step3').removeClass('d-none');
            });

            $('.Sendertabs input[type="radio"][value="other_purchase"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.S_Step4').addClass('d-none');
                    $('.S_Step5').removeClass('d-none');
                }
                if (!$('.S_Step5').hasClass('d-none')) {
                    $('.D_step2Nav').addClass('active').removeClass('disable');
                    $('.D_step1Nav, .D_step3Nav').removeClass('active').addClass('disable');
                }
            });
            $('.Back_D_Step3').on('click', function(){
                $('.Individual_Wrap').addClass('d-none');
                $('.CompanyInformation_Wrap').addClass('d-none');
                $('.D_step3').removeClass('d-none');
            })

            ////////
            $('.Back_to_S_Step5').on('click', function(){
                $('.start_end_date_Wrap, .InnerForm_Heading, .departure_arr_Wrap, .pick_drop_dates_Wrap, .check_in_out_Wrap').addClass('d-none');
                $('.S_Step5').removeClass('d-none');
            });
            $('.S_StepBack_5').on('click', function(){
                $('.S_Step5').removeClass('d-none');
                $('.S_step6').addClass('d-none');
                if ($('.S_step6').hasClass('d-none')) {
                    $('.D_step3Nav').removeClass('active').addClass('disable');
                    $('.D_step2Nav').addClass('active').removeClass('disable');
                }
            });
            $('.S_StepBack_3').on('click', function(){
                $('.S_step6').removeClass('d-none');
                $('.S_step7').addClass('d-none');
                $('.wizard').removeClass('d-none');
                if ($('.S_step6').hasClass('d-none')) {
                    // $('.D_step3Nav').removeClass('active').addClass('disable');
                    $('.D_step3Nav').addClass('active').removeClass('disable');
                }
            });

            /////////
            $('.Sendertabs input[type="radio"][value="start_end_date"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.start_end_date_Wrap, .InnerForm_Heading').removeClass('d-none');
                    $('.S_Step5').addClass('d-none');
                }
            });
            $('.Sendertabs input[type="radio"][value="departure_arrivals"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.departure_arr_Wrap, .InnerForm_Heading').removeClass('d-none');
                    $('.S_Step5').addClass('d-none');
                }
            });
            $('.Sendertabs input[type="radio"][value="pick_drop_dates"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.pick_drop_dates_Wrap, .InnerForm_Heading').removeClass('d-none');
                    $('.S_Step5').addClass('d-none');
                }
            });
            $('.Sendertabs input[type="radio"][value="check_in_out"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.check_in_out_Wrap, .InnerForm_Heading').removeClass('d-none');
                    $('.S_Step5').addClass('d-none');
                }
            });

            $('.Sendertabs input[type="radio"][value="pay_on_completion"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.pay_on_completion_Wrap').removeClass('d-none');
                    $('.S_step7').addClass('d-none');
                }
            });
            $('.Sendertabs input[type="radio"][value="pay_at_receipt"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.pay_at_receipt_Wrap').removeClass('d-none');
                    $('.S_step7').addClass('d-none');
                }
            });
            $('.Sendertabs input[type="radio"][value="pay_in_milestone"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.pay_in_milestone_Wrap').removeClass('d-none');
                    $('.S_step7').addClass('d-none');
                }
            });

            $('.Go_to_S_Step6').on('click', function(){
                $('.start_end_date_Wrap, .InnerForm_Heading, .departure_arr_Wrap, .pick_drop_dates_Wrap, .check_in_out_Wrap').addClass('d-none');
                $('.S_step6').removeClass('d-none');
                if (!$('.S_step6').hasClass('d-none')) {
                    $('.D_step2Nav').removeClass('active').addClass('disable');
                    $('.D_step3Nav').addClass('active').removeClass('disable');
                }
            });
            $('.Goto_S_step7').on('click', function(){
                $('.start_end_date_Wrap, .InnerForm_Heading, .departure_arr_Wrap, .pick_drop_dates_Wrap, .check_in_out_Wrap').addClass('d-none');
                $('.S_step6, .wizard').addClass('d-none');
                $('.S_step7').removeClass('d-none');
            });
            $('.GoTo_Cont_Summary').on('click', function(){
                $('.Receipts_Wrap').addClass('d-none');
                $('.Contract_SummaryWrap').removeClass('d-none');
            });
            $('.S_StepBack_6').on('click', function(){
                $('.S_step7').addClass('d-none');
                $('.S_step6').removeClass('d-none');
            });
            $('.BackTo_Step7').on('click', function(){
                $('.Contract_SummaryWrap, .Receipts_Wrap').addClass('d-none');
                $('.S_step7').removeClass('d-none');
            });
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
    <script>
        var otp_inputs = document.querySelectorAll(".otp__digit")
        var mykey = "0123456789".split("")
        otp_inputs.forEach((_) => {
            _.addEventListener("keyup", handle_next_input)
        })
        
        function handle_next_input(event) {
            let current = event.target
            let index = parseInt(current.classList[1].split("__")[2])
            current.value = event.key
        
            if (event.keyCode == 8 && index > 1) {
                current.previousElementSibling.focus()
            }
            if (index < 6 && mykey.indexOf("" + event.key + "") != -1) {
                var next = current.nextElementSibling;
                next.focus()
            }
            var _finalKey = ""
            for (let {
                    value
                } of otp_inputs) {
                _finalKey += value
            }
            if (_finalKey.length == 6) {
                document.querySelector("#_otp").classList.replace("_notok", "_ok")
                document.querySelector("#_otp").innerText = _finalKey
            } else {
                document.querySelector("#_otp").classList.replace("_ok", "_notok")
                document.querySelector("#_otp").innerText = _finalKey
            }
        }
    </script>
@endsection