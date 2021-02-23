<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<table class="table">
    <thead>
        <tr>
            <th>Code</th>
            <th>family_name</th>
            <th>first_name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$user->employee_code}}</td>
            <td>{{$user->family_name}}</td>
            <td>{{$user->first_name}}</td>
        </tr>
    </tbody>
</table>
<div class="row">
    <div class="col-md-6">sss</div>
    <div class="col-md-6">bbb</div>
</div>
