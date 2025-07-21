<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/updatCar.css">
    <title>Option Car</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>
    <div>
        <div class="header">
            <input type="text" name="search" placeholder="search Car" class="form-control w-50">
            <button class="btn btn-outline-primary ms-3">Search Car</button>
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
                            </div>
                            <div class="card-commande">
                                <form action="{{Route('formOption', $car->id )}}" method="post">
                                    @csrf
                                    @if ($car->completed_option)
                                        <p id="option-comp">Option Completed</p>
                                    @else
                                        <button type="submit">Add Options</button>
                                    @endif
                                    {{-- <button type="submit">Add Options</button> --}}
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
            
    </div>
</body>
</html>