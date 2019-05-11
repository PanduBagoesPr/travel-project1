@extends('admin.layout.base')
@section('content')

<div class="content">
    <div class="panel panel-inverse" data-sortable-id="table-basic-7">
        <!-- begin panel-heading -->
        <div class="panel-heading">
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
            <h4 class="panel-title">UI Elements in Table <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <!-- begin table-responsive -->
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Date Birth</td>
                    <td>Address</td>
                    <td>Telp</td>
                    <td>City</td>
                    <td>Province</td>
                    <td>Action</td>
                    <td>
                  </tr>
                  <div class="pull-right">
                  <a href="{{ url ('/customer/add') }}" class="btn btn-primary">Add Data</a>
                  @php $no = 1; 
                  @endphp
                  @foreach($form_customer as $datas)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$datas->name }}</td>
                        <td>{{$datas->datebirth }}</td>
                        <td>{{$datas->address }}</td>
                        <td>{{$datas->telp }}</td>
                        <td>{{$datas->city }}</td>
                        <td>{{$datas->province }}</td>
                        <td class="with-btn-group" nowrap>
                          <a href="/customer/edit/{{$datas->id}}" class="btn btn-sm btn-primary m-r-2">Edit</a>
                          <a href="/customer/destroy/{{$datas->id}}" class="btn btn-sm btn-white m-r-2">Delete</a>
                        </td>
                      </tr>
                  @endforeach
                  </tr>
                </thead>
             </table>
            </div>
            <!-- end table-responsive -->
        </div>
        <!-- end panel-body -->
    </div>
</div>
</div>

@endsection