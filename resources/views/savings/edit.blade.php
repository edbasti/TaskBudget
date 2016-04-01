@extends('layouts.master')

@section('content')

<h1>Editing "{{ $saving->description }}"</h1>
<p class="lead">Edit and save this budget below, or <a href="{{ route('savings.index') }}">go back to all budget.</a></p>
<hr>

@include('partials.alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::model($saving, [
    'method' => 'PATCH',
    'route' => ['savings.update', $saving->id]
]) !!}
<div class="form-group">
    <select class="form-control" name="code" id="code">
        @foreach($periods as $period)
            <option value="{{$period->id}}">{{$period->description}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <select class="form-control" name="category" id="category">
            <option value="asset">asset</option>
            <option value="expense">expense</option>
    </select>
</div>

<div class="form-group">
    {!! Form::label('amount', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Budget', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop