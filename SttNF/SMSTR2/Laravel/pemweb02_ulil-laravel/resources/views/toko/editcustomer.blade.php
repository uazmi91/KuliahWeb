@extends('tamplate.admin')

@section('content')
    <h1>Edit Customer</h1>
    <form action="{{ route('produk.updatecus', $customer) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}">
        </div>
        <div class="form-group">
            <label for="price">Alamat:</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}">
        </div>
        <div class="form-group">
            <label for="description">Nomor Telepon:</label>
            <input type="number" name="no_hp" id="no_hp" class="form-control" value="{{ $customer->no_hp }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection