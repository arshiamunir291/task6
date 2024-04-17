<h2 class="InnerForm_Heading d-none mb-3">OTHER PURCHASES PAGE</h2>
<div class="InnerForm_Wrap purchase start_end_date_Wrap d-none">
    <div class="Step_First">
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
                    <button type="button" class="backBtn Back_to_S_Step2">Back</button>
                    <button type="button" class="startedBtn Go_to_S_Step3">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Departure Arrivals --}}
<div class="InnerForm_Wrap purchase departure_arr_Wrap d-none">
    <div class="Step_First">
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
                    <button type="button" class="backBtn Back_to_S_Step2">Back</button>
                    <button type="button" class="startedBtn Go_to_S_Step3">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Pick Drop Dates --}}
<div class="InnerForm_Wrap purchase pick_drop_dates_Wrap d-none">
    <div class="Step_First">
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
                    <button type="button" class="backBtn Back_to_S_Step2">Back</button>
                    <button type="button" class="startedBtn Go_to_S_Step3">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Check In Out --}}
<div class="InnerForm_Wrap purchase check_in_out_Wrap d-none">
    <div class="Step_First">
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
                    <button type="button" class="backBtn Back_to_S_Step2">Back</button>
                    <button type="button" class="startedBtn Go_to_S_Step3">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
