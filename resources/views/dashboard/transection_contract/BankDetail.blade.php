@extends('dashboard.layouts.master')
@section('title')
Dashboard
@endsection
@section('Heading')
Bank Details
@endsection
@section('Main_content')
<div class="content-body transection_dashboard">
    <section class="section-bank-detail">
        <div class="bank-detail-content bg-off-white text-center">
            <div class="bank-detail-title">
                <h1>
                    Bank Details
                </h1>
            </div>
            <div class="bank-details-inputs">
                <div class="bank-details-input">
                    <img class="input-img" src="{{ asset('app-assets/images/recieved/person.png') }}" alt="icon">
                    <input type="text" placeholder="JOHN SMITH">
                </div>
                <div class="bank-details-input">
                <img class="input-img" src="{{ asset('app-assets/images/recieved/credit-card.png') }}" alt="icon">
                    <input type="number" placeholder="258 xxxx xxxxx xxxxx">
                </div>
                <div class="bank-details-input">
                <img class="input-img" src="{{ asset('app-assets/images/recieved/bank-icon.png') }}" alt="icon">
                    <input type="text" placeholder="May Bank Limited">
                </div>
            </div>
            <div class="bank-detail-list-items">
                <ul>
                    <li>Having trouble with your payment? Please check <a> this article</a></li>
                    <li>Having trouble with your payment? Please check <a>this article</a></li>
                    <li>Having trouble with your payment? Please check <a>this article</a></li>
                </ul>
            </div>
            <div class="bank-detail-desc">
                <textarea  placeholder="Description"></textarea>
            </div>
            <div class="detail-upload-button">
                <button class="detail-upoload-btn"> Upload Recipt</button>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.dropdown-toggle').click(function() {
        var $dropdown = $(this).parent();
        $('.dropdown').not($dropdown).removeClass('show');
        $dropdown.toggleClass('show');
    });

    $(document).click(function(event) {
        if (!$(event.target).closest('.dropdown-toggle').length && !$(event.target).closest(
                '.dropdown-menu').length) {
            $('.dropdown').removeClass('show');
        }
    });
});
</script>
<script>
$(document).ready(function() {
    $(".progress-bar").animate({
        width: "50%"
    }, 2500);
});
</script>
@endsection