<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="{{mix('/css/styles.css')}}">
</head>
<body>
{{-- Beginning of Header Page --}}
@include('components/header')
{{-- End of Header Page --}}

{{-- Beginning of Listings Page --}}
<div class="account-layout">
    {{-- Beginning of Listings City --}}
    <div class="listings-city">
        <img class="lisitings-city__img" src="@yield('page-bg')">
        <h1 class="listings-city__title">@yield('title')</h1>
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