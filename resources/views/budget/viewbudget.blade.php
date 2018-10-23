@extends('layouts.app')

@section('content')
 

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
 
<div align="center">
<p>ID: {{$id}}</p>
<p>Salary : RM {{$budgets->salarymonth}}</p>
<p>Saving : RM {{$budgets->saving}}</p>
<p>Month Working : {{$budgets->month_working}}</p>
<p>Bill : RM {{$budgets->bill}}</p>
<p>Loans : RM {{$budgets->loans}}</p>
<p>Food : RM {{$budgets->food}}</p>
<p>Transport : RM {{$budgets->transport}}</p>
<p>Weekend Spend : RM {{$budgets->weekend}}</p>
<p>Parents : RM {{$budgets->parents}}</p>
<p>Family : RM {{$budgets->family}}</p>
<p>Total Expenses : RM {{$budgets->total_expenses}}</p>
<p>Balace to spend : RM {{$budgets->balance_to_spend}}</p>
<p>Time issued : {{$budgets->created_at}}</p>
</div>

















@endsection