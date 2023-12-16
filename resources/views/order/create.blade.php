
@extends('pages.base')

@section('content')


    <h1>Add new order</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('orders/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="customer_id">Select Customer</label>
                  <select name="customer_id" id="customer_id" class="form-select">
                      <option hidden="true">Select Customer</option>
                      <option selected disabled>Select Customer</option>
                      @foreach ($customers as $customer_id => $customer)
                          <option value="{{$customer_id}}">{{$customer}}</option> 
                      @endforeach
                  </select>
                  @error('customer_id')
                  <p class="text-danger">{{$message}}</p>
                  @enderror

                 </div>
                 <div class="form-group mt-2">
                  <label for="order_number">Order Number</label>
                  <input class="form-control" type="text" name="order_number">
                  @error('order_number')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>
                  <div class="form-group mt-2">
                    <label for="order_date">Order Date</label>
                    <input class="form-control" type="date" name="order_date">
                    @error('order_date')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="total_amount">Total Amount</label>
                    <input class="form-control" type="number" name="total_amount" step="0.01">
                    @error('total_amount')
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

