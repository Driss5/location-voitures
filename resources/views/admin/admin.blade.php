<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <x-adminComponent />
    </div>
    <div class="adm">
        <h2>Hello Mr salta3on 🦞</h2>
        <div class="adm-img">
            <img src="/images/islamic-2.jfif" alt="image islame" srcset="">
        </div>
    </div>

    {{-- <h2>Hello From Admin Page</h2>

    <x-dropdown-link :href="route('profile.edit')">
        {{ __('Profile') }}
    </x-dropdown-link>

    @if (Route::has('register'))
        <a href="{{ route('register') }}"> Register </a>
    @endif
    
    <form method="POST" action="{{ route('logout') }}">
    @csrf
        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ __('Log Out') }}
        </x-dropdown-link>
    </form> --}}
</body>
</html>