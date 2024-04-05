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
                <div class="row mt-5 col6row ">
                    <div class="col-lg-6">
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
                    <div class="col-lg-6 col6_col">
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
                        <div class="Agrement">
                            <p>PURCHASES AND TRANSFERS - DETAILS OF AGREEMENT</p>
                        </div>
                    </div>

                </div>
                <div class="Type">
                    <div class="col-lg-12">
                        <div class="contract_table mt-5">
                            <table>
                                <thead>
                                    <tr>
                                        <th><b>Type</b></th>
                                        <th colspan="3">PRODUCT-SERVICE-OTHER PURCHASES - MONEY TRANSFER - BILL PAYMENT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>Account/Reference #</b></td>
                                        <td rowspan="2"></td>
                                        <td>XXXXXXXXXXXXX</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>Description of Purchase</b></td>
                                        <td></td>
                                        <td>XXXXXXXXXXXXX</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><b>Receipt Date</b></td>
                                        <td>22/1/2002</td>
                                        <td>OTHER DATES (Other Purchases)</td>
                                        <td>AUTOPOPULATED</td>
                                    </tr>
                                    <tr>
                                        <td><b>Completion Date</b></td>
                                        <td>23/1/2002</td>
                                        <td></td>
                                        <td>$ 45,000</td>
                                    </tr>
                                    <tr>
                                        <td><b>Notes</b></td>
                                        <td>Notes</td>
                                        <td>Amount Non-Refundable Deposit</td>
                                        <td>$ 45,0000</td>
                                    </tr>
                                </tbody>
                            </table>

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
@endsection