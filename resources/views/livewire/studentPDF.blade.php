
<div>
        
 
    <h1 class="fw-bold">{{ $students->last_name }}, {{ $students->first_name }} {{ $students->middle_name }} {{  $students->suffix_name }}</h1>
    <h5>Enrolling For:</h5>
    <h5>{{ $studentCourse }}</h5>
    <div class="mt-5">
        <h5>Nationality: <span style="color:blue;">{{ $students->nationality }}</span> </h5>
        <h5>Gender: <span style="color:blue;">{{ $students->gender }}</span></h5>
        <h5>Birthdate: <span style="color:blue;">{{ $students->birthdate }}</span></h5>
        <h5>Phone Number: <span style="color:blue;">{{ $students->contact_number }}</span></h5>
        <h5>Email: <span style="color:blue;">{{ $students->email }}</span></h5>
        <h5>Address: <span style="color:blue;">{{ $students->address }}</span></h5>
 
  
</div>