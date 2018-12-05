@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm--offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    {{--Display Validation Errors--}}
                    @include('common.errros')

                    {{--New Task Form--}}
                    <form action="{{url('task')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}

                        {{--Task Name--}}
                        <div calss="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control">
                            </div>
                        </div>

                        {{--Add Task Buttom--}}
                    </form>
                </div>
            </div>
        </div>
    </div>