<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                Travel Nurse Realty
            </div>
            <div class="menu">
                <a  href="#" class="header__menu-link header__menu-link--active">Home</a>
                <a  href="/house/for_sale/albuquerque" class="header__menu-link">Listing</a>
                <a  href="#" class="header__menu-link">Property</a>
                <a  href="#" class="header__menu-link">Pages</a>
            </div>
            <div class="header__account">
                <a href="/account/saved" class="header__account-link"><i class="fa-solid fa-heart"></i></a>
                <div class="header__account-link"><i class="fa-solid fa-user"></i></div>
            </div>
        </div>
    </header>

{{-- Beginning of Listings Page --}}
<div class="account-layout">
    {{-- Beginning of Listings City --}}
    <div class="listings-city">
        <img class="lisitings-city__img" src="https://images.pexels.com/photos/842682/pexels-photo-842682.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">
        <h1 class="listings-city__title">Saved Listings</h1>
    </div>
     {{-- Ending of Listings City --}}

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="account-menu">
                        <h2>Menu</h2>
                        <a href="/account/saved">Saved Listings</a>
                         <a href="/account/show-status">Listings Request Status</a>
                    </div>
                </div>
                <div class="col-md-9">
                @yield('content')
                </div>
            </div>    
        </div>
    </div>
    
</div>
{{-- Ending of Listings Page --}}
</body>
</html>