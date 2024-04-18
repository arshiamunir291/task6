@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Received Contract
@endsection
@section('Main_content')
<div class="content-body transection_dashboard">
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section tabs_sectionsender">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="create-pin-title">
                            <h1>Create new pin</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Create-pin-content">
                            <div class="pin-select">
                                <select selected=""  name="" id="">
                                <option value="" disabled selected>Generate Pin</option>
                                  <option value="">11</option>
                                  <option value="">12</option>
                                </select>
                            </div>
                            <div class="generate-btn">
                                <button class="btn btn-primary">Generate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Step_First ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Active_contract text-center">
                            <h1>Account Activity</h1>
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
                                            Login Date
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Logout Date
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="border-radius: 10px 0px 0px 10px;">
                                            21/2/2002
                                        </td>
                                        <td>
                                            David Admin
                                        </td>
                                        <td>
                                            21/02/2004
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <div class="NextBtns_bots justify-content-end">
                    <div class="DotsLeft d-none">
                        <span class="active"></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="InnerBtns">
                        <button type="button" class="backBtn">Back</button>
                        <button type="button" class="startedBtn">Submit</button>
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