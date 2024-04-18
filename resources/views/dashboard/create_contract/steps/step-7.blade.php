<div class="S_step7 d-none">
    <div class="row justify-content-center step1">
        <div class="row">
            <div class="col-md-12">
                <div class="InnerText">
                    <p class="mb-2 text-end">Total Amount: $25k</p>
                    <h3 class="mb-2 text-center">Select One: (Only able to select applicable <br>
                        options based on previous entries)</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="pay_on_completion">
                    <img src="{{ asset('app-assets/images/recieved/complete.png') }}" alt=""> Pay On Completion
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="pay_at_receipt">
                    <img src="{{ asset('app-assets/images/recieved/receipt.png') }}" alt="">Pay At Receipt
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="pay_in_milestone">
                    <img src="{{ asset('app-assets/images/recieved/milstone.png') }}" alt=""> Pay in milestone
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
                <button type="button" class="backBtn S_StepBack_6">Back</button>
                <button type="button" class="startedBtn next-step">Next</button>
            </div>
        </div>
    </div>
</div>