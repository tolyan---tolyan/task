@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

           

            <div class="panel panel-default">
                <div class="panel-heading">Show employee {{ $employee->id }} </div>

                <div class="panel-body">
                    
                    {{ $employee->id }} <br>
                    {{ $employee->surname }} <br>
                    {{ $employee->name }} <br> 
                    {{ $employee->patronymic }} <br>
                    {{ $employee->birthday }} <br>
                    {{ $employee->position }} <br>
                    {{ $employee->salary }} <br>
                   
                </div>
            </div>
            
          


        </div>
    </div>
</div>
@endsection
