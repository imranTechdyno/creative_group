@php
$clientElement=element('client.element');
$clientContent=content('client_content.content');
@endphp

<!-- Our corporate client starts -->
				
<section class="card_container">
    <div class="container">
        <div class="cli">{{@$clientContent->data->title}}</div>
        <div class="row">
            <div class="blue">
                @forelse ($clientElement as $item)
                <div class="col-md-12">
                    <div class="blue-box">
                        <img src="{{@$item->data->image}}" class="c_logo" alt="">
                    </div>
                </div>
                @empty
                    
                @endforelse
            </div>
        </div>
        <center>
            <a href="{{ url('corporate-clients') }}">
                <button class="btn btn-primary sis">All Clients</button>
            </a>
        </center>
    </div>
</section>
<!-- Our corporate client ends -->