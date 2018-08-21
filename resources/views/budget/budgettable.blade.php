@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet"/>

 <div id="app">
        @include('flashm')


        @yield('content')
    </div>

{{csrf_field()}}
        <a href="add_budget" class="btn btn-success" style="margin: 20px;" >Add new budget</a>
         <a href="/budget_total_view" class="btn btn-primary" style="margin: 20px;" >Total View</a>

<div class="bordertext">
            <table id="example" class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Month</th>
                    <th>Salary Month</th>
                    <th>Saving</th>
                    <th>Bank</th>
                    <th>Month Working</th>
                    <th>Bill</th>
                    <th>Loans</th>
                    <th>Food</th>
                    <th>Transport</th>
                    <th>Weekend</th>
                    <th>Parents</th>
                    <th>Family</th>
                    <th>Total Expenses</th>
                    <th>Balance</th>

                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>

                    @foreach ($budgets as $budget)
                    <tr>
                        <td>{{ $budget->id }}</td>
                        <td>{{ $budget->month}}</td>
                        <td class="center-td">RM {{ $budget->salarymonth }}</td>
                        <td class="center-td">RM {{ $budget->saving }}</td>
                        <td class="center-td">{{ $budget->bank }}</td>
                        <td class="text_justify">{{ $budget->month_working }}</td>
                        <td class="center-td">RM {{ $budget->bill }}</td>
                        <td class="center-td">RM {{ $budget->loans }}</td>
                        <td class="center-td">RM {{ $budget->food }}</td>
                        <td class="center-td">RM {{ $budget->transport }}</td>
                        <td class="center-td">RM {{ $budget->weekend }}</td>
                        <td class="center-td">RM {{ $budget->parents }}</td>
                        <td class="center-td">RM {{ $budget->family }}</td>
                        <td class="center-td">RM {{ $budget->total_expenses }}</td>
                         <td class="center-td">RM {{ $budget->balance_to_spend }}</td>
                        <td><a href="{{action('TextController@viewBudget',$budget['id'])}}" class="btn btn-primary">View</a></td>
                        <td>
                              <form class="delete" action="{{action('TextController@deleteBudget', $budget['id'])}}" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
                <tr>
                    <td></td>
                    <td>TOTAL</td>
                    <td style="background:green; color: #fff;">RM {{$sum_salary_month}}</td>
                    <td style="background:blue; color: #fff;">RM {{$sum_saving}}</td>
                    <td></td>
                    <td>{{$sum_month_working}}</td>
                    <td>RM {{$sum_bill}}</td>
                    <td>RM {{$sum_loans}}</td>
                    <td>RM {{$sum_food}}</td>
                    <td>RM {{$sum_transport}}</td>
                    <td>RM {{$sum_weekend}}</td>
                    <td>RM {{$sum_parents}}</td>
                    <td>RM {{$sum_family}}</td>
                    <td style="background:red; color: #fff;">RM {{$sum_total_expenses}}</td>
                    <td></td>
                </tr>
            </table>

       
</div>
<script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure, you want to delete this Text!");
    });
</script>


@endsection

