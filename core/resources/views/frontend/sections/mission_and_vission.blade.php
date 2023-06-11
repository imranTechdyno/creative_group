@php
    $vision_and_mission = content('mission_and_vission.content');
@endphp
<main class="main">

    <!-- title background picture starts -->
<div class="page-title text-center">

</div>
 <!-- title background picture ends -->

<!-- shadow below the title picture -->
<div class="breadcrumbs">
<div class="container">
</div>
</div>
<!-- shadow below the title picture -->

<div class="container">
<div class="row about-sidebar">
<div class="col-md-9 about-content">
	<!-- Vision and mission section starts -->
    <section class="home-links">
        <div class="container mission-container">
            <div class="missionhead">
                <h1>Vision and Mission</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="vision">
                        <h2>Vision</h2>
                        <p>{{ $vision_and_mission->data->vision_des  }}</p>
                    </div>
                    <div class="mission">
                        <h2>Mission</h2>
                        <p>{{ $vision_and_mission->data->mission_des  }}</p>
                    </div>
                    <div class="lea">
                        <a href="" class="learn"
                            >Learn More <i class="fa-sharp fa-solid fa-arrow-right"></i
                        ></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="img-right">
                        <img src="{{ $vision_and_mission->data->image  }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision and mission section ends -->

</div>

<!-- sidebar here -->
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
<!-- sidebar here -->
</div>
</div>
</main>
