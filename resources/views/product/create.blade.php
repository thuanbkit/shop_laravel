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
                    Add
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" method="POST" class="form" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" class="form-control" placeholder="name product">
                                </div>

                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" name="photo">

                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="categories_id">
                                        <option>apple</option>
                                        <option>Milk</option>
                                        <option>Cosmetic</option>
                                    </select>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
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

