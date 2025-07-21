<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/adminComp.css') }}">
    <link rel="stylesheet" href="/js/adminCompo.js">
    <title>Document</title>
</head>
<body>
    <div class="navv">
        <div>
            <img src="/images/logo/logo-M.png" alt="Logo" srcset="">
        </div>
        <div class="navv-links">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </x-dropdown-link>
            </form>
        </div>
    </div>

    <div class="toggle-sidebar">
        <img src="/images/icones/bar-solid.svg" alt="menu" id="openSidebar">
    </div>

    <!-- Sidebar li t7ll -->
    <div id="sidebar" class="sidebar">
        <div class="side-content">
            <ul>
                <li><a href="{{Route('addNewCar')}}">Add New Car</a></li>
                <li><a href="{{Route('addOptionCar')}}">Add Options Car</a></li>
                <li><a href="{{Route('updateCar')}}">Update Or Delete Car</a></li>
                <li><a href="{{route('register')}}">Add New Admin</a></li>
                <li><a href="{{Route('commandesAdmin')}}">Commandes</a></li>
                <li><a href="{{Route('showMessage')}}">Messages</a></li>
            </ul>
        </div>
    </div>

    <script>
        let btn = document.getElementById('openSidebar');
        let sidebar = document.getElementById('sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        };
    </script>
</body>
</html>