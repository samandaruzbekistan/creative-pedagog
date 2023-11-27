@extends('admin.header_footer')

@section('blocks')
    active
@endsection

@section('section')
    <main class="content teachers">
        <div class="container-fluid p-0">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">{{ $block->name }}</h5>
                        <h5 class="text-danger mb-0">Vaqt: {{ $block->time }} min</h5>
                        <h5 class="text-dark mb-0">Savollar soni: {{ $block->quiz_count }} ta</h5>
                        <button class="btn btn-primary add"><i class="align-middle" data-feather="folder-plus"></i>
                            Savol qo'shish
                        </button>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Savol</th>
                            <th>Rasm</th>
                            <th>A javob</th>
                            <th>B javob</th>
                            <th>C javob</th>
                            <th>D javob</th>
                            <th>O'chirish</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quizzes as $id => $item)
                            <tr>
                                <td>{{ $id+1 }}</td>
                                <td>{{ $item->quiz }}</td>
                                <td><img class="img-fluid " width="100px" src="{{ asset('img/quiz/'.$item->photo) }}" alt=""></td>
                                @foreach($item->answers as $id2 => $a)
                                    @if($id2 == 0)
                                        <td class="text-danger">{{ $a->answer }}</td>
                                    @else
                                        <td>{{ $a->answer }}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <form action="{{ route('admin.quiz.delete') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="quiz_id" value="{{ $item->id }}">
                                        <input type="hidden" name="block_id" value="{{ $block->id }}">
                                        <button type="submit" class="btn btn-danger text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-trash-2 align-middle">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <main class="content forma" style="padding-bottom: 0; display: none">
        <div class="container-fluid p-0">
            <div class="col-md-8 col-xl-9">
                <div class="">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Yangi test qo'shish</h5>
                        </div>
                        <div class="card-body h-100">
                            <form action="{{ route('admin.quiz.upload') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Savol <span class="text-danger">*</span></label>
                                    <textarea name="quiz" required type="text" class="form-control" placeholder=""></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Rasm</label>
                                    <input class="form-control" type="file" name="photo" accept="image/*">
                                    <small class="text-danger">Rasm hajmi 2 mb dan oshmasligi kerak</small>
                                </div>
                                <input type="hidden" name="block_id" value="{{ $block->id }}">
                                <div class="mb-3">
                                    <label class="form-label">A javob <span class="text-danger">to'g'ri*</span></label>
                                    <input name="a_answer" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">B javob <span class="text-danger">*</span></label>
                                    <input name="b_answer" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">C javob <span class="text-danger">*</span></label>
                                    <input name="c_answer" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">D javob <span class="text-danger">*</span></label>
                                    <input name="d_answer" required type="text" class="form-control" placeholder="">
                                </div>
                                <div class=" text-end">
                                    <button type="button" class="btn btn-danger cancel">Bekor qilish</button>
                                    <button type="submit" class="btn btn-success">Qo'shish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script>
        $(".add").on("click", function () {
            $('.forma').show();
            $('.teachers').hide();
        });

        $(".cancel").on("click", function () {
            event.stopPropagation();
            $('.forma').hide();
            $('.teachers').show();
        });

        @if($errors->any())
        const notyf = new Notyf();

        @foreach ($errors->all() as $error)
        notyf.error({
            message: '{{ $error }}',
            duration: 5000,
            dismissible: true,
            position: {
                x: 'center',
                y: 'top'
            },
        });
        @endforeach

        @endif

        @if(session('success') == 1)
        const notyf = new Notyf();

        notyf.success({
            message: 'Kitob yuklandi!',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif

        @if(session('delete') == 1)
        const notyf = new Notyf();

        notyf.warning({
            message: 'Kitob o\'chirildi!',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif
    </script>
@endsection

