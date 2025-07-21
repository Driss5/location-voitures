<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/addNewCar.css">
    <title>Add New Car</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>
    <div class="container">
        <h2 class="text-center">Add New Car</h2>
        <div class="frm-add">
            <form action="{{Route('addCarFrm')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" placeholder="Car Name" name="carName" required>
                <input type="number" class="form-control" placeholder="Car Prix" name="carPrix" required>
                <input type="text" class="form-control" placeholder="Car Category" name="carCategorie" required>
                <input type="number" class="form-control" placeholder="Disponible or No" name="disponible" required>
                <input type="text" class="form-control" placeholder="Primary Color" name="optionOne" required>
                <input type="text" class="form-control" placeholder="Option 2" name="optionTwo" required>
                <input type="text" class="form-control" placeholder="Option 3" name="optionThre" required>
                <input type="number" class="form-control" placeholder="Car Quantite" name="carQuantite" required>
                <input type="number" class="form-control" placeholder="Afficher In Home Page" name="affiche" required>
                <div>
                    <label for="">Disponible On</label>
                    <input type="date" class="form-control" placeholder="Disponible On" name="disponibleOn">
                </div>
                <div>
                    <label for="image">Car Image</label>
                    <input class="form-control" type="file" id="image" name="image" required>
                </div>

                <button class="btn btn-outline-primary">Add Car</button>
            </form>
        </div>
    </div>
    
</body>
</html>