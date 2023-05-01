<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://skylightanimation.github.io/assets/plugin/jquery/jquery-3.4.1.min.js">
</script>
<script type="text/javascript" src="https://skylightanimation.github.io/assets/plugin/jquery/jquery-3.4.1.min.js">
</script>
<script type="text/javascript" src="https://skylightanimation.github.io/assets/plugin/bootstrap/3.3.7/bootstrap.min.js">
</script>
<script type="text/javascript" src="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live-Search</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://skylightanimation.github.io/assets/plugin/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://skylightanimation.github.io/assets/plugin/bootstrap/3.3.7/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}" />

    {{-- SweetAlert CSS
    <link rel="stylesheet" href="{{ asset('node_modules/sweetalert2/dist/sweetalert2.min.css') }}"> --}}

</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center text-danger">AIBAD</h1>
                <hr>
                <div class="form-group">
                    <H2>Assistant Information Based on Agile Development</H2>
                    <input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''">
                </div>
                <div id="search_list">
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    {{-- @section('content') --}}
    {{-- @extends('layouts.app')
    @include('layouts.sweetalert ') --}}

    {{-- SweetAlert --}}
    <script>
        Swal.fire({
            title: 'AIBAD',
            text: 'Terimakasih telah mengunjungi AIBAD!',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>

    {{-- Ajax --}}
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "search",
                    type: "GET",
                    data: {
                        'search': query
                    },
                    success: function(data) {
                        $('#search_list').html(data);
                    }
                });
                //end of ajax call
            });
        });

        function copyText() {
            var copyText = document.getElementById("text-copy");
            copyText.select();
            document.execCommand("copy");
        }
    </script>




</body>

</html>
