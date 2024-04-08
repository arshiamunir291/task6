@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<div class="content-body step_formsrecieved">
    <div class="DashBoard_Stack d-none">
        <div class="Stack_Cards">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">Total Contracts</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">6078</h2>
                                <p>Profit is 80% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart" class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">Unsigned Contracts</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">6078</h2>
                                <p>Profit is 30% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart2" class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">My Contracts</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">6078</h2>
                                <p>Profit is 50% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart3" class=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="Headings">
                                <h4 class="card-title">Recent Transactions</h4>
                                <p>Total Expense</p>
                            </div>
                            <div class="Total_Contracts">
                                <h2 class="card-title">$151k</h2>
                                <p>Profit is 40% More than last Month</p>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div id="goal-overview-radial-bar-chart4" class=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-0 py-2">
                            <h4 class="card-title">Recent Activity</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th>Recipient Name</th>
                                        <th>Duration</th>
                                        <th>Creation Date</th>
                                        <th>Status</th>
                                        <th>Completion</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1</span>
                                        </td>
                                        <td>Peter Charls</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">2</span>
                                        </td>
                                        <td>Ronald Frest</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                        <td><span class="badge rounded-pill badge-light-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">3</span>
                                        </td>
                                        <td>Jack Obes</td>
                                        <td>
                                            <div class="avatar-group">
                                                <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar pull-up my-0" title="Lilian Nenez">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="26" width="26" />
                                                </div>
                                            </div>
                                        </td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                                        <td><span class="badge rounded-pill badge-light-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                    <i data-feather="more-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="edit-2" class="me-50"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i data-feather="trash" class="me-50"></i>
                                                        <span>Delete</span>
                                                    </a>
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
    </div>
    <!-- Horizontal Wizard -->
    <div class="wizard">
        <div class="wizard-inner pb-4">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true">
                        <span class="round-tab">1</span> 
                        <i>Welcome</i>
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
                        <span class="round-tab">2</span> 
                        <i>Your Role</i>
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab">
                        <span class="round-tab">3</span>
                        <i>Personal Information</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <section class="MultiForm_Wrap tabs_section">
        <div class="InnerForm_Wrap">
            <div class="Step_First FormStepLine">
                <div class="row step1">
                    <div class="col-md-6">
                        <img src="{{ asset('app-assets/images/dash_images/step-1.svg') }}" alt="" width="100%">
                    </div>
                    <div class="col-md-6">
                        <div class="InnerText">
                            <h3 class="mb-2">Welcome to Quibit</h3>
                            <h3 class="Txt_blue mb-2">Quibit Dashboard for manage <br> your Transactions</h3>
                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                </div>
                <div class="hidetest step2">
                    <p>Step 2</p>
                    <h3 class="mb-2 text-center">YOUR ROLE</h3>
                    <div class="row justify-content-center step_2nd">
                        <div class="col-md-3">
                            <div class="Sendertabs">
                                <label class="">
                                    <input type="radio" name="sender" value="seller">
                                    <img src="{{ asset('app-assets/images/recieved/product.png') }}" alt="">
                                    SELLER
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="Sendertabs">
                                <label class="">
                                    <input type="radio" name="sender" value="buyer">
                                    <img src="{{ asset('app-assets/images/recieved/service.png') }}" alt="">
                                    BUYER
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="Sendertabs">
                                <label class="">
                                    <input type="radio" name="sender" value="other">
                                    <img src="{{ asset('app-assets/images/recieved/otherpurchase.png') }}" alt=""> 
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center step_2nd d-none">
                        <div class="col-md-3">
                            <div class="Sendertabs">
                                <label class="">
                                    <input type="radio" name="sender" value="individual">
                                    <img src="{{ asset('app-assets/images/recieved/product.png') }}" alt="">
                                    INDIVIDUAL
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="Sendertabs">
                                <label class="">
                                    <input type="radio" name="sender" value="company">
                                    <img src="{{ asset('app-assets/images/recieved/service.png') }}" alt="">
                                    COMPANY
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidetest step3 FormStep">
                    <p class="Step_Count">Step 3</p>
                    <h2 class="text-center mb-3">Individual Information</h2>
                    <div class="row d-none">
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
                                                    <label class="form-label" for="first-name-vertical">First Name</label>
                                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Enter your name" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-vertical">Email</label>
                                                    <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Enter your Email" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="ssn">SSN</label>
                                                    <input type="number" id="ssn" class="form-control" name="ssn" placeholder="Enter your SSN" />
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
                                                    <label class="form-label" for="sender">Add Sender</label>
                                                    <input type="text" id="sender" class="form-control" name="contact" placeholder="Add Sender" />
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
                                                    <label class="form-label" for="first-name-vertical">Name (Other Person)</label>
                                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Enter your Name" />
                                                </div>
                                            </div>
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
                                                    <label class="form-label" for="ssn">SSN</label>
                                                    <input type="number" id="ssn" class="form-control" name="ssn" placeholder="Enter your SSN" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="address">Address</label>
                                                    <input type="text" id="address" class="form-control" name="contact" placeholder="Enter your Address" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-none">
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
                                                    <label class="form-label" for="first-name-vertical">First Name</label>
                                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Enter your name" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email-id-vertical">Email</label>
                                                    <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Enter your Email" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="ssn">SSN</label>
                                                    <input type="number" id="ssn" class="form-control" name="ssn" placeholder="Enter your SSN" />
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
                                                    <label class="form-label" for="sender">Add Sender</label>
                                                    <input type="text" id="sender" class="form-control" name="contact" placeholder="Add Sender" />
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
                                                    <label class="form-label" for="first-name-vertical">Name (Other Person)</label>
                                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Enter your Name" />
                                                </div>
                                            </div>
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
                                                    <label class="form-label" for="ssn">SSN</label>
                                                    <input type="number" id="ssn" class="form-control" name="ssn" placeholder="Enter your SSN" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="address">Address</label>
                                                    <input type="text" id="address" class="form-control" name="contact" placeholder="Enter your Address" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="">
                                <div class="card-header text-center">
                                    <h4 class="card-title">Company Information</h4>
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
                                                    <label class="form-label" for="first-name-vertical">Name (Other Person)</label>
                                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Enter your Name" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="ssn">SSN</label>
                                                    <input type="number" id="ssn" class="form-control" name="ssn" placeholder="Enter your SSN" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="address">Address</label>
                                                    <input type="text" id="address" class="form-control" name="contact" placeholder="Enter your Address" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="NextBtns_botsWrap">
                    <div class="NextBtns_bots justify-content-between">
                        <div class="DotsLeft">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true">
                                        <span class="round-tab"></span> 
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false">
                                        <span class="round-tab"></span> 
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab">
                                        <span class="round-tab"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="InnerBtns">
                            <button type="button" class="backBtn prev-step">Back</button>
                            <button type="button" class="startedBtn next-step d-none">Next</button>
                            <button type="button" class="startedBtn next-step">Let’s get started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(".backBtn").prop("disabled", true);

            // Click event for Next button
            $(".startedBtn").click(function() {
                var currentStep = $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li.active').index();
                $(".step" + (currentStep + 1)).addClass("hidetest");
                $(".step" + (currentStep + 2)).removeClass("hidetest");
                $(".backBtn").prop("disabled", false);
                $('.wizard-inner .nav-tabs li, .DotsLeft .nav-tabs li').eq(currentStep).next('li').find('a').click();
            });

            // Click event for Back button
            $(".backBtn").click(function() {
                var currentStep = $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li.active').index();
                $(".step" + (currentStep + 1)).addClass("hidetest");
                $(".step" + currentStep).removeClass("hidetest");
                $(".backBtn").prop("disabled", currentStep === 1);
                $('.wizard-inner .nav-tabs li, .DotsLeft .nav-tabs li').eq(currentStep - 1).find('a').click();
            });

            // Click event for navigation tabs
            $('.nav-tabs').on('click', 'li', function() {
                var clickedIndex = $(this).index();
                var currentStep = $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li').index();

                $(".step" + (currentStep + 1)).addClass("hidetest");
                $(".step" + (clickedIndex + 1)).removeClass("hidetest");

                $(".backBtn").prop("disabled", clickedIndex === 0);
                $(".startedBtn").prop("disabled", clickedIndex === 2);

                $('.wizard-inner .nav-tabs li.active, .DotsLeft .nav-tabs li.active').removeClass('active');
                $(this).addClass('active');
            });
        });

        $(document).ready(function(){
            // Listen for changes in the radio button selection
            $('.Sendertabs input[type="radio"]').change(function() {
                // Remove active class from all Sendertabs
                $('.Sendertabs').removeClass('active');
                
                // Check if any radio button is checked
                if($(this).is(':checked')){
                    $(this).closest('.Sendertabs').addClass('active');
                }
            });

            // Listen for clicks on the document body
            $(document.body).on('click', function(event) {
                // Check if the clicked element is not within the Sendertabs area
                if (!$(event.target).closest('.Sendertabs').length) {
                    // Remove active class from all Sendertabs
                    $('.Sendertabs').removeClass('active');
                }
            });

            $('.Sendertabs input[type="radio"][value="seller"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.step_2nd').toggleClass('d-none');
                }
            });
        });
    </script>
@endsection