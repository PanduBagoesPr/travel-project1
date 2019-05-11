@extends('admin.layout.base')
@section('content')

<div class="content">
    <div class="panel-body">
        <form action="{{ url ('/customer/store') }}" method="POST">
            <fieldset>
                <legend class="m-b-15">Add Data</legend>
                <div class="form-group">
                @csrf
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="datebirth">Datebirth</label>
                    <input name="datebirth" type="date" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input name="telp" type="number" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input name="city" type="text" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input name="province" type="text" class="form-control" />
                </div>
                <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection