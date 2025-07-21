<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/home.css">
    <title>Document</title>
</head>
<body>
    <div>
        <x-navbar />
    </div>
    <div class="header">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="/images/videos/video-1.mp4" type="video/mp4">
        </video>
        <div class="part-1">
            <div class="haeder-image">
                <img src="/images/logo/logo-M.png" alt="" srcset="">
            </div>
            <div class="header-p-1">
                <p>Do You Want <span id="change-word">Dacia</span> ?</p>
            </div>
            <div class="header-p-2">
                <p>Location Voiture Oujda</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla dolore itaque minus at enim recusandae nam impedit? Perferendis, ratione repellendus fuga rem consequuntur itaque! Animi.</p>
                <button><a href="{{Route('seeAllCars')}}">See All Cars</a></button>
            </div>
        </div>
    </div>

    <div class="car-parent">
        <div class="cars">
            @foreach ($carHome as $car)
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
                        {{-- <p>{{$car->disponible == true ? 'Disponible' : 'Disponible Att'}}</p> --}}
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
        <div class="see-all-btn">
            <button><a href="{{Route('seeAllCars')}}">See All Cars</a></button>
        </div>
    </div>

    <div class="services-section" id="services">
        <div class="services-content">
            <div class="text-section">
                <h2>Location de Voitures</h2>
                <p>
                    Nous vous proposons un large choix de voitures à louer, adaptées à tous vos besoins :
                    que ce soit pour un déplacement personnel, professionnel ou un voyage. 
                    Nos véhicules sont bien entretenus et disponibles à des prix compétitifs.
                </p>
                <ul>
                    <li>Assurance complète</li>
                    <li>Assistance 24h/24</li>
                    <li>Réservation facile et rapide</li>
                </ul>
                <a href="{{Route('seeAllCars')}}" class="btn-explore">Voir les voitures disponibles</a>
            </div>
            <div class="image-section">
                <img src="{{ asset('images/service.jpg') }}" alt="Location de voitures">
            </div>
        </div>
    </div>

    <div class="contuct" id="contuct">
        <div class="contuct-container">
            <h2>Contactez-Nous</h2>
            <form action="{{Route('contact')}}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Votre nom complet" required>
                <input type="text" name="numero" placeholder="Numero Telephone" required>
                <textarea name="message" rows="5" placeholder="Votre message..." required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>


    <script src="/js/home.js"></script>
</body>
</html>