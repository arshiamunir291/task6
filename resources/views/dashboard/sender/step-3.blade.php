<div class="Step_First S_step3 d-none">
    <div class="InnerText">
        <h3 class="mb-2 text-center">Purchase & Transfer Selection Page</h3>
    </div>
    <div class="row justify-content-center step3">
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="money_transfer">
                    <img src="{{ asset('app-assets/images/recieved/moneytransfor.png') }}" alt="">
                    Money Transfer
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="bill_payment">
                    <img src="{{ asset('app-assets/images/recieved/billpayment.png') }}" alt="">
                    Bill Payment
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
                <button type="button" class="backBtn S_StepBack_2">Back</button>
                <button type="button" class="startedBtn next-step Goto_S_step4">Next</button>
            </div>
        </div>
    </div>
</div>