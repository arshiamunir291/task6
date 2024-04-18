<div class="S_Step4 d-none">
    <div class="InnerText">
        <h3 class="mb-2 text-center">Purchase & Transfer Selection Page</h3>
    </div>
    <div class="row justify-content-center step1">
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="products">
                    <img src="{{ asset('app-assets/images/recieved/product.png') }}" alt=""> Products
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="services">
                    <img src="{{ asset('app-assets/images/recieved/service.png') }}" alt=""> Services
                </label>
            </div>
        </div>
        <div class="col-md-3">
            <div class="Sendertabs">
                <label class="">
                    <input type="radio" name="sender" value="other_purchase">
                    <img src="{{ asset('app-assets/images/recieved/otherpurchase.png') }}" alt=""> Other Purchase
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
                <button type="button" class="backBtn Goto_Step3">Back</button>
                <button type="button" class="startedBtn next-step">Next</button>
            </div>
        </div>
    </div>
</div>