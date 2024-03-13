@extends('layouts.base')

@section('content')
    <div class="mt-5">
        <div class="text-center">
            <h2>All Customers</h2>
        </div>
    </div>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="pull-left">All Customers</h4>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <!-- Search Form -->
                <form action="{{ route('admin.customers') }}" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by name or email" name="searchTerm" id="searchTerm" value="{{ $searchTerm }}">
                    </div>
                </form>
                


                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="">
                                <th>Customer ID</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer mb-10">
                {{$users->links('pagination.default')}}
                
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
       
    </script>
@endpush