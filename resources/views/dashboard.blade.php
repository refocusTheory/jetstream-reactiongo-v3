
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
  <!-- vendor css files -->

@endsection
@section('page-style')
  <!-- Page css files -->

  @endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section class="app-user-view-account">
  <div class="row">

    <!-- User Sidebar -->
    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">

      <!-- User Card -->
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="{{asset('images/portrait/small/avatar-s-2.jpg')}}"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4>{!! Auth::user()->name !!}</h4>
                <span class="badge bg-light-secondary">Author</span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0">1.23k</h4>
                <small>Tasks Done</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0">568</h4>
                <small>Projects Done</small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
          <div class="info-container">
            <ul class="list-unstyled">
              <li class="mb-75">
                <span class="fw-bolder me-25">Username:</span>
                <span>violet.dev</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Billing Email:</span>
                <span>vafgot@vultukir.org</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Status:</span>
                <span class="badge bg-light-success">Active</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Role:</span>
                <span>Author</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Tax ID:</span>
                <span>Tax-8965</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Contact:</span>
                <span>+1 (609) 933-44-22</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Language:</span>
                <span>English</span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Country:</span>
                <span>Wake Island</span>
              </li>
            </ul>
            <div class="d-flex justify-content-center pt-2">
              <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser" data-bs-toggle="modal">
                Edit
              </a>
              <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspended</a>
            </div>
          </div>
        </div>
      </div><!-- /User Card -->

      <!-- Plan Card -->
      <div class="card border-primary">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <span class="badge bg-light-primary">Standard</span>
            <div class="d-flex justify-content-center">
              <sup class="h5 pricing-currency text-primary mt-1 mb-0">$</sup>
              <span class="fw-bolder display-5 mb-0 text-primary">99</span>
              <sub class="pricing-duration font-small-4 ms-25 mt-auto mb-2">/month</sub>
            </div>
          </div>
          <ul class="ps-1 mb-2">
            <li class="mb-50">10 Users</li>
            <li class="mb-50">Up to 10 GB storage</li>
            <li>Basic Support</li>
          </ul>
          <div class="d-flex justify-content-between align-items-center fw-bolder mb-50">
            <span>Days</span>
            <span>4 of 30 Days</span>
          </div>
          <div class="progress mb-50" style="height: 8px">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 80%"
              aria-valuenow="65"
              aria-valuemax="100"
              aria-valuemin="80"
            ></div>
          </div>
          <span>4 days remaining</span>
          <div class="d-grid w-100 mt-2">
            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
              Upgrade Plan
            </button>
          </div>
        </div>
      </div><!-- /Plan Card -->

    </div><!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

      <!-- User Pills -->
      <ul class="nav nav-pills mb-2">
        <li class="nav-item">
          <a class="nav-link active" href="{{asset('app/user/view/account')}}">
            <i data-feather="user" class="font-medium-3 me-50"></i>
            <span class="fw-bold">Account</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{asset('app/user/view/security')}}">
            <i data-feather="lock" class="font-medium-3 me-50"></i>
            <span class="fw-bold">Security</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{asset('app/user/view/billing')}}">
            <i data-feather="bookmark" class="font-medium-3 me-50"></i>
            <span class="fw-bold">Billing & Plans</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{asset('app/user/view/notifications')}}">
            <i data-feather="bell" class="font-medium-3 me-50"></i><span class="fw-bold">Notifications</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{asset('app/user/view/connections')}}">
            <i data-feather="link" class="font-medium-3 me-50"></i><span class="fw-bold">Connections</span>
          </a>
        </li>
      </ul><!--/ User Pills -->


    </div> <!--/ User Content -->

  </div>
</section>
@include('content/_partials/_modals/modal-edit-user')
@include('content/_partials/_modals/modal-upgrade-plan')

@endsection

@section('vendor-script')
  <!-- vendor files -->

@endsection
@section('page-script')
  <!-- Page js files -->

@endsection
