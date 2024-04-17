@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
PAYMENT PAGE
@endsection
@section('Main_content')
<link rel="stylesheet" href="{{ asset('app-assets/simplepicker/simplepicker.css') }}" />
<script src="{{ asset('app-assets/simplepicker/simplepicker.js') }}"></script>
<style>
nav .ProfileR_Nav {
    display: none;
}

nav .navbar-container .search-input.open {
    display: none;
}
</style>
<div class="content-body step_formsrecieved payments_gateway">
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section tabs_sectionsender">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
                <div class="row justify-content-center step1">
                    <div class="col-lg-12">
                        <div class="card_detail text-center">
                            <h3>
                                Add Card Details
                            </h3>
                            <form action="">
                                <div class="credentials">
                                    <div class="credit">
                                        <div class="card_type">
                                            <input type="radio" style="accent-color: #1F93FF">
                                            <label for="">Credit Debit Card</label>
                                        </div>
                                        <div class="transect_type">
                                            <img src="{{ asset('app-assets/images/recieved/pay.png') }}" alt="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="Gpay">
                                        <div class="card_type">
                                            <input type="radio" style="accent-color: #1F93FF">
                                            <label for="">G PAy</label>
                                        </div>
                                        <div class="transect_type">
                                            <img src="{{ asset('app-assets/images/recieved/google.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="">

                                </div>
                            </form>
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