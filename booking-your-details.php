<?php include 'includes/header.php'; ?>
    
    <div class="wrapper">
    	
      	<section class="m-all t1-all d1-all booking">
			<h1>Booking</h1>
            <ul class="breadcrumb displaymobile">
            	<li><a class="active" href="#">Your Details <span></span></a></li>
                <li><a href="#">Step 1 of 5</a></li>
            </ul>
            <ul class="breadcrumb displaydesktop">
            	<li><a class="active" href="booking-your-details.php">Your Details <span></span></a></li>
                <li><a href="booking-contact-details.php">Contact Details <span></span></a></li>
                <li><a href="booking-review-order.php">Review Order <span></span></a></li>
                <li><a href="#">Payment <span></span></a></li>
                <li><a href="#">Confirmation <span></span></a></li>
            </ul>        	    
        </section>
        
        <div class="m-all t1-all d1-all">
            <div class="leftbx">
            	<h1>Lead Student’s Details</h1>
                <p class="key">Required fields</p>
                <form class="bookingstyle">
                	<fieldset>
                        <label>Title</label>
                        <div class="styled">
                           <select>
                              <option>Mr.</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                           </select>
                        </div>
                        <label>Name</label>
                        <input type="text" placeholder="Name Surname">
                        
                        <label>Date of Birth</label>
                        <input type="text" placeholder="( dd/mm/yy )">
                        
                        <label>Email Address</label>
                        <input type="email" placeholder="example@email.co.uk">
                        
                        <label>Telephone</label>
                        <input type="text" placeholder="(0) 111 222 3434">
                        
                        <label>No. of Bookings</label>
                        <div class="styled">
                           <select>
                              <option>1</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                           </select>
                        </div>
                    </fieldset>
                    <h2>Aditional Students</h2>
                    <fieldset class="third">
                    	<label>Title</label>
                        <label class="displaydesktop">Name</label>
                        <label class="displaydesktop">Date of Birth</label>
                        <div class="styled">
                           <select>
                              <option>Mr.</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                           </select>
                        </div>
                        <label class="displaymobile">Name</label>
                        <input type="text" placeholder="Name Surname">
                        <label class="displaymobile">Date of Birth</label>
                        <input type="text" placeholder="( dd/mm/yy )">
                    </fieldset>
                    <fieldset class="half">
                    	<label>Telephone</label>
                        <label class="displaydesktop">Email Address</label>
                        <input type="text" placeholder="(0) 111 222 3434">
                        <label class="displaymobile">Email Address</label>
                        <input type="email" placeholder="example@email.co.uk">
                    </fieldset>
                    
                    <fieldset>
                    	<label>Payment Method</label>
                        <div class="styled">
                           <select>
                              <option>£50 deposit per place order</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                           </select>
                           <p>Please note: If you choose to pay a £50 deposit instead of the full amount upfront you will be emailed a payment link for the remaining balance. You must pay the remaining balance no later that one week before your course date.</p>
                        </div>
                        <label>Promotional Code</label>
                        <input type="text" placeholder="Promotional Code">
                        <label class="wider">Where did you hear about us?</label>
                        <div class="styled smaller">
                           <select>
                              <option>Select</option>
                              <option>Option one</option>
                              <option>Option two</option>
                              <option>Option three</option>
                           </select>
                        </div>
                    </fieldset>

                </form>
                
                <a class="button-light oarrow alignright larger" href="booking-contact-details.php">Continue<span></span></a>
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