<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="/backend/dist/img/logo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="border-radius: 0;">
        <span class="brand-text font-weight-light">SHOP WORLD</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            {{-- <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-camera-retro"></i>
                <p>
                  Thư viện
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>
                  Bài viết
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('posts.index')}}" class="nav-link">
                    <p>Tất cả bài viết</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('posts.create')}}" class="nav-link">
                    <p>Thêm mới</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="{{route('products.index')}}" class="nav-link">
                <i class="nav-icon fas fa-archive"></i>
                <p>
                  Sản phẩm
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('products.index')}}" class="nav-link">
                    <p>Tất cả sản phẩm</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('products.create')}}" class="nav-link">
                    <p>Thêm mới</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('categories.index')}}" class="nav-link">
                    <p>Danh mục mục</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Thành viên
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('users.index')}}" class="nav-link">
                    <p>Tất cả thành viên</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('users.create')}}" class="nav-link">
                    <p>Thêm mới</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                  Đơn hàng
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <p>Danh sách đơn hàng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <p>Tạo mới đơn hàng</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-trademark"></i>
                <p>
                  Thương hiệu
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('trademarks.index')}}" class="nav-link">
                    <p>Danh sách thương hiệu</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('trademarks.create')}}" class="nav-link">
                    <p>Tạo mới thương hiệu</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item has-treeview">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                  {{ __('Logout') }}
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>

            <li class="nav-header">MISCELLANEOUS</li>
            <li class="nav-item">
              <a href="https://adminlte.io/docs/3.0" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Documentation</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>