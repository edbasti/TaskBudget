@extends('layouts.master')

@section('content')
<h1>Add a Budget</h1>
<p class="lead">Add to your budget list below.</p>
<hr>
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
{!! Form::open([
    'route' => 'savings.store'
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
    {!! Form::label('title', 'Amount:', ['class' => 'control-label']) !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Budget', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@stop