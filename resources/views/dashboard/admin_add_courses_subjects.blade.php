@extends('dashboard.admin_layout')
@section('content')
    <div class="container col justify-content-center col-9 m-5">
        <div class="d-flex  row  " id="courseContainers" style="background-color: #eeefff">
            <div class="col text-center m-0 p-0">
                <div>
                    <h5 class=" dashboardContainer rounded-top-left-1 h-50">Add Course</h5>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <input id="courseNameAdding p-3" type="text" class="form-control m-3" placeholder="Course Name">
                    </div>
                </div>
                <button type="button" class="btn  float-end px-5 py-2 my-3 mx-3"
                    style=" background-color: #393280; color: #fafafc;">Add</button>
            </div>

        </div>
        <div class="d-flex  row my-5 " id="subjectContainers" style="background-color: #eeefff">
            <div class="col  m-0 p-0">
                <div>
                    <h5 class=" dashboardContainer rounded-top-left-1 h-50">Add Subject</h5>
                </div>
                <div class="dropdown m-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false" style=" background-color: #393280; color: #fafafc;">
                        Course
                    </button>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <input type="text" class="form-control my-2 mx-3" placeholder="Subject Code">
                    </div>
                </div>
                <div class="form-floating mx-3">
                    <textarea class="form-control " placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px;background-color:#dfe0ee;" ></textarea>
                    <label for="floatingTextarea2" class="fs-5">Descriptions</label>
                </div>
                <div class="row my-3 ">
                    <div class="col-4">
                        <input type="text" class="form-control my-2 mx-3" placeholder="Units">
                    </div>
                </div>
                <button type="button" class="btn  float-end px-5 py-2 my-3 mx-3"
                    style=" background-color: #393280; color: #fafafc;">Add</button>
            </div>
        </div>
    </div>
@endsection
