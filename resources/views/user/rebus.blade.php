@extends('user.header_footer')

@section('section')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h1 class="text-white">Matematik rebuslar</h1><br>
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
                        <div class="thumb ">
                            <img src="../img/rebus/{{ $present->photo }}" class="img-thumbnail" alt="">
                        </div>
                        <div class="down-content">
                            <form action="{{ route('user.rebus.check') }}" method="post">
                                @csrf
                                <input type="text" class="form-control mb-2" name="answer" placeholder="Javobgiz..."
                                       required>
                                <input type="hidden" name="rebus_id" value="{{ $present->id }}">
                                <button style="background-color: #7a6ad8 !important;" class="btn text-white"
                                        type="submit">Tekshirish
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>


    @if(session('answer') == 1)
        <div class="modal fade" id="addPatient" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rabus natijasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-check-square align-middle text-success">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        Javobingiz to'g'ri <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white" data-bs-dismiss="modal"
                                style="background-color: #7a6ad8 !important;">OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(session('answer') != 1)
        <div class="modal fade" id="addPatient" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Test natijasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-x align-middle text-danger">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        Noto'gri javob <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white" data-bs-dismiss="modal"
                                style="background-color: #7a6ad8 !important;">OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@section('js')
    @if(session()->has('answer'))
        <script>
            $(window).on('load', function () {
                $('#addPatient').modal('show');
            });
        </script>
    @endif
@endsection
