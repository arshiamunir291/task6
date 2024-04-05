@extends('dashboard.layouts.master')
@section('title')
OTHER PURCHASES PAGE
@endsection
@section('Heading')
OTHER PURCHASES PAGE
@endsection
<link rel="stylesheet" href="{{ asset('app-assets/simplepicker/simplepicker.css') }}" />
<script src="{{ asset('app-assets/simplepicker/simplepicker.js') }}"></script>
<style>
.navbar .search-input,
.navbar .ProfileR_Nav {
    display: none !important;
}
</style>
@section('Main_content')
<div class="content-body">
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap oter_page">
        <div class="InnerForm_Wrap purchase">
            <div class="Step_First">
                <div class="row">
                        <div class="col-md-6">
                        <form action="" autocomplete="off">
                            <div class="Purchase_form">
                                <label for="">Account Number or Reference Number</label>
                                <input class="account_nmbr mb-1" type="password" placeholder="XXXXXXXXXXXXXXXXXXXXXXXX">
                                <div class="mb-1">
                                    <label for="">Description</label>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Write down the description here"></textarea>
                                </div>
                                <div class="schedule_dates">
                                    <div class="d-flex">
                                        <div class="mb-1">
                                            <label for="">Departure Date</label>
                                            <div class="select_dateinput">
                                                <input class="date" type="text" placeholder="--/--/--">
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <label for="">Arrival Date</label>
                                            <div class="select_dateinput">
                                                <input class="date" type="text" placeholder="--/--/--" id="datepicker"> 
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"alt="">
                                                <div class="calendar"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="">Scheduled Date of Receipt</label>
                                        <div class="d-flex mb-1">
                                            <div class="select_dateinput">
                                                <input class="date" type="text" placeholder="--/--/--">
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                            </div>
                                            <div class="select_dateinput mb-1">
                                                <input class="date" type="text" placeholder="--/--/--">
                                                <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="">Non-Refundable Deposit Option</label>
                                        <div class="select_dateinput2">
                                            <input type="text" placeholder="4.5k">
                                            <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form_submit">
                                <div class="mb-1">
                                    <label for="">Amount</label>
                                    <input class="account_nmbr" type="number" placeholder="Enter">
                                </div>
                                <div class="mb-1">
                                    <label for="">Cancellation Clause</label>
                                    <input class="account_nmbr" type="text" placeholder="Enter">
                                </div>
                                <div class="paymewnt_iccue mb-1">
                                    <button>
                                       <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""><span>Payment iccue</span> 
                                    </button>
                                    <button>
                                        <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                                    </button>
                                    <button>
                                        <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                                    </button>
                                </div>
                                <div class="mb-1">
                                    <label for="">Notes</label>
                                    <input class="account_nmbr" type="text" placeholder="Enter">
                                </div>
                                <div class="upload">
                                    <label for="">Document Upload</label>
                                    <button>Upload</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-6">
                    </div>
                    <div class="NextBtns_bots justify-content-end">
                        <div class="DotsLeft d-none">
                            <span class="active"></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="InnerBtns">
                            <button type="button" class="backBtn">Back</button>
                            <button type="button" class="startedBtn">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- /Horizontal Wizard -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    $(document).on('click','.date' ,function () {
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

</script>

@endsection