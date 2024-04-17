@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<div class="content-body step_formsrecieved">
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
    <div class="wizardWrap_Sec">
        <section class="MultiForm_Wrap tabs_section">
            <div class="InnerForm_Wrap position-relative">
                @include('dashboard.sender.step-1')
                @include('dashboard.sender.step-2')
                @include('dashboard.sender.step-3')
                @include('dashboard.sender.step-4')
                <div class="row MultiForm_WrapHide">
                    <section class="MultiForm_Wrap other_page">
                        @include('dashboard.sender.forms')
                    </section>
                </div>

            </div>
        </section>
    </div>
    <!-- /Horizontal Wizard -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // $(".backBtn").prop("disabled", true);

        // // Click event for Next button
        // $(".startedBtn").click(function() {
        //     var currentStep = $('.wizard-inner .nav-tabs li.active').index();
        //     $(".step" + (currentStep + 1)).addClass("hidetest");
        //     $(".step" + (currentStep + 2)).removeClass("hidetest");
        //     $(".backBtn").prop("disabled", false);
        //     $('.wizard-inner .nav-tabs li').eq(currentStep).next('li').find('a').click();
        // });

        // // Click event for Back button
        // $(".backBtn").click(function() {
        //     var currentStep = $('.wizard-inner .nav-tabs li.active').index();
        //     $(".step" + (currentStep + 1)).addClass("hidetest");
        //     $(".step" + currentStep).removeClass("hidetest");
        //     $(".backBtn").prop("disabled", currentStep === 1);
        //     $('.wizard-inner .nav-tabs li').eq(currentStep - 1).find('a').click();
        // });

        // // Click event for navigation tabs
        // $('.nav-tabs').on('click', 'li', function() {
        //     var clickedIndex = $(this).index();
        //     var currentStep = $('.wizard-inner .nav-tabs li.active').index();

        //     $(".step" + (currentStep + 1)).addClass("hidetest");
        //     $(".step" + (clickedIndex + 1)).removeClass("hidetest");

        //     $(".backBtn").prop("disabled", clickedIndex === 0);
        //     $(".startedBtn").prop("disabled", clickedIndex === 2);

        //     $('.nav-tabs li.active').removeClass('active');
        //     $(this).addClass('active');
        // });

        $('.S_StepBack_1').on('click', function(){
            $('.S_Step1').removeClass('d-none');
            $('.S_Step2').addClass('d-none');
            if ($('.D_step3').hasClass('d-none')) {
                $('.D_step2Nav').addClass('active').removeClass('disable');
                $('.D_step3Nav').removeClass('active').addClass('disable');
            }
            if (!$('.S_Step1').hasClass('d-none')) {
                $('.D_step1Nav').addClass('active').addClass('disable');
                $('.D_step2Nav').removeClass('active').removeClass('disable');
            }
        })

        $('.Sendertabs input[type="radio"][value="other_purchase"]').change(function() {
            if ($(this).is(':checked')) {
                $('.S_Step1').addClass('d-none');
                $('.S_Step2').removeClass('d-none');
            }
            if (!$('.S_Step2').hasClass('d-none')) {
                $('.D_step1Nav').removeClass('active').addClass('disable');
                $('.D_step2Nav').addClass('active').removeClass('disable');
            }
        });
        $('.Back_D_Step3').on('click', function(){
            $('.Individual_Wrap').addClass('d-none');
            $('.CompanyInformation_Wrap').addClass('d-none');
            $('.D_step3').removeClass('d-none');
        })

        ////////
        $('.Back_to_S_Step2').on('click', function(){
            $('.start_end_date_Wrap, .InnerForm_Heading, .departure_arr_Wrap, .pick_drop_dates_Wrap, .check_in_out_Wrap').addClass('d-none');
            $('.S_Step2').removeClass('d-none');
        });
        $('.S_StepBack_2').on('click', function(){
            $('.S_Step2').removeClass('d-none');
            $('.S_step3').addClass('d-none');
            if ($('.S_step3').hasClass('d-none')) {
                $('.D_step3Nav').removeClass('active').addClass('disable');
                $('.D_step2Nav').addClass('active').removeClass('disable');
            }
        });
        $('.S_StepBack_3').on('click', function(){
            $('.S_step3').removeClass('d-none');
            $('.S_step4').addClass('d-none');
            $('.wizard').removeClass('d-none');
            if ($('.S_step3').hasClass('d-none')) {
                // $('.D_step3Nav').removeClass('active').addClass('disable');
                $('.D_step3Nav').addClass('active').removeClass('disable');
            }
        });

        /////////
        $('.Sendertabs input[type="radio"][value="start_end_date"]').change(function() {
            if ($(this).is(':checked')) {
                $('.start_end_date_Wrap, .InnerForm_Heading').removeClass('d-none');
                $('.S_Step2').addClass('d-none');
            }
        });
        $('.Sendertabs input[type="radio"][value="departure_arrivals"]').change(function() {
            if ($(this).is(':checked')) {
                $('.departure_arr_Wrap, .InnerForm_Heading').removeClass('d-none');
                $('.S_Step2').addClass('d-none');
            }
        });
        $('.Sendertabs input[type="radio"][value="pick_drop_dates"]').change(function() {
            if ($(this).is(':checked')) {
                $('.pick_drop_dates_Wrap, .InnerForm_Heading').removeClass('d-none');
                $('.S_Step2').addClass('d-none');
            }
        });
        $('.Sendertabs input[type="radio"][value="check_in_out"]').change(function() {
            if ($(this).is(':checked')) {
                $('.check_in_out_Wrap, .InnerForm_Heading').removeClass('d-none');
                $('.S_Step2').addClass('d-none');
            }
        });

        $('.Sendertabs input[type="radio"][value="pay_on_completion"]').change(function() {
            if ($(this).is(':checked')) {
                $('.pay_on_completion_Wrap').removeClass('d-none');
                $('.S_step4').addClass('d-none');
            }
        });
        $('.Sendertabs input[type="radio"][value="pay_at_receipt"]').change(function() {
            if ($(this).is(':checked')) {
                $('.pay_at_receipt_Wrap').removeClass('d-none');
                $('.S_step4').addClass('d-none');
            }
        });
        $('.Sendertabs input[type="radio"][value="pay_in_milestone"]').change(function() {
            if ($(this).is(':checked')) {
                $('.pay_in_milestone_Wrap').removeClass('d-none');
                $('.S_step4').addClass('d-none');
            }
        });

        $('.Go_to_S_Step3').on('click', function(){
            $('.start_end_date_Wrap, .InnerForm_Heading, .departure_arr_Wrap, .pick_drop_dates_Wrap, .check_in_out_Wrap').addClass('d-none');
            $('.S_step3').removeClass('d-none');
            if (!$('.S_step3').hasClass('d-none')) {
                $('.D_step2Nav').removeClass('active').addClass('disable');
                $('.D_step3Nav').addClass('active').removeClass('disable');
            }
        });
        $('.Goto_S_step4').on('click', function(){
            $('.start_end_date_Wrap, .InnerForm_Heading, .departure_arr_Wrap, .pick_drop_dates_Wrap, .check_in_out_Wrap').addClass('d-none');
            $('.S_step3, .wizard').addClass('d-none');
            $('.S_step4').removeClass('d-none');
        });
    });
    document.addEventListener('DOMContentLoaded', function() {
        const formChangeBtn = document.querySelector('.form-changebtn');
        const stepForm1 = document.querySelector('.stepform_1');
        const stepForm2 = document.querySelector('.stepform_2');

        formChangeBtn.addEventListener('click', function() {
            // Remove d-none class from stepform_2
            stepForm2.classList.remove('d-none');
            // Add d-none class to stepform_1
            stepForm1.classList.add('d-none');

        });
        $('.prev-step').click(function() {
            // Hide stepform_2 and show stepform_1
            $('.stepform_2').addClass('d-none');
            $('.stepform_1').removeClass('d-none');
        });
    });

</script>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        let simplepicker = new SimplePicker({
            zIndex: 10,
        });
        // Function to open SimplePicker
        function openDatePicker() {
            simplepicker.open();
        }
        // Add click event listener to the input field
        $(document).on('click', '.date', function() {
            simplepicker.disableTimeSection()
            openDatePicker();
        });
        // Event listener for SimplePicker 'submit' event
        simplepicker.on('submit', (date, readableDate) => {
            // Set the selected date in the input field value
            const selectedDate = new Date(date);
            const formattedDate = selectedDate.toLocaleDateString('en-US', {
                year: 'numeric',
                month: '2-digit',
                day: '2-digit'
            });
            $('.date').value = formattedDate;
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
@endsection