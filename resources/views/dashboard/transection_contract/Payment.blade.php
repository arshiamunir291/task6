@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
MAKE PAYMENT
@endsection
@section('Main_content')
<link rel="stylesheet" href="{{ asset('app-assets/simplepicker/simplepicker.css') }}" />
<script src="{{ asset('app-assets/simplepicker/simplepicker.js') }}"></script>
<style>
nav .ProfileR_Nav{
 display:none;   
}
nav .navbar-container .search-input.open{
 display:none;   
}
.payments_gateway .Step_First{
    background: #FBFFCEC4;
}
.payments_gateway .step_formsrecieved .Next_btnswrap {
    bottom: -26px;
}
</style>
<div class="content-body step_formsrecieved payments_gateway">
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section tabs_sectionsender">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
                <div class="row justify-content-center step1">
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="products">
                                <img src="{{ asset('app-assets/images/recieved/Gpay.png') }}" alt=""> Payment Via
                                Google
                                Apple Pay
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="services">
                                <img src="{{ asset('app-assets/images/recieved/Banktransfer.png') }}" alt="">Pay via bank
                                transfer
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/debit.png') }}" alt=""> Payment via
                                Debit
                                Credit card
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between hidetest step2">
                    <div class="col-lg-6">
                        <form action="">
                            <div class="Refundable">
                                <label for="">Amount</label>
                                <div class="select_dateinput2">
                                    <input type="number" placeholder="45, 000" class="mb-1">
                                    <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="Refundable">
                                <label for="">Non-Refundable Deposit Option</label>
                                <div class="select_dateinput2">
                                    <input type="number" placeholder="45, 000" class="mb-1">
                                    <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="schedule_dates">
                                <div class="d-flex datepickerfields">
                                    <div class="mb-1">
                                        <label for="">Pay on Scheduled Completion Date</label>
                                        <div class="d-flex gap-3">
                                            <div class="select_dateinput">
                                                <input class="date" type="text" placeholder="--/--/--">
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="select_dateinput">
                                                <input class="date" type="text" placeholder="--/--/--" id="datepicker">
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"
                                                    alt="">
                                                <div class="calendar"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Intermediary">
                            <label for="">Intermediary Fee</label>
                            <div class="select_dateinput2">
                                <input type="number" placeholder="45, 000" class="mb-1">
                                <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                            </div>
                        </div>
                        <div class="Intermediary">
                            <label for="">Total Received by Intermediary</label>
                            <div class="select_dateinput2">
                                <input type="number" placeholder="45, 000" class="mb-1">
                                <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row justify-content-center hidetest step3">
                    <div class="col-lg-6">
                        <form action="">
                            <div class="Refundable">
                                <label for="">Amount</label>
                                <div class="select_dateinput2">
                                    <input type="number" placeholder="45, 000" class="mb-1">
                                    <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="Refundable">
                                <label for="">Non-Refundable Deposit Option</label>
                                <div class="select_dateinput2">
                                    <input type="number" placeholder="45, 000" class="mb-1">
                                    <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="schedule_dates">
                                <div class="d-flex datepickerfields">
                                    <div class="mb-1">
                                        <label for="">Pay on Scheduled Receipt Date</label>
                                        <div class="d-flex gap-3">
                                            <div class="select_dateinput">
                                                <input class="date" type="text" placeholder="--/--/--">
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="select_dateinput">
                                                <input class="date" type="text" placeholder="--/--/--" id="datepicker">
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"
                                                    alt="">
                                                <div class="calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Intermediary">
                            <label for="">Intermediary Fee</label>
                            <div class="select_dateinput2">
                                <input type="number" placeholder="45, 000" class="mb-1">
                                <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                            </div>
                        </div>
                        <div class="Intermediary">
                            <label for="">Total Received by Intermediary</label>
                            <div class="select_dateinput2">
                                <input type="number" placeholder="45, 000" class="mb-1">
                                <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="row justify-content-center hidetest step4">
                    <div class="stepform_1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="InnerText">
                                    <h3 class="mb-2 text-center">Set Payment milestone</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="Refundable">
                                    <label for="">Title</label>
                                    <div class="select_dateinput2">
                                        <input type="number" placeholder="45, 000" class="mb-1">
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="Refundable">
                                    <label for="">Amount</label>
                                    <div class="select_dateinput2">
                                        <input type="number" placeholder="45, 000" class="mb-1">
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="Refundable">
                                    <label for="">Date</label>
                                    <div class="select_dateinput2">
                                        <input type="number" placeholder="45, 000" class="mb-1">
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="add_userbtn text-center mt-3">
                                    <button class="form-changebtn">
                                        <img src="{{ asset('app-assets/images/recieved/adduserbtn.png') }}" alt="">
                                    </button>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="stepform_2 d-none">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <form action="">
                                    <div class="Refundable">
                                        <label for="">Amount</label>
                                        <div class="select_dateinput2">
                                            <input type="number" placeholder="45, 000" class="mb-1">
                                            <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="Refundable">
                                        <label for="">Non-Refundable Deposit Option</label>
                                        <div class="select_dateinput2">
                                            <input type="number" placeholder="45, 000" class="mb-1">
                                            <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="schedule_dates">
                                        <div class="d-flex datepickerfields">
                                            <div class="mb-1">
                                                <label for="">Progressive Payment Schedule</label>
                                                <div class="d-flex gap-3">
                                                    <div class="select_dateinput">
                                                        <input class="date" type="text" placeholder="--/--/--">
                                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="select_dateinput">
                                                        <input class="date" type="text" placeholder="--/--/--"
                                                            id="datepicker">
                                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"
                                                            alt="">
                                                        <div class="calendar"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="Intermediary">
                                    <label for="">Intermediary Fee</label>
                                    <div class="select_dateinput2">
                                        <input type="number" placeholder="45, 000" class="mb-1">
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="Intermediary">
                                    <label for="">Total Received by Intermediary</label>
                                    <div class="select_dateinput2">
                                        <input type="number" placeholder="45, 000" class="mb-1">
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-md-12">
                                <div class="InnerText">
                                    <h3 class="mb-2 text-center">Set Payment milestone</h3>
                                </div>
                                <div class="mt-2 d-flex justify-content-center data">
                                    <div>
                                        <label for="">Title</label>
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt=""
                                            class="me-1"><span>45,
                                            000</span>
                                    </div>
                                    <div>
                                        <label for="">Amount</label>
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt=""
                                            class="me-1"><span>45,
                                            000</span>
                                    </div>
                                    <div>
                                        <label for="">Date</label>
                                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt=""
                                            class="me-1"><span>45,
                                            000</span>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="NextBtns_bots justify-content-end Next_btnswrap">
                        <div class="DotsLeft d-none">
                            <span class="active"></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="InnerBtns">
                            <button type="button" class="backBtn prev-step">Back</button>
                            <button type="button" class="startedBtn next-step">Next</button>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Disable backBtn initially
    $(".backBtn").prop("disabled", true);

    // Click event for Next button
    $(".startedBtn").click(function() {
        var currentStep = $('.wizard-inner .nav-tabs li.active').index();
        $(".step" + (currentStep + 1)).addClass("hidetest");
        $(".step" + (currentStep + 2)).removeClass("hidetest");
        $(".backBtn").prop("disabled", false);
        $('.wizard-inner .nav-tabs li').eq(currentStep).next('li').find('a').click();
    });

    // Click event for Back button
    $(".backBtn").click(function() {
        var currentStep = $('.wizard-inner .nav-tabs li.active').index();
        $(".step" + (currentStep + 1)).addClass("hidetest");
        $(".step" + currentStep).removeClass("hidetest");
        $(".backBtn").prop("disabled", currentStep === 1);
        $('.wizard-inner .nav-tabs li').eq(currentStep - 1).find('a').click();
    });

    // Click event for navigation tabs
    $('.nav-tabs').on('click', 'li', function() {
        var clickedIndex = $(this).index();
        var currentStep = $('.wizard-inner .nav-tabs li.active').index();

        $(".step" + (currentStep + 1)).addClass("hidetest");
        $(".step" + (clickedIndex + 1)).removeClass("hidetest");

        $(".backBtn").prop("disabled", clickedIndex === 0);
        $(".startedBtn").prop("disabled", clickedIndex === 3); // 3 is the index of Step 4

        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });

    // Listen for changes in the radio button selection
    $('input[type="radio"]').change(function() {
        // Get the index of the clicked radio button
        var radioIndex = $('input[type="radio"]').index(this);
        // Move to the next step based on the index of the clicked radio button
        $('.wizard-inner .nav-tabs li').eq(radioIndex + 1).find('a').click();
    });
});
</script>
<script>
$(document).ready(function() {
    // Listen for changes in the radio button selection
    $('.Sendertabs input[type="radio"]').change(function() {
        // Remove active class from all Sendertabs
        $('.Sendertabs').removeClass('active');

        // Check if any radio button is checked
        if ($(this).is(':checked')) {
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