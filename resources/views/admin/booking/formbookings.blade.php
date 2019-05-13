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
                    <td>Code Booking</td>
                    <td>No Customers</td>
                    <td>No Packages</td>
                    <td>Action</td>
                    <td>
                  </tr>
                  <div class="pull-right">
                  <a href="{{ url ('/booking/addbooking') }}" class="btn btn-primary">Add Data</a>
                  @php $no = 1; 
                  @endphp
                  @foreach($form_bookings as $datas)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$datas->codebooking }}</td>
                        <td>{{$datas->form_customer_id }}</td>
                        <td>{{$datas->form_packages_id }}</td>
                        <!-- <td>{{$datas->price }}</td>
                        <td>{{$datas->departure_time }}</td> -->
                        <td class="with-btn-group" nowrap>
                          <a href="{{ url ('/booking/editbooking') }}/{{$datas->id}}" class="btn btn-sm btn-primary m-r-2">Edit</a>
                          <a href="{{ url ('/booking/destroybooking') }}/{{$datas->id}}" class="btn btn-sm btn-white m-r-2">Delete</a>
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