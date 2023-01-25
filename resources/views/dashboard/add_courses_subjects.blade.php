@extends('dashboard.layout')
@section('content')
<div class="container col justify-content-center col-9 m-5">
    <div class="d-flex  row  " id="courseContainers" style="background-color: #eeefff">
        <div class="col">
            <h5 class=" dashboardContainer p-3 mb-4">Add Course</h5>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Course Name"
                    style="background-color:#eeefff; 
                    border: 0px  none #d9d9da;  
                    border-bottom: 2px  solid #d9d9da;">
            </div>
            <button type="button" class="btn  float-end px-5 py-2 my-2"
                style=" background-color: #393280; color: #fafafc;">Add</button>
        </div>




    </div>
    <div class="d-flex  row my-5 " id="subjectContainers" style="background-color: #eeefff">
        <div class="col">
            <h5 class=" dashboardContainer p-3 mb-4">Add Subject</h5>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false"
                    style=" background-color: #393280; color: #fafafc;">
                    Course
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="input-group mb-3 w-25">
                <input type="text" class="form-control my-2" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Subject Code"
                    style="background-color:#eeefff; 
                    border: 0px  none #d9d9da;  
                    border-bottom: 2px  solid #d9d9da;">
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px;background-color:#dfe0ee;"></textarea>
                <label for="floatingTextarea2">Descriptions</label>
            </div>
            <div class="input-group mb-3 w-25 my-2">
                <input type="text" class="form-control my-2 " aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" placeholder="Units"
                    style="background-color:#eeefff; 
                    border: 0px  none #d9d9da;  
                    border-bottom: 2px  solid #d9d9da;">
            </div>
            <button type="button" class="btn  float-end px-5 py-2 my-2"
                style=" background-color: #393280; color: #fafafc;">Add</button>
        </div>
    </div>
</div>

@endsection