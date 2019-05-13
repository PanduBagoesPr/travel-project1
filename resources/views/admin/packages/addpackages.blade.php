@extends('admin.layout.base')
@section('content')

<div class="content">
    <div class="panel-body">
        <form action="{{ url ('/packages/storepackages') }}" method="POST">
            <fieldset>
                <legend class="m-b-15">Add Data</legend>
                <div class="form-group">
                @csrf
                    <label for="code package">Code Package</label>
                    <input name="codepackage" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="name package">Name Package</label>
                    <input name="namepackage" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input name="destination" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="departure time">Departure Time</label>
                    <input name="departure_time" type="time" class="form-control" />
                </div>
                <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection