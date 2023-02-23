<footer>
    <div class="container-fluid dc-background">
      <div class="container flex flex-between text-white">
        <div class="flex lists-container">
          <div>
            <div>
              <h3>DC COMICS</h3>
              <ul>
                <li>Characters</li>
                <li>Comics</li>
                <li>Movies</li>
                <li>Tv</li>
                <li>Games</li>
                <li>Videos</li>
                <li>News</li>
              </ul>
            </div>
            <div>
              <h3>SHOP</h3>
              <ul>
                <li>Shop DC</li>
                <li>Shop DC Collectibles</li>
              </ul>
            </div>
          </div>
          <div>
            <h3>DC</h3>
            <ul>
              <li>Terms Of Use</li>
              <li>Privacy policy(New)</li>
              <li>Ad Choices</li>
              <li>Advertising</li>
              <li>Jobs</li>
              <li>Subscriptions</li>
              <li>Talent Workshop</li>
              <li>CPSC Certificates</li>
              <li>Ratings</li>
              <li>Shop Help</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div>
            <h3>SITES</h3>
            <ul>
              <li>DC</li>
              <li>MAD Magazine</li>
              <li>DC Kids</li>
              <li>DC Universe</li>
              <li>DC Power Visa</li>
            </ul>
          </div>
        </div>
        <div class="dc-logo-bg">
        </div>
      </div>
    </div>
    <div class="container-fluid bg-lightblack">
        <div class="container flex flex-between">
          <button>SIGN-UP NOW</button>
          <div class="flex media-container">
            <div class="flex flex-align-center">
              <span>FOLLOW US</span>
            </div>
            <div class="flex flex-align-center gap-1">
              @foreach($socials as $social)
                <img src="{{Vite::asset('resources/images/footer-'.$social).'.png'}}" alt="Image not found">
              @endforeach
            </div>
          </div>
        </div>
    </div>
  </footer>