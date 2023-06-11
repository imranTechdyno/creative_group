@php
    $ourApproach = element('our_approach.element');
@endphp
<main class="main">

    <!-- background title image starts -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">Our Approach</p>
        <hr class="hr_for_all">
</div>
    <!-- background title image starts -->

    <!-- shadow below the title image -->
    <div class="breadcrumbs">
        <div class="container">
        </div>
    </div>
    <!-- shadow below the title image -->
    <div class="container">
        <div class="row about-sidebar">
            <div class="col-md-9 about-content">
                <section class="about-employees">
                    @forelse($ourApproach as $approach)
                        <div class="row employees">
                            <div class="col-sm-6 text-left">
                                <a href="#" class=""><img src="{{ $approach->data->image }}"
                                        alt=""> </a>
                            </div>
                            <div class="col-sm-6">
                                <p>{{ $approach->data->description }}</p>
                            </div>
                        </div>
                        <!-- data for 2nd image -->
                        {{-- <div class="row employees">
                            <div class="col-sm-6">
                                <h4 class="subtitle">{{ $approach->data->title_head2 }}</h4>
                                <p>{{ $approach->data->description2 }}</p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="#" class="hover-effect">
                                    <img src="{{ $approach->data->image2 }}">
                                </a>
                            </div>
                        </div> --}}
                    @empty
                    @endforelse

                    <div class="spacer-80"> </div>
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
