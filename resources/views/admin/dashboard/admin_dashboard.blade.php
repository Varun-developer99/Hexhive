@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('css')
   
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">Dashboard</li> --}}
@endsection

@section('content')

<div class="container-fluid">
  <div class="row mb-4">
        <div class="col-md-3">
          <div class="card text-center border-0 shadow-sm" style="background: #f8f9fa; color: #212529;">
            <div class="card-body py-4">
              <div class="mb-2">
                <i class="fa fa-cube fa-2x" style="color: #4e73df;"></i>
              </div>
              <h6 class="card-title mb-1" style="font-weight:600; letter-spacing:1px;">Total Products</h6>
              <h3 style="font-size:2rem; font-weight:700; color:#4e73df;">1,250</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center border-0 shadow-sm" style="background: #f8f9fa; color: #212529;">
            <div class="card-body py-4">
              <div class="mb-2">
                <i class="fa fa-users fa-2x" style="color: #1cc88a;"></i>
              </div>
              <h6 class="card-title mb-1" style="font-weight:600; letter-spacing:1px;">Total Customers</h6>
              <h3 style="font-size:2rem; font-weight:700; color:#1cc88a;">980</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center border-0 shadow-sm" style="background: #f8f9fa; color: #212529;">
            <div class="card-body py-4">
              <div class="mb-2">
                <i class="fa fa-shopping-cart fa-2x" style="color: #36b9cc;"></i>
              </div>
              <h6 class="card-title mb-1" style="font-weight:600; letter-spacing:1px;">Total Orders</h6>
              <h3 style="font-size:2rem; font-weight:700; color:#36b9cc;">3,200</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center border-0 shadow-sm" style="background: #f8f9fa; color: #212529;">
            <div class="card-body py-4">
              <div class="mb-2">
                <i class="fa fa-shopping-bag fa-2x" style="color: #f6c23e;"></i>
              </div>
              <h6 class="card-title mb-1" style="font-weight:600; letter-spacing:1px;">Total Sales</h6>
              <h3 style="font-size:2rem; font-weight:700; color:#f6c23e;">₹ 5,40,000</h3>
            </div>
          </div>
        </div>
  </div>

  <div class="row">
    <div class="col-md-8">
          <div class="card mb-4 border-0 shadow-lg" style="background: linear-gradient(120deg, #f8fafc 60%, #e3eafc 100%);">
            <div class="card-header bg-white border-bottom-0 d-flex align-items-center" style="padding-bottom:0.5rem;">
              <i class="fa fa-history fa-lg me-2"></i>
              <h5 class="mb-0" style="font-weight:600;">Recent Orders</h5>
            </div>
            <div class="card-body">
              <table class="table table-hover align-middle mb-0" style="border-radius:8px; overflow:hidden;">
                <thead class="table-light">
                  <tr style="font-size:1rem;">
                    <th></th>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="https://randomuser.me/api/portraits/men/1.jpg" class="rounded-circle" width="36" height="36" alt="Rahul Sharma"></td>
                    <td><span class="fw-bold text-primary">#1001</span></td>
                    <td>Rahul Sharma</td>
                    <td>08 Sep 2025</td>
                    <td><span class="badge rounded-pill bg-success px-3 py-2"><i class="fa fa-check-circle me-1"></i>Completed</span></td>
                    <td><span class="fw-bold">₹ 2,500</span></td>
                  </tr>
                  <tr>
                    <td><img src="https://randomuser.me/api/portraits/women/2.jpg" class="rounded-circle" width="36" height="36" alt="Priya Singh"></td>
                    <td><span class="fw-bold text-primary">#1002</span></td>
                    <td>Priya Singh</td>
                    <td>08 Sep 2025</td>
                    <td><span class="badge rounded-pill bg-warning text-dark px-3 py-2"><i class="fa fa-clock me-1"></i>Pending</span></td>
                    <td><span class="fw-bold">₹ 1,800</span></td>
                  </tr>
                  <tr>
                    <td><img src="https://randomuser.me/api/portraits/men/3.jpg" class="rounded-circle" width="36" height="36" alt="Amit Verma"></td>
                    <td><span class="fw-bold text-primary">#1003</span></td>
                    <td>Amit Verma</td>
                    <td>07 Sep 2025</td>
                    <td><span class="badge rounded-pill bg-danger px-3 py-2"><i class="fa fa-times-circle me-1"></i>Cancelled</span></td>
                    <td><span class="fw-bold">₹ 900</span></td>
                  </tr>
                  <tr>
                    <td><img src="https://randomuser.me/api/portraits/women/4.jpg" class="rounded-circle" width="36" height="36" alt="Neha Gupta"></td>
                    <td><span class="fw-bold text-primary">#1004</span></td>
                    <td>Neha Gupta</td>
                    <td>07 Sep 2025</td>
                    <td><span class="badge rounded-pill bg-success px-3 py-2"><i class="fa fa-check-circle me-1"></i>Completed</span></td>
                    <td><span class="fw-bold">₹ 3,200</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
    <div class="col-md-4">
          <div class="card mb-4 border-0 shadow-lg" style="background: linear-gradient(120deg, #f8fafc 60%, #e3eafc 100%);">
            <div class="card-header bg-white border-bottom-0 d-flex align-items-center" style="padding-bottom:0.5rem;">
              <i class="fa fa-trophy fa-lg me-2"></i>
              <h5 class="mb-0" style="font-weight:600;">Top Selling Products</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:1rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px;">
                  <span><i class="fa fa-star text-warning me-2"></i>Product A</span>
                  <span class="badge rounded-pill bg-primary px-3 py-2">520 Sold</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:1rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px;">
                  <span><i class="fa fa-star text-warning me-2"></i>Product B</span>
                  <span class="badge rounded-pill bg-primary px-3 py-2">430 Sold</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:1rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px;">
                  <span><i class="fa fa-star text-warning me-2"></i>Product C</span>
                  <span class="badge rounded-pill bg-primary px-3 py-2">390 Sold</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center" style="font-size:1rem; background: #f8f9fa; border-radius:8px; margin-bottom:8px;">
                  <span><i class="fa fa-star text-warning me-2"></i>Product D</span>
                  <span class="badge rounded-pill bg-primary px-3 py-2">350 Sold</span>
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