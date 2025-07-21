<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/showCommandes.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>

    <div class="container my-4">
    <div class="table-responsive shadow rounded">
        <table class="table table-bordered table-striped table-hover align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <th>Full Name</th>
                    <th>CNI</th>
                    <th>Numero Telephone</th>
                    <th>Date Debut</th>
                    <th>Date Fin</th>
                    <th>Car Name</th>
                    <th>Confirmed</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    <tr>
                        <td>{{ $commande->full_name }}</td>
                        <td>{{ $commande->cni }}</td>
                        <td>{{ $commande->n_tel }}</td>
                        <td>{{ $commande->date_debut }}</td>
                        <td>{{ $commande->date_fin }}</td>
                        <td>{{ $commande->car_name }}</td>
                        <td>
                            @if ($commande->confirmed)
                                <span class="badge bg-success">Confirmed</span>
                            @else
                                <span class="badge bg-warning text-dark">Not Confirmed</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('updateCommande', $commande->id) }}" class="btn btn-sm btn-outline-success">Update</a>
                        </td>
                        <td>
                            <form action="{{ route('deleteCommande', $commande->id) }}" method="post">
                                @csrf
                                @method('put')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>