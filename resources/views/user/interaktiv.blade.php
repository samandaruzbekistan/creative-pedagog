@extends('user.header_footer')

@section('section')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h1 class="text-white">Interaktiv metodlar</h1><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            @foreach($videos as $present)
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 pr">
                    <div class="events_item">
                        <div class="thumb">
                            <video class="w-100" height="240" controls>
                                <source src="{{ asset('videos/'.$present->video) }}" >
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="down-content">
                            <span class="author">{{ $present->name }}</span><br>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

