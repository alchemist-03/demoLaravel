<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<script src="{{asset('/js/jquery.min.js')}}"> </script>

    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fontawesome/css/all.min.css')}}">
</head>
<body>
<div class="container ">
    @yield('main')
</div>


<script src="{{asset('/js/bootstrap.min.js')}}"> </script>
<script src="{{asset('/fontawesome/js/all.min.js')}}"> </script>
<script>
    $(document).ready(function () {
        $('.btn-delete').on('click',function (e) {
            e.preventDefault();
            $('#deleteModal').modal('show');
             item = $(this).attr('item-name');
             deleteUrl = $(this).parent('form').attr('action');
             $('.modal-body').text('Are you sure you want to delete this flight with aircraft ID: ' + item);
            $('#deleteConfirm').on('click',function () {
                $.ajax({
                    url: deleteUrl,
                    type: 'POST',
                    data: {
                        _method: 'DELETE',
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        $('#notify-box').html('<div class="alert text-center alert-success" role="alert"> The flight has been deleted successfully!  </div>')
                    },
                    error: function (xhr) {
                        //$('#notify-box').html('<div class="alert text-center alert-danger" role="alert"> Something went wrong!  </div>')

                    }
                });

                $('#deleteModal').modal('hide');
            });
            });
        });
    // })
</script>

</body>
</html>
