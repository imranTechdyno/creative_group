@php
    $about_us_details = content('about_us_details.content');
    $about = content('about.content');
    $about_us_details_element = element('about_us_details_element.element');
@endphp

<main class="main">

    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">{{ $about->data->title }}</p>
        <hr class="hr_for_all">
    </div>

    <!-- below the picture the shadow -->
    <div class="breadcrumbs">
    </div>
    <!-- below the picture the shadow -->

    <div class="container">
        <div class="row about-sidebar">
            <div class="col-md-9 about-content">
                <section class="about-company">
                    <div class="com">
                </section>
                <!-- know us for about page starts here -->
                <section class="home-company">
                    <div class="container">
                        <div class="row company">
                            <div class="col-lg-6 col-md-12">
                                @if ($about_us_details->data->video_url)
                                    <div class="btn">
                                        <a href="{{ $about_us_details->data->video_url }}" class="popup-video"><img
                                                src="{{ getFile('', 'play.png') }}" class="v_play1"></a>
                                    </div>
                                @else
                                    <img src="{{ $about_us_details->data->image }}" alt="about-us">
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="company-details" id="info">
                                    {!! preg_replace(
                                        '/(<[a-zA-Z0-9\s"\-=\'\/]+) style="[^"]*font-size:[^"]*"/i',
                                        '$1',
                                        $about_us_details->data->description,
                                    ) !!}
                                    {{-- <a href="#" class="read-more">Read More</a> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- know us for about page ends here -->

                {{-- <section class="about-services">
                    <div class="row services">

                        @forelse($about_us_details_element as $elements)
                            <div class="col-sm-6">
                                <a href="#" class="hover-effect">
                                    <img src="{{ $elements->data->image }}" alt="technology-innovation" />
                                </a>
                                <h4 class="services-title-one subtitle">{{ $elements->data->image_title }}</h4>
                                <p>{{ $elements->data->image_des }}</p>
                                <a class="link" href="#">Read More</a>
                            </div>
                        @empty
                        @endforelse

                    </div>
                </section> --}}
            </div>
            <div class="col-md-3 sidebar left">
                <div class="sidebar-blog-categories">
                    <ul>
                        <li> <a href="about.html"> The Company </a> </li>
                        <li> <a href="mission.html"> Our Vision &amp; Mission </a> </li>
                        <li> <a href="approach.html"> Our Approach </a> </li>
                        <li> <a href="team.html"> Our Team </a> </li>
                    </ul>
                </div>
                <div class="sidebar-download">

                </div>

            </div>
        </div>
    </div>
</main>

@push('script')
    <script>
        $(document).ready(function() {
            $('.popup-video').magnificPopup({
                type: 'iframe',
                iframe: {
                    patterns: {
                        youtube: {
                            index: 'youtube.com/',
                            id: 'v=',
                            src: 'https://www.youtube.com/embed/%id%?autoplay=1'
                        }
                    }
                }
            });
        });
    </script>
@endpush
