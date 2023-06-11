
    @php
        $clientElement = element('client.element');
        $clientContent = content('client_content.content');
    @endphp

    <!-- Our corporate client starts -->
    <div class="page-title text-center">
        <p class="contact_tag1 text-center text-bold">{{ @$clientContent->data->title }}</p>
        <hr class="hr_for_c_client">
    </div>

    <section class="card_container">
        <div class="container">
            <div class="cli"></div>
            <div class="row">
                <div class="">
                    @forelse ($clientElement as $item)
                        <div class="col-md-3">
                            <div class="blue-box">
                                <img src="{{ @$item->data->image }}" class="c_logo" alt="">
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <!-- Our corporate client ends -->
