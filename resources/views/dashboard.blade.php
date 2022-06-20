
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
  <!-- vendor css files -->

@endsection
@section('page-style')
  <!-- Page css files -->

  @endsection

@section('content')
<section class="app-user-view-account">
  <div class="row">

    <!-- User Sidebar -->
    <div class="col-xl-3 col-lg-3 col-md-3 order-1 order-md-0">

      <!-- User Card -->
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('images/portrait/small/avatar-s-11.jpg') }}"
                height="200"
                width="200"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4>{{ Auth::user()->name }} </h4>
                <!-- <span class="badge bg-light-secondary">Author</span> -->
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
              <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser" data-bs-toggle="modal"
                >Edit</a
              >
              <a href="/file-manager" class="btn btn-outline-danger suspend-user">Suspended</a>
            </div>
          </div>
        </div>
      </div><!-- /User Card -->

    </div><!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

      <!-- connections -->
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Connected Accounts</h4>
        </div>
        <div class="card-body pt-2">
          <!-- <p>Display content from social accounts on your site</p> -->
          <!-- Social Accounts -->
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <img
                src="{{asset('images/icons/social/google.png')}}"
                alt="google"
                class="me-1"
                height="38"
                width="38"
              />
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Google</p>
                @if($user->userOauth->google_id)
                <span class="text-success" >Connected</span>
                @else
                <span class="text-danger">Not Connected</span>
                @endif
              </div>
              <div class="mt-50 mt-sm-0">
                @if($user->userOauth->google_id)
                <button type="button" class="btn btn-icon btn-outline-success">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
                @else
                <a href="/auth/google" class="btn btn-outline-primary waves-effect">Connect</a>
                @endif
              </div>
            </div>
          </div>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <img
                src="{{asset('images/icons/social/facebook.png')}}"
                alt="facebook"
                class="me-1"
                height="38"
                width="38"
              />
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Facebook</p>
                @if($user->userOauth->facebook_id)
                <span class="text-success" >Connected</span>
                @else
                <span class="text-danger">Not Connected</span>
                @endif
              
              </div>
              <div class="mt-50 mt-sm-0">
              @if($user->userOauth->facebook_id)
              <button type="button" class="btn btn-icon btn-outline-success">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
                @else
                <a href="/auth/facebook" class="btn btn-outline-primary waves-effect">Connect</a>
                @endif
              </div>
            </div>
          </div>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <img
                src="{{asset('images/icons/social/instagram.png')}}"
                alt="twitter"
                class="me-1"
                height="38"
                width="38"
              />
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Instagram</p>
                @if($user->userOauth->instagram_id)
                <span class="text-success" >Connected</span>
                @else
                <span class="text-danger">Not Connected</span>
                @endif
              </div>
              <div class="mt-50 mt-sm-0">
              @if($user->userOauth->instagram_id)
              <button type="button" class="btn btn-icon btn-outline-success">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
                @else
                <a href="/auth/google" class="btn btn-outline-primary waves-effect">Connect</a>
                @endif
              </div>
            </div>
          </div>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <img
                src="{{asset('images/icons/social/linkedin.png')}}"
                alt="instagram"
                class="me-1"
                height="38"
                width="38"
              />
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Linkedin</p>
                @if($user->userOauth->linkedin_id)
                <span class="text-success" >Connected</span>
                @else
                <span class="text-danger">Not Connected</span>
                @endif
                <!-- <a href="https://www.linkedin.com/company/pixinvent" target="_blank"> @pixinvent </a> -->
              </div>
              <div class="mt-50 mt-sm-0">
              @if($user->userOauth->linkedin_id)
              <button type="button" class="btn btn-icon btn-outline-success">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
                @else
                <a href="/auth/linkedin" class="btn btn-outline-primary waves-effect">Connect</a>
                @endif
              </div>
            </div>
          </div>
          <hr>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <img
                src="{{asset('images/icons/social/crm-512.png')}}"
                alt="instagram"
                class="me-1"
                height="38"
                width="38"
              />
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">ZoHo</p>
                @if($user->userOauth->zoho_id)
                <span class="text-success" >Connected</span>
                @else
                <span class="text-danger">Not Connected</span>
                @endif
                <!-- <a href="https://www.zoho.com/company/pixinvent" target="_blank"> @pixinvent </a> -->
              </div>
              <div class="mt-50 mt-sm-0">
              @if($user->userOauth->zoho_id)
              <button type="button" class="btn btn-icon btn-outline-success">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
                @else
                <a href="/auth/zoho" class="btn btn-outline-primary waves-effect">Connect</a>
                @endif
              </div>
            </div>
          </div>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <img
                src="{{asset('images/icons/social/salesforce.png')}}"
                alt="instagram"
                class="me-1"
                height="38"
                width="38"
              />
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Salesforce</p>
                @if($user->userOauth->salesforce_id)
                <span class="text-success" >Connected</span>
                @else
                <span class="text-danger">Not Connected</span>
                @endif
                <!-- <a href="https://www.salesforce.com/company/pixinvent" target="_blank"> @pixinvent </a> -->
              </div>
              <div class="mt-50 mt-sm-0">
              @if($user->userOauth->salesforce_id)
              <button type="button" class="btn btn-icon btn-outline-success">
                  <i data-feather="link" class="font-medium-3"></i>
                </button>
                @else
                <a href="/auth/google" class="btn btn-outline-primary waves-effect">Connect</a>
                @endif
              </div>
            </div>
          </div>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <img
                src="{{asset('images/icons/social/dropbox.png')}}"
                alt="instagram"
                class="me-1"
                height="38"
                width="38"
              />
            </div>
            <div class="d-flex justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Dropbox</p>
                @if($user->userOauth->dropbox_id)
                <span class="text-success" >Connected</span>
                @else
                <span class="text-danger">Not Connected</span>
                @endif
                <!-- <a href="https://www.dropbox.com/company/pixinvent" target="_blank"> @pixinvent </a> -->
              </div>
              <div class="mt-50 mt-sm-0">
              @if($user->userOauth->dropbox_id)
              <button type="button" class="btn btn-icon btn-outline-success">
                  <i data-feather="link" class="font-medium-3 "></i>
                </button>
                @else
                <a href="/auth/google" class="btn btn-outline-primary waves-effect">Connect</a>
                @endif
              </div>
            </div>
          </div>

          <!-- /Social Accounts -->
        </div>
      </div> <!--/ connections -->

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
