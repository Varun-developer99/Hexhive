@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('css')
   
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">Dashboard</li> --}}
@endsection

@section('content')

<div class="container-fluid">
  <div class="row mb-3">
    <div class="col-6 col-md-3 mb-2">
      <div class="card text-center border-0 shadow-sm" style="background: linear-gradient(120deg, #f8fafc 80%, #e3eafc 100%); color: #212529; border-radius: 0.8rem;">
        <div class="card-body py-2 px-2">
          <div class="mb-1">
            <i class="fa fa-cube" style="color: #4e73df; font-size:1.3rem;"></i>
          </div>
          <h6 class="card-title mb-1" style="font-weight:400; letter-spacing:0.5px; font-size:0.95rem;">Total Products</h6>
          <div style="font-size:1.2rem; color:#4e73df; font-weight:400; letter-spacing:0.2px;">1,250</div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3 mb-2">
      <div class="card text-center border-0 shadow-sm" style="background: linear-gradient(120deg, #f8fafc 80%, #e3fae3 100%); color: #212529; border-radius: 0.8rem;">
        <div class="card-body py-2 px-2">
          <div class="mb-1">
            <i class="fa fa-users" style="color: #1cc88a; font-size:1.3rem;"></i>
          </div>
          <h6 class="card-title mb-1" style="font-weight:400; letter-spacing:0.5px; font-size:0.95rem;">Total Customers</h6>
          <div style="font-size:1.2rem; color:#1cc88a; font-weight:400; letter-spacing:0.2px;">980</div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3 mb-2">
      <div class="card text-center border-0 shadow-sm" style="background: linear-gradient(120deg, #f8fafc 80%, #e3f6fa 100%); color: #212529; border-radius: 0.8rem;">
        <div class="card-body py-2 px-2">
          <div class="mb-1">
            <i class="fa fa-shopping-cart" style="color: #36b9cc; font-size:1.3rem;"></i>
          </div>
          <h6 class="card-title mb-1" style="font-weight:400; letter-spacing:0.5px; font-size:0.95rem;">Total Orders</h6>
          <div style="font-size:1.2rem; color:#36b9cc; font-weight:400; letter-spacing:0.2px;">3,200</div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3 mb-2">
      <div class="card text-center border-0 shadow-sm" style="background: linear-gradient(120deg, #f8fafc 80%, #faf6e3 100%); color: #212529; border-radius: 0.8rem;">
        <div class="card-body py-2 px-2">
          <div class="mb-1">
            <i class="fa fa-shopping-bag" style="color: #f6c23e; font-size:1.3rem;"></i>
          </div>
          <h6 class="card-title mb-1" style="font-weight:400; letter-spacing:0.5px; font-size:0.95rem;">Total Sales</h6>
          <div style="font-size:1.2rem; color:#f6c23e; font-weight:400; letter-spacing:0.2px;">₹ 5,40,000</div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="card mb-3 border-0 shadow-lg" style="background: linear-gradient(120deg, #f8fafc 60%, #e3eafc 100%); border-radius: 0.8rem;">
        <div class="card-header bg-white border-bottom-0 d-flex align-items-center" style="padding-bottom:0.4rem; border-radius: 0.8rem 0.8rem 0 0; min-height: 38px;">
          <i class="fa fa-history me-2 text-primary" style="font-size:1.1rem;"></i>
          <h6 class="mb-0" style="font-weight:400; letter-spacing:0.3px; font-size:1rem;">Recent Orders</h6>
        </div>
        <div class="card-body py-2 px-2">
          <table class="table table-hover align-middle mb-0" style="border-radius:8px; overflow:hidden; font-size:0.97rem;">
            <thead class="table-light">
              <tr style="font-size:0.97rem;">
                <th style="width:32px;"></th>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="https://randomuser.me/api/portraits/men/1.jpg" class="rounded-circle" width="28" height="28" alt="Rahul Sharma"></td>
                <td><span class="fw-bold text-primary" style="font-weight:400; font-size:0.98rem;">#1001</span></td>
                <td style="font-weight:400;">Rahul Sharma</td>
                <td style="font-weight:400;">08 Sep 2025</td>
                <td><span class="badge rounded-pill bg-success px-2 py-1" style="font-weight:400; font-size:0.95rem;"><i class="fa fa-check-circle me-1"></i>Completed</span></td>
                <td><span class="fw-bold" style="font-weight:400;">₹ 2,500</span></td>
              </tr>
              <tr>
                <td><img src="https://randomuser.me/api/portraits/women/2.jpg" class="rounded-circle" width="28" height="28" alt="Priya Singh"></td>
                <td><span class="fw-bold text-primary" style="font-weight:400; font-size:0.98rem;">#1002</span></td>
                <td style="font-weight:400;">Priya Singh</td>
                <td style="font-weight:400;">08 Sep 2025</td>
                <td><span class="badge rounded-pill bg-warning text-dark px-2 py-1" style="font-weight:400; font-size:0.95rem;"><i class="fa fa-clock me-1"></i>Pending</span></td>
                <td><span class="fw-bold" style="font-weight:400;">₹ 1,800</span></td>
              </tr>
              <tr>
                <td><img src="https://randomuser.me/api/portraits/men/3.jpg" class="rounded-circle" width="28" height="28" alt="Amit Verma"></td>
                <td><span class="fw-bold text-primary" style="font-weight:400; font-size:0.98rem;">#1003</span></td>
                <td style="font-weight:400;">Amit Verma</td>
                <td style="font-weight:400;">07 Sep 2025</td>
                <td><span class="badge rounded-pill bg-danger px-2 py-1" style="font-weight:400; font-size:0.95rem;"><i class="fa fa-times-circle me-1"></i>Cancelled</span></td>
                <td><span class="fw-bold" style="font-weight:400;">₹ 900</span></td>
              </tr>
              <tr>
                <td><img src="https://randomuser.me/api/portraits/women/4.jpg" class="rounded-circle" width="28" height="28" alt="Neha Gupta"></td>
                <td><span class="fw-bold text-primary" style="font-weight:400; font-size:0.98rem;">#1004</span></td>
                <td style="font-weight:400;">Neha Gupta</td>
                <td style="font-weight:400;">07 Sep 2025</td>
                <td><span class="badge rounded-pill bg-success px-2 py-1" style="font-weight:400; font-size:0.95rem;"><i class="fa fa-check-circle me-1"></i>Completed</span></td>
                <td><span class="fw-bold" style="font-weight:400;">₹ 3,200</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-3 border-0 shadow-lg" style="background: linear-gradient(120deg, #f8fafc 60%, #e3eafc 100%); border-radius: 0.8rem;">
        <div class="card-header bg-white border-bottom-0 d-flex align-items-center" style="padding-bottom:0.4rem; border-radius: 0.8rem 0.8rem 0 0; min-height: 38px;">
          <i class="fa fa-trophy me-2 text-success" style="font-size:1.1rem;"></i>
          <h6 class="mb-0" style="font-weight:400; letter-spacing:0.3px; font-size:1rem;">Top Selling Products</h6>
        </div>
        <div class="card-body py-2 px-2">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:0.97rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px; padding: 0.5rem 0.7rem;">
              <span><i class="fa fa-star text-warning me-2"></i>Product A</span>
              <span class="badge rounded-pill bg-primary px-2 py-1" style="font-weight:400;">520 Sold</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:0.97rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px; padding: 0.5rem 0.7rem;">
              <span><i class="fa fa-star text-warning me-2"></i>Product B</span>
              <span class="badge rounded-pill bg-primary px-2 py-1" style="font-weight:400;">430 Sold</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:0.97rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px; padding: 0.5rem 0.7rem;">
              <span><i class="fa fa-star text-warning me-2"></i>Product C</span>
              <span class="badge rounded-pill bg-primary px-2 py-1" style="font-weight:400;">390 Sold</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:0.97rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px; padding: 0.5rem 0.7rem;">
              <span><i class="fa fa-star text-warning me-2"></i>Product D</span>
              <span class="badge rounded-pill bg-primary px-2 py-1" style="font-weight:400;">350 Sold</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

@endsection