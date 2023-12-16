
@extends('pages.base')

@section('content')

    <h1>New Payment</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('payment_transactions/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="order_id">Select Order</label>
                  <select name="order_id" id="order_id" class="form-select">
                      <option hidden="true">Select Order</option>
                      <option selected disabled>Select Order</option>
                      @foreach ($orders as $order_id => $order)
                          <option value="{{$order_id}}">{{$order}}</option> 
                      @endforeach
                  </select>
                  @error('order_id')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>
                  <div class="form-group mt-2">
                    <label for="transaction_date">Transaction Date</label>
                    <input class="form-control" type="date" name="transaction_date">
                    @error('transaction_date')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="amount">Amount</label>
                    <input class="form-control" type="number" name="amount">
                    @error('amount')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="payment_method">Payment Method</label>
                    <input class="form-control" type="text" name="payment_method">
                    @error('payment_method')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="transaction_status">Transaction Status</label>
                    <input class="form-control" type="text" name="transaction_status">
                    @error('transaction_status')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0"/>
                      </svg></button>         
                  </div>
            </form>
        </div>
    </div>


<style>
  .bi {
    padding: 0;
  }
  body {
        background-color: rgb(53, 53, 64);
    }
    label {
      color: white;
    }
</style>
@endsection
