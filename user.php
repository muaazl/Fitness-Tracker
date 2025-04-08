<?php
$pageTitle = 'User'; // Set the page title
$activePage = 'user'; // Set the active page for the sidebar
include('includes/db.php');
include('includes/header.php');
include('includes/sidebar.php');
include('includes/navbar.php');
?>

        <div class="row">
          <div class="col-lg-4 col-md-5">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/background.jpg" alt="..."/>
              </div>
              <div class="content">
                <div class="author">
                  <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                  <h4 class="title">Chet Faker<br />
                    <a href="#"><small>@chetfaker</small></a>
                  </h4>
                </div>
                <p class="description text-center">
                  "I like the way you work it <br>
                  No diggity <br>
                  I wanna bag it up"
                </p>
              </div>
              <hr>
              <div class="text-center">
                <div class="row">
                  <div class="col-md-3 col-md-offset-1">
                    <h5>12<br /><small>Files</small></h5>
                  </div>
                  <div class="col-md-4">
                    <h5>2GB<br /><small>Used</small></h5>
                  </div>
                  <div class="col-md-3">
                    <h5>24,6$<br /><small>Spent</small></h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="header">
                <h4 class="title">Team Members</h4>
              </div>
              <div class="content">
                <ul class="list-unstyled team-members">
                  <li>
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="avatar">
                          <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-xs-6">
                        DJ Khaled
                        <br />
                        <span class="text-muted"><small>Offline</small></span>
                      </div>

                      <div class="col-xs-3 text-right">
                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="avatar">
                          <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-xs-6">
                        Creative Tim
                        <br />
                        <span class="text-success"><small>Available</small></span>
                      </div>

                      <div class="col-xs-3 text-right">
                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-xs-3">
                        <div class="avatar">
                          <img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                        </div>
                      </div>
                      <div class="col-xs-6">
                        Flume
                        <br />
                        <span class="text-danger"><small>Busy</small></span>
                      </div>

                      <div class="col-xs-3 text-right">
                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="card">
              <div class="header">
                <h4 class="title">Edit Profile</h4>
              </div>
              <div class="content">
                <form>
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Company</label>
                        <input type="text" class="form-control border-input" disabled placeholder="Company" value="Creative Code Inc.">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control border-input" placeholder="Username" value="michael23">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control border-input" placeholder="Email">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control border-input" placeholder="Company" value="Chet">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control border-input" placeholder="City" value="Melbourne">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control border-input" placeholder="Country" value="Australia">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control border-input" placeholder="ZIP Code">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                  </div>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>

<?php include('includes/footer.php'); ?>
        </div>
      

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92c74c360b40ce49","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.3.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>


<script>
    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

    try{
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    }catch(err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
    />
</noscript>

</html>
