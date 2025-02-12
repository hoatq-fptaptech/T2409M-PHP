<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("html/head.php");?>
</head>
<body>
    <?php include_once("html/nav.php");?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form action="#" method="post">
                    <h4>Customer infomation</h4>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label>Full name</label>
                            <input type="text" name="customer_name" placeholder="Full name" class="form-control"/>
                        </div>
                        <div class="col-6 mb-3">
                            <label>Telephone</label>
                            <input type="tel" name="customer_tel" placeholder="Telephone" class="form-control"/>
                        </div>
                        <div class="col-12 mb-3">
                            <label>Address</label>
                            <textarea class="form-control" name="customer_address"placeholder="Address"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <h4>Payment method</h4>
                            <div class="form-check">
                                <input class="form-check-input" value="COD" type="radio" name="payment_method" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    COD
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="PAYPAL" type="radio" name="payment_method" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Paypal
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <h2>Cart summary</h2>

            </div>
        </div>
    </div>
</body>
</html>