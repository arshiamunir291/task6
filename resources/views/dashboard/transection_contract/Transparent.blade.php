@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('ContractOpen')
open
@endsection
@section('Active_Contracts')
active
@endsection
@section('Main_content')
<div class="content-body transection_dashboard">
    <div class="row mt-5 mb-2 visitorcards">
        <div class="col-lg-3">
            <div class="visited text-left">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard5.png') }}" alt="">
                </div>
                <div class="Total_visit">
                    <span>
                        Total Visitors
                    </span>
                </div>
                <div class="price">
                    <span>
                        $53,00989
                    </span>
                </div>
                <div class="d-flex  monthlyresults">
                    <p><img src="{{ asset('app-assets/images/recieved/increase.png') }}" alt=""></p>
                    <p>12% increase from last month</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="visited text-left">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard6.png') }}" alt="">
                </div>
                <div class="Total_visit">
                    <span>
                        Visits Today
                    </span>
                </div>
                <div class="price2">
                    <span class="sp1">
                        95
                    </span><span class="sp2">/100</span>
                </div>
                <div class="d-flex  monthlyresults">
                    <p><img src="{{ asset('app-assets/images/recieved/decrease.png')}}" alt=""></p>
                    <p>10% decrease from last month</p>
                </div>

            </div>

        </div>
        <div class="col-lg-3">
            <div class="visited text-left">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard7.png') }}" alt="">
                </div>
                <div class="Total_visit">
                    <span>
                        Average time spend
                    </span>
                </div>
                <div class="price2">
                    <span class="sp1">
                        1022
                    </span><span class="sp2">/1300 Hrs</span>
                </div>
                <div class="d-flex  monthlyresults">
                    <p><img src="{{ asset('app-assets/images/recieved/increase.png') }}" alt=""></p>
                    <p>8% increase from last month</p>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="visited text-left">
                <div>
                    <img src="{{ asset('app-assets/images/recieved/earningcard8.png') }}" alt="">
                </div>
                <div class="Total_visit">
                    <span>
                        Today clocked out
                    </span>
                </div>
                <div class="price2">
                    <span class="sp1">101 </span><span class="sp2">/120</span>
                </div>
                <div class="d-flex monthlyresults">
                    <p><img src="{{ asset('app-assets/images/recieved/increase.png') }}" alt=""></p>
                    <p>2% increase from last month</p>
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
                            <div class="Active_contract">
                                <h1>Active Contract</h1>
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
                                            Completion status
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th style="border-radius: 0px 50px 50px 0px;">Action Button</th>
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
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 0%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-end prgress_value">
                                                <span>50%</span>
                                            </div>
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
                                                <div class="dropdown-menu drop_set"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{url('contractsummary') }}">
                                                        <img src="{{ asset('app-assets/images/recieved/drop1.png') }}"
                                                            alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop2.png') }}"
                                                            alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="{{url('payment')}}">
                                                        <img src="{{ asset('app-assets/images/recieved/drop3.png') }}"
                                                            alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop4.png') }}"
                                                            alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#cancellationmodal" data-bs-whatever="@mdo"><img
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
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 0%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-end prgress_value">
                                                <span>50%</span>
                                            </div>
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
                                                <div class="dropdown-menu drop_set"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="{{url('contractsummary') }}">
                                                        <img src="{{ asset('app-assets/images/recieved/drop1.png') }}"
                                                            alt="" class="me-1">View contract summary</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop2.png') }}"
                                                            alt="" class="me-1">Edit Contract</a>
                                                    <a class="dropdown-item" href="#">
                                                        <img src="{{ asset('app-assets/images/recieved/drop3.png') }}"
                                                            alt="" class="me-1">Make Payment</a>
                                                    <a class="dropdown-item" href="#"><img
                                                            src="{{ asset('app-assets/images/recieved/drop4.png') }}"
                                                            alt="" class="me-1">Transaction History</a>
                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#cancellationmodal" data-bs-whatever="@mdo"><img
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



<!-- Cancellation Modal -->
<!-- <div class="modal fade" id="cancellationmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content canellation-modal-content">
            <div class="modal-header cancellation-header">
                <h5 class="modal-title" id="exampleModalLabel">Cancellation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Reason for Cancellation :</label>
                        <select class="cancel-modal-select">
                        <option value="" disabled selected>Select a reason</option>
                            <option value="">Reason 2</option>
                            <option value="">Reason 4</option>
                            <option value="">Reason 5</option>
                            <option value="">Reason 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control cancel-textarea" id="message-text"
                            placeholder="Add description"></textarea>
                    </div>
                </form>
                <div class="modal-note">
                    <p>Note :</p>
                    <p>Lorem ipsum is placeholder text commonly used in the
                        graphic, print, and publishing industries for previewing
                        layouts and visual mockups.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cancelation-cancel-btn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn req-cancel-btn">Request Cancellation</button>
            </div>
        </div>
    </div>
</div> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
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
<script>
$(document).ready(function() {
    $(".progress-bar").animate({
        width: "50%"
    }, 2500);
});
</script>
@endsection