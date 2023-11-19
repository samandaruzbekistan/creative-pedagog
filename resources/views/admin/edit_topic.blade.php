@extends('admin.header_footer')

@section('topic')
    active
@endsection

@section('section')

    <main class="content">
        <div class="container-fluid p-0">
            <div class="">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Taxririlash</h5>
                    </div>
                    <div class="card-body h-100">
                        <form action="{{ route('admin.topic.update') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Mavzu <span class="text-danger">*</span></label>
                                <input name="title" required type="text" class="form-control" value="{{ $topic->title }}" placeholder="">
                            </div>
                            <input type="hidden" name="id" value="{{ $topic->id }}">
                            <div class="mb-3">
                                <label class="form-label">Maqola</label>
                                <textarea name="editor" id="editor" cols="30" rows="10">{{ $topic->body }}</textarea>
                            </div>
                            <div class=" text-end">
                                <button type="submit" class="btn btn-success">Yangilash</button>
                            </div>
                        </form>
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
            message: 'Maqola yuklandi!',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif

        @if(session('update') == 1)
        const notyf = new Notyf();

        notyf.warning({
            message: 'Maqola yangilandi!',
            duration: 10000,
            dismissible: true,
            position: {
                x: 'right',
                y: 'bottom'
            },
        });
        @endif
    </script>

    <script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('imgUpload', ['_token'=> csrf_token()]) }}",
            filebrowserUploadMethod: "form"
        });
    </script>
@endsection

