<div class="S_Step2 d-none Step_First">
    <div class="InnerText">
        <h3 class="mb-2 text-center">Purchase & Transfer Selection Page</h3>
    </div>
    <div class="row justify-content-between step2">
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="start_end_date">
                    <img src="{{ asset('app-assets/images/recieved/dates.png') }}" alt="">
                    Start/End Date
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="departure_arrivals">
                    <img src="{{ asset('app-assets/images/recieved/arival.png') }}" alt="">
                    Departure/Arrivals
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="pick_drop_dates">
                    <img src="{{ asset('app-assets/images/recieved/pick.png') }}" alt="">
                    Pick/ Drop dates
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="check_in_out">
                    <img src="{{ asset('app-assets/images/recieved/checkin.png') }}" alt="">
                    Check in/out
                </label>
            </div>
        </div>
    </div>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-end px-2">
            <div class="DotsLeft d-none">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn S_StepBack_1">Back</button>
                <button type="button" class="startedBtn next-step">Next</button>
            </div>
        </div>
    </div>
</div>