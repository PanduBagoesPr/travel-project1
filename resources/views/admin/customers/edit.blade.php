@extends('admin.layout.base')
@section('content')

<div class="content">
    <div class="panel-body">
        <form action="/customer/update/{{$customer->id}}" method="post">
            <fieldset>
                <legend class="m-b-15">Edit Data</legend>
                @csrf
                @method('PUT')
                <div class="form-group">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" class="form-control"  value= "{{ $customer->name }}"  />
                </div>
                <div class="form-group">
                    <label for="datebirth">Datebirth</label>
                    <input type="date" class="form-control" value= "{{ $customer->datebirth }}"  />
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value= "{{ $customer->address }}"  />
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="number" class="form-control" value= "{{ $customer->telp  }}" />
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" value= "{{ $customer->city }}" />
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" value= "{{ $customer->province }}"  />
                </div>
                <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection