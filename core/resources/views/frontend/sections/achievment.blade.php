@php
$achievmentContent=content('achievment.content');
@endphp

<!-- Achievement of the company starts -->
<section class="home-company">
    <div class="">
        <!-- background image here -->
        <div class="achievement-background">
            <div class="achieve_head">{{$achievmentContent->data->title}}</div>
            <!--  -->
            <div class="row achievemargin">
                <div class="col-md-6 col-sm-12">
                    <div class="">
                        <img src="{{$achievmentContent->data->image}}" alt="" />
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="achievet">
                        <h1>{{$achievmentContent->data->sub_title}}</h1>
                    </div>
                    <div class="achivep">
                        <p>{{$achievmentContent->data->description}}</p>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</section>
<!-- Achievement of the company ends -->
