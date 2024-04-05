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
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span
                            class="round-tab">1 </span> <i>Welcome</i></a>
                </li>
                <li role="presentation" class="disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span
                            class="round-tab">2</span> <i>Your Role</i></a>
                </li>
                <li role="presentation" class="disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                            class="round-tab">3</span>
                        <i>Personal Information</i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="InnerText">
                            <h3 class="mb-2 text-center">Purchase & Transfer Selection Page</h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="row justify-content-center step1">
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <button class="active">
                                <img src="{{ asset('app-assets/images/recieved/product.png') }}" alt="">
                                Products
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <button>
                                <img src="{{ asset('app-assets/images/recieved/service.png') }}" alt="">
                                Services
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">

                            <button>
                                <img src="{{ asset('app-assets/images/recieved/otherpurchase.png') }}" alt="">
                                Other Purchase
                            </button>
                        </div>
                    </div>
                </div> --}}
                <div class="row justify-content-center step1">
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="products">
                                <img src="{{ asset('app-assets/images/recieved/product.png') }}" alt=""> Products
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="services">
                                <img src="{{ asset('app-assets/images/recieved/service.png') }}" alt=""> Services
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/otherpurchase.png') }}" alt=""> Other Purchase
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between hidetest step2">
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/dates.png') }}" alt="">
                                Start/End Date
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/arival.png') }}" alt="">
                                Departure/Arrivals
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/pick.png') }}" alt="">
                                Pick/ Drop dates
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/checkin.png') }}" alt="">
                                Check in/out
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center hidetest step3">
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/moneytransfor.png') }}" alt="">
                                Money Transfer
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="Sendertabs">
                            <label class="">
                                <input type="radio" name="sender" value="other_purchase">
                                <img src="{{ asset('app-assets/images/recieved/billpayment.png') }}" alt="">
                                Bill Payment
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="NextBtns_bots justify-content-end">
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
            $(".startedBtn").prop("disabled", clickedIndex === 2);

            $('.nav-tabs li.active').removeClass('active');
            $(this).addClass('active');
        });
    });

</script>
@endsection
@section('js')
<script>
// $(document).ready(function(){
//     // Listen for changes in the radio button selection
//     $('.Sendertabs input[type="radio"]').change(function() {
//         // Remove active class from all Sendertabs
//         $('.Sendertabs').removeClass('active');
        
//         // Check if any radio button is checked
//         if($(this).is(':checked')){
//             $(this).closest('.Sendertabs').addClass('active');
//         }
//     });
// });

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