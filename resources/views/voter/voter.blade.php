@extends('layout.main-layout')
@section('title', 'Voters Record')

@section('content')
<div class="container py-4 margin-left">
        <div class="row">
            <div class="col-md-10 mx-auto">
                @if (session('status'))
                <div class="alert alert-success text-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('status') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header px-4 d-flex justify-content-between bg-dark">
                        Voters Records <a class="ml-auto" href="{{ route('registerVoter') }}"><button
                                 class="btn btn-sm btn-danger">Create</button></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped" id="billingTable">
                            <thead>
                                <tr>
                                    <th class="">Sr No</th>
                                    {{-- <th>Election No.</th> --}}
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>email id</th>
                                    <th>Account Created</th>
                                    <th>Stauts  </th>
                                
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $item)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                    <td>{{$item->name }}</td>
                                    <td>{{$item->username }}</td>
                                    <td>{{$item->email }}</td>

                                        <td>  {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                                        {{-- <td>  {{ \Carbon\Carbon::parse($item->end_time)->format('d-m-Y') }}</td> --}}
                                        {{-- <td>{{$item->end_time}}</td> --}}
                                        {{-- <td>{{$item->election_year}}</td> --}}
                                          <td><span class="badge bg-warning text-dark">{{ $item->role }}</span> </td>
                                        <td>
                                            <a href="{{ route('viewElectionPage', $item->id) }}" type="button"
                                                class="btn btn-sm btn-primary" title="view details">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            {{-- <a href="{{ route('printPerformaData', $item->id) }}"
                                                class="btn btn-sm btn-danger" title="print">
                                                <i class="fas fa-print"></i>
                                            </a> --}}
                                            <a href="{{ route('editElectionPage',$item->id) }}" class="btn btn-sm btn-danger" title="Edit">
                                            <i class="fas fa-edit"></i>
                                            </a>
                                    
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection