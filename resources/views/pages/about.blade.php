@extends('index')

@section('content')
    <section class="header-about">
        <div class="text-box-about">
            <h1>Smile Brighter Made Easier</h1>
            <p>
                At Dental Care, we believe that taking care of your oral health should
                be convenient, hassle-free, and accessible to everyone. That's why
                we've created a user-friendly platform that revolutionizes the way you
                book appointments with dentists. Our mission is to connect patients
                with top-quality dental care providers, making the entire process
                seamless and efficient.
            </p>
            <a href="#doclist" class="hero-btn-about">
                Check Out Our Professional Doctors</a>
        </div>
    </section>

    <section class="doctor-list" id="doclist">
        <h2>Check Out</h2>
        <h1>Our Professional Dentists</h1>
        <p>Skilled Dentist. Exceptional Care. Your Health, Our Priority.</p>

        <div class="row">
            <div class="profile-col">
                <img src="{{ asset('assets/img/drstrange.jpeg') }}" alt="Doctor 1" />
                <h3>drg. Strange</h3>
                <p>Specialty: General Dentistry</p>
                <p>Education: Doctor of Dental Surgery (DDS)</p>
                <p>Experience: 10+ years</p>
                <a href="{{ route('home') }}" class="btn-appointment">Book Appointment</a>
            </div>

            <div class="profile-col">
                <img src="{{ asset('assets/img/drtirta.jpeg') }}" alt="Doctor 2" />
                <h3>drg. Tirta</h3>
                <p>Specialty: Orthodontics</p>
                <p>Education: Doctor of Dental Medicine (DMD)</p>
                <p>Experience: 8+ years</p>
                <a href="{{ route('home') }}" class="btn-appointment">Book Appointment</a>
            </div>

            <div class="profile-col">
                <img src="{{ asset('assets/img/drboyke.webp') }}" alt="Doctor 3" />
                <h3>drg. Boyke</h3>
                <p>Specialty: General Dentistry</p>
                <p>Education: Doctor of Medicine in Dentistry</p>
                <p>Experience: 30+ years</p>
                <a href="{{ route('home') }}" class="btn-appointment">Book Appointment</a>
            </div>

            <div class="profile-col">
                <img src="{{ asset('assets/img/tompi.jpeg') }}" alt="Doctor 4" />
                <h3>drg. Tompi</h3>
                <p>Specialty: General Dentistry</p>
                <p>Education: Doctor of Medicine in Dentistry</p>
                <p>Experience: 15+ years</p>
                <a href="{{ route('home') }}" class="btn-appointment">Book Appointment</a>
            </div>
        </div>
    </section>
@endsection()
