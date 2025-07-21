<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/allCars.css">
    <title>Cars</title>
</head>
<body>
    <div>
        <x-navbar />
    </div>
    <div class="container-car">
        <div class="header">
            <div class="header-p">
                <p>Location Voiture</p>
            </div>
            <div class="categorie">
                <div><p>Dacia</p></div>
                <div><p>Kia</p></div>
                <div><p>Ford</p></div>
            </div>
        </div>

        <div style="background-color: #d4edda; color: #155724; text-align: center; border-radius: 5px;">
            {{ session('success') }}
        </div>

        <div class="parent-cars">
            <div class="cars">
                @foreach ($cars as $car)
                    <div class="car">
                        <div class="car-image">
                            <img src="{{ asset($car->image) }}" alt="" srcset="">
                        </div>
                        <div class="car-option">
                            <div>
                                <p>{{$car->option_1}}</p>
                            </div>
                            <div>
                                <p>{{$car->option_2}}</p>
                            </div>
                            <div>
                                <p>{{$car->option_3}}</p>
                            </div>
                        </div>
                        <div class="car-info">
                            <p>{{$car->car_name}}</p>
                            <p>{{$car->car_prix}}DH</p>
                        </div>
                        <div class="car-dispo">
                            <p>{{$car->disponible == true ? 'Disponible' : 'Disponible on ' . $car->disponible_on }}</p>
                            {{-- <p>Disponible</p> --}}
                        </div>
                        <div class="card-commande">
                            @if ($car->disponible == true)
                                <button>
                                    <a href="{{ route('commande-frm', $car->id) }}">Commander</a>
                                </button>
                            @else
                                <button>
                                    <a href="#">Not Disponible</a>
                                </button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $cars->links() }}
            </div>
        </div>
    </div>

</body>
</html>