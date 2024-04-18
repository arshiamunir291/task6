<h2 class="InnerForm_Heading d-none mb-3">OTHER PURCHASES PAGE</h2>
<div class="InnerForm_Wrap purchase start_end_date_Wrap d-none">
    <form action="" autocomplete="off">
        <div class="row">
            <div class="col-md-6">
                <div class="Purchase_form">
                    <label for="">Account Number or Reference Number</label>
                    <input class="account_nmbr mb-1" type="password" placeholder="XXXXXXXXXXXXXXXXXXXXXXXX">
                    <div class="mb-1">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Write down the description here"></textarea>
                    </div>
                    <div class="schedule_dates">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">Start Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--">
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">End Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--" id="datepicker"> 
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"alt="">
                                    <div class="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">Scheduled Date of Receipt</label>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
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
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""><span>Payment iccue</span> 
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                    </div>
                    <div class="mb-1">
                        <label for="">Notes</label>
                        <input class="account_nmbr" type="text" placeholder="Enter">
                    </div>
                    <div class="upload">
                        <label for="">Document Upload</label>
                        <button type="button">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn Back_to_S_Step5">Back</button>
                <button type="button" class="startedBtn Go_to_S_Step6">Next</button>
            </div>
        </div>
    </div>
</div>

{{-- Departure Arrivals --}}
<div class="InnerForm_Wrap purchase departure_arr_Wrap d-none">
    <form action="" autocomplete="off">
        <div class="row">
            <div class="col-md-6">
                <div class="Purchase_form">
                    <label for="">Account Number or Reference Number</label>
                    <input class="account_nmbr mb-1" type="password" placeholder="XXXXXXXXXXXXXXXXXXXXXXXX">
                    <div class="mb-1">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Write down the description here"></textarea>
                    </div>
                    <div class="schedule_dates">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">Departure Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--">
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">Arrival Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--" id="datepicker"> 
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"alt="">
                                    <div class="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">Scheduled Date of Receipt</label>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
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
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""><span>Payment iccue</span> 
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                    </div>
                    <div class="mb-1">
                        <label for="">Notes</label>
                        <input class="account_nmbr" type="text" placeholder="Enter">
                    </div>
                    <div class="upload">
                        <label for="">Document Upload</label>
                        <button type="button">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn Back_to_S_Step5">Back</button>
                <button type="button" class="startedBtn Go_to_S_Step6">Next</button>
            </div>
        </div>
    </div>
</div>

{{-- Pick Drop Dates --}}
<div class="InnerForm_Wrap purchase pick_drop_dates_Wrap d-none">
    <form action="" autocomplete="off">
        <div class="row">
            <div class="col-md-6">
                <div class="Purchase_form">
                    <label for="">Account Number or Reference Number</label>
                    <input class="account_nmbr mb-1" type="password" placeholder="XXXXXXXXXXXXXXXXXXXXXXXX">
                    <div class="mb-1">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Write down the description here"></textarea>
                    </div>
                    <div class="schedule_dates">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">Pickup Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--">
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">Drop Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--" id="datepicker"> 
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"alt="">
                                    <div class="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">Scheduled Date of Receipt</label>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
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
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""><span>Payment iccue</span> 
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                    </div>
                    <div class="mb-1">
                        <label for="">Notes</label>
                        <input class="account_nmbr" type="text" placeholder="Enter">
                    </div>
                    <div class="upload">
                        <label for="">Document Upload</label>
                        <button type="button">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn Back_to_S_Step5">Back</button>
                <button type="button" class="startedBtn Go_to_S_Step6">Next</button>
            </div>
        </div>
    </div>
</div>

{{-- Check In Out --}}
<div class="InnerForm_Wrap purchase check_in_out_Wrap d-none">
    <form action="" autocomplete="off">
        <div class="row">
            <div class="col-md-6">
                <div class="Purchase_form">
                    <label for="">Account Number or Reference Number</label>
                    <input class="account_nmbr mb-1" type="password" placeholder="XXXXXXXXXXXXXXXXXXXXXXXX">
                    <div class="mb-1">
                        <label for="">Description</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Write down the description here"></textarea>
                    </div>
                    <div class="schedule_dates">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">Check out Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--">
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mb-1">
                                <label for="">Check out Date</label>
                                <div class="select_dateinput">
                                    <input class="date form-control" type="text" placeholder="--/--/--" id="datepicker"> 
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}"alt="">
                                    <div class="calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label for="">Scheduled Date of Receipt</label>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="select_dateinput mb-1">
                                        <input class="date form-control" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
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
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""><span>Payment iccue</span> 
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                        <button type="button">
                            <img src="{{ asset('app-assets/images/recieved/issue.png') }}" alt=""> <span>Payment iccue</span>
                        </button>
                    </div>
                    <div class="mb-1">
                        <label for="">Notes</label>
                        <input class="account_nmbr" type="text" placeholder="Enter">
                    </div>
                    <div class="upload">
                        <label for="">Document Upload</label>
                        <button type="button">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn Back_to_S_Step5">Back</button>
                <button type="button" class="startedBtn Go_to_S_Step6">Next</button>
            </div>
        </div>
    </div>
</div>

{{-- /////////////////// --}}
<div class="InnerForm_Wrap Receipts_Wrap pay_on_completion_Wrap d-none">
    <form action="">
        <div class="row">
            <div class="col-md-6">
                <div class="Refundable">
                    <label for="">Amount</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="Intermediary">
                    <label for="">Intermediary Fee</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="Refundable">
                    <label for="">Non-Refundable Deposit Option</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="Intermediary">
                    <label for="">Total Received by Intermediary</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="schedule_dates">
                    <div class="datepickerfields">
                        <div class="mb-1">
                            <label for="">Pay on Scheduled Completion Date</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="select_dateinput">
                                        <input class="form-control date" type="text" placeholder="--/--/--">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="select_dateinput">
                                        <input class="form-control date" type="text" placeholder="--/--/--" id="datepicker">
                                        <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                        <div class="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn BackTo_Step7">Back</button>
                <button type="button" class="startedBtn GoTo_Cont_Summary">Next</button>
            </div>
        </div>
    </div>
</div>

{{-- pay_at_receipt_Wrap --}}
<div class="InnerForm_Wrap Receipts_Wrap pay_at_receipt_Wrap d-none">
    <form action="">
        <div class="row justify-content-center step3">
            <div class="col-md-6">
                <div class="Refundable">
                    <label for="">Amount</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="Intermediary">
                    <label for="">Total Received by Intermediary</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="Refundable">
                    <label for="">Non-Refundable Deposit Option</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="Intermediary">
                    <label for="">Intermediary Fee</label>
                    <div class="select_dateinput2">
                        <input type="number" placeholder="45, 000" class="mb-1">
                        <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="schedule_dates">
                    <div class="datepickerfields mb-1">
                        <label for="">Pay on Scheduled Completion Date</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="select_dateinput">
                                    <input class="form-control date" type="text" placeholder="--/--/--">
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="select_dateinput">
                                    <input class="form-control date" type="text" placeholder="--/--/--" id="datepicker">
                                    <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                    <div class="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn BackTo_Step7">Back</button>
                <button type="button" class="startedBtn GoTo_Cont_Summary">Next</button>
            </div>
        </div>
    </div>
</div>

{{-- Pay in Milestone --}}
<div class="InnerForm_Wrap Receipts_Wrap pay_in_milestone_Wrap d-none">
    <div class="row justify-content-center step4">
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
                        <button class="form-changebtn border-0 bg-transparent">
                            <img src="{{ asset('app-assets/images/recieved/adduserbtn.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="stepform_2 d-none">
            <form action="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="Refundable">
                            <label for="">Amount</label>
                            <div class="select_dateinput2">
                                <input type="number" placeholder="45, 000" class="mb-1">
                                <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
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
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="Refundable">
                            <label for="">Non-Refundable Deposit Option</label>
                            <div class="select_dateinput2">
                                <input type="number" placeholder="45, 000" class="mb-1">
                                <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="Intermediary">
                            <label for="">Total Received by Intermediary</label>
                            <div class="select_dateinput2">
                                <input type="number" placeholder="45, 000" class="mb-1">
                                <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="schedule_dates">
                            <div class="datepickerfields mb-1">
                                <label for="">Progressive Payment Schedule</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="select_dateinput">
                                            <input class="form-control date" type="text" placeholder="--/--/--">
                                            <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="select_dateinput">
                                            <input class="form-control date" type="text" placeholder="--/--/--" id="datepicker">
                                            <img src="{{ asset('app-assets/images/recieved/calendar.png') }}" alt="">
                                            <div class="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row mt-3 justify-content-center">
                <div class="col-md-12">
                    <div class="InnerText">
                        <h3 class="mb-2 text-center">Set Payment milestone</h3>
                    </div>
                    <div class="mt-2 d-flex justify-content-center data">
                        <div>
                            <label for="">Title</label>
                            <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="" class="me-1">
                            <span>45,000</span>
                        </div>
                        <div>
                            <label for="">Amount</label>
                            <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="" class="me-1">
                            <span>45,000</span>
                        </div>
                        <div>
                            <label for="">Date</label>
                            <img src="{{ asset('app-assets/images/recieved/dollar.png') }}" alt="" class="me-1">
                            <span>45,000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn BackTo_Step7">Back</button>
                <button type="button" class="startedBtn GoTo_Cont_Summary">Next</button>
            </div>
        </div>
    </div>
</div>

{{-- Contract Summary --}}
<div class="Contract_SummaryWrap d-none">
    <div class="row">
        <div class="col-lg-12">
            <div class="summary-wrap">
                <label for="">Date</label>
                <div class="date-wrap">
                    <p>21/2/2002</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="head-wrap text-center">
                <h2>Contract Summary</h2>
            </div>
        </div>
    </div>
    <div class="center mt-5 ">
        <div class="">
            <div class="sender-wrap mt-4">
                <div class="sender-title">
                    <p>SENDER</p>
                </div>
                <div class="trans-record">
                    <label for="">Name</label>
                    <input type="text" placeholder="Jhon">
                    <label for="">Address</label>
                    <input type="text" placeholder="USA">
                    <label for="">Location</label>
                    <input type="text" placeholder="California">
                    <label for="">Phone</label>
                    <input type="text" placeholder="+1 545454 54545">
                    <label for="">Email</label>
                    <input type="text" placeholder="abc@gmail.com">
                    <label for="">Type</label>
                    <input type="text" placeholder="Purchaser-Provider">
                </div>
            </div>
        </div>
        <div class="">
            <div class="reciver-wrap mt-4">
                <div class="Reciever-title">
                    <p>RECEIVER</p>
                </div>
                <div class="trans-record">
                    <label for="">Name</label>
                    <input type="text" placeholder="Jhon">
                    <label for="">Address</label>
                    <input type="text" placeholder="USA">
                    <label for="">Location</label>
                    <input type="text" placeholder="California">
                    <label for="">Phone</label>
                    <input type="text" placeholder="+1 545454 54545">
                    <label for="">Email</label>
                    <input type="text" placeholder="abc@gmail.com">
                    <label for="">Type</label>
                    <input type="text" placeholder="Purchaser-Provider">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="Agrement mt-5">
                <p>PURCHASES AND TRANSFERS - DETAILS OF AGREEMENT</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="contract_table mt-5">
                <table>
                    <thead>
                        <tr>
                            <th class="custom_wrap"><b>Type</b></th>
                            <th colspan="3" class="table_head"><span>PRODUCT-SERVICE-OTHER PURCHASES - MONEY TRANSFER - BILL PAYMENT</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="custom_wrap"><b>Account/Reference #</b></td>
                            <td rowspan="2" class="tablebr_data"></td>
                            <td class="tablebr_data">XXXXXXXXXXXXX</td>
                            <td rowspan="2" class="tablebr_data"></td>
                        </tr>
                        <tr>
                            <td class="custom_wrap"><b>Description of Purchase</b></td>
                            <td class="tablebr_data">XXXXXXXXXXXXX</td>
                        </tr>
                        <tr>
                            <td class="custom_wrap"><b>Receipt Date</b></td>
                            <td class="tablebr_data">22/1/2002</td>
                            <td class="tablebr_data">OTHER DATES (Other Purchases)</td>
                            <td class="tablebr_data">AUTOPOPULATED</td>
                        </tr>
                        <tr>
                            <td class="custom_wrap"><b>Completion Date</b></td>
                            <td class="tablebr_data">23/1/2002</td>
                            <td rowspan="2" class="special tablebr_data">Amount Non-Refundable Deposit</td>
                            <td class="tablebr_data"><span class="ms-2">$</span>45,000</td>
                        </tr>
                        <tr>
                            <td class="custom_wrap"><b>Notes</b></td>
                            <td class="tablebr_data">Notes</td>
                            <td class="tablebr_data"><span class="ms-2">$</span>45,0000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="Pyment_terms mt-5">
                <div>
                    <p>PAYMENT TERMS</p>
                </div>
                <div>
                    <span>**Cancel Anytime, No Fee**</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="payment_schedule mt-2">
                <table>
                    <thead>
                        <tr>
                            <th class="custom_wrap"><b>PAYMENT SCHEDULE</b></th>
                            <th colspan="4" class="table_head"><span>Pay upon completion-Pay upon receipt-Progressive</span></th>
                            <th class="table_head2"><span>PAYOUT DATES / AMTS</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td class="tablebr_data bdr bdr3">22/1/2002</td>
                            <td class="tablebr_data bdr bdr3 bdrleft">Receipts</td>
                            <td class="tablebr_data bdr bdrleft">45, 000</td>
                            <td class="special">(SENDER/Private)</td>
                            <td class="tablebr_data bdr">PAYOUT DATES / AMTS</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="tablebr_data bdr2 bdr3">22/1/2002</td>
                            <td class="tablebr_data bdr2 bdr3 bdrleft">Receipts</td>
                            <td class="tablebr_data bdr2 bdrleft">45, 000</td>
                            <td class="special">(SENDER/Private)</td>
                            <td class="tablebr_data bdr2">PAYOUT DATES / AMTS</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="pin_code">
                <table>
                    <thead>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="code_transect">Enter your code to confirm transaction record</td>
                            <td class="tablebr_data">ENTER CODE</td>
                        </tr>
                        <tr>
                            <td class="code_transect">RECEIVER confirmed transaction record</td>
                            <td class="tablebr_data">
                                <div class="otp-input-fields">
                                    <input type="number" class="otp__digit otp__field__1" placeholder="-">
                                    <input type="number" class="otp__digit otp__field__2" placeholder="-">
                                    <input type="number" class="otp__digit otp__field__3" placeholder="-">
                                    <input type="number" class="otp__digit otp__field__4" placeholder="-">
                                    <input type="number" class="otp__digit otp__field__5" placeholder="-">
                                    <input type="number" class="otp__digit otp__field__6" placeholder="-">
                                </div>
                            </td>
                            <td class="text-center"><button class="sendotp_btn">Send OTP</button></td>
                        </tr>
                        <tr>
                            <td class="code_transect">Transaction ID</td>
                            <td class="tablebr_data">AUTOPOPULATE/Protected</td>
                            <td class="text-center"><button class="sendotp_btn">Scan Face ID </button></td>
                        </tr>
                    </tbody>
                </table>
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
                <button type="button" class="backBtn BackTo_Step7">Back</button>
                <button type="button" class="startedBtn next-step">Submit</button>
            </div>
        </div>
    </div>
</div>