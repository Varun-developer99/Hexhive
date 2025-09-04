<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
  <div>
    <div class="logo-wrapper" style="height: auto; width:200px;"><a href="{{ url('/') }}"><img class="img-fluid for-light" src="{{ asset(env('APP_LOGO_DARK')) }}" alt=""><img class="img-fluid for-dark" src="{{ asset(env('APP_LOGO_LIGHT')) }}" alt=""></a>
      <div class="back-btn"><i class="fa fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>
    <div class="logo-icon-wrapper"><a href="{{ url('/') }}"><img class="img-fluid" width="50px" src="{{ asset(env('APP_FAVICON')) }}" alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn"><a href="{{ url('/') }}"><img class="img-fluid" src="{{ asset(env('APP_FAVICON')) }}" alt=""></a>
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="sidebar-main-title">
            <div>
              <h6>General</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard') }}">
              <i data-feather="home"></i><span>Dashboard</span>
            </a>
          </li>
          @if (Auth::user()->role_as == 'Admin')
          <li class="sidebar-main-title">
            <div>
              <h6>Product Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.product.index') }}">
              <i data-feather="package"></i><span>All Products</span>
            </a>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="#">
              <i data-feather="server"></i><span>Product Master</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('admin.category.index') }}">All Categories</a></li>
            </ul>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.product.index') }}?status_filter=0">
              <i data-feather="x-square"></i><span>All Inactive Products</span>
            </a>
          </li>
          @endif
          @if (Auth::user()->role_as == 'Admin')
            <li class="sidebar-list">
              <a class="sidebar-link sidebar-title link-nav" href="#">
                <i data-feather="star"></i><span>All Reviews</span>
              </a>
            </li>
          @endif
          <li class="sidebar-main-title">
            <div>
              <h6>Customer List</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.customer.index') }}">
              <i data-feather="user"></i><span>All Customers</span>
            </a>
          </li>

          <li class="sidebar-main-title">
            <div>
              <h6>Stock Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="#">
              <i data-feather="grid"></i><span>Stock Management</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('warehouse.stock_details.index') }}?in_out_filter=In">All Stock In</a></li>
              <li><a href="{{ route('warehouse.stock_details.index') }}?in_out_filter=Out">All Stock Out</a></li>
              <li><a href="{{ route('warehouse.stock_details.index') }}">All Stock Details</a></li>
              <li><a href="#">Stock Out Report</a></li>
              <li><a href="{{ route('warehouse.current_stock.index') }}">Current Stock</a></li>
              <li><a href="{{ route('warehouse.current_stock.index') }}?stock_filter=Out Of Stock">Out Of Stock</a></li>
            </ul>
          </li>
          <li class="sidebar-main-title">
            <div>
              <h6>Order Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('warehouse.orders.index') }}">
              <i data-feather="shopping-bag"></i><span>All Orders</span>
            </a>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="#">
              <i data-feather="server"></i><span>Order Filter</span>
            </a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('warehouse.orders.index', ['order_status' => 'Pending']) }}">All Pending Orders</a></li>
              <li><a href="{{ route('warehouse.orders.index', ['order_status' => 'Processing']) }}">All Processing Orders</a></li>
              <li><a href="{{ route('warehouse.orders.index', ['order_status' => 'Packed']) }}">All Packed Orders</a></li>
              <li><a href="{{ route('warehouse.orders.index', ['order_status' => 'Shipped']) }}">All Shipped Orders</a></li>
              <li><a href="{{ route('warehouse.orders.index', ['order_status' => 'Delivered']) }}">All Delivered Orders</a></li>
            </ul>
          </li>
          
          @if (Auth::user()->role_as == 'Admin')
          <li class="sidebar-main-title">
            <div>
              <h6>Blog Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.blog.index') }}">
              <i data-feather="home"></i><span>All Blogs</span>
            </a>
          </li>

          <li class="sidebar-main-title">
            <div>
                <h6>Events Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.event.index') }}">
              <i data-feather="home"></i><span>All Events </span>
            </a>
          </li>

          <li class="sidebar-main-title">
            <div>
              <h6>Banners Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.banners.index') }}">
              <i data-feather="home"></i><span>All Banners</span>
            </a>
          </li>

          <li class="sidebar-main-title">
            <div>
              <h6>Combo Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.comboproducts.index') }}">
              <i data-feather="home"></i><span>All Combos</span>
            </a>
          </li>

          <li class="sidebar-main-title">
            <div>
              <h6>Contact Us Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.contact.index') }}">
              <i data-feather="home"></i><span>All Contacts</span>
            </a>
          </li>

          <li class="sidebar-main-title">
            <div>
              <h6>Policy Management</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.policy.index') }}">
              <i data-feather="home"></i><span>All Policys</span>
            </a>
          </li>

          <li class="sidebar-main-title">
            <div>
              <h6>Settings</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.website.setting') }}">
              <i data-feather="settings"></i><span>Website Setting</span>
            </a>
          </li>
          @endif
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>