@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>Code</th>
            <th>family_name</th>
            <th>first_name</th>
        </tr>
    </thead>
    <?php foreach ($users as $key=> $value):?>
    <tbody>
        <tr>
            <td>{{$value->employee_code}}</td>
            <td>{{$value->family_name}}</td>
            <td>{{$value->first_name}}</td>
        </tr>
    </tbody>
    <?php endforeach;?>
</table>
@endsection
