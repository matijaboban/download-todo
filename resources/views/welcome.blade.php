@extends('layouts.app')

@section('content')


<div class="valign-wrapper" style="width:100%;height:100%;position: absolute;">
    <div class="valign" style="width:100%;">
        <div class="container">
           <div class="row">
              <div class="col s12 m10 l6 offset-m1 offset-l3">
                 <div class="card blue darken-4">
                    <div class="card-content">
                        <span class="card-title white-text"><h4>Technology choice</h4></span>

                        <div class="collection">

                            <a href="{{ url('/vuejs') }}" class="collection-item avatar row valign-wrapper waves-effect waves-light">
                                <img src="https://vuejs.org/images/logo.png" alt="" class="circle valign">
                                <span class="col s12">
                                    <span class="title">Vue JS</span><br>
                                    <span class="grey-text">Access app using the front-end build with VueJS framework.</span>
                                </span>
                            </a>

                            <a href="{{ url('/reactjs') }}" class="collection-item avatar row valign-wrapper waves-effect waves-light">
                                <span class="col s12">
                                    <img src="https://facebook.github.io/react/img/logo.svg" alt="" class="circle">
                                    <span class="title">ReactJS</span><br>
                                    <span class="grey-text">Access app using the front-end build with ReactJS framework.</span>
                                </span>
                            </a>

                            <a href="{{ url('/angularjs') }}" class="collection-item avatar row valign-wrapper waves-effect waves-light">
                                <span class="col s12">
                                    <img src="https://camo.githubusercontent.com/6795c053f2fafee4d1c76f3a181876013827dd5e/68747470733a2f2f662e636c6f75642e6769746875622e636f6d2f6173736574732f333437303430322f313230383630372f32376637643134322d323564362d313165332d386330372d6139316532633736396435322e706e67" alt="" class="circle">
                                    <span class="title">angular.js</span><br>
                                    <span class="grey-text">Access app using the front-end build with angular.js framework.</span>
                                </span>
                            </a>

                            <a href="{{ url('/blade') }}" class="collection-item avatar row valign-wrapper waves-effect waves-light">
                                <span class="col s12">
                                    <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2015/02/1423519219laravel-l-slant.png" alt="" class="circle">
                                    <span class="title">Blade</span><br>
                                    <span class="grey-text">Access app using the front-end build with Laravel's Blade templating engine.</span>
                                </span>
                            </a>

                            <a href="{{ url('/twig') }}" class="collection-item avatar row valign-wrapper waves-effect waves-light">
                                <span class="col s12">
                                    <img src="http://twig.sensiolabs.org/images/twig-logo.png" alt="" class="circle">
                                    <span class="title">Twig</span><br>
                                    <span class="grey-text">Access app using the front-end build with Twig templating engine.</span>
                                </span>
                            </a>

                        </div>

                    </div>
                 </div>
              </div>
           </div>
        </div>
    </div>
</div>

@endsection
