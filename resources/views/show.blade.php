@extends('layouts.home')

@section('content')
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

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
<center><h1 class="title"> Display Details </h1></center><br>

<table>
  <tr>
  	<th>Id</th>
    <th>Name</th>
    <th>Reseller ID</th>
    <th>Serial Number</th>
    <th>Type</th>
  </tr>
  <tr>
    <td> {{ $display->id }}</td>
	  <td> {{ $display->name }}</td>
    <td> {{ $display->reseller_id }}</td>
    <td> {{ $display->serial_number }}</td>
    <td> {{ $display->type }}</td>
  </tr>
</table>
</div>

{{-- <p>
    <a href="/displays/{{ $display->id }}/edit"> Edit Display </a>
</p> --}}

@endsection