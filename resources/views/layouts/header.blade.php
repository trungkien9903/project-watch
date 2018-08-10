<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown account"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>Tài Khoản</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="register.html">Đăng ký</a></li>
                    <li><a href="login.html">Đăng nhập</a></li>
                  </ul>
                </li>
               <li title="My Account"><a href=""><i class="fa fa-sign-out" aria-hidden="true"></i>Thoát</a></li>
              </ul>
              <div class="search-box">
                <input class="input-text" placeholder="Tìm kiếm sản phẩm.." type="text">
                <button class="search-btn"><i class="fa fa-search"></i> </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-4 col-xs-6 header-left">
        <div class="shipping">
          <div class="shipping-img"></div>
          <div class="shipping-text">(+84) 000-1233<br>
            <span class="shipping-detail">24/7 Hỗ Trợ Online</span></div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-middle">
        <div class="header-middle-top">
          <div id="logo"> <a href="index-2.html"><img src="{{url('public')}}/frontend/image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-right">
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span class="cart-title">Giỏ Hàng</span><br>
          0 Item(VND) - $0.00</span> </button>
          <ul class="dropdown-menu pull-right cart-dropdown-menu">
            <li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{url('public')}}/frontend/image/product/7product50x59.jpg"></a></td>
                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                    <td class="text-right">x 1</td>
                    <td class="text-right">$254.00</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li>
              <div>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-right"><strong>Sub-Total</strong></td>
                      <td class="text-right">$210.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                      <td class="text-right">$2.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>VAT (20%)</strong></td>
                      <td class="text-right">$42.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Total</strong></td>
                      <td class="text-right">$254.00</td>
                    </tr>
                  </tbody>
                </table>
                <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav id="menu" class="navbar">
      <div class="nav-inner">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
          <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
          <ul class="main-navigation">
            <li><a href="index-2.html"   class="parent"  >Trang Chủ</a> </li>
            <li><a href="about-us.html" >Giới Thiệu</a></li>
            <li><a href="#" class="active parent">Thương Hiệu</a>
              <ul>
                <li><a href="category.html">foreach</a></li>
              </ul>
            </li>
            <li><a href="category.html"   class="parent"  >Đồng Hồ Nam</a> </li>
            <li><a href="category.html"   class="parent"  >Đồng Hồ Nữ</a> </li>
            <li><a href="category.html"   class="parent"  >Phụ Kiện Đồng Hồ</a> </li>
            <li><a href="blog.html" class="parent"  >Tin Tức</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>