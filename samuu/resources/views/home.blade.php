@extends('layouts.app')

@section('content')
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="https://res.cloudinary.com/mhmd/image/upload/v1556074849/avatar-1_tcnd60.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">sammy sammy</h4>
          <p class="font-weight-light text-muted mb-0">Web developer</p>
        </div>
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic bg-light">
                  <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                  Home
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                  About
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                  Services
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  Gallery
              </a>
      </li>
    </ul>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Charts</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="{{url('/workers')}}" class="nav-link text-dark font-italic">
                  <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i>
                  Employees
              </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/managers')}}" class="nav-link text-dark font-italic">
                  <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                  Managers
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                  Department
              </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-line-chart mr-3 text-primary fa-fw"></i>
                  Notifications
              </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->
  
  
  <!-- Page content holder -->
  <div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">welcome to dasboard</small></button>
  
    <!-- Demo content -->
    <h2 class="display-4 text-white">Management Dashboard</h2>
    <p class="lead text-white mb-0">Work Anywhere And Anytime. Earn Money Online And Enjoy Life. Register Now And Earn Money! 
        Innovative Way Of Getting Big Money. Everyone Can Earn. With Us Already Earns 3,7m People.
         Highlights: A Unique Trading Platform, We Offer Professional Technical Support, We Are A 
         Reliable Company, In Business Since 2013.</p>
    {{-- <p class="lead text-white">system by <a href="https://bootstrapious.com/snippets" class="text-white">
          <u>sammy</u></a> --}}
    </p>
    <div class="separator"></div>
    <div class="card-group">
        <div class="card">
          <img src="https://www.xpatlink.info/images/xpatlink/xpatlink__5450/main/main.jpg?Accounting/Finance" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Accounting/Finance</h5>
            <p class="card-text">Ruth qualified with BCOM finance 10 yrs experience looking for an accounting/ finance job. Call or emai</p>
            <p class="card-text"><small class="text-muted">more details</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://www.xpatlink.info/images/xpatlink/xpatlink__5450/main/main.jpg?Accounting/Finance" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Business Management</h5>
            <p class="card-text">A lady with a Diploma in Business Management and 10years of Experience in the same field looking for a job. Call or email </p>
            <p class="card-text"><small class="text-muted">more details</small></p>
          </div>
        </div>
        <div class="card">
          <img src="https://www.xpatlink.info/images/xpatlink/xpatlink__5450/main/main.jpg?Accounting/Finance" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Procurement Officer</h5>
            <p class="card-text">A lady with a degree & diploma in purchasing and supplies and 5 years experience in the same field is looking for a position as a procurement officer.</p>
            <p class="card-text"><small class="text-muted">more details</small></p>
          </div>
        </div>
      </div>
     
  
  </div>
  <!-- End demo content -->
  
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
