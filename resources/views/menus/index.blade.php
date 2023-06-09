@extends('layouts.master')

@section('css')
    @toastr_css
@stop

@section('title')
    Add Menu
@stop

{{--@section('page-header')--}}
{{--    <!-- breadcrumb -->--}}
{{--@section('PageTitle')--}}
{{--    {{trans('main_trans.Add_Rabbits')}}@stop--}}
{{--<!-- breadcrumb -->--}}
{{--@endsection--}}
@section('content')
    <!-- row -->
    <div class="row">


        @if ($errors->any())
            <div class="error">{{ $errors->first('Name') }}</div>
        @endif



        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('alert'))
                        <div class="alert alert-success" style="position: fixed; top: 15px; left: 7px;  z-index: 9999999;">
                            {{ session()->get('alert') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                        Add Menu
                    </button>
                        <br><br>

                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>details</th>
                                <th>price</th>
                                <th>image</th>
                                <th>process</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach($menus as $item)


                            <tr>

                                    <?php $i++; ?>
                                    <td>{{$i}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->details}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->image}}</td>



                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{$item->id}}" title="edit"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{$item->id}}" title="delete"><i class="fa fa-trash"></i></button>

                                    </td>
                                </tr>

                                 @include('menus.edit')
                                <!-- edit_modal_Grade -->

                                 @include('menus.delete')
                                <!-- delete_modal_Grade -->

                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- add_modal_Grade -->
        @include('menus.create')
    </div>

    <!-- row closed -->
@endsection




@section('js')
    @toastr_js
    @toastr_render
@endsection
