@extends('layouts.app')

{{--@section('title', '| Edit Permission')--}}

@section('content')

    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-key'></i> Edit {{$permission->name}}</h1>
        <br>
        {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}

        <div class="form-group">
            {{ Form::label('name', 'Permission Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        @if(!$roles->isEmpty())
            <h4>Assign Permission to Roles</h4>
            @foreach ($roles as $role)
                {{ Form::checkbox('roles[]',  $role->id ) }}
                {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            @endforeach
        @endif
        <br>
        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@endsection