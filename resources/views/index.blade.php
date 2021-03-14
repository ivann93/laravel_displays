@extends('layouts.home')

@section('content')

<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    <div class="container">
        <center><h1>All Displays</h1></center>
            {{-- <div class="sidebar">
                <p>Reseller List</p>
                <a class="{{ !isset($current_reseller) ? 'selected' : '' }}" href="/">All resellers</a>
                @foreach ($resellers as $reseller)
                    <a href="/reseller/{{ $reseller->id }}"
                        class="{{ isset($current_reseller) && $current_reseller->id === $reseller->id ? 'selected' : '' }}">
                        {{ $reseller->name }}
                    </a>
                @endforeach
            </div> --}}
            <div class="content-wrapper">
                <div class="row">
                    <table>
                      <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Delete</th>
                      </tr>
                      <tr>
                        @foreach ($displays as $display)
                        <td><a href="{{ route('displays.show', $display->id) }}">{{ $display->name }}</a></td>
                        <td><img class="display-file_path" src="/storage/uploads/{{ $display->file_path }}" /></td>
                        <form method="POST" action="{{ route('displays.destroy', $display->id) }}">
                            <td>
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="button is-link">Delete Display</button>
                            </td> 
                       </form>
                      </tr>

                         @endforeach
                    </table>

                </div>
            </div>
        
    </div>
@endsection
