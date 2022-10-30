@extends('layouts.main')

@section('content')
<div class="listings-page">
    <div class="listings-city">
        <img class="listings-city__img" src="https://myersandmyersrealestate.com/wp-content/uploads/2017/12/Home-Buyers-In-Albuquerque-NM.jpg">
        <h1 class="listings-city__title">Albuquerque</h1>
    </div>
    <div class="listings-filter">
        <div class="listings-filter__wrapper">
            <div class="listings-filter__option">
                Any Price <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                All Beds <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                Hometype <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__option">
                More <i class="fa-solid fa-caret-down"></i>
            </div>
            <div class="listings-filter__button">
                Search
            </div>
        </div>
    </div>
    <div class="listings--properties">
        <div class="col-md-4">
            <div class="listings-properties__item">
                <img src="https://myersandmyersrealestate.com/wp-content/uploads/2017/12/Home-Buyers-In-Albuquerque-NM.jpg" alt="">
            </div>
        </div>
    </div>
</div>
@endsection