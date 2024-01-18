@extends('index')

@section('content')
    <section class="header-home">
        <div class="text-box-home">
            <h1> Good Health is the Root of All Happiness</h1>
            <p> Here, we provide excellent dental health services with affordable pricing.</p>
            <a href="#doclist" class="hero-btn-about"> Check Out Our Professional Doctors</a>
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
                <a href="#book" class="btn-appointment">Book Appointment</a>
            </div>

            <div class="profile-col">
                <img src="{{ asset('assets/img/drtirta.jpeg') }}" alt="Doctor 2" />
                <h3>drg. Tirta</h3>
                <p>Specialty: Orthodontics</p>
                <p>Education: Doctor of Dental Medicine (DMD)</p>
                <p>Experience: 8+ years</p>
                <a href="#book" class="btn-appointment">Book Appointment</a>
            </div>

            <div class="profile-col">
                <img src="{{ asset('assets/img/drboyke.webp') }}" alt="Doctor 3" />
                <h3>drg. Boyke</h3>
                <p>Specialty: General Dentistry</p>
                <p>Education: Doctor of Medicine in Dentistry</p>
                <p>Experience: 30+ years</p>
                <a href="#book" class="btn-appointment">Book Appointment</a>
            </div>

            <div class="profile-col">
                <img src="{{ asset('assets/img/tompi.jpeg') }}" alt="Doctor 4" />
                <h3>drg. Tompi</h3>
                <p>Specialty: General Dentistry</p>
                <p>Education: Doctor of Medicine in Dentistry</p>
                <p>Experience: 15+ years</p>
                <a href="#book" class="btn-appointment">Book Appointment</a>
            </div>
        </div>
    </section>

    <section class="book" id="book">
        <div class="container">
            <div class="text">
                <h1>Book Your Doctor</h1>
            </div>
            <form class="form" action="/" method="POST">
                @csrf
                <div class="input-grup">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Name" name="name" required>
                </div>
                <div class="input-grup">
                    <i data-feather="mail"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="input-grup">
                    <div class="date">
                        <i data-feather="calendar"></i>
                        <div class="picker-container">
                            <label for="date"></label>
                            <input type="date" id="date" name="date" required>
                        </div>
                    </div>
                </div>
                <div class="input-grup">
                    <div class="select">
                        <i data-feather="search"></i>
                        <select id="doctor" name="doctor" required>
                            <option value="">Pilih Dokter</option>
                            <option value="dokter_strange">drg. Strange</option>
                            <option value="dokter_tirta">drg. Tirta</option>
                            <option value="dokter_boyke">drg. Boyke</option>
                            <option value="dokter_tompi">drg. Tompi</option>
                        </select>
                    </div>
                </div>
                <div class="input-grup">
                    <div id="time-slots">
                        <i data-feather="clock"></i>
                        <label for="time"></label>
                        <select id="time-slot-select" name="time"></select>
                    </div>
                </div>
                <button type="submit" class="btnsubmit">BOOK NOW</button>
            </form>
    </section>

    @if (session()->has('alert'))
        <script>
            alert(@json(session('alert')))
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const doctorDropdown = document.getElementById("doctor");
            const timeSlotsDiv = document.getElementById("time-slots");
            const timeSlotSelect = document.getElementById("time-slot-select");

            doctorDropdown.addEventListener("change", function() {
                const selectedDoctor = doctorDropdown.value;

                // Clear previous time slots
                timeSlotSelect.innerHTML = "";

                // Hide the time slots by default
                timeSlotsDiv.style.display = "none";

                if (selectedDoctor !== "") {
                    // Show the time slots for the selected doctor
                    timeSlotsDiv.style.display = "block";
                    if (selectedDoctor === "dokter_strange") {
                        // Add time slots for Doctor Strange
                        addTimeSlots([
                            "7:00 AM - 8:00 AM",
                            "8:00 AM - 9:00 AM",
                            "9:00 AM - 10:00 AM",
                        ]);
                    } else if (selectedDoctor === "dokter_tirta") {
                        // Add time slots for Doctor Tirta
                        addTimeSlots([
                            "10:00 AM - 11:00 AM",
                            "12:00 PM - 1:00 PM",
                            "1:00 PM - 2:00 PM",
                        ]);
                    } else if (selectedDoctor === "dokter_boyke") {
                        // Add time slots for Doctor Boyke
                        addTimeSlots([
                            "2:00 PM - 3:00 PM",
                            "4:00 PM - 5:00 PM",
                            "6:00 AM - 7:00 AM",
                        ]);
                    } else if (selectedDoctor === "dokter_tompi") {
                        // Add time slots for Doctor Tompi
                        addTimeSlots([
                            "10:00 AM - 11:00 AM",
                            "12:00 PM - 1:00 PM",
                            "8:00 PM - 9:00 PM",
                        ]);
                    }
                }
            });

            function addTimeSlots(slots) {
                slots.forEach((slot) => {
                    const option = document.createElement("option");
                    option.textContent = slot;
                    timeSlotSelect.appendChild(option);
                });
            }
        })
    </script>
@endsection()
