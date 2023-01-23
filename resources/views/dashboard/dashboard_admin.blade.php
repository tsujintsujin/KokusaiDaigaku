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
            height: 20vw;
            border: 1px solid #d9d9da;
        }

        .dashboardContainer {
            color: #fafafc;
            background-color: #393280;
        }
        
        .hoverOfSidebar:hover{
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

    <div class="row">
        {{-- Side Bar --}}
        <div class="d-flex col-3 flex-column flex-shrink-0 p-3 " id="sidebar" style="width: 280px;">
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
            <hr>

        </div>
        {{-- End of Side Bar --}}

        {{-- container in the middle --}}
        <div class="container col justify-content-center col-9 m-5">
            <div class="d-flex  row  " id="dashboardContainers">
                <div class="col-3 text-center">
                    <h5 class=" dashboardContainer">Date</h5>
                    <div style="border-right: 1px solid #d9d9da;">
                        {{-- this is for calendar --}}
                        test
                    </div>
                </div>
                <div class="col-9 text-center">
                    <h5 class="dashboardContainer">Users in the system</h5>
                    <div class="row">

                        <div class="col">
                            <h5 class=" ">Students</h5>
                            <div style="border-right: 1px solid #d9d9da;">
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




    {{-- Dashboard Container when clicked --}}
















    {{-- bootstrap cdn  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    {{-- changing the background color of sidebar link --}}
    <script>
        const sideBarLink = document.querySelectorAll(".sideBarLink")
        sideBarLink.forEach(sideBarLink => {
            sideBarLink.addEventListener('click', () => {
                sideBarLink.style = "background-color : #886a43;"
            })
        });
    </script>
</body>

</html>
