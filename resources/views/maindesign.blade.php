<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taxi</title>

    <!-- Favicons -->
    <link href="Taxi/assets/img/favicon.png" rel="icon">
    <link href="Taxi/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="Taxi/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Taxi/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="Taxi/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="Taxi/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="Taxi/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <style>
        .pac-container {
            z-index: 9999 !important;
        }
    </style>
    <link href="Taxi/assets/css/main.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="branding d-flex align-items-center  fixed-top bg-light">

            <div class="container position-relative d-flex align-items-center justify-content-between ">

                <a href="index.php" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="Taxi/assets/img/logo.png" alt="">
                    <h1 class="sitename">Quick Ride</h1>
                </a>
                <nav id="navmenu" class="navmenu flex-grow-1  justify-content-center">
                    <ul class="justify-content-center">
                        @if (Auth::check() && Auth::user()->role === 'passenger')
                            <!-- 🧍 Passenger -->
                            <li><a href="{{ route('passenger_dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('profile') }}">Profile</a></li>
                            <li><a href="{{ route('ride_history') }}">Ride History</a></li>
                            <li><a href="{{ route('upcoming_jobs') }}">Upcoming Jobs</a></li>
                            <li><a href="{{ route('coupons') }}">Coupons</a></li>
                            <li><a href="{{ route('mywallet') }}">My Wallet</a></li>
                            <li><a href="{{ route('card') }}">Card</a></li>
                            <li><a href="{{ route('manage_account') }}">Manage Account</a></li>
                            @elseif (Auth::check() && Auth::user()->role === 'driver')
                            <!-- 🚗 Driver -->
                            <li><a href="{{ route('driver_home') }}">Home</a></li>

                            <li><a href="{{ route('driver_history') }}">History</a></li>
                            <li><a href="{{ route('manage_cards') }}">Manage Cards</a></li>
                            <li><a href="{{ route('manage_vehicle') }}">Manage Vehicle</a></li>
                            <li><a href="{{ route('manage_document') }}">Manage Documents</a></li>
                            <li><a href="{{ route('payout_setting') }}">Payout Settings</a></li>
                            <li><a href="{{ route('myprofile') }}">My Profile</a></li>
                        @else
                            <li><a href="{{ route('dashboard') }}">Home</a></li>
                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('faqs') }}">FAQs</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>

                    </ul>

                </nav>

                @endif
                @if (Auth::check())
                    <div class="rounded-circle border border-primary d-flex align-items-center justify-content-center overflow-hidden"
                        style="width: 40px; height: 40px;">

                        <img src="#" class="w-100 h-100 object-fit-cover" alt="Profile image">
                    </div>

                    <!-- Log out -->
                    <div class="list-inline-item logout">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')" class="btn btn-success"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                @else
                    <a class="btn btn-primary" href="{{ route('register') }}">Sign Up</a>
                    <a class="ms-2" href="{{ route('login') }}">Login</a>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                @endif

            </div>

        </div>
    </header>
    @yield('aboutus')
    @yield('dashboard')
    @yield('blogs')
    @yield('faqs')
    @yield('contact')
    @yield('passenger_dashboard')
    @yield('profile')
    @yield('ride_history')
    @yield('upcoming_jobs')
    @yield('coupons')
    @yield('mywallet')
    @yield('card')
    @yield('manage_account')
    @yield('driver_home')
    @yield('driver_history')
    @yield('manage_cards')
    @yield('manage_vehicle')
    @yield('manage_document')
    @yield('payout_setting')
    @yield('myprofile')
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
            <p>© <span>Copyright</span> <strong class="px-1 sitename">QuickRide</strong> <span>All Rights
                    Reserved</span></p>
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
    <script src="taxi/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="taxi/assets/vendor/php-email-form/validate.js"></script>
    <script src="taxi/assets/vendor/aos/aos.js"></script>
    <script src="taxi/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="taxi/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="taxi/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="taxi/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="taxi/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="taxi/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
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
                componentRestrictions: {
                    country: "pk"
                }
            });

            const dropoffAuto = new google.maps.places.Autocomplete(dropoffInput, {
                componentRestrictions: {
                    country: "pk"
                }
            });

            pickupAuto.addListener("place_changed", function() {
                const place = pickupAuto.getPlace();
                if (!place.geometry) return;

                document.getElementById("pickup_lat").value = place.geometry.location.lat();
                document.getElementById("pickup_lng").value = place.geometry.location.lng();
            });

            dropoffAuto.addListener("place_changed", function() {
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

            const defaultLocation = {
                lat: 33.6844,
                lng: 73.0479
            };

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
                    componentRestrictions: {
                        country: "pk"
                    }
                });

                liveAutocomplete.addListener("place_changed", function() {
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

            modalEl.addEventListener('shown.bs.modal', function() {
                initMap();
            }, {
                once: true
            });
        }

        // ================= INIT MAP =================
        function initMap() {

            const defaultLocation = {
                lat: 33.6844,
                lng: 73.0479
            };

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
                    componentRestrictions: {
                        country: "pk"
                    }
                });

                searchAutocomplete.addListener("place_changed", function() {
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
            map.addListener("click", function(e) {
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

            geocoder.geocode({
                location: {
                    lat,
                    lng
                }
            }, function(results, status) {

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const transportRadio = document.getElementById('request_transportation');
            const deliveryRadio = document.getElementById('request_delivery');
            const deliveryFields = document.getElementById('deliveryFields');
            const dropoffNameInput = document.querySelector('input[name="dropoff_name"]');
            const dropoffPhoneInput = document.querySelector('input[name="dropoff_phone"]');

            if (!transportRadio || !deliveryRadio || !deliveryFields) return;

            function updateDeliveryFields() {
                const isDelivery = deliveryRadio.checked;
                deliveryFields.style.display = isDelivery ? '' : 'none';

                if (dropoffNameInput) dropoffNameInput.required = isDelivery;
                if (dropoffPhoneInput) dropoffPhoneInput.required = isDelivery;
            }

            transportRadio.addEventListener('change', updateDeliveryFields);
            deliveryRadio.addEventListener('change', updateDeliveryFields);
            updateDeliveryFields();
        });
    </script>
</body>

</html>
