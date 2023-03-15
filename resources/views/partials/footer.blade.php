<footer>
    <section>
        <div class="container">
            <ul class="shop-menu-items">
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    DIGITAL COMICS
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    DIGITAL MERCHANDISE
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    SUBSCRIPTION
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                </a>
                <a href="#" class="title">
                    COMIC SHOP LOCATOR
                </a>
              </li>
              <li>
                <a href="#" class="img">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                </a>
                <a href="#" class="title">
                  DC POWER VISA
                </a>
              </li>
            </ul>
        </div>
    </section>


    <div class="footer-top">
        <div class="container">
          <div class="list1">
            <h3>
              DC COMICS
            </h3>
            <ul>
              <li v-for="item in listItems1">
                <a href="#">Characters</a>
              </li>
              <li v-for="item in listItems1">
                <a href="#">Comics</a>
              </li>
              <li v-for="item in listItems1">
                <a href="#">Movies</a>
              </li>
              <li v-for="item in listItems1">
                <a href="#">Games</a>
              </li>
              <li v-for="item in listItems1">
                <a href="#">Videos</a>
              </li>
              <li v-for="item in listItems1">
                <a href="#">News</a>
              </li>
            </ul>
            <h3>
              SHOP
            </h3>
            <ul>
              <li v-for="item in listItems2">
                <a href="#">Shop DC</a>
              </li>
              <li v-for="item in listItems2">
                <a href="#">Shop DC collectibles</a>
              </li>
            </ul>
          </div>

          <div class="list2">
            <h3>
              DC
            </h3>
            <ul>
              <li v-for="item in listItems3">
                <a href="#">Terms Of Use</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">Privacy policy (new)</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">Ad Choises</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">Advertising</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">jobs</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">Subscription</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">Talent Workshop</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">CPSC Certificates</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">Ratings</a>
              </li>
              <li v-for="item in listItems3">
                <a href="#">Contact Us</a>
              </li>
            </ul>
          </div>

          <div class="list3">
            <h3>
              SITES
            </h3>
            <ul>
              <li v-for="item in listItems4">
                <a href="#">DC</a>
              </li>
              <li v-for="item in listItems4">
                <a href="#">MAD Magazine</a>
              </li>
              <li v-for="item in listItems4">
                <a href="#">DC Kids</a>
              </li>
              <li v-for="item in listItems4">
                <a href="#">DC Universe</a>
              </li>
              <li v-for="item in listItems4">
                <a href="#">DC Power Visa</a>
              </li>
            </ul>
          </div>
        </div>
        {{-- <div class="container">
            <p>
                All site content TM and 2020 DC Entertaiment, unless otherwise
                <a href="#">noted here</a>.
                All rights reserved.
                <a href="#">Cookies Setting</a>
            </p>
        </div> --}}
      </div>
      
      <div class="footer-bottom">
        <div class="container">
          <div class="call-to-action">
            <button>
              SIGN-UP NOW!
            </button>
          </div>
          <div class="social">
            <h3>
              <a href="#">FOLLOW US</a> 
            </h3>
            <ul>
              <li v-for="icon in socialIcons">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="">
                </a>
              </li>
              <li v-for="icon in socialIcons">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="">
                </a>
              </li>
              <li v-for="icon in socialIcons">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="">
                </a>
              </li>
              <li v-for="icon in socialIcons">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                </a>
              </li>
              <li v-for="icon in socialIcons">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="">
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>

</footer>