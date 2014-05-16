<?php include 'includes/header.php'; ?>
    
    <div class="wrapper">
    	
      	<section class="m1 t-all d1-d3 shop">


            <div class="shop-product-list-single fullwidth">
            	
                <!-- multistep form -->
            	 <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Your Shopping Cart</li>
                    <li>Your Delivery Address</li>
                    <li>Payment</li>
                    <li>Finish</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Your Basket</h2>
                    <h3 class="fs-subtitle">Step 1</h3>
          
                    <table class="basket det-table" cellpadding="0" cellspacing="0" border="0">
                        <tr class="head">
                            <td width="50%">Title</td>
                            <td width="20%">Quantity</td>
                            <td width="30%">Cost</td>
                        </tr>
                        <tr class="crt-list">
                        	 <td class="tf-first">The TEFL Resource Pack</td>
                          <td>
                          <input type="text" class="tfp-qty" size="2" name="quantity[]" value="1"/>
                          </td>
                        	 <td class="tf-last">&pound;20.00</td>
                        </tr>
                        <tr class="discount">
                        	<td colspan="2" class="tf-first">Express Postage & Packing (3 Working Days)</td>
                        	<td class="tf-last">FREE</td>
                        </tr>
                        <tr class="discount">
                        	<td colspan="2" class="tf-first">Have a Promotional Code?</td>
                        	<td class="tf-last"><input class="prom-code-btn" type="text" name="promo_code_entered" placeholder="Enter promotional code here"/></td>
                        </tr>
                        <tr class="discount">
                        	<td colspan="2" class="tf-first"><b>Total Cost</b></td>
                        	<td class="tf-last totalcost">&pound;20.00</td>
                        </tr>
                    </table> 
                    <input type="button" name="next" class="next action-button buttontype" value="Next" />                
					  <input class="buttontypeorange" type="submit" name="recalculate" value="Recalculate"/>
					</fieldset>

                  <fieldset>
                  	<h2 class="fs-title">Your Delivery</h2>
                  
                      <table class="basket det-table" cellpadding="0" cellspacing="0">
                          <tr class="head">
                              <td width="50%">Title</td>
                              <td width="20%">Quantity</td>
                              <td width="30%">Cost</td>
                          </tr>
                          <tr class="crt-list">
                          <td class="tf-first">The TEFL Resource Pack</td>
                          	<td>1</td>
                          	<td class="tf-last">&pound;20.00</td>
                          </tr>
                          <tr class="discount">
                        	<td colspan="2" class="tf-first"><b>Total Cost</b></td>
                        	<td class="tf-last totalcost">&pound;20.00</td>
                        </tr>
						</table>
                          
                     <h2 class="fs-title">Delivery Address</h2>
                     <div class="payment-form-style">
                     <label>Name:<span>*</span></label>
                     <input class="validate['required'] inpt" type="text" name="name" id="name" required>
                     
                     <label>Email:<span>*</span></label>
                     <input class="inpt" type="email" name="email" id="email" required>
                     
                     <label>Phone:<span>*</span></label>
                     <input class="inpt" type="text" name="phone" id="phone" required>
                     
                     <label>City:<span>*</span></label>
                     <input class="inpt" type="text" name="address" id="address" required>
                     
                     <label>Postal Code:<span>*</span></label>
                     <input class="vinpt" type="text" name="postal_code" id="postal_code" required>          
                    </div>
                    
                    <input type="button" name="next" class="next action-button" value="Next" />
                    <input type="button" name="previous" class="buttontype previous action-button" value="Previous" />
                    
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">PAYMENT</h2>
                    
                    <table class="basket det-table" cellpadding="0" cellspacing="0">
                          <tr class="head">
                              <td width="50%">Title</td>
                              <td width="20%">Quantity</td>
                              <td width="30%">Cost</td>
                          </tr>
                          <tr class="crt-list">
                          	<td class="tf-first">The TEFL Resource Pack</td>
                          	<td class="tf-last">3</td>
                             <td class="tf-last">&pound;20.00</td>
                          </tr>
                          <tr class="crt-list">
                          	<td class="tf-first">The TEFL Resource Pack</td>
                          	<td class="tf-last">1</td>
                             <td class="tf-last">&pound;20.00</td>
                          </tr>
                          <tr class="discount">
                        	<td colspan="2" class="tf-first"><b>Total Cost</b></td>
                        	<td class="tf-last totalcost">&pound;20.00</td>
                        </tr>
						</table>
                    <input type="button" name="next" class="next action-button" value="Next" />
                    <input type="button" name="previous" class="buttontype previous action-button" value="Previous" />
                    
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Thank you! Your payment has been made.</h2>
                    <h3 class="fs-subtitle">We will never sell it</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus neque ligula, at ultrices leo ornare eget. Nam lobortis quam magna, et fringilla lorem blandit quis. Donec congue semper tempor. Suspendisse pulvinar risus odio, id imperdiet tortor interdum non. </p>
                    
                    
                    <input type="submit" name="submit" class="submit action-button" value="Submit" />
                    <input type="button" name="previous" class="buttontype previous action-button" value="Previous" />
                </fieldset>
               
            </form>
                
            	
            </div>

        </section>
        
        <aside class="m1 t-all d4 displaydesktop">
        	<div class="m1 t1 d-all">
                <div class="home-feature nocontent">
					<a href="#">
                        <img src="assets/images/feature3.svg" alt="TEFL Academy"/>
                        <h2>Find your<br>Local course</h2>
                        <h3>UK wide courses<br>every month</h3>
                        <div class="button-light oarrow absolutebr" href="#">Search<span></span></div>
                    </a>
                </div>
            </div>
            <div class="m1 t2 d-all">
                <div class="home-feature nocontent">
                    <a href="#">
                        <img src="assets/images/feature4.jpg" alt="TEFL Academy"/>
                        <h2>Download 2014<br>Prospectus</h2>
                        <div class="button-light oarrow absolutebr" href="#">Download<span></span></div>
                    </a>
                </div>
            </div>
            <div class="m1 t3 d-all">
                <div class="home-feature nocontent special">
                    <a href="#">
                        <img src="assets/images/feature5.svg" alt="TEFL Academy"/>
                        <h2>Bring a friend <br>&amp; save £50!</h2>
                        <h3>Book 2 places at the<br>same time &amp; get <strong>£50 off</strong></h3>
                        <div class="button-light oarrow absolutebr" href="#">Book Now<span></span></div>
                    </a>
                </div>
            </div>
            <div class="m1 t4 d-all">
                <div class="home-feature nocontent hbg">
                    <a href="#">
                        <img src="assets/images/feature6.jpg" alt="TEFL Academy"/>
                        <h2>Schools <br>Programme</h2>
                        <div class="button-light oarrow absolutebr" href="#">More Info<span></span></div>
                    </a>
                </div>
            </div>
        </aside>
        
    </div>
    
    <div class="displaydesktop">
    	<?php include 'includes/social-section.php'; ?>
    </div>
    
<?php include 'includes/footer.php'; ?>