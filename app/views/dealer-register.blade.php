@extends('dealers-layout')

@section('content')
<h2>Dealership Account</h2>
{{ Form::model($dealer) }}
    {{ Form::token() }}
    {{ Form::label('name', 'Dealership Name') }}
    {{ Form::text('name') }}

{{ Form::submit('Register') }}
{{ Form::close() }}
<script>
    var errors = {{ $errors }};

    if (Object.keys(errors).length !== 0) {
        var output = '';
        for (p in errors) {
            for (var i=0; i<errors[p].length; i++) {
                output += errors[p][i] + "\n";
            }
        }
        alert(output);
    }

</script>
@stop