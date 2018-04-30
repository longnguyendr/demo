
<div class="container" style="margin-top:80px;">
  <ul class="breadcrumb">
    <li><a href="<?php echo site_url('reserve/car/'.$cars[0]['carID']);?>">Booking details</li></a>
    <li><a href="<?php echo site_url('cart/cart2s/'.$cars[0]['carID']);?>">Identity prove</li></a>
    <li class="active">Confirm payment</li>
  </ul>
</div>
<!--echo$cars[0]['carID'];-->
<div class="container" style="box-shadow:0px 5px 10px;padding: 15px;">
  <!--Open row-->
  <div class="row">
      <div class="col-sm-6">

        <!--Left Panel-->
        <div class="col-sm-12" style="padding:25px;">
          <!--Check in-->
            <div class="col-sm-6">
              <tr>
              <td><label for="">CHECK-IN</label></td>
                  <td>
                      <div class='input-group date' id='datetimepicker_checkin'>
                          <input disabled value="<?php echo $_SESSION['chkin_session'] ?>" type='text' id="chkin" class="form-control" name="check_in" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </td>
              </tr>
            </div>

          <!--Check out-->
            <div class="col-sm-6">
              <tr>
                <td><label for="">CHECK-OUT</label></td>
                <td>
                  <div class='input-group date' id='datetimepicker_checkout'>
                      <input disabled value="<?php echo $_SESSION['chkout_session'] ?>" type='text' id="chkout" class="form-control" name="check_out"/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </td>
              </tr>
            </div>
          <!--Total Price-->
            <div class="col-sm-12">
              <label for="">Total price:</label>
              <div style="font-size: 22px;background-color:silver;box-shadow:4px 6px 10px gray; border-radius:5px;width: 300px;margin:auto;">
                <p id="totalprices" class="text-center"><?php echo "Total: ".$_SESSION['price_session']."&euro;" ?></p>
              </div>
            </div>
        </div>
        <!--end Left panel-->

        <hr>
        <!--Cancellation-->
        <div class="col-sm-12">
            <h3>Cancellation Policy</h3>
            <p><?php echo $cars[0]['cancellation_policy']?></p>
        </div>
        <!--End cancellation-->

      </div>
      <!--Right Panel Price display-->
      <div class="col-sm-6">
            <!--upload-->
            <div class="col-sm-12 text-center">
                <h2>Confirm your payment</h2>
            </div>
            <div class="col-sm-12 text-center">
                <i class="fa fa-cc-visa" style="font-size:50px"></i>
                <i class="fa fa-cc-mastercard" style="font-size:50px"></i>
                <i class="fa fa-cc-paypal" style="font-size:50px"></i>
            </div>
            <div class="col-sm-12">
              <div class="col-sm-6 text-center form-group">
                <label for="fn">First name :</label>
                <input class="form-control" id="fn" placeholder="Enter your first name"></input>
              </div>
              <div class="col-sm-6 text-center form-group">
                <label for="">Last name :</label>
                <input class="form-control" placeholder="Enter your last name"></input>
              </div>
            </div>
            <!--End upload-->
            <div class="col-sm-12">
              <div class="col-sm-12 text-center form-group">
                <label for="">Card information</label>
                  <input class="form-control" id="cif" placeholder="Card number"></input>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="col-sm-6 text-center form-group">
                <input class="form-control" id="fn" placeholder="Expiration"></input>
              </div>
              <div class="col-sm-6 text-center form-group">
                <input class="form-control" placeholder="CCV/CVV"></input>
              </div>
            </div>
            <div class="col-sm-12">
                <form>
                    <div class="checkbox text-center">
                      <label><input type="checkbox" value="">I agree to the <a href="">host's rules</a>, <a href=""> Cancellation</a>.
                      <br>I also agree on <a href="">term of use</a> ,<a href="">privacy</a> of Engine4U</label>
                    </div>
                </form>
            </div>
        </div>
        <!--End Right Panel-->
        <div class="col-sm-12 text-left" style="padding-top:20px;">
          <a href="<?php echo site_url('cart/cart2s/'.$cars[0]['carID']);?>" type="button" class="btn btn-primary" >Back</a>
            <a href="<?php echo site_url('cart/cart4s/'.$cars[0]['carID']);?>" type="button" class="btn btn-primary" >Continue</a>
        </div>
  </div>
  <!--End row-->

</div>

<hr>
