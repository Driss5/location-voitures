<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addNewCar.css') }}">
    <title>Add Option</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>
    <div class="container">
        <h2 class="text-center">Add Option</h2>
        <div class="frm-add">
            <form action="{{Route('addOption', $carId->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="number" class="form-control" placeholder="Car sieges" name="siege" required>
                <input type="number" class="form-control" placeholder="Car portes" name="porte" required>
                <input type="number" class="form-control" placeholder="Car bagages" name="bagage" required>
                <input type="text" class="form-control" placeholder="boite" name="boite" required>
                <input type="text" class="form-control" placeholder="kilometrage" name="kilometrage" required>
                <input type="text" class="form-control" placeholder="station" name="station" required>

                <button class="btn btn-outline-primary">Add Option</button>
            </form>
        </div>
    </div>
    
</body>
</html>