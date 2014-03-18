<?php include 'includes/header.php'; ?>
    
    <div class="wrapper">
    	
      	<section class="m1 t1-t4 d1-d4 booking">
			<h1>Booking</h1>
            <ul class="breadcrumb displaymobile">
            	<li><a class="active" href="#">Contact Details <span></span></a></li>
                <li><a href="#">Step 2 of 5</a></li>
            </ul>
            <ul class="breadcrumb displaydesktop">
            	<li><a href="booking-your-details.php">Your Details <span></span></a></li>
                <li><a class="active" href="booking-contact-details.php">Contact Details <span></span></a></li>
                <li><a href="booking-review-order.php">Review Order <span></span></a></li>
                <li><a href="#">Payment <span></span></a></li>
                <li><a href="#">Confirmation <span></span></a></li>
            </ul>        	    
        </section>
        
        <div class="m1 t1-all d1-all">
            <div class="leftbx">
            	<h1>Lead Students' Contact Details</h1>
                <p class="key">Required fields</p>
                <form class="bookingstyle">
                	<fieldset>
                        <label>Adress</label>
                        <input type="text" placeholder="fdgdf">
                        
                      <label>Town/City</label>
                        <input type="text" placeholder="fdgdf">
                        
                        <label>County</label>
                        <input type="text" placeholder="fdgdf">
                        
                        <label>Postcode</label>
                        <input type="text" placeholder="fdgdf">
                        
						<div class="radioset">
                        	<label>Billing Address</label>
                            <label class="radio-label">
                                <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0">
                                Use same as before
                            </label>
                            <label class="radio-label last">
                                <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
                                Enter new billing adress
                            </label>
						</div>
                      	<label>Adress</label>
                        <input type="text" placeholder="fdgdf">
                        
                        <label>Town/City</label>
                        <input type="text" placeholder="fdgdf">
                        
                        <label>County</label>
                        <input type="text" placeholder="fdgdf">
                        
                        <label>Postcode</label>
                        <input type="text" placeholder="fdgdf">
                        
                        <label>Telephone</label>
                        <input type="text" placeholder="fdgdf">
                    </fieldset>
                </form>
                
                <a class="button-light oarrow alignright larger" href="booking-review-order.php">Continue<span></span></a>
            </div>
            
            <div class="rightbx">
            	<h1>Order Details</h1>
                <p>2 days TEFL course, Ashford, Holiday Inn Central,</p>
                <dl class="multiple-table">
                    <dt>2 x Spaces, Price:</dt>
                    <dd>£350</dd>
                    <dt>Other Discount:</dt>
                    <dd>£50</dd>
                    <dt>Order Total:</dt>
                    <dd>£300</dd>
                    <dt>Deposit Paid: </dt>
                    <dd>£100</dd>
                </dl>
                <p>01 Mar 2014 - 02 Mar 2014 Holiday Inn Ashford - Central, Canterbury Rd, Ashford, Kent TN24 8QQ</p>
                <a class="button-light orange mobbutton" href="#">Change Course Location/Date</a>
            </div>
            
            <div class="rightbx">
            	<h1>We Accept</h1>
                <img src="assets/images/credit-cards.jpg" alt="TEFL Academy"/>
            </div>
        </div>

    </div>

      
      <?php include 'includes/testimonials.php'; ?>
    
<?php include 'includes/footer.php'; ?>