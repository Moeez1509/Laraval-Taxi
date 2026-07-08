<?php include('./partials/header.php') ?>

<section class="py-5 bg-light">
  <div class="container">

    <h2 class="text-center fw-bold mb-5" style="padding-top: 100px;">Questions & Answers</h2>

    <div class="accordion" id="faqAccordion">

      <!-- Item 1 -->
      <div class="accordion-item border-0 border-bottom form-group mb-4 shadow-sm p-4 rounded-5">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold "
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q1">
            How do I book a ride with GoTaxi?
          </button>
        </h2>
        <div id="q1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
           Simply download the GoTaxi app, enter your pickup and drop-off locations, choose your ride type, and confirm your booking. A nearby driver will be assigned to you instantly.
          </div>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="accordion-item border-0 border-bottom form-group mb-4 shadow-sm p-4 rounded-5">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold "
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q2">
            Can I schedule a ride in advance?
          </button>
        </h2>
        <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
           Yes! GoTaxi allows you to schedule rides ahead of time so you can plan your trips stress-free.
          </div>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="accordion-item border-0 border-bottom form-group mb-4 shadow-sm p-4 rounded-5">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-semibold "
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#q3">
            How do I become a GoTaxi driver?
          </button>
        </h2>
        <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
           Download the GoTaxi Driver app, upload your required documents (license, registration, ID), and once approved, you can start accepting rides.
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<?php include('./partials/footer.php') ?>