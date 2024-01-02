<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/FootballTK.gif') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="http://localhost/WEB/chamaleakhai0027_cdtt/public/admin/user" class="d-block">Thiên Khải</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
          data-accordion="false">
          <!-- sản phẩm -->
          <li class="nav-item">
              <a href="#" class="nav-link">
                <span style="letter-spacing: 18px;">
                <i class="fa-solid fa-bars-progress fa-fw "></i>  
                 </span>
                  <p>
                      Danh mục quản lý
                      <i class="fas fa-angle-left right"></i>

                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('category.index') }}" class="nav-link">
                    <div class="container">
                        <span style="letter-spacing: 7px;">
                            <i class="fa fa-icon"></i>
                            <i class="fa-solid fa-clipboard-list"></i>
                        </span>
                          <p>Danh mục</p>
                    </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('brand.index') }}" class="nav-link">
                    <div class="container">
                        <span style="letter-spacing: 7px;">
                            <i class="fa fa-icon"></i>
                            <i class="fa-solid fa-trademark"></i>
                        </span>
                          <p>Thương hiệu</p>
                    </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('product.index') }}" class="nav-link">
                    <div class="container">
                        <span style="letter-spacing: 7px;">
                            <i class="fa fa-icon"></i>
                            <i class="fa-brands fa-product-hunt"></i>
                        </span>
                          <p>Sản phẩm</p>
                    </div>
                      </a>
                  </li>


              </ul>
          </li>
          {{-- order --}}
          <li class="nav-item">
              <a href="#" class="nav-link">
                <span style="letter-spacing: 19px;">
                <i class="fa-solid fa-file-invoice-dollar fa-fw"></i>
                </span>
                  <p>
                       Hóa đơn
                      <i class="fas fa-angle-left right"></i>

                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('order.index') }}" class="nav-link">
                    <div class="container">
                        <span style="letter-spacing: 7px;">
                            <i class="fa fa-icon"></i>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                          <p>Đơn hàng</p>
                    </div>
                      </a>
                  </li>
                  



              </ul>
          </li>

          {{-- pages --}}
          <li class="nav-item">
              <a href="#" class="nav-link">
                <span style="letter-spacing: 10px;">
                  <i class="nav-icon fas fa-book"></i>
                </span>
                  <p>
                      Phân trang
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('topic.index') }}" class="nav-link">
                    <div class="container">
                        <span style="letter-spacing: 7px;">
                            <i class="fa fa-icon"></i>
                            <i class="fa-regular fa-bookmark"></i>
                        </span>
                            <p>Đề tài</p>
                    </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('post.index') }}" class="nav-link">
                    <div class="container">
                        <span style="letter-spacing: 7px;">
                            <i class="fa fa-icon"></i>
                            <i class="fa-solid fa-file-pen"></i>
                        </span>
                          <p>Bài viết</p>
                    </div>
                      </a>
                  </li>
                 

              </ul>
          </li>
          {{-- user --}}
          <li class="nav-item">
              <a href="#" class="nav-link">
                <span style="letter-spacing: 10px;">
                  <i class="fa-solid fa-users-between-lines"></i>
                </span>
                  <p>
                      Danh mục hội viên
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">

                      <a href="{{ route('user.index') }}" class="nav-link">
                        <div class="container">
                         <span style="letter-spacing: 9px;">
                            <i class="fa fa-icon"></i>
                             <i class="fa-regular fa-address-card fa-fw"></i>
                         </span>
                                <p>Thành viên</p>
                        </div>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('customer.index') }}" class="nav-link">
                        <div class="container">
                         <span style="letter-spacing: 9px;">
                            <i class="fa fa-icon"></i>
                             <i class="fa-solid fa-user-plus"></i>
                         </span>
                                <p>Khách hàng</p>
                        </div>
                      </a>
                  </li>              
              </ul>
          </li>
        {{-- slider --}}
          <li class="nav-item">
              <a href="{{ route('slider.index') }}" class="nav-link">
                <span style="letter-spacing: 10px;">
                  <i class="nav-icon far fa-image"></i>
                </span>
                  <p>
                      Slider
                  </p>
              </a>
          </li>

        {{-- slider --}}
          <li class="nav-item">
              <a href="{{ route('menu.index') }}" class="nav-link">
                <span style="letter-spacing: 10px;">
                    <i class="fa-regular fa-rectangle-list"></i>                
                </span>
                  <p>
                      Menu
                  </p>
              </a>
          </li>

        {{-- contact --}}
          <li class="nav-item">
              <a href="{{ route('contact.index') }}" class="nav-link">
                <span style="letter-spacing: 10px;">
                    <i class="fa-regular fa-address-book"></i>                
                </span>
                  <p>
                      Liên hệ
                  </p>
              </a>
          </li>
        {{-- page --}}
          <li class="nav-item">
              <a href="{{ route('page.index') }}" class="nav-link">
                <span style="letter-spacing: 10px;">
                    <i class="fa-solid fa-pager"></i>               
                </span>
                  <p>
                      Trang đơn
                  </p>
              </a>
          </li>

  
        
      </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>