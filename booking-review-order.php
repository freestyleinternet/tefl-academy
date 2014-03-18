<?php include 'includes/header.php'; ?>
    
    <div class="wrapper">
    	
      	<section class="m1 t1-t4 d1-d4 booking">
			<h1>Booking</h1>
            <ul class="breadcrumb displaymobile">
            	<li><a class="active" href="#">Review Order <span></span></a></li>
                <li><a href="#">Step 3 of 5</a></li>
            </ul>
            <ul class="breadcrumb displaydesktop">
            	<li><a href="booking-your-details.php">Your Details <span></span></a></li>
                <li><a href="booking-contact-details.php">Contact Details <span></span></a></li>
                <li><a class="active" href="booking-review-order.php">Review Order <span></span></a></li>
                <li><a href="#">Payment <span></span></a></li>
                <li><a href="#">Confirmation <span></span></a></li>
            </ul>        	    
        </section>
        
        <div class="m1 t1-all d1-all">
            <div class="leftbx">
            	<h1>Review Order </h1>
                
                <div class="review">
                	<h1>Your Details <a class="button-light orange alignright" href="#">Change your details</a></h1>
                    <dl class="multiple-table-review">
                        <dt>Name:</dt>
                        <dd>Mr Name Surname</dd>
                        <dt>Date of Birth:</dt>
                        <dd>dd/mm/yyyy</dd>
                        <dt>Email Adress:</dt>
                        <dd>example@tefl.co.uk</dd>
                        <dt>No. of Spaces</dt>
                        <dd>2</dd>
                    </dl>
                    <h2>Additional Students:</h2>
                    <dl class="multiple-table-review removetopmargin">
                        <dt>Name:</dt>
                        <dd>Mr Name Surname</dd>
                        <dt>Date of Birth:</dt>
                        <dd>dd/mm/yyyy</dd>
                        <dt>Email Adress:</dt>
                        <dd>example@tefl.co.uk</dd>
                        <dt>Telephone</dt>
                        <dd>(0) 111 222 3434</dd>
                    </dl>
                </div>
                <div class="review last">
                	<h1>Contact Details <a class="button-light orange alignright" href="#">Change contact details</a></h1>
                    <dl class="multiple-table-review">
                        <dt>Adress:</dt>
                        <dd>Street Name 55</dd>
                        <dt>Town/City:</dt>
                        <dd>City</dd>
                        <dt>County:</dt>
                        <dd>County</dd>
                        <dt>Post Code</dt>
                        <dd>123 ABC</dd>
                        <dt>Telephone</dt>
                        <dd>(0) 111 222 3434</dd>
                    </dl>
                </div>
                
                <div class="radioset alignright">
                    <label class="radio-label">
                        <input type="radio" class="radiostyle" name="RadioGroup1" value="radio" id="RadioGroup1_0">
                        I accept the <a href="#">Terms &amp; Conditions</a>
                    </label>
                </div>
                
                <a class="button-light oarrow alignright larger nonudge" href="#">Continue<span></span></a>
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