@extends('layouts.template')


@section('contenido')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">NAVIERAS</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>NAVIERA</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tbody>
                    @foreach($navieras as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nombre}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
