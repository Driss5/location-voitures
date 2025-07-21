<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/addNewCar.css') }}">
    <title>Update Car</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>
    <div class="container">
        <h2 class="text-center">Update Car</h2>
        <div class="frm-add">
            <form action="{{Route('updateCarFormInsert', $car->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="text" class="form-control" placeholder="Car Name" name="carName" value="{{$car->car_name}}" required>
                    <input type="number" class="form-control" placeholder="Car Prix" name="carPrix" value="{{$car->car_prix}}" required>
                    <input type="text" class="form-control" placeholder="Car Category" name="carCategorie" value="{{$car->category}}" required>
                    <input type="number" class="form-control" placeholder="Disponible or No" name="disponible" value="{{$car->disponible}}" required>
                    <input type="text" class="form-control" placeholder="Primary Color" name="optionOne" value="{{$car->option_1}}" required>
                    <input type="text" class="form-control" placeholder="Option 2" name="optionTwo" value="{{$car->option_2}}" required>
                    <input type="text" class="form-control" placeholder="Option 3" name="optionThre" value="{{$car->option_3}}" required>
                    <input type="number" class="form-control" placeholder="Car Quantite" name="carQuantite" value="{{$car->quantite}}" required>
                    <input type="number" class="form-control" placeholder="Afficher In Home Page" name="affiche" value="{{$car->affiche}}" required>
                    <div>
                        <label for="">Disponible On</label>
                        <input type="date" class="form-control" placeholder="Disponible On" name="disponibleOn">
                    </div>
                    <div>
                        <label for="image">Car Image</label>
                        <input class="form-control" type="file" id="image" name="image" required>
                    </div>

                <button class="btn btn-outline-primary">Update Car</button>
            </form>
        </div>
    </div>
    
</body>
</html>
