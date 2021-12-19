  <?php
        use yii\helpers\Url;
  ?>
  
  <!--================ Start Header Menu Area =================--> 
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item"><a class="nav-link" href="index.html">Bosh sahifa</a></li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Do'kon</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="category.html">Do'kon toifasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-product.html">Blog tafsilotlari</a></li>
                  <li class="nav-item"><a class="nav-link" href="checkout.html">Mahsulotlarni tekshirish</a></li>
                  <li class="nav-item"><a class="nav-link" href="confirmation.html">Tasdiqlash</a></li>
                  <li class="nav-item"><a class="nav-link" href="cart.html">Xarid savati</a></li>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="<?=Url::to(['site/blog'])?>">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog tafsilotlari</a></li>
                </ul>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Sahifa</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Kirish</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Ro'hatdan o'tish</a></li>
                  <li class="nav-item"><a class="nav-link" href="tracking-order.html">Kuzatuv</a></li>
                </ul>
              </li>
              <li class="nav-item active"><a class="nav-link" href="contact.html">Aloqa</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><button><i class="ti-search"></i></button></li>
              <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle">3</span></button> </li>
              <li class="nav-item"><a class="button button-header" href="#">Hozir xarid qilish</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

