@extends('layouts.main')

@section('content')
{{-- Beginning of Listings Page --}}
<div class="listings-page">
    {{-- Beginning of Listings City --}}
    <div class="listings-city">
        <img class="lisitings-city__img" src="https://myersandmyersrealestate.com/wp-content/uploads/2017/12/Home-Buyers-In-Albuquerque-NM.jpg">
        <h1 class="listings-city__title">Albuquerque</h1>
    </div>
     {{-- Ending of Listings City --}}

     {{-- Beginning of Listings Filter --}}
    <div class="listings-filter">
        <div class="listings-filter__wrapper">
            <div class="listings-filter__option">
                Any Price <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                All Beds <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                Home type <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                More <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__button">
                Search
            </div>
        </div>
    </div>
    {{-- Ending of Listings Filter --}}

    {{-- Beginning of Listings Properties --}}
    <div class="listings-properties">
        <div class="container">
          <div class="row">
            @for ($i = 1; $i <= 12; $i++)
              <div class="col-sm-6 col-lg-4 col-xl-3">
                <a href="/listing/2123-grand-ave-miami-fl-33456/1" class="listings-properties__item">
                  <img src="https://myersandmyersrealestate.com/wp-content/uploads/2017/12/Home-Buyers-In-Albuquerque-NM.jpg">
                  <div class="listings-properties__saved ">
                    <i class="fa-solid fa-heart"></i>
                  </div>
    
                  <span class="listings-properties__item-price">$250,000</span>
                  <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler"></i> 2440 SQFT</span>
                  <span class="listings-properties__item-address">
                    308 Negra Arroyo,<br>
                    Albuquerque, NM 87109
                  </span>
                  <div class="listings-properties__item-line"></div>
                  <span class="listings-properties__item-owner">
                    Bryant Realty
                  </span>
                </a>
              </div>
            @endfor
            
            
            
          </div>
        </div>
    {{-- Ending of Listings Properties --}}
</div>
{{-- Ending of Listings Page --}}
@endsection