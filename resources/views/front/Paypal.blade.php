<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
    {{-- possiamo cambiare  value="_s-xclick" _xclick secondo la tabella:
        https://developer.paypal.com/api/nvp-soap/paypal-payments-standard/integration-guide/formbasics/?mark=webketing%26_ga%3D2.142675893.1607566148.1585586557-1753121421.1568128919%26hubs_signupu-rl%3Dblog.hubspot.com%2Fwebsite%2Fauthor%2Fallie-decker%2Fpage%2F2%26hubs_signupct-a%3Dblog-pagination__item--disabled --}}
    <input type="hidden" name="cmd" value="_xclick">
    {{-- dove value = "XR7VVKVHE72VQ" e collegato con il mio account ID paypal business --}}
    <input type="hidden" name="hosted_button_id" value="XR7VVKVHE72VQ">
    <input type="hidden" name="business" value="irinam7a@gmail.com">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="amount" value="{{ Session('cart')->totalPrice }}">
    <input type="hidden" name="email" value="{{ Session('Customer')->email }}">
    <input type="hidden" name="address1" value="{{ Session('Aggiorna')->indirizzo }}">
    <input type="hidden" name="city" value="{{ Session('Aggiorna')->citta }}">
    <input type="hidden" name="country" value="IT">
    <input type="hidden" name="currency_code" value="EUR">
    <input type="hidden" name="return" value="http://127.0.0.1:8000/grazie">
    <input type="image" src="https://www.sandbox.paypal.com/it_IT/IT/i/btn/btn_buynowCC_LG.gif" border="0"
        name="submit" alt="PayPal è il metodo rapido e sicuro per pagare e farsi pagare online.">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/it_IT/i/scr/pixel.gif" width="1"
        height="1">
</form>
