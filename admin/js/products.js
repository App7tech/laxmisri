function get_offer_price(){
    var offer = $('#offer').val(),
        content = '';
    if(offer == '1'){
        // yes
        content += '<div class="col-md-12">';
            content += '<label for="offer_price" >Offer price</label>';
            content += '<input type="text" class="form-control form-control-line"  name="offer_price" id="offer_price">';
        content += '</div>';
    }else{
        // no
        content += '';
    }
    $('.offer_price_div').html(content);
}