{{-- edit --}}
  @if ($window === 'edit')
      <div class="row dashboardContainer ps-4 pb-4  mt-3">
          <div class="row my-4">
              <h2 class="mb-4 text-muted fw-bold">Edit Mode Active</h2>
              <div class="col-2">
                  <div class="dropdown">
                      <h6 class="text-muted text-left ps-1">From Course</h6>
                      <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#" role="button"
                          id="courSeselect" data-mdb-toggle="dropdown" aria-expanded="false">
                          BSIT
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="courSeselect">
                          <li><a class="dropdown-item" href="#">BSCS</a></li>
                          <li><a class="dropdown-item" href="#">BSBA</a></li>
                          <li><a class="dropdown-item" href="#">BSTM</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-2">
                  <div class="col">
                      <div class="dropdown">
                          <h6 class="text-muted text-left ps-1">Subject Code</h6>
                          <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#" role="button"
                              id="subjectSelect" data-mdb-toggle="dropdown" aria-expanded="false">
                              Math 2
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="subjectSelect">
                              <li><a class="dropdown-item" href="#">Math 5</a></li>
                              <li><a class="dropdown-item" href="#">Math 3</a></li>
                              <li><a class="dropdown-item" href="#">Math 1</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="mb-4 rounded p-1 mt-4 pt-2">
                      <h5 class="form-label"># of Units</h5>
                  </div>
              </div>
              <div class="col-12 mt-4">
                  <div class="form-outline mb-4 rounded ">
                      <textarea readonly class="text-area-no-resize form-control " id="form4Example3">asdasdsa</textarea>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-2">
                  <div class="dropdown">
                      <h6 class="text-muted text-left ps-1">Transfer to Course</h6>
                      <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#" role="button"
                          id="toCourse" data-mdb-toggle="dropdown" aria-expanded="false">
                          BSIT
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="toCourse">
                          <li><a class="dropdown-item" href="#">BSCS</a></li>
                          <li><a class="dropdown-item" href="#">BSBA</a></li>
                          <li><a class="dropdown-item" href="#">BSTM</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-2">
                  <div class="col">
                      <div class="dropdown">
                          <div class="col">
                              <div class="form-outline bg-white rounded p-1 mt-4">
                                  <input type="text" id="" class="form-control">
                                  <label class="form-label" for="">New Subject Code</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-2">
                  <div class="form-outline mb-4 bg-white rounded  mt-4 pt-2">
                      <input type="number" id="" class="form-control" />
                      <label class="form-label" for="">New # of Units</label>
                  </div>
              </div>
              <div class="col-12 mt-4">
                  <div class="form-outline mb-4 bg-white rounded p-0">
                      <textarea class="text-area-no-resize form-control " id="form4Example3" cols="1" max-rows="4"></textarea>
                      <label class="form-label" for="form4Example3">New Description</label>
                  </div>
              </div>
          </div>

          <div class="row d-flex justify-content-end">
              <button wire:click="create" class="p-2 me-3 col-1 btn btn-primary ">
                  Cancel
              </button>
              <button wire:click="edit" class="p-2 me-3 col-3 btn btn-primary ">
                  Update Records
              </button>
          </div>
      </div>
  @else
      <div class="row dashboardContainer ps-4 pb-4 mt-3">
          <div class="row my-4">
              <div class="col-2">
                  <div class="dropdown">
                      <h6 class="text-muted text-left ps-1">Select Course</h6>
                      <a class="btn btn-primary dropdown-toggle w-100 text-start" href="#" role="button"
                          id="createCourse" data-mdb-toggle="dropdown" aria-expanded="false">
                          BSIT
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="createCourse">
                          <li><a class="dropdown-item" href="#">BSCS</a></li>
                          <li><a class="dropdown-item" href="#">BSBA</a></li>
                          <li><a class="dropdown-item" href="#">BSTM</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-2">
                  <div class="col">
                      <div class="form-outline mb-4 bg-white rounded p-1 pt-2 mt-4">
                          <input type="email" id="" class="form-control">
                          <label class="form-label" for="">Subject Code</label>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <div class="form-outline mb-4 bg-white rounded ">
                      <textarea class="text-area-no-resize form-control " id="form4Example3" cols="1" max-rows="4"></textarea>
                      <label class="form-label" for="form4Example3">Description</label>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-2">
                  <div class="form-outline mb-4 bg-white rounded p-1 mt-4 pt-2">
                      <input type="number" id="" class="form-control" />
                      <label class="form-label" for="">Units</label>
                  </div>
              </div>
          </div>
          <div class="row d-flex justify-content-end">
              <button wire:click="create" class="p-2 me-3 col-1 btn btn-primary">
                  Add
              </button>
              <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary">
                  Edit
              </button>
          </div>
      </div>
  @endif
