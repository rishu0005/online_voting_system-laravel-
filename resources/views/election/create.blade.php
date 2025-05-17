
@extends('layout.main-layout')
@section('title', 'New Election')
@section('content')
<div class="container  margin-left pt-5">
    <div class="form-container margin-left  mt-0">
        <div class="header">
            <h2><i class="bi bi-calendar-plus me-2"></i>Create New Election  {{Auth::user()->id}}</h2>
            <p class="text-muted">Fill in the details to create a new election in the system</p>
        </div>
        
        <form id="electionForm" action="{{ route('saveElectionData') }}" method="POST">      
            @csrf
            <!-- Election Name -->

            @if (session('success'))
            <span class="alert alert-success">
                {{ session('success') }}
                    
            </span>
            @endif
            @if (session('fail'))
            <span class="alert alert-danger">
                {{ session('fail') }}
                    
            </span>
                @endif
            <div class="mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="election_name" name="election_name" placeholder="Election Name" >
                    <label for="election_name" class="-field">Election Name</label>
                    @if ($errors->any())
                    <span class="text-danger">
                        @error('election_name')
                            {{ $message }}
                        @enderror
                    </span>
                        
                    @endif
                </div>
                <div class="form-text">Enter a descriptive name for the election (e.g., "Student Council President 2025")</div>
            </div>
            
            <!-- Election Year -->
            <div class="mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="election_year" name="election_year" placeholder="Election Year" >
                    <label for="election_year" class="-field">Election Year</label>
                    @if ($errors->any())
                    <span class="text-danger">
                        @error('election_year')
                            
                        {{ $message }}
                        @enderror
                    </span>
                        
                    @endif
                </div>
                <div class="form-text">Enter the year for this election (e.g., "2025")</div>
            </div>
            
            <!-- Candidate Name(s) -->
            {{-- <div class="mb-4">
                <label class="form-label -field">Candidates</label>
                <div id="candidatesContainer">
                    <div class="candidate-container">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h6 class="mb-0">Candidate 1</h6>
                            <span class="remove-candidate-btn"><i class="bi bi-trash"></i></span>
                            
                        </div>
                        <div class="form">
                            <select name="Candidate_name[]" id="candidate_name_1" class="form-select">
                                <option value="">Select Candidate</option>
                                @foreach ($users as $user)
                                <option value="{{ $user['name'] }}" class="">{{$user['name']}}</option>
                                    
                                @endforeach

                            </select>
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('Candidate_name[]')
                            
                                    {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary add-candidate-btn mt-2" id="addCandidateBtn">
                    <i class="bi bi-plus-circle me-2"></i>Add Another Candidate
                </button>
            </div> --}}
            
            <!-- Election Time Period -->
            <div class="mb-4">
                <label class="form-label -field">Election Time Period</label>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-floating">
                            <input type="datetime-local" class="form-control" id="start_time" name="start_time" >
                            <label for="start_time">Start Time</label>
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('start_time')
                            
                                    {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-floating">
                            <input type="datetime-local" class="form-control" id="end_time" name="end_time" >
                            <label for="end_time">End Time</label>
                            @if ($errors->any())
                                <span class="text-danger">
                                    @error('end_time')
                            
                                    {{ $message }}
                                    @enderror
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-text">Set the start and end times for the election period</div>
            </div>
            
            <!-- Status -->
            <div class="mb-4">
                <label class="form-label -field">Election Status</label>
                <div class="status-selector d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="statusUpcoming" value="upcoming" checked>
                        <label class="form-check-label" for="statusUpcoming">
                            Upcoming
                        </label>
                        @if ($errors->any())
                            <span class="text-danger">
                                @error('status')
                            
                                {{ $message }}
                                @enderror
                            </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="statusActive" value="active">
                        <label class="form-check-label" for="statusActive">
                            Active
                        </label>
                        @if ($errors->any())
                            <span class="text-danger">
                                @error('status')
                            
                                {{ $message }}
                                @enderror
                            </span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="statusClosed" value="closed">
                        <label class="form-check-label" for="statusClosed">
                            Closed
                        </label>
                        @if ($errors->any())
                            <span class="text-danger">
                                @error('status')
                            
                        {{ $message }}
                        @enderror
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-text">Select the current status of the election</div>
            </div>
              
            <!-- Form Buttons -->
            <div class="d-flex justify-content-end mt-5">
                <button type="button" class="btn btn-light bg-danger text-light me-2" onclick="window.history.back();">Cancel</button>
                <button type="submit" class="btn btn-submit bg-primary text-white">Create Election</button>
            </div>
        </form>
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
