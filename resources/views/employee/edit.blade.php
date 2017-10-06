@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }} </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Update employee</div>

                <div class="panel-body">
                    
                    
                    {!! Form::model($employee, array('route' => ['employee.update', $employee->id], 'method' => 'PUT')) !!}
                        
                        <div class = "form-group">
                            {!! Form::label('surname','Enter surname') !!}
                            {!! Form::text('surname', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group">
                            {!! Form::label('name','Enter name') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group">
                            {!! Form::label('patronymic','Enter patronymic') !!}
                            {!! Form::text('patronymic', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group">
                            {!! Form::label('birthday','Enter birthday') !!}
                            {!! Form::text('birthday', null, ['class' => 'form-control']) !!}
                        </div>

                         <div class = "form-group">
                            {!! Form::label('position','Enter position') !!}
                            {!! Form::text('position', null, ['class' => 'form-control']) !!}
                        </div>

                         <div class = "form-group">
                            {!! Form::label('salary','Enter salary') !!}
                            {!! Form::text('salary', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class = "form-group">
                            {!! Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            
            @if ( count( $errors ) > 0 )
                <ul class = "aler alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif


        </div>
    </div>
</div>
@endsection
