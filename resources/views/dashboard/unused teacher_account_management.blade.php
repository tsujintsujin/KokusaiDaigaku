@extends('dashboard.layout_account_management')
@section('teacher_account')
<form action="POST">
    @csrf
    
        <div>
            <button type="button" class="btn  float-end px-5 py-2 "
                style=" background-color: #393280; color: #fafafc;">Edit Mode</button>
            <h5>Teacher : <span class="text-muted">ID of Teacher</span></h5>


        </div>

        <div class="mb-3">
            
            <input type="text" class="form-control" id="lastName">
            <label for="lastName" class="form-label">Last Name</label>

            <input type="text" class="form-control" id="firstName">
            <label for="firstName" class="form-label">First Name</label>

            <input type="text" class="form-control" id="middleName">
            <label for="middleName" class="form-label">Middle Name</label>

            <input type="text" class="form-control" id="suffixName">
            <label for="suffixName" class="form-label">Suffix</label>

            <div class="dropdown mb-3 w-25 text-start">

                <a class="nav-link   py-3 active btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style="background-color:#eeefff; 
        border: 0px  none #d9d9da;  
        border-bottom: 2px  solid #d9d9da;">
                    Gender
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item active" href="#">test gender</a></li>
                    <li><a class="dropdown-item" href="#">test gender</a></li>

                </ul>
            </div>
            <input type="text" class="form-control" id="nationality">
            <label for="nationality" class="form-label">Nationality</label>

            <input type="date" class="form-control" id="birtdate">
            <label for="suffixName" class="form-label">Birtdate</label>

            <input type="number" class="form-control" id="contactNumber">
            <label for="contactNumber" class="form-label">Contact Number</label>

            <input type="text" class="form-control" id="address">
            <label for="address" class="form-label">Address</label>

            <input type="email" class="form-control" id="email">
            <label for="email" class="form-label">Email</label>
        </div>
        <h5>Emergency Contact Person</h5>
        <input type="text" class="form-control" id="lastNameContactPerson">
        <label for="lastNameContactPerson" class="form-label">Last Name</label>

        <input type="text" class="form-control" id="firstNameContactPerson">
        <label for="firstNameContactPerson" class="form-label">First Name</label>

        <input type="text" class="form-control" id="middleNameContactPerson">
        <label for="middleNameContactPerson" class="form-label">Middle Name</label>

        <input type="text" class="form-control" id="suffixNameContactPerson">
        <label for="suffixNameContactPerson" class="form-label">Suffix</label>

        <input type="number" class="form-control" id="contactNumberContactPerson">
        <label for="contactNumberContactPerson" class="form-label">Contact Number</label>

        <input type="text" class="form-control" id="addressContactPerson">
        <label for="addressContactPerson" class="form-label">Address</label>

        <div class="dropdown mb-3 w-25 text-start">

            <a class="nav-link   py-3 active btn  dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false"
                style="background-color:#eeefff; 
    border: 0px  none #d9d9da;  
    border-bottom: 2px  solid #d9d9da;">
                Gender
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item active" href="#">test gender</a></li>
                <li><a class="dropdown-item" href="#">test gender</a></li>

            </ul>
        </div>

        <input type="text" class="form-control" id="nationalityContactPerson">
        <label for="nationalityContactPerson" class="form-label">Nationality</label>

        <input type="email" class="form-control" id="emailContactPerson">
        <label for="emailContactPerson" class="form-label">Email</label>

        <input type="text" class="form-control" id="relationship">
        <label for="relationship" class="form-label">Relationship</label>
        <button type="button" class="btn  float-end px-5 py-2 "
            style=" background-color: #393280; color: #fafafc;">Add</button>

    </div>

</form>
@endsection