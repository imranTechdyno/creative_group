@php
    $ourTeam = element('our_team.element');
    $ourTeamTitle = content('our_team_title.content')
@endphp
<main class="main">

    <!-- Background title image here -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">Our Team</p>
        <hr class="hr_for_all">
</div>
    <!-- Background title image here -->

    <!-- below the title shadow here -->
    <div class="breadcrumbs">
        <div class="container">
        </div>
    </div>
    <!-- below the title shadow here -->
    <div class="container">
        <div class="row about-sidebar">
            <div class="col-md-9 about-content">

                <section class="about-leaders">
                    <div class="section-title text-center">
                        <h4 class="subtitle-services-other subtitle-2">{{ $ourTeamTitle->data->team_title }}</h4>
                        <div class="spacer-50"> </div>
                    </div>
                    <div class="row leaders text-center">
                        
                       
                       
                        
                       @foreach ($ourTeam as $team)
                        <div class="col-sm-4">
                            <div class="img-hover-effect">
                                <img src="{{ $team->data->image }}" alt="Clifton">
                                <div class="social-links">
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </div>
                            </div>
                            <h4 class="subtitle">{{ $team->data->image_title }}</h4>
                            <p>{{ $team->data->image_des }}</p>
                        </div>
                        @endforeach
                    </div>
                </section>
            </div>
            <div class="col-md-3 sidebar left">
                <div class="sidebar-blog-categories">
                    <ul>
                        <li> <a href="{{ url('about-us') }}"> The Company </a> </li>
                        <li> <a href="{{ url('mission-and-vission') }}"> Our Vision &amp; Mission </a> </li>

                        <li> <a href="{{ url('our-approach') }}"> Our Approach </a> </li>
                        <li> <a href="{{ url('our-team') }}"> Our Team </a> </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
</main>
