
@extends('pages.base')

@section('content')

@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{url('/payment_transactions/create')}}" class="btn btn-primary me-md-2" type="button" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
          </svg>
    </a>
  </div>
  <table class="table table-hover table-dark table-bordered border-secondary ">
    <thead class="table-primary">
        <th>id</th>
        <th>Order</th>
        <th>Transaction Date</th>
        <th>Amount</th>
        <th>Payment Method</th>
        <th>Transaction Status</th>
        <th>Edit</th>

    </thead>
    <tbody>
        @foreach ($payment_transactions as $payment_transaction)
            <tr>
              <td>{{$payment_transaction->id}}</td>
              <td>{{$payment_transaction->order->order_number}}</td>
              <td>{{$payment_transaction->transaction_date}}</td>
              <td>{{$payment_transaction->amount}}</td>
              <td>{{$payment_transaction->payment_method}}</td>
              <td>{{$payment_transaction->transaction_status}}</td>
              <td class="text-center">
                <a href="{{url('/payment_transactions/'.$payment_transaction->id)}}" class="btnn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg></a>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
    .btn{
        margin-bottom: 20px
    }
    body {
        background-color: rgb(53, 53, 64);
    }
</style>

@endsection

