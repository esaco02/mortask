<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('/plugins/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}" />
    <script type="text/javascript">
        var apptoken = "{{ csrf_token() }}";
    </script>
</head>

<body>
    <div class="container">
        <br />
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>Youtube</h2>
                <div class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search" id="tbxSearch">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" id="btnSearch">Search</button>
                        </div>
                        <!--end of col-->
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-1" >
                <ul class="list-unstyled video-list-thumbs row" id="results">

                </ul>
            </div>            
            <!--end of col-->
        </div>
    </div>

</body>
<!-- Scripts -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

</html>