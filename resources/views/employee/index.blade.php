@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Employees</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Surname </th>
                            <th>Name </th>
                            <th>Patronymic </th>
                            <th>Birthday </th>
                            <th>Position </th>
                            <th>Salary </th>

                            <th>Action</th>
                        </tr>
                   
                        @foreach($employees as $employee)
                            <tr>
                                <td> {{ link_to_route('employee.show', $employee->id, [$employee->id]) }} </td>
                                <td> {{ $employee->surname}} </td>
                                <td> {{ $employee->name}} </td>
                                <td> {{ $employee->patronymic}} </td>
                                <td> {{ $employee->birthday}} </td>
                                <td> {{ $employee->position}} </td>
                                <td> {{ $employee->salary}} </td>
                               
                                
                                
                                <td> 
                                {!! Form::open(array('route' => ['employee.destroy', $employee->id], 'method' => 'DELETE')) !!}
                                 
                                     {{ link_to_route('employee.edit', 'Edit',[$employee->id],['class' => 'btn btn-primary'])}}  
                                    |
                                   
                                     {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach


                    </table>


                </div>
            </div>
            {{ link_to_route('employee.create', 'Add new employee',null,['class' => 'btn btn-success'])}} 

        </div>
    </div>
</div>
@endsection
