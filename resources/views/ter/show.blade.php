@extends('layouts.app')

@section('content')


<h2>SHOW</h2>


@foreach ($printGroupByICs as $projectcode => $groupByProjectCode)
                            
                            @php
                                $totalAmount = $groupByProjectCode->sum(function($receipt) {
                                return $receipt->amount;
                                    
                            });
                                        
                            @endphp




<p>{{$projectcode}}</p>


@endforeach

























@endsection