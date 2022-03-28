<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Boshqaruv Paneliga o`tish</h4>
                                    <form action="{{ route('admin-check') }}" method="post">
                                        @csrf
                                        @method('post')
                                        <div class="form-group">
                                            <label><strong>Kalit so`z</strong></label>
                                            <input type="key" name="key" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Qiymat</strong></label>
                                            <input type="text" name="value"  class="form-control">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Kirish</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Eger Admin Bolmasan`iz <a class="text-primary" href="{{ route('home')}}">Bas Bet</a></p>
                                    </div>
                                    <div class="new-account mt-3">
                                        <h1 class="h4 danger">
                                            @isset($error)
                                                {{ $error }}
                                            @endisset
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

</body>

</html>