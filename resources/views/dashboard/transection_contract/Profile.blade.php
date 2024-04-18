@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<style>
/* .header-navbar {
    display: none;
}

.header-navbar-shadow {
    display: none !important;
} */
</style>
<div class="content-bod  Profile_section">
    <div class="row">
        <div class="col-lg-12">
            <div class="Profile mb-4">
                <h1>My Profile</h1>
            </div>
        </div>
    </div>
    <!-- Horizontal Wizard -->
    <section class="MultiForm_Wrap tabs_section tabs_sectionsender">
        <div class="InnerForm_Wrap">
            <div class="Step_First ">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile_pic">
                            <div class="user">
                                <img src="{{ asset('app-assets/images/recieved/profilepage.png') }}" alt="">
                                <div class="dropdown">
                                    <img src="{{ asset('app-assets/images/recieved/change photo.png') }}" alt=""
                                        class="profilechange_icon  dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Change Profile</a>
                                        <a class="dropdown-item" href="#">Delete Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="verfication_button ">
                                <button type="button" class="face_verify me-1 btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Face Verification
                                </button>
                                <button class="id_verify">
                                    ID Verification
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <div class="user_detail mt-3">
                            <div class="name_wrap row mb-3">
                                <div class="col-lg-6">
                                    <label for="">First Name</label>
                                    <input type="text" placeholder="Jhon">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Surname</label>
                                    <input type="text" placeholder="Admin">
                                </div>
                            </div>
                            <div class="credencials mb-2">
                                <label for="">National Code</label>
                                <input type="text" placeholder="Admin">

                            </div>
                            <div class="credencials mb-3">
                                <label for="">Date of birth</label>
                                <div class="inner_wrap"><input type="text" placeholder="Enter Value">
                                    <img src="{{ asset('app-assets/images/recieved/Hide.png') }}" alt="">
                                </div>


                            </div>
                            <div class="credencials">
                                <label for="">Education level</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Software</option>
                                    <option value="1">School</option>
                                    <option value="2">college</option>
                                    <option value="3">Middle</option>
                                </select>

                            </div>

                        </div>

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
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="face_verification">
                            <p class="">
                                Face Verification
                            </p>
                        </div>
                        <div class="facedetect">
                            <img src="{{ asset('app-assets/images/recieved/facedetect.png') }}" alt="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Verified</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
    $(".backBtn").prop("disabled", true);
});
</script>
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

@endsection