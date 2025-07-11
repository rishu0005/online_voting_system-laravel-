@extends('layout.main-layout')
@section('title', 'Voters')
@section('content')

<div class="main-content">
    <div class="container px-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Voters Overview</h4>
            <div>
                <button class="btn btn-primary"><a href="{{ route('register') }}" class="text-light text-decoration-none">

                    <i class="bi bi-plus-circle me-2"></i> Register User
                </a>
                </button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header p-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Active Elections</h5>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                                Filter
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">All Elections</a></li>
                                <li><a class="dropdown-item" href="#">Active</a></li>
                                <li><a class="dropdown-item" href="#">Upcoming</a></li>
                                <li><a class="dropdown-item" href="#">Completed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="election-card p-3 mb-3 position-relative">
                            <span class="badge bg-success status-badge">Active</span>
                            <h5>Student Council President Election</h5>
                            <div class="small text-muted mb-2">Ends in 2 days (Apr 19, 2025)</div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Participation: 76%</span>
                                <span>3,254 votes</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 76%"></div>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                          <a href="{{ route('assign-candidate') }}" class="text-decoration-none">
                              <button class="btn btn-sm btn-outline-success">Assign Candidate</button>
                            </a>
                        </div>
                        
                        <div class="election-card p-3 mb-3 position-relative">
                            <span class="badge bg-success status-badge">Active</span>
                            <h5>Faculty Board Representative</h5>
                            <div class="small text-muted mb-2">Ends in 5 days (Apr 22, 2025)</div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Participation: 63%</span>
                                <span>2,784 votes</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 63%"></div>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                        </div>
                        
                        <div class="election-card p-3 position-relative">
                            <span class="badge bg-warning status-badge">Upcoming</span>
                            <h5>Budget Allocation Referendum</h5>
                            <div class="small text-muted mb-2">Starts in 3 days (Apr 20, 2025)</div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Registration: 85%</span>
                                <span>10,527 eligible voters</span>
                            </div>
                            <div class="progress mb-3">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 85%"></div>
                            </div>
                            <button class="btn btn-sm btn-outline-primary">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Latest Results</h5>
                        <p class="text-muted mb-0 small">Student Council President</p>
                    </div>
                    <div class="card-body">
                        <div class="candidate-item">
                            <div class="candidate-avatar bg-primary text-white">JD</div>
                            <div>
                                <div class="fw-bold">Jane Doe</div>
                                <div class="small text-muted">1,456 votes</div>
                            </div>
                            <div class="candidate-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="fw-bold">45%</div>
                        </div>
                        
                        <div class="candidate-item">
                            <div class="candidate-avatar bg-success text-white">JS</div>
                            <div>
                                <div class="fw-bold">John Smith</div>
                                <div class="small text-muted">1,102 votes</div>
                            </div>
                            <div class="candidate-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 34%"></div>
                                </div>
                            </div>
                            <div class="fw-bold">34%</div>
                        </div>
                        
                        <div class="candidate-item">
                            <div class="candidate-avatar bg-info text-white">AL</div>
                            <div>
                                <div class="fw-bold">Amy Lee</div>
                                <div class="small text-muted">696 votes</div>
                            </div>
                            <div class="candidate-progress">
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 21%"></div>
                                </div>
                            </div>
                            <div class="fw-bold">21%</div>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-sm btn-outline-primary">View Full Results</button>
                        </div>
                    </div>
                </div>
                
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="mb-0">Recent Activity</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="activity-item px-3">
                            <div class="d-flex">
                                <div class="activity-icon bg-success bg-opacity-10 text-success">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">New votes recorded</div>
                                    <div class="small text-muted">245 new votes in Student Council Election</div>
                                    <div class="small text-muted">10 minutes ago</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="activity-item px-3">
                            <div class="d-flex">
                                <div class="activity-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="bi bi-person-plus"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">New candidate registered</div>
                                    <div class="small text-muted">Mark Wilson for Class Representative</div>
                                    <div class="small text-muted">1 hour ago</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="activity-item px-3">
                            <div class="d-flex">
                                <div class="activity-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="bi bi-calendar-plus"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">New election scheduled</div>
                                    <div class="small text-muted">Budget Allocation Referendum</div>
                                    <div class="small text-muted">3 hours ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection