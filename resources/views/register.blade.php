<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}">
</head>
<body>
    <div style="width: 100%; text-align: center">
        <h1>Register</h1>
    </div>

    <form class="form">
        <label>
            <strong>Name:</strong>
        </label>
        <br>
        <input type="text" style="border: 1px solid grey">

        <br>
        <br>

        <label>
            <strong>Email:</strong>
        </label>
        <br>
        <input type="email" style="border: 1px solid grey">

        <br>
        <br>

        <label>
            <strong>Password:</strong>
        </label>
        <br>
        <input type="password" style="border: 1px solid grey">

        <br>
        <br>

        <label>
            <strong>Confirm Password:</strong>
        </label>
        <br>
        <input type="password" style="border: 1px solid grey">

        <br>
        <br>

        <button type="submit" style="cursor: pointer; width: 50%; background: lightblue; border: none">
            Register
        </button>
    </form>
</body>
</html>

{{-- <x-header/>
    <x-navigation/>

    <x-body>
        This is a body
    </x-body>
<x-footer/> --}}

{{-- @if()
        <p>Email is required!</p>
    @endif

    @foreach()
        <tr>Rows</tr>
    @endforeach

    @switch()
        @case()
            @break

        @default
            @break
    @endswitch --}}
