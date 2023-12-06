@extends('user.header_footer')

@section('section')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h1 class="text-white">Mantiqiy topshiriqlar</h1><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            @foreach($presentations as  $id=>$present)
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 pr">
                    <div class="events_item">
                        <div class="thumb">
                            <img src="../images/course-02.jpg" class="img-thumbnail" alt="">
                        </div>
                        <div class="down-content">
                            <span class="author">{{ $id+1 }} - topshiriq</span><br>
                            <button style="background-color: #7a6ad8 !important;" class="btn text-white show-btn" id="{{ $present->id }}" answer="{{ $present->answer }}"
                                    topshiriq="{{ $present->body }}" image="img/qr/{{ $present->photo }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-eye align-middle me-2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                Ko'rish
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="addPatient" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Jumboq</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="modal-text"></div>
                    <br>
                    <img src="" id="rasmi" class="w-50 text-center d-flex justify-content-center" style="margin: auto">
                </div>
                <form action="{{ route('user.creative.check') }}" method="post">
                    <div class="modal-footer">
                        @csrf
                        <input type="text" required name="answer" id="answer" class="form-control" placeholder="Javobingiz...">
                        <input type="hidden" name="id" id="id">
                        <button type="submit" class="btn text-white" data-bs-dismiss="modal"
                                style="background-color: #7a6ad8 !important;">TEKSHIRISH
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).on('click', '.show-btn', function () {
            let topshiriq = $(this).attr('topshiriq');
            let rasm = $(this).attr('image');
            let id = $(this).attr('id');
            let answer = $(this).attr('answer');
            $('#modal-text').text(topshiriq);
            $('#rasmi').attr('src', rasm);
            $('#id').attr('id', id);
            $('#addPatient').modal('show'); // Set the ID as the value of the hidden input in the modal
        });
    </script>
@endsection

