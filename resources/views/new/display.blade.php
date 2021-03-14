@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card p-3">
                    <h5>Add a new display</h5>
                    <form action="{{ route('displays.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Select a Reseller</label>
                            <select required name="reseller" class="form-control">
                                @foreach ($resellers as $reseller)
                                    <option value="{{ $reseller->id }}">{{ $reseller->name }}</option>
                                @endforeach
                            </select>
                            @error('reseller')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Display Name</label>
                            <input name="name" required class="form-control" placeholder="Display Name" />
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Serial Number</label>
                            <input name="serial_number" type="number" required class="form-control" placeholder="Serial Number" />
                            @error('serial_number')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Select a type</label>
                            <select required name="type" class="form-control">
                                <option value="Laser Photo">Laser Photo</option>
                                <option value="Accessorie">Accessorie</option>
                            </select>
                            @error('type')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Product Picture</label>
                            <input name="picture" type="file" required class="form-control" />
                            @error('picture')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary w-100">Create Display</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
