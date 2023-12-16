
@extends('pages.base')

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete order - {{$payment_transaction->payment_method}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('payment_transactions/delete/' . $payment_transaction->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-body">
          Are you sure you want to cancel the transaction?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" >Cancel transaction</button>
        </div>  
      </form>
    </div>
  </div>
</div>





    <h1>Edit Payment</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('/payment_transactions/' . $payment_transaction->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="order_id">Select Order</label>
                    <select name="order_id" id="order_id" class="form-select">
                        <option value="{{$payment_transaction->order->id}}">{{$payment_transaction->order->order_number}}</option>
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
                    <input class="form-control" type="date" name="transaction_date" value="{{$payment_transaction->transaction_date}}">
                    @error('transaction_date')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="amount">Amount</label>
                    <input class="form-control" type="number" name="amount" value="{{$payment_transaction->amount}}">
                    @error('amount')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="payment_method">Payment Method</label>
                    <input class="form-control" type="text" name="payment_method" value="{{$payment_transaction->payment_method}}">
                    @error('payment_method')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group mt-2">
                    <label for="transaction_status">Transasction Method</label>
                    <input class="form-control" type="text" name="transaction_status" value="{{$payment_transaction->transaction_status}}">
                    @error('transaction_status')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                      <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                    </svg></button>
                    <button class="btn btn-primary me-md-2 mt-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                      </svg></button>
                  </div>
            </form>
        </div>
    </div>

    <style>
      body {
            background-color: rgb(53, 53, 64);
        }
        label {
          color: white;
        }
    </style>
@endsection