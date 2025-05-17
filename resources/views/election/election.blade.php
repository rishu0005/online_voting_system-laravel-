@extends('layout.main-layout')
@section('title', 'Election Records ')
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
                        Election Records <a class="ml-auto" href="{{ route('createElectionPage') }}"><button
                                 class="btn btn-sm btn-danger">Create</button></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-striped" id="billingTable">
                            <thead>
                                <tr>
                                    <th class="">Sr No</th>
                                    {{-- <th>Election No.</th> --}}
                                    <th>Name</th>
                                    <th>start time</th>
                                    <th>end time</th>
                                    <th>year</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($election as $key => $item)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                    <td>{{$item->election_name }}</td>

                                        <td>  {{ \Carbon\Carbon::parse($item->start_time)->format('d-m-Y') }}</td>
                                        <td>  {{ \Carbon\Carbon::parse($item->end_time)->format('d-m-Y') }}</td>
                                        {{-- <td>{{$item->end_time}}</td> --}}
                                        <td>{{$item->election_year}}</td>
                                          <td><span class="badge bg-warning text-dark">{{ $item->status }}</span>
                                        </td>
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
{{-- const candidateHtml = `
<select name="Candidate_name[]" id="candidate_name_${candidateCount}" class="form-select">
                       <option value="">Select Candidate</option>
                       @foreach ($users as $user)
                       <option value="{{ $user['name'] }}" class="">{{$user['name']}}</option>
                           
                       @endforeach

                   </select>
   <div class="candidate-container">
       <div class="d-flex justify-content-between align-items-center mb-2">
           <h6 class="mb-0">Candidate ${candidateCount}</h6>
           <span class="remove-candidate-btn"><i class="bi bi-trash"></i></span>
       </div>
       <div class="form-floating">
           <input type="text" class="form-control" id="candidate_name_${candidateCount}" 
                  name="candidate_name[]" placeholder="Candidate Name" >
           <label for="candidate_name_${candidateCount}">Candidate Name</label>
       </div>
   </div>
`; --}}

{{-- @section('script-code')
<script>
   $(document).ready(function () {
    // Add candidate functionality
    let candidateCount = 1;

    $('#addCandidateBtn').on('click', function () {
        candidateCount++;

        const candidateHtml = `
         
            <div class="candidate-container">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">Candidate ${candidateCount}</h6>
                    <span class="remove-candidate-btn"><i class="bi bi-trash"></i></span>
                </div>
                <div class="form">
                  <select name="Candidate_name[]" id="candidate_name_${candidateCount}" class="form-select">
                                <option value="">Select Candidate</option>
                                @foreach ($users as $user)
                                <option value="{{ $user['name'] }}" class="">{{$user['name']}}</option>
                                    
                                @endforeach

                            </select>
                </div>
            </div>
        `;

        $('#candidatesContainer').append(candidateHtml);

        // Add remove functionality to the newly added candidate
        $('.candidate-container:last .remove-candidate-btn').on('click', function () {
            if ($('.candidate-container').length > 1) {
                $(this).closest('.candidate-container').remove();

                // Renumber remaining candidates
                $('.candidate-container').each(function (index) {
                    $(this).find('select').text(`Candidate ${index + 1}`);
                });
            } else {
                alert('At least one candidate is ');
            }
        });
    });

    // Initial remove button (for the first candidate)
    $('.remove-candidate-btn').on('click', function () {
        if ($('.candidate-container').length > 1) {
            $(this).closest('.candidate-container').remove();

            // Renumber remaining candidates
            $('.candidate-container').each(function (index) {
                $(this).find('h6').text(`Candidate ${index + 1}`);
            });
        } else {
            alert('At least one candidate is ');
        }
    });

    // Set minimum values for date-time fields
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');

    const currentDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

    $('#start_time').attr('min', currentDateTime);

    $('#start_time').on('change', function () {
        $('#end_time').attr('min', $(this).val());
    });

    // Form submission confirmation
    // $('#electionForm').on('submit', function (event) {
    //     if (!confirm('Are you sure you want to create this election?')) {
    //         event.preventDefault();
    //     }
    // });
});

</script>
@endsection --}}