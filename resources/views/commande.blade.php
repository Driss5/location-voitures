<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/commande.css">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Reserve Car</title>
</head>
<body>
    <x-navbar />
    <main class="reservation-main">
        <div class="reservation-card">
            <section class="car-details">
                <div class="car-image-box">
                    <img src="{{ asset($car->image) }}" alt="Image {{ $car->car_name }}" class="car-image" />
                </div>
                <div class="car-info">
                    <h2 class="car-title">{{ $car->car_name }}</h2>
                    @if($carOption && count($carOption) > 0)
                        <ul class="car-specs">
                            @foreach ($carOption as $option)
                                <li><i class="fa-solid fa-users"></i> <span>{{ $option->sieges }} Seats</span></li>
                                <li><i class="fa-solid fa-door-closed"></i> <span>{{ $option->portes }} Doors</span></li>
                                <li><i class="fa-solid fa-suitcase"></i> <span>{{ $option->bagages }} Luggage</span></li>
                                <li><i class="fa-solid fa-gears"></i> <span>{{ $option->boite }}</span></li>
                                <li><i class="fa-solid fa-road"></i> <span>{{ $option->kilometrage }}</span></li>
                                <li><i class="fa-solid fa-gas-pump"></i> <span>{{ $option->station }}</span></li>
                            @endforeach
                        </ul>
                    @else
                        <p class="no-specs">No car options available.</p>
                    @endif
                </div>
            </section>
            <section class="reservation-form-section">
                <form action="{{ route('commandeCar', $car->id) }}" method="POST" class="reservation-form" autocomplete="off">
                    @csrf
                    <h3 class="form-title">Reserve this Car</h3>
                    <div class="form-group">
                        <label for="full-name"><i class="fa-solid fa-user"></i></label>
                        <input type="text" name="fullName" id="full-name" required placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="cni"><i class="fa-solid fa-id-card"></i></label>
                        <input type="text" name="cni" id="cni" required placeholder="National ID (CNI)">
                    </div>
                    <div class="form-group">
                        <label for="tel"><i class="fa-solid fa-phone"></i></label>
                        <input type="tel" name="nTel" id="tel" required placeholder="Phone Number">
                    </div>
                    <div class="form-row form-row-vertical">
                        <div class="form-group">
                            <label for="dateD"><i class="fa-solid fa-calendar-day"></i></label>
                            <input type="date" name="dateD" id="dateD" required>
                        </div>
                        <div class="form-group">
                            <label for="dateF"><i class="fa-solid fa-calendar-check"></i></label>
                            <input type="date" name="dateF" id="dateF" required>
                        </div>
                    </div>
                    <button type="submit" class="submit-btn">
                        <span>Confirm Reservation</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </section>
        </div>
    </main>
</body>
</html>