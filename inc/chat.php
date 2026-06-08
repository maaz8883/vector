<!-- Start of LiveChat (www.livechat.com) code -->
 <script>
function loadZendeskWidget(){var e=document.createElement("script");e.type="text/javascript",e.id="ze-snippet",e.async=!0,e.src="",document.getElementsByTagName("head")[0].appendChild(e)}setTimeout(function(){loadZendeskWidget()},2e3);
    
function initZendesk(){if("undefined"==typeof zE||"undefined"==typeof $zopim){setTimeout(initZendesk,500);return}zE(function(){zE.activate()}),zE(function(){$zopim.livechat.setOnUnreadMsgs(function(n){n>0&&!$zopim.livechat.window.getDisplay()&&$zopim.livechat.window.show()})})}setTimeout(initZendesk,3e3),$(".chat, .chatt").click(function(){"undefined"!=typeof $zopim&&$zopim.livechat?$zopim.livechat.window.toggle():console.warn("Zendesk chat not loaded yet")});
</script> 
<!-- End of LiveChat code -->
<link rel="preconnect" href="https://cdnjs.cloudflare.com"> <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput-jquery.min.js" integrity="sha512-sVhsc+r7sEickzS6LohO+VDVv2ler/3QY7op8ScWV8KVLLq+m1WAl6uplr/YHmqI0L0j99ehNRh2cIwn7zXcdg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.min.js"></script>

<script> function validate(){var e=$("input[name='phone']").intlTelInput("getNumber");iso=$("input[name='phone']").intlTelInput("getSelectedCountryData").iso2;var t=intlTelInputUtils.getExampleNumber(iso,0,0);""==e&&(e=t);var o=intlTelInputUtils.formatNumber(e,iso,intlTelInputUtils.numberFormat.NATIONAL),n=intlTelInputUtils.isValidNumber(e,iso),a=intlTelInputUtils.getValidationError(e,iso);console.log(e),console.log(o),console.log(intlTelInputUtils.formatNumber(e,iso,intlTelInputUtils.numberFormat.INTERNATIONAL)),console.log(intlTelInputUtils.formatNumber(e,iso,intlTelInputUtils.numberFormat.E164)),console.log(intlTelInputUtils.formatNumber(e,iso,intlTelInputUtils.numberFormat.RFC3966)),console.log(n),console.log(a)}$("input[name='phone']").intlTelInput({geoIpLookup:function(e){$.get("https://ipinfo.io",function(){},"jsonp").always(function(t){e(t&&t.country?t.country:"")})},initialCountry:"auto",separateDialCode:!0}),$("input[name='phone']").on("countrychange",function(e){$(this).val("");var t=$(this).intlTelInput("getSelectedCountryData"),o=t.dialCode,n=intlTelInputUtils.getExampleNumber(t.iso2,0,0);console.log("placeholder > "+n),n=intlTelInputUtils.formatNumber(n,t.iso2,2),console.log("placeholder > "+n),n=n.replace("+"+o+" ",""),console.log("placeholder > "+n),mask=n.replace(/[0-9+]/gi,"0"),$("input[name='phone']").mask(mask,{placeholder:n})}),$("input[name='phone']").on("input",function(){/^1/.test(this.value)&&(this.value=this.value.replace(/^1/,""))});</script>
<style type="text/css">
			:root {
		        --clr-1:250, 189, 46;
		    --clr-2:36, 102, 136;
		    --clr-3:253,136,41;
			--clr-4:51 ,155, 202;
		    --dark-color:0, 28, 63;
		    --light-color:240, 240, 240;}
		</style>
</body>



</html>