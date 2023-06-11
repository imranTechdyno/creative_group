@php
$missionContent=content('mission_vision.content');
@endphp

<!-- Vision and mission section starts -->
<section class="home-links">
    <div class="container mission-container">
        <div class="missionhead">
            <h1>Mission And Vission</h1>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="vision">
                    <h2>{{$missionContent->data->title1}}</h2>
                    <p>{{$missionContent->data->short_description1}}</p>
                </div>
                <div class="mission">
                    <h2>{{$missionContent->data->title2}}</h2>
                    <p>{{$missionContent->data->short_description2}}</p>
                </div>
                <div class="lea">
                    <a href="" class="learn"
                        >Learn More <i class="fa-sharp fa-solid fa-arrow-right"></i
                    ></a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="img-right">
                    <img src="{{$missionContent->data->image}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Vision and mission section ends -->