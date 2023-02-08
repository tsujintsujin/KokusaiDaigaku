<div>
    <div class="row dashboardTitleContainer ps-4 rounded-top">
        <h3 class="fw-bold pt-2">Student Subject Assignment</h3>
    </div>
    <div class="row dashboardContainer ps-4 pb-4">
        <div class="row mt-4 col-6">
            <div class="col">
                <div class="dropdown">
                    <label class="ms-1" for="">Course:</label>
                    <select class="text-start form-select p-2">
                        <option value="0" selected>Any</option>
                        <option value="1">BSIT</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>

            {{-- dito muna to, gawa pa logic para sa year level --}}

            {{-- <div class="col-3">
                <div class="dropdown">
                    <label class="ms-1" for="">by Year Level:</label>
                    <select class="text-start form-select p-2">
                        <option value="0" selected>Any</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="3">4th Year</option>
                        <option value="3">5th Year</option>
                    </select>
                </div>
            </div> --}}
            <div class="col-4">
                <div class="dropdown">
                    <label class="ms-1" for="">by Section:</label>
                    <select class="text-start form-select p-2">
                        <option value="0" selected>Any</option>
                        <option value="1">BSIT</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-4 col-6">
            <div class="col-6">
                <label class="ms-1" for="">by Name:</label>
                <div class="form-outline bg-white rounded p-1">
                    <input type="text" id="" class="form-control" name="name" />
                    <label class="form-label" for="">Name</label>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="my-4 me-4">
        </div>
        <div class="row ">
            <div class="col-6">


                <label class="ms-1 fw-bold" for="">Student List:</label>
                <div class="row d-flex mt-4 ms-1 pt-4">
                    <button class="p-2 btn-sm me-3 col-2 btn btn-primary" for="1">
                        Select All
                    </button>
                    <button class="p-2 me-3 btn-sm col-2 btn btn-primary ">
                        Remove All
                    </button>
                </div>
                <div class="col-7">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">Selected</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-circle " type="checkbox" value=""
                                            id="1">
                                    </div>
                                </th>
                                <td><label class="ms-1" for="1">Sheena Maria Silveria Soriano Isorena</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-circle" type="checkbox" value=""
                                            id="2">
                                    </div>
                                </th>
                                <td><label class="ms-1" for="2">Clarence P</label></td>
                            </tr>
                    </table>
                </div>
            </div>


            <div class="col-6">
                <label class="ms-1 fw-bold" for="">Subject List:</label>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="dropdown">
                            <label class="ms-1" for="">From Course:</label>
                            <select class="text-start form-select p-2">
                                {{-- lets seelect where to get the subject course, for further development when considering irregulars na kukuha
                                    ng subject from ibang course for a different schedule --}}
                                <option value="0" selected>Default</option>
                                <option value="1">BSIT</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="dropdown">
                            <label class="ms-1" for="">From Year Level:</label>
                            <select class="text-start form-select p-2">
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="3">4th Year</option>
                                <option value="3">5th Year</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="col-7">
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th class="col-1 text-center">Selected</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-circle " type="checkbox" value=""
                                            id="11">
                                    </div>
                                </th>
                                <td><label class="ms-1" for="11">English</label>
                                </td>
                            </tr>
                            <tr>
                                <th class="d-flex justify-content-center">
                                    <div class="form-check">
                                        <input class="form-check-input rounded-circle" type="checkbox" value="11"
                                            id="22">
                                    </div>
                                </th>
                                <td><label class="ms-1" for="22">Math</label></td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row d-flex mt-4 ms-1 pt-4 justify-content-end">
            <button class="p-2 btn-sm me-3 col-1 btn btn-primary" for="1">
                Cancel
            </button>
            <button class="p-2 me-3 btn-sm col-1 btn btn-primary ">
                Confirm
            </button>
        </div>
    </div>
</div>
