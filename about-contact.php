<?php include("header.php") ?>

<section class="cmn-banner">
    <div class="color-overlay"></div>
    <div class="bannr-inner">
    <img src="images/contact/image-asset.jpeg" alt="image-asset.jpeg">
    </div>
</section>

<section class="tab-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
    <ul id="myDIV">
      <h4>about</h4>
      <li class="buttn"><a class="dropdown-item" href="mission.php">mission</a></li>
      <li class="buttn"><a class="dropdown-item" href="leadership.php">leadership</a></li>
      <li class="buttn" class="buttn"><a class="dropdown-item" href="#">contact</a></li>
      <li class="buttn"><a class="dropdown-item" href="give.php">give</a></li>
      <li class="buttn"><a class="dropdown-item" href="outreach.php">outreach</a></li>
    </ul>
    </div>
    <div class="col-md-9" id="mission">
      <div class="tab-content">
        <h2>CONTACT US</h2>
        <p class="mail-text"><strong>E-mail: info@5fchurch.org</strong></p>
        <p>If you’d like to join our mailing list where we send empowerment and updates fill out the form share with us you’d like to join our e-mail list or send an e-mail to info@5fchurch.org.</p>

        <form class="Contact-form">
        <div class="row g-3">
        	<h4>Name</h4>
          <div class="col-md-6">
            <label for="your-name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="your-name" name="your-name" required>
          </div>
          <div class="col-md-6">
            <label for="your-surname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="your-surname" name="your-surname" required>
          </div>
          <div class="col-md-12">
          	<h4>Email Address</h4>
            <input type="email" class="form-control" id="your-email" name="your-email" required>
          </div>
          <div class="col-md-12">
          	<h4>Subject <strong>(required)</strong></h4>
            <input type="text" class="form-control" id="your-subject" name="your-subject">
          </div>
          <div class="col-12">
          	<h4>Message <strong>(required)</strong></h4>
            <textarea class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
                <button data-res="<?php echo $sum; ?>" type="submit" class="btn btn-dark w-100 fw-bold" >Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      </div>
    </div>
    </div>
</div>
</section>

<?php include("footer.php") ?>