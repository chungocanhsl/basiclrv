@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">

                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>

                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
                </tbody>
            </table>

            <div>
                <form action="/orderplace" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Paymen Method</label> <br>
                        <input type="radio" name="payment" value="cash"><span> Online payment</span><br><br>
                        <input type="radio" name="payment" value="cash"><span> EMI payment</span><br><br>
                        <input type="radio" name="payment" value="cash"><span> Payment on delivery</span>
                    </div>

                    <button type="submit" class="btn btn-default">Order Now</button>
                </form>
            </div>

        </div>
    </div>
@endsection