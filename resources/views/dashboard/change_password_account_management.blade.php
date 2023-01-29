@extends('dashboard.layout')
@section('content')
    <div class="container row justify-content-end my-5 ms-5 col-10 " >
        <div class="col">
            <h3>Request for password reset</h3>

            <table class="table mt-5"  >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">
                            <span class="">view</span>
                            <span class="">reset</span>
                            <span class="">block</span>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">SMKD1095190</th>
                        <td>Justin Masiga</td>
                        <td>
                            <span>
                                icon1
                            </span>
                            <span>
                                icon2
                            </span>
                            <span>
                                icon3
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">TMKD1095190</th>
                        <td>Clarence Perez</td>
                        <td>
                            <span>
                                icon1
                            </span>
                            <span>
                                icon2
                            </span>
                            <span>
                                icon3
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">SMKD1089390</th>
                        <td>Ralph Cadelina</td>
                        <td>
                            <span>
                                icon1
                            </span>
                            <span>
                                icon2
                            </span>
                            <span>
                                icon3
                            </span>
                        </td>
                    </tr>

            </table>
        </div>
        <div class="col-4">
            <h3>View account of</h3>
            <div class="mx-5">
                <p class="fw-bold">Bachelor in Science Major in Computer Science</p>
                <p class="fw-bold">Section: WD 29</p>
                <p>Justin Masiga</p>
                <p>Japanese</p>
                <p>Male</p>
                <p>09254125632</p>
                <p>justin@gmail.com</p>
                <p>Block 2, Lot 4, Etc St., Tagum City</p>
            </div >
            <h3>Contact Person</h3>
            <div class="mx-5">

                <p>Jecery Masiga</p>
                <p>Japanese</p>
                <p>Female</p>
                <p>09254125632</p>
                <p>jecery@gmail.com</p>
                <p>Block 2, Lot 4, Etc St., Tagum City</p>
            </div>

        </div>
    </div>
@endsection
