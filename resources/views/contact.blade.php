@extends('maindesign')
@section('contact')
@if(session('success'))

<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 rounded-4">

            <div class="modal-body text-center p-5">

                <div class="mb-4">
                    <i class="fa fa-check-circle text-success" style="font-size:70px;"></i>
                </div>

                <h3 class="fw-bold">Thank You!</h3>

                <p class="text-muted mt-3">
                    {{ session('success') }}
                </p>

                <button
                    type="button"
                    class="btn btn-primary px-5 mt-3"
                    data-bs-dismiss="modal"
                >
                    OK
                </button>

            </div>

        </div>

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    var modal = new bootstrap.Modal(
        document.getElementById('successModal')
    );

    modal.show();

});
</script>

@endif
    <!-- 🔥 PAGE HEADER -->
    <section class="bg-light text-center py-5 ">
    <div class="container" style="padding-top: 100px;">

        <h2 class="fw-bold">#let's_talk</h2>
        <p class="text-muted">Leave a message, we love to hear from you!</p>
    </div>
</section>
<!-- 🔥 CONTACT + MAP -->
<section class="container py-5">
    <div class="row g-4 align-items-start">

        <!-- LEFT SIDE -->
        <div class="col-md-6">
            <span class="fw-bold">Ride Availability:</span>
            <p class="text-muted">24/7 via the Gotaxi app</p>

            <span class="fw-bold">Office Hours (Business Enquiries Only)</span>
            <p class="text-muted">
                Monday – Friday: 08:00 – 17:00 Closed weekends & public holidays
            </p>

            <h6 class="fw-bold mb-3">
                At Gotaxi, we’re committed to building safer, smarter transport solutions...
            </h6>

            <h5 class="fw-bold mb-3">Head Office</h5>

            <ul class="list-unstyled mt-3">
                <li class="mb-2"><i class="fa fa-map me-2"></i>Rawalpindi, Pakistan</li>
                <li class="mb-2"><i class="fa fa-envelope me-2"></i>email@gmail.com</li>
                <li class="mb-2"><i class="fa fa-phone me-2"></i>+92-000-000000</li>
                <li class="mb-2"><i class="fa fa-clock me-2"></i>Mon-Sat: 9AM - 4PM</li>
            </ul>
        </div>

        <!-- RIGHT SIDE (FORM) -->
        <div class="form-group mb-4 shadow-sm p-4 rounded-5 col-md-6">
            <form method="POST" action="{{ route('contact.store') }}">
    @csrf

    <input
        class="form-control mb-3"
        type="text"
        name="name"
        placeholder="Your Name"
        required
    >

    <input
        class="form-control mb-3"
        type="email"
        name="email"
        placeholder="Email"
        required
    >

    <input
        class="form-control mb-3"
        type="text"
        name="subject"
        placeholder="Subject"
        required
    >

    <textarea
        class="form-control mb-3"
        rows="5"
        name="message"
        placeholder="Your Message"
        required
    ></textarea>

    <button class="btn btn-primary w-100">
        Submit
    </button>

</form>
        </div>

    </div>
</section>

<!-- 🔥 FORM + PEOPLE -->
<section class="container py-5">
    <div class="row">
        <div class="col-12">
            <iframe class="w-100 rounded"
                height="300"
                src="https://www.google.com/maps?q=rawalpindi&output=embed">
            </iframe>
        </div>
    </div>
</section>

@endsection('contact')
