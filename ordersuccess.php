<?php
include "header.php";
include "cartfuncties.php";
include "afrekenfuncties.php";

$cart = saveCart([]);




?>

<h1>Bedankt voor je bestelling</h1>
<p>Je bestelnummer is: <?php $b = generateOrderNumber(); echo $b; ?></p>

<?php

$_SESSION['action_count'] = $_SESSION['action_count'] + 1;

if($_SESSION['action_count'] < 2){ ?>
        <br>
    <script>alert('Je hebt een coupon code gekregen!')</script>

<section id="labels">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="dl">
                    <div class="brand">
                        <h2>Coupon</h2>
                    </div>
                    <div class="discount alizarin">€5
                        <div class="type">off</div>
                    </div>
                    <div class="descr">
                        <strong>Je kortingscoupon is 5 euro waard!</strong>

                    </div>
                    <div class="ends">
                        <small>* Geld alleen op eerste bestelling</small>
                    </div>
                    <div class="coupon midnight-blue">
                        <a data-toggle="collapse" href="#code-1" class="open-code">Genereer code</a>
                        <div id="code-1" class="collapse code"><?php $b = generateCouponCode(); echo $b; $_SESSION['code'] = TRUE; ?></div>
                    </div>
                </div>
            </div>

                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    section{padding:5% 0}
    .alizarin{background:#e74c3c}
    .amethyst{background:#9b59b6}
    .emerald{background:#2ecc71}
    .midnight-blue{background:#2c3e50}
    .peter-river{background:#3498db}
    .dl{background:#f0f0f0;padding:30px 0;border-radius:20px;position:relative}
    .dl:before{content:" ";height:20px;width:20px;background:#ddd;border-radius:20px;position:absolute;left:50%;top:20px;margin-left:-10px}
    .dl .brand{text-transform:uppercase;letter-spacing:3px;padding:10px 15px;margin-top:10px;text-align:center;min-height:100px}
    .dl .discount{min-height:50px;position:relative;font-size:80px;line-height:80px;text-align:center;font-weight:700;padding:20px 15px 0;color:#f1c40f}
    .dl .discount:after{content:" ";border-right:20px solid transparent;border-left:20px solid transparent;position:absolute;bottom:-20px;left:20%}
    .dl .discount.alizarin:after{border-top:20px solid #e74c3c}
    .dl .discount.peter-river:after{border-top:20px solid #3498db}
    .dl .discount.emerald:after{border-top:20px solid #2ecc71}
    .dl .discount.amethyst:after{border-top:20px solid #9b59b6}
    .dl .discount .type{font-size:20px;letter-spacing:1px;text-transform:uppercase;margin-top:-30px}
    .dl .descr{color:#999;margin-top:10px;padding:20px 15px}
    .dl .ends{padding:0 15px;color:#f1c40f;margin-bottom:10px}
    .dl .coupon{min-height:50px;text-align:center;text-transform:uppercase;font-weight:700;font-size:18px;padding:20px 15px}
    .dl .coupon a.open-code{color:#16a085}
    .dl .coupon .code{
                                                        letter - spacing:1px;border - radius:4px;margin - top:10px;padding:10px 15px;color:#f1c40f;background:#f0f0f0}
</style >
<?php } ?>
<p><a href='browse.php'>Terug naar artikelpagina</a></p>
