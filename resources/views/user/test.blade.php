@extends('user.header_footer')

@section('section')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h1 class="text-white">{{ $block->name }}</h1><br>
                        <h4 class="text-white">Vaqt: <span class="text-white" id="timer"></span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('user.test.check') }}" method="post">
        @csrf
        <input type="hidden" name="quiz_count" value="{{ $block->quiz_count }}">
        <div class="container">
            @foreach($quizzes as $id=> $quiz)
                <div class="small_tests">
                    <section class="small_test">
                        <div>
                            <h2 class="test_title">{{ $id+1 }}. </b> {{ $quiz->quiz }}</h2>
                            @foreach ($quiz->answers->shuffle() as $item)
                                <label>
                                    <input type="radio" name="answer{{ $id+1 }}" value="{{ $item->is_correct }}">
                                    <span>{{ $item->answer }}</span>
                                </label>
                            @endforeach
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
        <div class="container d-flex justify-content-center">
            <button type="submit" class="btn text-white rounded "
                    style="font-size: 20px;background-color: #7a6ad8 !important;">Tekshirish
            </button>
        </div>
    </form>



@endsection

@section('js')
    <script>
        function formatTime(seconds) {
            var h = Math.floor(seconds / 3600),
                m = Math.floor(seconds / 60) % 60,
                s = seconds % 60;
            if (h < 10) h = "0" + h;
            if (m < 10) m = "0" + m;
            if (s < 10) s = "0" + s;
            return h + ":" + m + ":" + s;
        }

        $(window).on('load', function () {
            $('#addPatient').modal('show');
        });

        var count = {{ $block->time*60 }};
        var counter = setInterval(timer, 1000);

        function timer() {
            count--;
            if (count < 0) {
                document.getElementById('submit').click();
            }
            document.getElementById('timer').innerHTML = formatTime(count);
        }
    </script>
@endsection
