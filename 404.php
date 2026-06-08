<?php
require 'inc/head.php';
require 'inc/chat.php';
?>
	
	
	<style>
	    html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden; /* ðŸ”¥ Scroll completely band */
}

/*404*/


section.cen {
    background: url(https://hexabookmarketing.com/assets/images/banner-new.webp) center right / cover no-repeat;

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;
    display: flex;
    text-align: center;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    /*background: black;*/
}



section.cen h2 {
    font-size: 140px;
    color: #e28d00;
    margin: 0 0;
}

section.cen p {
    color: #000;
    font-size: 22px;
}

.text-center {
    margin-top: 40px;
}

.text-center a {
    background: black;
    color: #fff;
    padding: 10px 40px;
}
	</style>
	
<section class="cen">
<div class="mars"></div>
<h2>404</h2>
<p class="title">Oh no!!</p>
<p class="subtitle">
	You’re either misspelling the URL <br /> or requesting a page that's no longer here.
</p>
<div class="text-center">
	<button class="btn-back btn btn-primary" onclick="history.back()">Back to Home page</button>
</div>
<div class="cursor">
      <div>
        <span></span>
      </div>
</div>
</section>