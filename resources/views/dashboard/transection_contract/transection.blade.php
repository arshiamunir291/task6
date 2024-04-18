@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
My Transactions
@endsection
@section('My_Transections')
active
@endsection
@section('Main_content')
<div class="content-body transection_dashboard">
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section tabs_sectionsender">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex gap-2">
                            <div class="dropdown range">
                                <button class="btn dropdown-toggle rangebtndrop" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Date range
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="dropdown status">
                                <button class="btn dropdown-toggle statusbtndrop" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Status
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <div class="filters">
                                <button class="btn btn-primary" type="submit">Apply Filters</button>
                            </div>
                            <div class="filters">
                                <button class="btn btn-primary" type="submit">Clear All</button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="transdetail_chart">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="border-radius: 50px 0px 0px 50px;">
                                            Contract #
                                        </th>
                                        <th>
                                            Buyer
                                        </th>
                                        <th>
                                            Seller
                                        </th>
                                        <th>
                                            Creation date
                                        </th>
                                        <th>
                                            Date of completion
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th style="border-radius: 0px 50px 50px 0px;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="paid">
                                            Paid
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}" alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}" alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}" alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}" alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}" alt="" class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="cancell">
                                            Cancelled
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}" alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}" alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}" alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}" alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}" alt="" class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="paid">
                                            Paid
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}" alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}" alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}" alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}" alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}" alt="" class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="cancell">
                                            Cancelled
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}" alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}" alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}" alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}" alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}" alt="" class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="cancell">
                                            Cancelled
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}" alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}" alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}" alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}" alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}" alt="" class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="paid">
                                            Paid
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}" alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}" alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}" alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}" alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}" alt="" class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="cancell">
                                            Cancelled
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}"
                                                            alt=""
                                                            class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}"
                                                            alt=""
                                                            class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}"
                                                            alt=""
                                                            class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}"
                                                            alt=""
                                                            class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}"
                                                            alt=""
                                                            class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="paid">
                                            Paid
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop1.png') }}"
                                                            alt=""
                                                            class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop2.png') }}"
                                                            alt=""
                                                            class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop3.png') }}"
                                                            alt=""
                                                            class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop4.png') }}"
                                                            alt=""
                                                            class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img src="{{ asset('app-assets/images/recieved/drop5.png') }}"
                                                            alt=""
                                                            class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="cancell">
                                            Cancelled
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop1.png') }}"
                                                            alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop2.png') }}"
                                                            alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop3.png') }}"
                                                            alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop4.png') }}"
                                                            alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop5.png') }}"
                                                            alt="" class="me-1">Request Cancellation</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            01
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            Jhon Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                        <td class="cancell">
                                            Cancelled
                                        </td>
                                        <td>
                                            $ 45,000
                                        </td>
                                        <td style="border-radius: 0px 10px 10px 0px;">
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="{{ asset('app-assets/images/recieved/transtable.png') }}"
                                                        alt="">
                                                </button>
                                                <div class="dropdown-menu drop_set" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop1.png') }}"
                                                            alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop2.png') }}"
                                                            alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop3.png') }}"
                                                            alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop4.png') }}"
                                                            alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop5.png') }}"
                                                            alt="" class="me-1">Request Cancellation</a>
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
    </section>
    <!-- /Horizontal Wizard -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// JavaScript to handle dropdown toggle
$(document).ready(function() {
    $('.dropdown-toggle').click(function() {
        var $dropdown = $(this).parent();
        $('.dropdown').not($dropdown).removeClass('show');
        $dropdown.toggleClass('show');
    });

    $(document).click(function(event) {
        if (!$(event.target).closest('.dropdown-toggle').length && !$(event.target).closest(
                '.dropdown-menu').length) {
            $('.dropdown').removeClass('show');
        }
    });
});
</script>
@endsection