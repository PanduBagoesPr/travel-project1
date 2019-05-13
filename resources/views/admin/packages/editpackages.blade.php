@extends('admin.layout.base')
@section('content')

<div class="content">
    <div class="panel-body">
        <form action="{{ url ('/packages/updatepackages') }}/{{$packages->id}}" method="POST">
            <fieldset>
                <legend class="m-b-15">Edit Data</legend>
                <div class="form-group">
                    @csrf
                    @method('PUT')
                    <label for="code package">Code Packages</label>
                    <input name="codepackage" type="text" class="form-control"  value= "{{ $packages->codepackage }}"  />
                </div>
                <div class="form-group">
                    <label for="name package">Name Packages</label>
                    <input name="namepackage" type="text" class="form-control" value= "{{ $packages->namepackage }}"  />
                </div>
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input name="destination" type="text" class="form-control" value= "{{ $packages->destination }}"  />
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="number" class="form-control" value= "{{ $packages->price  }}" />
                </div>
                <div class="form-group">
                    <label for="departure time">Departure Time</label>
                    <input name="departure_time" type="time" class="form-control" value= "{{ $packages->departure_time }}" />
                </div>
                <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection