@extends('layouts.base')

@section('content')
    <div class="mt-5">
        <div class="text-center">
            <h2>All Orders</h2>
        </div>
    </div>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="pull-left">All Orders</h4>
                    </div>

                </div>
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="">
                                <th>Order ID</th>
                                <th>Customer ID</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001234</td>
                                <td>001</td>
                                <td>50000.00</td>
                                <td>Delivered</td>
                            </tr>

                            <tr>
                                <td>039234</td>
                                <td>002</td>
                                <td>2000.00</td>
                                <td>Pending</td>
                            </tr>

                           
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer mb-10">

                
            </div>

        </div>
    </div>
@endsection