@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<div class="content-body transection_dashboard">
    <div class="row mt-5 mb-2 earningcards">
        <div class="col-lg-3">
            <div class="Earnedcard text-center">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard1.png') }}" alt="">
                </div>
                <div class="head">
                    <span>
                        Earned
                    </span>
                </div>
                <div class="amount">
                    <span>
                        PKR 20,735
                    </span>
                </div>

            </div>

        </div>
        <div class="col-lg-3">
            <div class="Earnedcard text-center">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard2.png') }}" alt="">
                </div>
                <div class="head">
                    <span>
                        Withdraw
                    </span>
                </div>
                <div class="amount">
                    <span>
                        PKR 20,735
                    </span>
                </div>

            </div>

        </div>
        <div class="col-lg-3">
            <div class="Earnedcard text-center">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard3.png') }}" alt="">
                </div>
                <div class="head">
                    <span>
                        Service Charges
                    </span>
                </div>
                <div class="amount">
                    <span>
                        PKR 20,735
                    </span>
                </div>

            </div>

        </div>
        <div class="col-lg-3">
            <div class="Earnedcard text-center">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard4.png') }}" alt="">
                </div>
                <div class="head">
                    <span>
                        Pending Clearance
                    </span>
                </div>
                <div class="amount">
                    <span>
                        PKR 20,735
                    </span>
                </div>

            </div>

        </div>

    </div>
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section tabs_sectionsender">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="Balance">
                                Available Balance <span>$ 45,000</span>
                            </div>
                            <div class="filters">
                                <button class="btn btn-primary" type="submit">Withdraw</button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Earning_chart">
                            <table class="tbl">
                                <thead>
                                    <tr>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            For
                                        </th>
                                        <th>
                                            Clearing status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11/Jan/2024
                                        </td>
                                        <td class="price">
                                            PKR 20,175
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                        </td>
                                        <td class="claering_status">
                                            <button>
                                                Clearing status
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <span id="btn">Show More <img
                                                    src="{{ asset('app-assets/images/recieved/statusdropdown.png') }}"
                                                    alt="" class="dropdown-icon"></span>
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
    var shownDefault = 10;
    var numShown = shownDefault; // Initial rows shown & index
    var $table = $('.tbl').find('tbody'); // tbody containing all the rows
    var numRows = $table.find('tr').length; // Total # rows

    var moretext = "Show More";
    var lesstext = "Show Less";

    $table.find('tr:gt(' + (numShown - 1) + ')').hide(); // Hide extra rows by default

    $('#btn').click(function() {
        if (numShown === numRows) {
            // Show default number of rows
            numShown = shownDefault;
            $table.find('tr:gt(' + (numShown - 1) + ')').hide();
            $('#btn').html(moretext +
                ' <img src="{{ asset("app-assets/images/recieved/statusdropdown.png") }}" alt="" class="dropdown-icon">'
            );
        } else {
            // Show all rows
            numShown = numRows;
            $('#btn').html(lesstext +
                ' <img src="{{ asset("app-assets/images/recieved/statusup.png") }}" alt="" class="dropdown-icon">'
            );
        }
        $table.find('tr:lt(' + numShown + ')').show();
    });
});
</script>
@endsection