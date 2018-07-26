@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet"/>

 <div id="app">
        @include('flashm')


        @yield('content')
    </div>


        <a href="add_budget" class="btn btn-success" style="margin: 20px;" >Add new budget</a>

<div class="bordertext">
            <table id="example" class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Salary Month</th>
                    <th>Bank</th>
                    <th>Month Working</th>
                    <th>Bill</th>
                    <th>Loans</th>
                    <th>Food</th>
                    <th>Transport</th>
                    <th>Weekend</th>
                    <th>Parents</th>
                    <th>Family</th>
                    <th>Total saving</th>

                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>

                    @foreach ($budgets as $budget)
                    <tr>
                        <td>{{ $budget->id }}</td>
                        <td class="center-td">RM {{ $budget->salarymonth }}</td>
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
                         <td><a href="" class="btn btn-warning">Edit</a></td>
                        <td>
                              <form action="" method="post">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
</div>



@endsection

