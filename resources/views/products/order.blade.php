<x-layout>
    <div class="container">
        <div class="col-sm-10 pb-4">
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
                        <td>${{$total+10}}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST">
                  @csrf  
                    <div class="mb-3 mt-3">
                        <textarea class="form-control"  placeholder="Enter your address" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="payment" class="form-label fw-bold">Payment Method</label>
                        <p>
                            <input type="radio" value="online" name="payment"><span> Online Payment</span><br>
                            <input type="radio" value="emi" name="payment"><span> EMI Payment</span><br>
                            <input type="radio" value="cash" name="payment"><span> Payment on delivery</span>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>