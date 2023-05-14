
  <!-- Checkout Page -->
  <main class="checkout-container">
    <ul class="breadcrumbs">
      <li>
        <a href="">Home</a>
      </li>
      <li class="fa-solid fa-angle-right seperator"></li>
      <li>
        <a href="">Products</a>
      </li>
    </ul>
    <form action="#">
      <div class="checkout-details">
        <!-- Delivery Information -->
        <div class="info">
          <div class="header">
            <h1>Delivery Information</h1>
          </div>
          <div class="fields">
            <div class="group">
              <div class="field input">
                <label for="fname">First Name*</label>
                <input id="fname" type="fname" class="form-control" name="fname" required autocomplete="fname"
                            placeholder="Enter First Name" autofocus>
              </div>
              <div class="field input">
                <label for="fname">Last Name*</label>
                <input id="lname" type="lname" class="form-control" name="lname" required autocomplete="lname"
                            placeholder="Enter Last Name" autofocus>
              </div>
            </div>
            <div class="field input">
              <label for="address">Address*</label>
              <input id="address" type="address" class="form-control" name="address" required autocomplete="address"
              placeholder="Enter Address" autofocus>
            </div>
            <div class="group">
              <div class="field input">
                <label for="city">City/Town*</label>
                <input id="city" type="city" class="form-control" name="city" required autocomplete="city"
                placeholder="Enter City/Town" autofocus>
              </div>
              <div class="field input">
                <label for="zip">Zip Code*</label>
                <input id="zip" type="zip" class="form-control" name="zip" required autocomplete="zip"
                placeholder="Enter Zip Code" autofocus>
              </div>
            </div>
            <div class="group">
              <div class="field input">
                <label for="pnum">Phone Number*</label>
                <input id="pnum" type="fname" class="form-copnum" name="fname" required autocomplete="pnum"
                placeholder="Enter Phone Number" autofocus>
              </div>
              <div class="field input">
                <label for="country">Country*</label>
                <input id="country" type="country" class="form-control" name="country" required autocomplete="country"
                            placeholder="Enter Country" autofocus>
              </div>
            </div>
          </div>
        </div>
        <!-- Payment Method -->
        <div class="info">
          <div class="header">
            <h1>Payment Method</h1>
          </div>
          <div class="fields">
            <div class="field input">
              <label for="holder-name">Card Holder Name*</label>
              <input id="holder-name" type="holder-name" class="form-control" name="holder-name" required autocomplete="holder-name"
                placeholder="Enter Card Holder's Name" autofocus>
            </div>
            <div class="group">
              <div class="field input">
                <label for="holder-email">Email*</label>
                <input id="holder-email" type="holder-email" class="form-control" name="holder-email" required autocomplete="holder-email"
                  placeholder="Enter Email Address" autofocus>
              </div>
              <div class="field input">
                <label for="card-num">Card Number*</label>
                <input id="card-num" type="card-num" class="form-control" name="card-num" required autocomplete="card-num"
                  placeholder="Enter Card Number" autofocus>
              </div>
            </div>
            <div class="group">
              <div class="field input">
                <label for="expiry">Expiry*</label>
                <input id="expiry" type="expiry" class="form-control" name="expiry" required autocomplete="expiry"
                  placeholder="Enter Expiry" autofocus>
              </div>
              <div class="field input">
                <label for="cvc">CVC</label>
                <input id="cvc" type="cvc" class="form-control" name="cvc" required autocomplete="cvc"
                  placeholder="Enter CVC" autofocus>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Order Summary -->
      <div class="order-summary">
        <div class="header">
          <h1>Order Summary</h1>
        </div>
        <div class="item-col">
          <div class="item-row">
            <div class="img"></div>
            <div class="details">
              <h3 class="name">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptate excepturi vero.</h3>
              <div class="group">
                <div class="detail">Size: <b>XL</b></div>
                <div class="detail">Color: <b>Blue</b></div>
              </div>
              <h2 class="price">$115.00</h2>
            </div>
          </div>
          <div class="item-row">
            <div class="img"></div>
            <div class="details">
              <h3 class="name">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptate excepturi vero.</h3>
              <div class="group">
                <div class="detail">Size: <b>XL</b></div>
                <div class="detail">Color: <b>Blue</b></div>
              </div>
              <h2 class="price">$115.00</h2>
            </div>
          </div>
          <div class="item-row">
            <div class="img"></div>
            <div class="details">
              <h3 class="name">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptate excepturi vero.</h3>
              <div class="group">
                <div class="detail">Size: <b>XL</b></div>
                <div class="detail">Color: <b>Blue</b></div>
              </div>
              <h2 class="price">$115.00</h2>
            </div>
          </div>
          <div class="item-row">
            <div class="img"></div>
            <div class="details">
              <h3 class="name">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptate excepturi vero.</h3>
              <div class="group">
                <div class="detail">Size: <b>XL</b></div>
                <div class="detail">Color: <b>Blue</b></div>
              </div>
              <h2 class="price">$115.00</h2>
            </div>
          </div>
          <div class="item-row">
            <div class="img"></div>
            <div class="details">
              <h3 class="name">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptate excepturi vero.</h3>
              <div class="group">
                <div class="detail">Size: <b>XL</b></div>
                <div class="detail">Color: <b>Blue</b></div>
              </div>
              <h2 class="price">$115.00</h2>
            </div>
          </div>
        </div>
        <div class="cost">
          <div class="group">
            <h4>SubTotal</h4>
            $575.00
          </div>
          <div class="group">
            <h4>Tax(5%)</h4>
            $28.75
          </div>
          <div class="group">
            <h4>Shipping Fee</h4>
            $0.00
          </div>
          <div class="group">
            <h4>Total</h4>
            $603.75
          </div>
          <button type="submit">Purchase Now</button>
        </div>
      </div>
    </form>
  </main>