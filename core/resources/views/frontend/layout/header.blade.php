@php

$sister_concernElement = element('sister_concern.element');
@endphp
<header>
    <div class="header-area">
        <nav class="navbar navbar-default container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  href="{{ url('/') }}">
                            <img src="{{getFile('logo',@$general->logo)}}" class="m_logo" alt="" />
                        </a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav main-menu">
                        <li class="">
                            <a href="{{ url('/') }}"> Home </a>
                        </li>
                        
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('about-us') }}">About Us</a></li>
                                <li><a href="{{ url('mission-and-vission') }}">Mission & Vision</a></li>
                                <li><a href="{{ url('our-approach') }}">Our Approach</a></li>
                                <li><a href="{{ url('our-team') }}">Our Team</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sister Concern<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach ($sister_concernElement as $item )
                                <li><a href="{{ url('sister-concern-details', $item->data->slug) }}">{{ $item->data->title }}</a></li>

                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="{{ url('all-product') }}"> Products </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="{{ url('corporate-clients') }}"> Corporate Clients</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('all-news-and-events') }}">News & Events</a></li>
                            
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="{{ url('career') }}"> Careers</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav main-menu">
                        <li>
                            <a href="{{ url('contact') }}"> Contact Us</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
    </div>
</header>
<!-- header section close -->