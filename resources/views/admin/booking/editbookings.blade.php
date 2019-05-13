@extends('admin.layout.base')
@section('content')

<div class="content">
    <div class="panel-body">
        <form action="{{ url ('/booking/updatebooking') }}/{{$booking->id}}" method="POST">
            <fieldset>
                <legend class="m-b-15">Edit Data</legend>
                <div class="form-group">
                    @csrf
                    @method('PUT')
                    <label for="code booking">Code Booking</label>
                    <input name="codebooking" type="text" class="form-control"  value= "{{ $booking->codebooking }}"  />
                </div>
                <div class="form-group">
                    <label for="customer">Customer</label>
                    <select name="form_customer_id" class="form-control">
                        @foreach($customer as $idcust)
                            <?php if($idcust->id == $booking->form_customer_id){
                            ?> <option selected="selected" value="{{ $idcust->id }}">{{ $item->form_customer_id }}</option>
                            <?php } else {
                            ?> <option value="{{ $idcust->id }}">{{ $item->form_customer_id }}</option>
                            <?php } ?>
                        @endforeach
                    </select>
                </div>
                <!-- <div class="form-group">
                    <label for="destination">Destination</label>
                    <input name="destination" type="text" class="form-control" value= "{{ $packages->destination }}"  />
                </div> -->
                <!-- <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" type="number" class="form-control" value= "{{ $packages->price  }}" />
                </div>
                <div class="form-group">
                    <label for="departure time">Departure Time</label>
                    <input name="departure_time" type="time" class="form-control" value= "{{ $packages->departure_time }}" />
                </div> -->
                <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
            </fieldset>
        </form>
    </div>
</div>

@endsection