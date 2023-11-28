@extends('user.header_footer')

@section('section')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h1 class="text-white">Maktab darsliklari</h1><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            @foreach($presentations as $present)
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 pr">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('user.presentation') }}"><img src="images/school.jpg" class="" alt=""></a>
                            <span class="category">Taqdimot</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">{{ $present->name }}</span><br>
                            <a href="{{ route('admin.school.download', ['id' => $present->id]) }}"
                               style="background-color: #7a6ad8 !important;" class="btn text-white">Yuklab olish</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

