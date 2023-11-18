@extends('admin.header_footer')

@section('foreign')
    active
@endsection

@section('section')
    <main class="content teachers">
        <div class="container-fluid p-0">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mb-0">Xorijiy adabiyotlar</h5>
                        <button class="btn btn-primary add"><i class="align-middle" data-feather="user-plus"></i> Qo'shish</button>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Ism</th>
                            <th>Telefon</th>
                            <th>Fan</th>
                            <th>Login</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset('img/avatars') }}/{{ $item->photo }}" width="35" height="35" class="rounded-circle me-2" alt="Avatar"> {{ $item->name }}
                                </td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->subject }}</td>
                                <td>{{ $item->username }}</td>
                                <td id="{{ $item->username }}" data="{{ $item->name }}" class="edit-btn" style="cursor: pointer"><i class="align-middle" data-feather="edit-2"></i></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('js')
    <script>
        $(".add").on("click", function() {
            $('.forma').show();
            $('.teachers').hide();
        });

        $(".cancel").on("click", function() {
            event.stopPropagation();
            $('.forma').hide();
            $('.teachers').show();
        });
    </script>
@endsection

