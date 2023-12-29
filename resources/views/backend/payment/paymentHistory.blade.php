@extends('backend.layouts.app')
@section('content')
    {{-- payment history start  --}}
    <div class="container">
        <div class="row">
            <table class="table table-responsive stripe table-hover">
                <tr>
                    <th>Sn.</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>country</th>
                    <th>address</th>
                    <th>phone</th>
                    <th>method</th>
                    <th>ammount</th>
                    <th>p. number</th>
                    <th>txn_id</th>
                    <th>status</th>
                </tr>


                @forelse ($allPayment as $key => $data)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $data->fname }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->country }}</td>
                        <td>{{ $data->billing_address }}</td>
                        <td>{{ $data->billing_address }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->payment_number }}</td>
                        <td>{{ $data->total_ammount }}</td>
                        <td>{{ $data->txn_id }}</td>
                        <td>
                            <div class="group-btn">
                                <a href="{{ route('paymentdelete',$data->id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </table>
        </div>
    </div>
    {{-- payment history end --}}
@endsection