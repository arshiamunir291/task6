<div class="d-none D_step2 RoleStepCS">
    <p>Step 2</p>
    <h3 class="mb-2 text-center">YOUR ROLE</h3>
    <div class="row justify-content-center step_2nd">
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="seller">
                    <img src="{{ asset('app-assets/images/recieved/product.png') }}" alt="">
                    SELLER
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="buyer">
                    <img src="{{ asset('app-assets/images/recieved/service.png') }}" alt="">
                    BUYER
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="other">
                    <img src="{{ asset('app-assets/images/recieved/otherpurchase.png') }}" alt=""> 
                    Other
                </label>
            </div>
        </div>
    </div>
    <div class="NextBtns_botsWrap">
        <div class="NextBtns_bots justify-content-between px-2">
            <div class="DotsLeft">
                <span></span>
                <span class="active"></span>
                <span></span>
            </div>
            <div class="InnerBtns">
                <button type="button" class="backBtn prev-step Back_D1">Back</button>
                <button type="button" class="startedBtn Next_D3">Next</button>
            </div>
        </div>
    </div>
</div>