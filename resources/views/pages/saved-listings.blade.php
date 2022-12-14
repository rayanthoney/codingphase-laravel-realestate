@extends('layouts.account')

@section('page-title', 'User Saved Listings - Smith Realty')
@section('page-bg', 'https://images.pexels.com/photos/842682/pexels-photo-842682.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260')
@section('content')

    {{-- Beginning of Listings Properties --}}
    <div class="listings-properties">      
        <div class="row">
          @for ($i = 1; $i <= 12; $i++)
            <div class="col-sm-12 col-lg-4 col-xl-4">
              <a class="listings-properties__item" href="/listing/2123-grand-ave-miami-fl-33456/1">
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
  {{-- Ending of Listings Properties --}}
@endsection