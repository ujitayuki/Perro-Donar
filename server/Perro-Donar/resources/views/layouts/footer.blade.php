    @section('footer')
      <div class="container pt-4 pt-md-5">
        <div id="footer-sns" class="row align-items-center border-bottom">
          <div class="col-6 col-lg-3 pb-4">
            <a href="#" target="_blank" rel="nofollow" class="d-flex align-items-center"><img src="img/facebook.png"
                alt="Official Facebook Page"><span>Official Facebook </span></a>
          </div>
          <div class="col-6 col-lg-3 pb-4">
            <a href="#" target="_blank" rel="nofollow" class="d-flex align-items-center"><img
                src="img/titter.png" alt="Official Twitter"><span>Official Twitter</span></a>
          </div>
          <div class="col-6 col-lg-3 pb-4">
            <a href="#" target="_blank" rel="nofollow" class="d-flex align-items-center"><img src="img/youtube.png"
                alt="Official LINE"><span>Official Youtube</span></a>
          </div>
          <div class="col-6 col-lg-3 pb-4">
            <a href="#" target="_blank" rel="nofollow" class="d-flex align-items-center"><img src="img/instagulam.png"
                alt="Official Instagram"><span>Official Instagram</span></a>
          </div>
    
        </div><!-- .row -->
    
        <div id="footer-index" class="row pt-4">
          <ul class="col list-unstyled">
            <li>
            <li><a href="#">MENU</a></li>
            <ul class="list-unstyled">
              <li><a href="{{ route('about') }}">ぺろドナとは？</a></li>
              <li><a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">お問い合わせ</a></li>
              <li><a href="{{ route('news') }}">ペットニュース</a></li>
              <li><a href="#">ご利用ガイド</a></li>
            </ul>
            </li>
          </ul>
    
          <ul class="col list-unstyled">
            <li>
            <li><a href="#">MENU</a></li>
            <ul class="list-unstyled">
              <li><a href="#">愛犬を掲載する</a></li>
              <li><a href="#">お気に入り</a></li>
              <!-- <li><a href="#">SUBMENU</a></li> -->
            </ul>
            </li>
          </ul>
    
          <ul class="col list-unstyled">
            <li>
            <li><a href="#">MENU</a></li>
            <ul class="list-unstyled">
              <li><a href="#">利用規約</a></li>
              <li><a href="{{ route('commercial') }}">特定商取引に基ずく表記</a></li>
              <li><a href="#">プライバシーポリシー</a></li>
            </ul>
            </li>
          </ul>
        </div><!-- /.footer-index -->
    
        <div id="footer-logo" class="mt-2 mt-sm-4">
          <div class="text-center d-sm-flex align-items-sm-center">
            <a class="mr-4" href="index.html"><img src="img/header.logo1.png" alt="ぺろドナ" height="50"></a>
            <p class="mb-0">好きなわんちゃんのスポンサーになろう</p>
          </div>
          <div style="text-align:right">
            <img src="../img/dog-img/ボストンテリア.png" width="300" height="200" alt="ボストンテリア">
          </div>
        </div><!-- .row -->
      </div><!-- .container -->
    @endsection  