
    <!-- Clients img -->
    <section class="light-gry-bg clients-img">
      <div class="container owl-theme">
        <ul class="footer-brand owl-carousel owl-theme">
          @foreach (product_brands() as $brand)
            <li><img src="{{url($brand->icon)}}" alt="" style="width: 280px !important;height: 122px !important;"></li>
          @endforeach

        </ul>
      </div>
    </section>

    <!-- Newslatter -->
    <section class="newslatter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" placeholder="Your email address here...">
              <button type="submit">Subscribe!</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">

        <!-- Contact -->
        <div class="col-md-3">
          <h4>Contact Us</h4>
          <p> {!! setting('ecommerce.office_address_1') !!} </p>
          <p> {!! setting('ecommerce.office_address_2') !!} </p>

          <div class="social-links"> 
            @if(setting('social-media.facebook')) <a href="setting('social-media.facebook')"><i class="fa fa-facebook"></i></a> @endif
            @if(setting('social-media.twitter')) <a href="setting('social-media.twitter')"><i class="fa fa-twitter"></i></a> @endif
            @if(setting('social-media.instagram')) <a href="setting('social-media.instagram')"><i class="fa fa-instagram"></i></a> @endif
            @if(setting('social-media.youtube')) <a href="setting('social-media.youtube')"><i class="fa fa-youtube"></i></a> @endif
          </div>

        </div>

        <!-- Categories -->
        <div class="col-md-3">
          <h4>Categories</h4>
          <ul class="links-footer">
            @foreach(product_categories() as $category)
              <li><a href="{{$category->slug}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </div>

        

        <!-- Categories -->
        <div class="col-md-3">
          <h4>Information</h4>
          <ul class="links-footer">
            <li><a href="#.">Our Blog</a></li>
            <li><a href="#."> About Our Shop</a></li>
            <li><a href="#."> Secure Shopping</a></li>
            <li><a href="#."> Delivery infomation</a></li>
            <li><a href="#."> Store Locations</a></li>
            <li><a href="#."> FAQs</a></li>
          </ul>
        </div>

        <!-- Categories -->
        <div class="col-md-3">
          <h4>Partners</h4>
          <ul class="list-link-partner">
            <li style="background-image: url(http://kolanza.id/media/ATM-BERSAMA.gif);"></li>
            <li style="background-image: url(http://kolanza.id/media/BCA.gif);"></li>
            <li style="background-image: url(http://kolanza.id/media/DOLU-WALLET.gif);"></li>
            <li style="background-image: url(http://kolanza.id/media/MASTERCARD-SECURECODE.gif);"></li>
            <li style="background-image: url(http://kolanza.id/media/VERIFIED-VISA.gif);"></li>
            <li style="background-image: url(http://kolanza.id/media/visa.png);"></li>
            <li style="background-image: url(http://kolanza.id/media/MASTERCARD.gif);"></li>
          </ul>
        </div>

      </div>
    </div>
  </footer>

  <!-- Rights -->
  <div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <p>Copyright © 2018 BJMS ONLINE. Made by <a href="#." class="ri-li"> Procyon.co.id </a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- End Footer -->
