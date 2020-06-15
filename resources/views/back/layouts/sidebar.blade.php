<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
<a href="{{route('index')}}" target="_blank" class="brand-link">
      <img src="{{asset('public/front/images/home/masudit-logo.gif')}}" alt="MasudIT Logo">
    </a>


<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('public/back/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
       
        @if (Session::get('name'))
        <a href="#Profile" class="d-block"> {{ Session::get('name') }} </a>
        @else
        <a href="#Profile" class="d-block"> Admin Name Here </a>
        @endif
 
        
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="{{route('dashboard')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            <!-- <i class="right fas fa-angle-left"></i> --> 
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Brands
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('addBrand')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Brand</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('viewBrands')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Brand</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Category
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('addCategory')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('viewCategories')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Categories</p>
              </a>
            </li>
          </ul>
        </li>



{{-- 
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Sub Categories
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/addSubcategory" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add SubCategory</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/viewSubcategories" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View SubCategories</p>
              </a>
            </li>
          </ul>
        </li> --}}





        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Sliders
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('addSlider')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Slider</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('viewSliders')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Slider</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Products
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('addProduct')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Product</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('viewProducts')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Products</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Order
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{route('viewOrders')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Orders</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Message
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('viewMessages')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Messages</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Admins
              <i class="fas fa-angle-left right"></i>
              
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('viewAdmins')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Admins</p>
              </a>
            </li>
          </ul>
        </li>




      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>

  
</aside>