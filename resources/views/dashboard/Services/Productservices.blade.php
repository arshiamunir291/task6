@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<div class="content-body transection_dashboard">
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section tabs_sectionsender">
        <div class="InnerForm_Wrap">
            <div class="">
            <div class="CompanyInformation_Wrap ">
    <p class="Step_Count">Step 3</p>
    <h2 class="text-center mb-3">Company Information</h2>
    <div class="row FormStep">
        <div class="col-md-6 col-12">
            <div class="">
                <div class="card-header text-center">
                    <h4 class="card-title">Your Information</h4>
                </div>
                <div class="card-body pt-0">
                    <form class="form form-vertical">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="first-name-vertical">Company</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Enter company name" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-vertical">Name (POC)</label>
                                    <input type="text" id="email-id-vertical" class="form-control" name="email-id" placeholder="Enter POC" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="ssn">EIN</label>
                                    <input type="number" id="ssn" class="form-control" name="ssn" placeholder="Enter your EIN" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="sender">Location or store identifier</label>
                                    <input type="url" id="sender" class="form-control" name="contact" placeholder="location" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" id="address" class="form-control" name="contact" placeholder="Enter your Address" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="address">ID Upload</label>
                                    <button type="button" class="UploadBtnForm d-block">Upload</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="">
                <div class="card-header text-center">
                    <h4 class="card-title">Purchase / Provider Information</h4>
                </div>
                <div class="card-body pt-0">
                    <form class="form form-vertical">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="email-id-vertical">Email</label>
                                    <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Enter your Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="number" id="phone" class="form-control" name="phone" placeholder="Enter Mobile Number" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="faceCapture">Face Capture</label>
                                    <input type="text" id="faceCapture" class="form-control" name="faceCapture" placeholder="" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="code">Enter Code</label>
                                    <input type="number" id="code" class="form-control" name="code" placeholder="Enter your Code" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="cc">CC</label>
                                    <input type="text" id="cc" class="form-control" name="cc" placeholder="CC" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="add-sender">Add Sender</label>
                                    <input type="text" id="add-sender" class="form-control" name="add-sender" placeholder="Add Sender" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-between px-2">
            <div class="DotsLeft">
                <span></span>
                <span></span>
                <span class="active"></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn prev-step Back_D_Step3">Back</button>
                <button type="button" class="startedBtn Next_Step4">Next</button>
            </div>
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