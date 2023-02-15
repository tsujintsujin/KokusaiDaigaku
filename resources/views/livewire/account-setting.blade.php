<div
    class="vh-100 container d-flex justify-content-center  rounded-top-left-1 rounded-top-right-1 rounded-top align-items-center">

    <div class="row col-5" id="contentM">

        <div class="dashboardContainer d-flex flex-column rounded-top">
            <form wire:submit.prevent="update">
                <div class="row dashboardTitleContainer ps-4 rounded-top">
                    <h3 class="fw-bold pt-2 text-center">Change Password</h3>
                </div>
                <div class="row  px-4 pb-4 mt-3 d-flex flex-column align-items-center">
                    <label class="form-label ps-4" for="">Current Password</label>
                    <div class="form-outline mb-4 bg-white rounded p-1 pt-2 col-10">
                        <input type="password" type="email" wire:model="current_password" id=""
                            class="form-control" />
                    </div>
                    <label class="form-label ps-4" for="">New Password</label>
                    <div class="form-outline mb-4 bg-white rounded p-1 pt-2 col-10">
                        <input type="password" type="email" id="" class="form-control"
                            wire:model="new_password" />
                    </div>
                    <label class="form-label ps-4" for="">Confirm New Password</label>
                    <div class="form-outline mb-4 bg-white rounded p-1 pt-2 col-10">
                        <input type="password" type="email" id="" class="form-control"
                            wire:model="confirm_new_password" />
                    </div>
                    <div class="row d-flex justify-content-center">
                        <button class="p-2 me-3 col-7 btn btn-primary ">
                            Update Account Password
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
