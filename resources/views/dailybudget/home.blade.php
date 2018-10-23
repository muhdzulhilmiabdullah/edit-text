@extends('layouts.app')

@section('content')


<h1 style="text-align: center; font-style: italic; font-weight: bolder;">DaBug </h1>

<div style="margin-left: 20vh;">
<a href="/dailybudget/add" class="btn btn-success">Add</a>
</div>

<div class="responsive" style="margin: auto;">
<table class="col-md-6">
<thead>
	<tr>
		<th>ID</th>
		<th>Food</th>
		<th>Transport</th>
		<th>Miscellaneous</th>
		<th>Total Expenses</th>
	</tr>
</thead>
<tbody>
	
	<tr>
		<td>{{$item->id</td>
		<td>{{$item->food</td>
		<td>{{$item->transport</td>
		<td>{{$item->miscellaneous</td>
		<td>{{$item->total_expenses</td>
		<form>
		<td>
			<!-- view button -->
			<!-- delete button -->
		</td>
		</form>
	</tr>
	
</tbody>
</table>
</div>


@endsection