@php
    $aboutContent = content('about.content');
    $about_us_details = content('about_us_details.content');
@endphp

<!-- Know us section starts -->
<section class="home-company">
    <div class="container">
        <div class="know-header">{{ $aboutContent->data->title }}</div>
        <div class="row company">
            <div class="col-lg-6 col-md-12 text-right">
                @if ($aboutContent->data->video_url)
                    <div class="btn">
                        <a href="{{ $aboutContent->data->video_url }}" class="popup-video"><img
                                src="{{ getFile('', 'play.png') }}" class="v_play"></a>
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
                        $aboutContent->data->short_description,
                    ) !!}

                </div>
                <div class="lea">
                    <a href="{{ url('about-us') }}" class="learn">Learn More <i
                            class="fa-sharp fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- know us section ends -->
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
