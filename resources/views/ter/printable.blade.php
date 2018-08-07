@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet"/>

 <div id="app">
        @include('flashm')


        @yield('content')
    </div>

{{csrf_field()}}

<div class="bordertext">

            <table id="example" class="table table-bordered">
               
                <thead>

                <tr>
                   
                    <th>NRIC</th>
                    <th>Project Code</th>
                    <th>Total Amount</th>
                    <td colspan="2">Action</td>
                </tr>
                </thead>
                <tbody>
                        
                        @foreach($printGroupByICs as $ic => $print)
                             
                            @php
                                $groupByProjectCodes = $print->groupBy(function($receipt) {
                                return $receipt->project_code;

                            });

                            @endphp

                        @foreach ($groupByProjectCodes as $projectcode => $groupByProjectCode)
                            
                            @php
                                $totalAmount = $groupByProjectCode->sum(function($receipt) {
                                return $receipt->amount;
                                    
                            });
                               
                                        
                            @endphp
                   
                    <tr>
                       
                        <td>{{$ic}}</td>
                        <td class="center-td">{{$projectcode}}</td>
                        <td class="center-td">{{$totalAmount}}</td>
                        <td><a href="{{action('PrintController@viewT',[$projectcode, $ic])}}" class="btn btn-info">View</a>
                        <a href="" class="btn btn-primary">Edit</a>
                        
                    </tr>
                        @endforeach
                        @endforeach  
                      
                </tbody>

            </table>
           
@endsection

