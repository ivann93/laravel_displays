@extends('layout')

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

<center><h1 class="title"> Display Details </h1></center><br>
<table>
  <tr>
  	<th>Serial Number</th>
    <th>Type</th>
  </tr>
  <tr>
  	<td>{{ $display->id }}</td>
	  <td>{{ $display->name }}</td>
  </tr>
</table>


@endsection