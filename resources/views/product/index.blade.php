@extends('frontend')

@section('title','Home')

@section('css')
    @parent
    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('asset/vendor/morrisjs/morris.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="col-lg-2">List</div>
                    <div class="col-lg-10">Add</div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr class="odd gradeX">
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@endsection

@section('js')
    @parent
    <!-- Morris Charts JavaScript -->
    <script src="{{ URL::asset('asset/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('asset/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ URL::asset('asset/data/morris-data.js') }}"></script>
@endsection

