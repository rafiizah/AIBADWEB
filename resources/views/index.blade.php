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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://skylightanimation.github.io/assets/plugin/bootstrap/3.3.7/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="{{asset('resources/css/style.css')}}" />

<body>
    <div class="container" id="search_list" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center text-danger">AIBAD</h1>
                <hr>
                <div class="form-group">
                    <H2>Assistant Information Based on Agile Development</H2>
                    <input type="text" name="search" id="search" placeholder="Enter search name" class="form-control" onfocus="this.value=''">
                </div>
                <table class="table table-borderless" id="myTable">
                    <tbody>
                        @foreach($data as $row)
                        <tr class="show_hide">
                            <td>
                                <div class="card-body">
                                    <h5 class="card-title">{{$row->author}}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{$row->source}}</h6>
                                    <p class="card-text">{{$row->quotes}}</p>
                            <td>
                                <span class="input-group-btn">
                                    <button class="btn btn-primary copy-btn" type="button" onclick="copyTextc('{{$row->quotes}}')">
                                        <span class="fa fa-copy"></span>
                                    </button>
                                </span>
                            </td>
            </div>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-3"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://skylightanimation.github.io/assets/plugin/jquery/jquery-3.4.1.min.js">
    </script>
    <script>
        $(document).ready(function() {

            $("#search").on("keyup", function() {
                // If value is not empty
                if ($(this).val().length == 0) {
                    // Hide the element
                    $('.show_hide').hide();
                } else {
                    // Otherwise show it
                    $('.show_hide').show();
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                }
            }).keyup();
        });
    </script>
    <!-- <script>
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
    </script> -->
    <script>
        function copyTextc(text) {
            // Buat elemen textarea baru
            var textarea = document.createElement('textarea');
            // Set teks dari textarea
            textarea.value = text;
            // Sembunyikan textarea
            textarea.style.position = 'fixed';
            textarea.style.left = '-9999px';
            textarea.style.top = '-9999px';
            // Tambahkan elemen textarea ke dokumen
            document.body.appendChild(textarea);
            // Pilih teks dalam textarea
            textarea.select();
            // Salin teks yang dipilih
            document.execCommand('copy');
            // Hapus elemen textarea
            document.body.removeChild(textarea);
        }
    </script>
</body>

</html>