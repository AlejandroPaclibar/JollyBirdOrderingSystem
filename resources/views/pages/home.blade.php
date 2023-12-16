@extends('pages.base')


@section('content')

<div class="box">
    <h3>Jollybird Ordering System</h3>
</div>



<style>
    .box {
        background-color: #eaeaeec2;
        width: 700px;
        display: flex;
        margin-left: 23%;
        justify-content: center;
        align-items: center;
        height: 300px;
        margin-top: 10%;
        box-shadow: 0 30px 60px rgb(36, 36, 37);
        color: rgb(46, 44, 44);

    }
    h3 {
        font-family: 'Quicksand', sans-serif;
        font-size: 40px;
        font-weight: 600;
        letter-spacing: 3px;
        display: flex;
        justify-content: center;

    }

    body {
        background-color: rgb(53, 53, 64);
    }
</style>
@endsection