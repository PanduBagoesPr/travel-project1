@extends('admin.layout.base')
@section('content')

<div class="content">
    <div class="panel-body">
        <form action="{{ url ('/booking/storebooking') }}" method="POST">
            <fieldset>
                <legend class="m-b-15">Add Data</legend>
                <div class="form-group">
                @csrf
                    <label for="code booking">Code Booking</label>
                    <input name="codebooking" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    {!! Form::label('Customer') !!}<br />
                    {!! Form::select('form_customer_id',
                    $customer, null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Package') !!}<br />
                    {!! Form::select('form_packages_id',
                    $packages, null, ['class' => 'form-control']) !!}
                </div>
                <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection