@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card p-3">
                    <h5>Add a new Reseller</h5>
                    <form action="{{ route('new_reseller') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Reseller Name</label>
                            <input name="name" class="form-control" placeholder="Reseller Name" />
                            <label class="form-label">Reseller Number</label>
                            <input name="number" class="form-control" placeholder="Reseller Number" />
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary w-100">Create Reseller</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
