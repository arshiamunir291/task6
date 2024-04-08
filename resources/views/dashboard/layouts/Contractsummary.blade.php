@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<style>
nav {
    display: none !important;
}
</style>
<div class="content-body contractsummary">
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
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
                            <button type="button" class="backBtn prev-step">Back</button>
                            <button type="button" class="startedBtn next-step">Submit</button>
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