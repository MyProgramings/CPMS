//laravelproject\resources\views\autocomplete.blade.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 9 Autocomplete Search using Typeahead JS</title>
    @include('users.links')
</head>
<body>
<div class="container mt-5">
    <p>
    <h1>Laravel 9 Autocomplete Search using Typeahead JS</h1></p>
    <div classs="form-group" style="width: 500px;">
        <input type="text" id="search" name="search" placeholder="Search" class="form-control"/>
    </div>
</div>

</script>
<script type="text/javascript">
    var route = "{{ url('autocomplete-users') }}";
    $('#search').typeahead({
        source: function (query, process) {
            return $.get(route, {
                query: query
            }, function (data) {
                return process(data);
            });
        }
    });
</script>
</body>
</html>
