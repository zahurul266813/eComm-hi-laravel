@extends('master')
@section('content')

<div class="custom-products">
    <div class="col-sm-10">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Price</th>
              <th>{{$total}} Rupee</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tax</td>
              <td>0 Rupee</td>
              
            </tr>
            <tr>
              <td>Delivery Charge</td>
              <td>100 Rupee</td>
              
            </tr>
            <tr>
              <td>Total</td>
              <td>{{$total+100}}</td>
              
            </tr>
          </tbody>
        </table>


      <form action="/orderplace" method="POST">
        <div class="form-group">
          @csrf
          <textarea class="form-control" name="address" id="" placeholder="Address"></textarea>
        </div>
        <div class="form-group">
          <label for="">Payment Method</label>
          <p><input type="radio" value="cash" name="payment" id=""><span> Online Payment</span></p>
          <p><input type="radio" value="cash" name="payment" id=""><span> EMI Payment</span></p>
          <p><input type="radio" value="cash" name="payment" id=""><span> Cash On Delivery</span></p>
        </div>
        <button type="submit" class="btn btn-default">Order Now</button>
      </form>
    </div>


</div>

@endsection





















  