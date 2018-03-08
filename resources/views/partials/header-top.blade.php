<!-- Top bar -->
<div class="top-bar">
  <div class="container">
    <div class="left-sec">
      <ul>
          <li>
                <span class="d-inline-block" tabindex="0" data-placement="bottom" data-toggle="tooltip" title="Gratis pengiriman ke seluruh Indonesia dengan belanja minimal Rp. 1.000.000,-. Maksimum 10Kg pertama atau Rp. 100.000,-">
               <i class="flaticon-delivery-truck-1"></i> Gratis Pengiriman*</span>
          </li>
          <li><a href="https://api.whatsapp.com/send?phone=6282160307043&text=Hi%20BJMS,%20saya%20mau%20bertanya" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
      </ul>
    </div>

    <div class="right-sec">
      <ul>
        <li><a href="{{(user()->login) ? route('customer.dashboard') : route('ecommerce.login') }}">{{(user()->login) ? 'Hi! ' . user()->name : 'Login/Register'}}</a></li>
        <li><a href="mailto:{{setting('ecommerce.email_address')}}">Email: {{setting('ecommerce.email_address')}}</a> </li>
        <li><a href="tel:{{setting('ecommerce.phone')}}">Phone: {{setting('ecommerce.phone')}}</a></li>
      </ul>
      <div class="social-top"> 
        @if(setting('social-media.facebook')) <a href="setting('social-media.facebook')"><i class="fa fa-facebook"></i></a> @endif
        @if(setting('social-media.twitter')) <a href="setting('social-media.twitter')"><i class="fa fa-twitter"></i></a> @endif
        @if(setting('social-media.instagram')) <a href="setting('social-media.instagram')"><i class="fa fa-instagram"></i></a> @endif
        @if(setting('social-media.youtube')) <a href="setting('social-media.youtube')"><i class="fa fa-youtube"></i></a> @endif
        
      </div>
    </div>
  </div>
</div>
