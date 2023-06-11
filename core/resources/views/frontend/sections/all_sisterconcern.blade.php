@php

$sister_concernElement = element('sister_concern.element');
$sister_concernContent = content('sister_concern_content.content');
@endphp

<!-- box slider our sister concern -->
<div class="page-title text-center">

</div>
<div class="sister">{{ @$sister_concernContent->data->title }}</div>

    <div class="container">
        <div class="row">
          
                @forelse ($sister_concernElement as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h2>{{@$item->data->title}}</h2>

                        <p>
                            {{@$item->data->short_description}}
                            <a href="{{ url('sister-concern-details', $item->data->slug) }}">VIEW MORE..</a>
                        </p>
                    </div>
                </div>
                @empty
                    
                @endforelse
            
        </div>
       
    </div>


<!-- box slider our sister concern end-->