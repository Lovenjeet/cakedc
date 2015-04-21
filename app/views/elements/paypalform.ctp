<h2>Please wait you will be ...</h2>
<div style="display:none;">
<form name="_xclick" action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="testin_1282914921_biz@gmail.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="return" value="http://comp32/mob/users/register/" />
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="a3" value="<?php echo $susbcriptionInfo['SubscriptionPlan']['plan_price'] ?>">
<input type="hidden" name="p3" value="<?php echo  $susbcriptionInfo['SubscriptionPlan']['plan_duration'] ?>">
<input type="hidden" name="t3" value="M">
<input type="hidden" name="os0" value="id" />
<input type="hidden" name="on0" value="5" />
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1" >
<input type="submit" name="submit" type="submit" id="subs" />
</form>
</div>
