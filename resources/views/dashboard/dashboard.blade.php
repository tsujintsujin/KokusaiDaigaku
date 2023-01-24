<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mindanao Kokusai Daigaku</title>
    <style>
        #sidebar {
            color: #fafafc;
            background-color: #393280;
            height: 100vh;

        }

        #dashboardContainers {
            height: auto;
            border: 1px solid #d9d9da;
        }

        #courseContainers,
        #subjectContainers {
            height: auto;
            border: 1px solid #d9d9da;
        }


        .dashboardContainer {
            color: #fafafc;
            background-color: #393280;
        }

        .hoverOfSidebar:hover {
            background-color: #886a43;
        }




        body {
            background-color: #ffffff;
            overflow-x: hidden;
            /* Hide horizontal scrollbar */
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    {{-- dashboard --}}
    <div class="row">
        {{-- Side Bar --}}
        <div class="d-flex col-3 flex-column flex-shrink-0 p-3 float-start" id="sidebar" style="width: 280px;">
            <div class="text-center my-5 ">
                <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" class="rounded"
                    alt="Mindanao Kokusai Daigaku Logo">
                <h4 class="h4 mt-5">Hello Admin</h4>
                <p class="">Account ID: MKD105915</p>
            </div>

            <ul class="nav  nav-pills text-light flex-column mb-auto">
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3 active">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Add Course / Subjects
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Account Management
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Admin Account
                    </a>
                </li>

            </ul>


        </div>
        {{-- End of Side Bar --}}

        {{-- container in the middle --}}
        <div class="container col justify-content-center col-9 m-5">
            <div class="d-flex  row  " id="dashboardContainers" style="background-color: #eeefff">
                <div class="col-3 text-center">
                    <h5 class=" dashboardContainer">Date</h5>
                    <div style="border-right: 3px solid #d9d9da;">
                        {{-- this is for calendar --}}
                        test
                    </div>
                </div>
                <div class="col-9 text-center">
                    <h5 class="dashboardContainer">Users in the system</h5>
                    <div class="row">

                        <div class="col">
                            <h5 class=" ">Students</h5>
                            <div style="border-right: 3px solid #d9d9da;">
                                {{-- this is for number of students --}}
                                test
                            </div>
                        </div>
                        <div class="col">
                            <h5 class=" ">Teachers</h5>
                            <div>
                                {{-- this is for number of teachers --}}
                                test
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Course</th>
                        <th scope="col">Subjects</th>
                        <th scope="col">Average Grade</th>
                        <th scope="col">Sections</th>
                        <th scope="col">Students</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">BSIT</th>
                        <td>23</td>
                        <td>80.20</td>
                        <td>2</td>
                        <td>124</td>
                    </tr>

            </table>
        </div>
        {{-- End of container in the middle --}}

    </div>
    {{-- end of dashboard --}}


    {{-- Add Course/ Subjects --}}
    <div class="row">
        {{-- Side Bar --}}
        <div class="d-flex col-3 flex-column flex-shrink-0 p-3 float-start" id="sidebar" style="width: 280px;">
            <div class="text-center my-5 ">
                <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" class="rounded"
                    alt="Mindanao Kokusai Daigaku Logo">
                <h4 class="h4 mt-5">Hello Admin</h4>
                <p class="">Account ID: MKD105915</p>
            </div>

            <ul class="nav  nav-pills text-light flex-column mb-auto">
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3 active">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Add Course / Subjects
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Account Management
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Admin Account
                    </a>
                </li>

            </ul>


        </div>
        {{-- End of Side Bar --}}

        {{-- container in the middle --}}

        <div class="container col justify-content-center col-9 m-5">
            {{-- add courses --}}
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

            {{-- add subjects --}}
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
        {{-- End of container in the middle --}}

    </div>
    {{-- end of course / subject --}}

    {{-- Account Management --}}
    <div class="row">
        {{-- Side Bar --}}
        <div class="d-flex col-3 flex-column flex-shrink-0 p-3 float-start" id="sidebar" style="width: 280px;">
            <div class="text-center my-5 ">
                <img src="https://mkdph.com/wp-content/uploads/2022/06/MKD-logo-93p.png" class="rounded"
                    alt="Mindanao Kokusai Daigaku Logo">
                <h4 class="h4 mt-5">Hello Admin</h4>
                <p class="">Account ID: MKD105915</p>
            </div>

            <ul class="nav  nav-pills text-light flex-column mb-auto">
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3 ">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Add Course / Subjects
                    </a>
                </li>
                <li class="nav-item my-1 hoverOfSidebar">

                    {{-- <a href="#" class="nav-link link-light sideBarLink py-3 active">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            Account Management
                        </a> --}}

                    <div class="dropdown">
                        <a class="nav-link link-light sideBarLink py-3 active btn  dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Account Management
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item active" href="#">Manage Account</a></li>
                            <li><a class="dropdown-item" href="#">Change Password Req.</a></li>

                        </ul>
                    </div>

                </li>
                <li class="nav-item my-1 hoverOfSidebar">
                    <a href="#" class="nav-link link-light sideBarLink py-3">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Admin Account
                    </a>
                </li>

            </ul>


        </div>
        {{-- End of Side Bar --}}

        {{-- container in the middle --}}

        <div class="container col justify-content-center col-9 m-5">

            {{-- tab for adding teacher and student --}}
            <div class="d-flex  row  " id="courseContainers" style="background-color: #eeefff">
                <div class="col">
                    <ul class="nav dashboardContainer p-3 mb-4">
                        <li class="nav-item ">
                            <a class="nav-link active" style="color: #fafafc;" aria-current="page"
                                href="#">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #fafafc;">Teachers</a>
                        </li>
                    </ul>


                </div>
                <div>
                    <button type="button" class="btn  float-end px-5 py-2 "
                        style=" background-color: #393280; color: #fafafc;">Edit Mode</button>
                    <h5 >Student : <span class="text-muted">ID of Student</span></h5>
                    <div class="dropdown mb-3 w-25 text-start">
                        {{-- <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" placeholder="Course Name"
                            style="background-color:#eeefff; 
                            border: 0px  none #d9d9da;  
                            border-bottom: 2px  solid #d9d9da;"> --}}
                       <a class="nav-link   py-3 active btn  dropdown-toggle" type="button"
                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" 
                            style="background-color:#eeefff; 
                            border: 0px  none #d9d9da;  
                            border-bottom: 2px  solid #d9d9da;">
                            Course
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item active" href="#">Manage Account</a></li>
                            <li><a class="dropdown-item" href="#">Change Password Req.</a></li>

                        </ul>
                    </div>
                  
                </div>

            </div>
            {{-- student account manage --}}



        </div>

    </div>
    {{-- End of container in the middle --}}

    </div>
    {{-- end of Account Management --}}

















    {{-- bootstrap cdn  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- changing the background color of sidebar link --}}
    <script>
        // const sideBarLink = document.querySelectorAll(".sideBarLink")
        // sideBarLink.forEach(sideBarLink => {
        //     sideBarLink.addEventListener('click', () => {
        //         sideBarLink.style = "background-color : #886a43;"
        //     })
        // });
    </script>
</body>

</html>
