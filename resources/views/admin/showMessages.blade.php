<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/updatCar.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Messages</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>
    <div class="contact container my-5">
    <h2 class="text-center mb-4 text-uppercase text-danger">Messages</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($messages as $message)
            <div class="col">
                <div class="card shadow border-0 h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary">
                            <i class="bi bi-person-fill"></i> {{$message->name}}
                        </h5>
                        <p class="card-text">
                            <i class="bi bi-telephone-fill"></i> {{$message->number}}
                        </p>
                        <p class="card-text">
                            <i class="bi bi-chat-text-fill"></i> {{$message->message}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
</div>

</body>
</html>