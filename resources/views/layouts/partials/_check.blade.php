<div class=" price-box">

    {{ Form::open(array('url' => 'bookings')) }}
    {{Form::label('from', 'CheckIn Date')}}
    {{Form::date('checkInDate', \Carbon\Carbon::now())}}<br>
    {{Form::label('to', 'CheckOut Date')}}
    {{Form::date('checkOutDate', \Carbon\Carbon::now()->addDays(2))}}
    <br>
    {{Form::label('noa', 'Adults')}}
    {{Form::selectRange('number',1,8)}}
    {{Form::label('noc', 'Children')}}
    {{Form::selectRange('number',0,7)}}
    <br>
    {{Form::submit('Check availability')}}
    {{ Form::close() }}
</div>