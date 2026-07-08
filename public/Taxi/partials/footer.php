<footer id="footer" class="footer bg-light">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">QuickRide</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Book Ride</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Pricing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About Us</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Support</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Help Center</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Safety Guidelines</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Driver Registration</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">FAQs</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Your trusted local ride partner for fast, reliable, and affordable taxi service.</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">QuickRide</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by Your Local Ride Partner
      </div>
    </div>

  </footer>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script>
// ================= GLOBAL =================
let map;
let marker;
let selectedField = "";
let searchAutocomplete;
let liveMap;
let liveMarker;

// ================= INPUT AUTOCOMPLETE =================
function initAutocomplete() {

  const pickupInput = document.getElementById("pickup");
  const dropoffInput = document.getElementById("dropoff");

  if (!pickupInput || !dropoffInput) return;

  const pickupAuto = new google.maps.places.Autocomplete(pickupInput, {
    componentRestrictions: { country: "pk" }
  });

  const dropoffAuto = new google.maps.places.Autocomplete(dropoffInput, {
    componentRestrictions: { country: "pk" }
  });

  pickupAuto.addListener("place_changed", function () {
    const place = pickupAuto.getPlace();
    if (!place.geometry) return;

    document.getElementById("pickup_lat").value = place.geometry.location.lat();
    document.getElementById("pickup_lng").value = place.geometry.location.lng();
  });

  dropoffAuto.addListener("place_changed", function () {
    const place = dropoffAuto.getPlace();
    if (!place.geometry) return;

    document.getElementById("dropoff_lat").value = place.geometry.location.lat();
    document.getElementById("dropoff_lng").value = place.geometry.location.lng();
  });
}

// ================= DASHBOARD MAP (Passenger) =================
function initDashboardMap() {
  const mapEl = document.getElementById("gmaps-basic");
  if (!mapEl || typeof google === "undefined" || !google.maps) return;

  const defaultLocation = { lat: 33.6844, lng: 73.0479 };

  liveMap = new google.maps.Map(mapEl, {
    center: defaultLocation,
    zoom: 13,
    mapTypeControl: false,
    streetViewControl: false
  });

  liveMarker = new google.maps.Marker({
    position: defaultLocation,
    map: liveMap,
    icon: {
      url: "https://maps.google.com/mapfiles/ms/icons/red-dot.png"
    }
  });

  const searchInput = document.getElementById("searchInput");
  if (searchInput) {
    const liveAutocomplete = new google.maps.places.Autocomplete(searchInput, {
      componentRestrictions: { country: "pk" }
    });

    liveAutocomplete.addListener("place_changed", function () {
      const place = liveAutocomplete.getPlace();
      if (!place.geometry) return;

      const location = place.geometry.location;
      liveMap.setCenter(location);
      liveMap.setZoom(15);
      liveMarker.setPosition(location);
    });
  }
}

// ================= OPEN MAP =================
function openMap(field) {
  selectedField = field;

  const modalEl = document.getElementById('mapModal');
  const modal = new bootstrap.Modal(modalEl);
  modal.show();

  modalEl.addEventListener('shown.bs.modal', function () {
    initMap();
  }, { once: true });
}

// ================= INIT MAP =================
function initMap() {

  const defaultLocation = { lat: 33.6844, lng: 73.0479 };

  map = new google.maps.Map(document.getElementById("map"), {
    center: defaultLocation,
    zoom: 13
  });

  // 🔥 CUSTOM MARKER
  marker = new google.maps.Marker({
    position: defaultLocation,
    map: map,
    draggable: true,
    icon: {
      url: "https://maps.google.com/mapfiles/ms/icons/red-dot.png"
    }
  });

  // 🔥 SEARCH BOX
  const input = document.getElementById("mapSearch");

  if (input) {
    searchAutocomplete = new google.maps.places.Autocomplete(input, {
      componentRestrictions: { country: "pk" }
    });

    searchAutocomplete.addListener("place_changed", function () {
      const place = searchAutocomplete.getPlace();
      if (!place.geometry) return;

      const location = place.geometry.location;

      map.setCenter(location);
      map.setZoom(15);
      marker.setPosition(location);

      // 🔥 AUTO FILL FIELD
      const address = place.formatted_address;

      document.getElementById(selectedField).value = address;
      document.getElementById(selectedField + "_lat").value = location.lat();
      document.getElementById(selectedField + "_lng").value = location.lng();
    });
  }

  // 🔥 CLICK MAP → MOVE PIN
  map.addListener("click", function (e) {
    marker.setPosition(e.latLng);
  });

  // 🔥 FIX MODAL ISSUE
  google.maps.event.trigger(map, "resize");
  map.setCenter(defaultLocation);
}

// ================= CONFIRM LOCATION =================
function confirmLocation() {

  if (!marker) return;

  const lat = marker.getPosition().lat();
  const lng = marker.getPosition().lng();

  const geocoder = new google.maps.Geocoder();

  geocoder.geocode({ location: { lat, lng } }, function (results, status) {

    if (status === "OK" && results[0]) {

      const address = results[0].formatted_address;

      document.getElementById(selectedField).value = address;
      document.getElementById(selectedField + "_lat").value = lat;
      document.getElementById(selectedField + "_lng").value = lng;

      bootstrap.Modal.getInstance(document.getElementById('mapModal')).hide();

      // OPTIONAL (fare calc)
      if (typeof calculateDistanceAndFare === "function") {
        calculateDistanceAndFare();
      }
    }
  });
}

// ================= GOOGLE CALLBACK =================
function initGoogleMaps() {
  initAutocomplete();
  initDashboardMap();
}
window.initGoogleMaps = initGoogleMaps;

</script>
<script defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3z8kIn3DsST3z6k9uFM4Cjzx1zoE_clk&libraries=places&callback=initGoogleMaps">
</script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
 
</body>
</html>
