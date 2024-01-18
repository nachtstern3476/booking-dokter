@extends('index')

@section('content')
    <section class="header-contact">
        <div class="text-box-contact">
            <h1>Get in Touch With Us!</h1>
            <p>Contact us for more information. We also welcome any suggestions for improvement.</p>

            <div class="contact-list">
                <div class="contact1">
                    <img src="{{ asset('assets/img/loc.png') }}" height="60px">
                    <p><b>Address:</b> Jl. Merdeka No. 123
                        <br>Jakarta Selatan
                    </p>
                </div>

                <div class="contact2">
                    <img src="{{ asset('assets/img/email.png') }}" height="60px">
                    <p><b>Email:</b> dental@care.com</p>
                </div>

                <div class="contact3">
                    <img src="{{ asset('assets/img/web.png') }}" height="60px">
                    <p><b>Website:</b> dentalcare.com</p>
                </div>
            </div>

            <div class="btn-contact">
                <a href="#msg" class="hero-btn-contact">Reach Out to Us</a>
            </div>
    </section>

    <section class="msg" id="msg">
        <div class="container-contact">
            <h1>Connect with Us for Prompt Support</h1>
            <p>Let Your Ideas Shape Our Journey: We Welcome Your Feedback</p>

            <div class="form-contact">
                <div class="input-grup-contact">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Name">
                </div>

                <div class="input-grup-contact">
                    <i data-feather="mail"></i>
                    <input type="email" placeholder="Email">
                </div>

                <div class="input-grup-contact">
                    <div class="message">
                        <i data-feather="message-square"></i>
                        <input type="text" placeholder="Message">
                    </div>
                </div>

                <button type="submit" class="btnsubmit-contact">Submit</button>
            </div>
        </div>
    </section>
@endsection()
