
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />


    <title>Admin | Ideal Study</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Admin</h1>
                        <p class="lead">
                            kreativ-pedagog.uz
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="{{ asset('img/logo.png') }}" alt="Charles Hall" class="img-fluid " width="250"  />
                                </div>
                                <form action="{{ route('admin.auth') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Login</label>
                                        <input  class="form-control form-control-lg" type="text" name="username" placeholder="Loginingizni kiriting..." />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Parol</label>
                                        <input  class="form-control form-control-lg" type="password" name="password" placeholder="Parolingizni kiriting..." />
                                        <small>
                                            <a href="#">Parolingizni unutdingizmi?</a>
                                        </small>
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                            <span class="form-check-label">
              Meni eslab qol
            </span>
                                        </label>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Kirish</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<script src="../js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<script>
    @if(session('login_error') == 1)
        const notyf = new Notyf();

        notyf.error({
            message: 'Login yoki parol xato!',
            duration: 5000,
            dismissible : true,
            position: {
                x : 'right',
                y : 'bottom'
            },
        });
    @endif

    @if($errors->any())
        const notyf = new Notyf();

        @foreach ($errors->all() as $error)
            notyf.error({
                message: '{{ $error }}',
                duration: 5000,
                dismissible: true,
                position: {
                    x : 'right',
                    y : 'bottom'
                },
            });
        @endforeach

    @endif
</script>

<div class="notyf" style="justify-content: flex-start; align-items: center;"></div>
<div class="notyf-announcer" aria-atomic="true" aria-live="polite" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; outline: 0px;">Inconceivable!</div>
</body>

</html>
