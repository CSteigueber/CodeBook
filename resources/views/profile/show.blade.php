@extends('layouts.app')
@section('content')
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard') }}">CodeBook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="fb-profile-block">
                    
                    <div class="fb-profile-block-thumb cover-container"></div>
                    <div class="profile-img">
                        <a href="#">
                            <img src="/images/frankenprofile.jpg" alt="" class="rounded-circle" title="">
                        </a>
                    </div>
                    <div class="profile-name">
                        <h2>first/last</h2>
                        <a href="" class="btn btn-info" role="button">Edit profile</a>
                    </div>

                    <div class="fb-profile-block-menu">
                        <div class="block-menu">
                            <ul>
                                <li><a href="#">Timeline</a></li>
                                <li><a href="#">Friends</a></li>
                                <li><a href="#">Photos</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="container">
                    <div class="userinfo">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                <h1>Info</h1>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Born: <span {{$user->dob}}></span></li>
                                <li class="list-group-item">Gender: </li>
                                <li class="list-group-item">Lives in: </li>
                                <li class="list-group-item">Education: </li>
                                <li class="list-group-item">Works at: </li>
                                <li class="list-group-item">Relationshipstatus: </li>
    <!-- upload description here -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feed">
                    <h4>post & feeds</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advertisement">
                    <div class="container">
                        <div class="row">
                            <div class="card" style="width: 18rem;">
                                <img src="/images/5ac4c81f132ad.jpeg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <p class="card-text">First ad</p>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card" style="width: 18rem;">
                                <img src="/images/maxresdefault.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <p class="card-text">Second ad</p>
                                    </div>
                            </div>                     
                        </div>
                        <div class="row">
                            <div class="card" style="width: 18rem;">
                                <img src="/images/o0pfd.jpg" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <p class="card-text">Third ad</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


@endsection