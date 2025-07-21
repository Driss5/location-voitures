<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/bootstrap.min.css') }}">
    <title>Update Commande</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>
    <div class="container mt-5">
        <h2>Update Commande</h2>
        <form action="{{Route('updateCommandeAction', $commandeU->id)}}" method="post">
                @csrf
                <div>
                    <label for="" class="form-label">Disponible On</label>
                    <input type="text" class="form-control" placeholder="confirmed Or No" name="disponibleOn" required>
                </div>
                <button class="btn btn-outline-primary mt-3">Update Commande</button>
            </form>
    </div>
    
</body>
</html>