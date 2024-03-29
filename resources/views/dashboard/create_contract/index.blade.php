@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Dashboard
@endsection
@section('Main_content')
<div class="content-body">
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
    <section class="MultiForm_Wrap">
        <div class="InnerForm_Wrap">
            <div class="Step_First">
                <div class="row">
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
                <div class="row">
                    <div class="NextBtns_bots">
                        <div class="DotsLeft">
                            <span class="active"></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="InnerBtns">
                            <button type="button" class="backBtn">Back</button>
                            <button type="button" class="startedBtn">Let’s get started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Horizontal Wizard -->
</div>
@endsection