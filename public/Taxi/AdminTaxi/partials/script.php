<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    let map;
    let marker;

    // =============================
    // GOOGLE MAP INIT
    // =============================
    function initMap() {
        const defaultLocation = { lat: 33.6007, lng: 73.0679 };

        const mapElement = document.getElementById("gmaps-basic");

        if (mapElement) {
            map = new google.maps.Map(mapElement, {
                zoom: 12,
                center: defaultLocation,
            });

            marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
            });

            const input = document.getElementById("searchInput");

            if (input) {
                const autocomplete = new google.maps.places.Autocomplete(input);

                autocomplete.addListener("place_changed", function () {
                    const place = autocomplete.getPlace();

                    if (!place.geometry) return;

                    map.setCenter(place.geometry.location);
                    map.setZoom(15);

                    marker.setPosition(place.geometry.location);
                });
            }
        }

        // Google map ke baad heatmap bhi init karo
        initHeatmap();
    }


    // =============================
    // LEAFLET HEATMAP INIT
    // =============================
    function initHeatmap() {
        const heatmapContainer = document.getElementById("jobHeatmap");

        if (!heatmapContainer) return;

        const heatmap = L.map("jobHeatmap", {
            zoomControl: true
        }).setView([20, 20], 2);

        L.tileLayer("https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png", {
            attribution: "&copy; OpenStreetMap contributors &copy; CARTO"
        }).addTo(heatmap);

        const locations = [
            { lat: 37.7749, lng: -122.4194, color: "#6f42c1", size: 12 },
            { lat: 40.7128, lng: -74.0060, color: "#28a745", size: 10 },
            { lat: 51.5074, lng: -0.1278, color: "#dc3545", size: 20 },
            { lat: 24.8607, lng: 67.0011, color: "#e83e8c", size: 16 },
            { lat: 31.5204, lng: 74.3587, color: "#28a745", size: 10 },
            { lat: -1.2921, lng: 36.8219, color: "#28a745", size: 8 },
            { lat: 6.5244, lng: 3.3792, color: "#28a745", size: 8 },
            { lat: 25.2769, lng: 55.2962, color: "#28a745", size: 8 },
            { lat: 14.5995, lng: 120.9842, color: "#28a745", size: 8 }
        ];

        locations.forEach(location => {
            L.circleMarker([location.lat, location.lng], {
                radius: location.size,
                fillColor: location.color,
                color: "#ffffff",
                weight: 2,
                opacity: 1,
                fillOpacity: 0.8
            }).addTo(heatmap);
        });
    }
    
        
const findChildOptionsForToggle = (toggle) => {
  const dFlex = toggle.closest('.d-flex');

  // Pattern: toggle row then the child-options as next sibling (common in `.section`)
  if (dFlex && dFlex.nextElementSibling && dFlex.nextElementSibling.classList.contains('child-options')) {
    return dFlex.nextElementSibling;
  }

  // Pattern: toggle is inside a column; the next column (or next block) holds child-options
  const col = toggle.closest('[class*="col-"]');
  if (col && col.nextElementSibling) {
    if (col.nextElementSibling.classList.contains('child-options')) return col.nextElementSibling;
    const nested = col.nextElementSibling.querySelector?.('.child-options');
    if (nested) return nested;
  }

  // Pattern: toggle row and child-options are direct children of the same parent
  const parent = dFlex?.parentElement;
  const directChild = parent?.querySelector?.(':scope > .child-options');
  if (directChild) return directChild;

  // Fallback: within a local wrapper, but ONLY direct child to avoid cross-toggle interference
  const container = toggle.closest('.section') || toggle.closest('.card');
  const scopedChild = container?.querySelector?.(':scope > .child-options');
  if (scopedChild) return scopedChild;

  return null;
};

const initMainToggles = () => {
  document.querySelectorAll('.main-toggle').forEach(toggle => {
    const child = findChildOptionsForToggle(toggle);
    if (!child) return;

    const applyVisibility = () => {
      child.style.display = toggle.checked ? '' : 'none';
    };

    applyVisibility(); // initial state
    toggle.addEventListener('change', applyVisibility);
  });
};

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initMainToggles);
} else {
  initMainToggles();
}

</script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
 
<script>
  const initIntlTelInput = (input) => {
    if (!input || !window.intlTelInput) return;
    if (input.dataset.itiInitialized === "1") return;

    window.intlTelInput(input, {
      initialCountry: "pk",
      separateDialCode: true,
      nationalMode: false,
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"
    });

    input.dataset.itiInitialized = "1";
  };

  const inputs = document.querySelectorAll('input[data-intl-phone="1"]');
  if (inputs.length) {
    inputs.forEach(initIntlTelInput);
  } else {
    initIntlTelInput(document.querySelector("#phone"));
  }
</script>
    <script id="fix-collapse">
document.querySelectorAll('.collapse').forEach(collapseEl => {

  collapseEl.addEventListener('show.bs.collapse', function () {
    let btn = document.querySelector(`[data-bs-target="#${this.id}"]`);
    if (btn) btn.textContent = '−';
  });

  collapseEl.addEventListener('hide.bs.collapse', function () {
    let btn = document.querySelector(`[data-bs-target="#${this.id}"]`);
    if (btn) btn.textContent = '+';
  });

});
</script>

<!-- Google Maps -->
<script
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyC3z8kIn3DsST3z6k9uFM4Cjzx1zoE_clk&libraries=places&callback=initMap"
    async defer></script>
<script src="assets/js/vendor.min.js"></script>
<script src="assets/js/app.js"></script> <!-- Jquery Sparkline Chart -->
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script> <!-- Jquery-knob Chart Js-->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="assets/libs/jquery-knob/jquery.knob.min.js"></script> <!-- Morris Chart Js-->
<script src="assets/libs/morris.js/morris.min.js"></script>
<script src="assets/libs/raphael/raphael.min.js"></script> <!-- Dashboard init-->
<script src="assets/js/pages/dashboard.js"></script>

