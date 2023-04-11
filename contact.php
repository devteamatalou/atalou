<?php
 ini_set('display_errors', '1');
 ob_start();

 include "includes/header.php";
 include "mail_action.php";
?>

 <!-- Contact Start -->
 <div class="container-fluid bg-secondary px-0">
  <div class="row g-0">
   <div class="col-lg-6 py-6 px-5">
    <h1 class="display-5 mb-4">Contact For Any Queries</h1>
    <form method="POST">
     <div class="row g-3">
      <div class="col-6">
       <div class="form-floating">
        <input type="text" name="fullname" class="form-control" id="form-floating-1" placeholder="John Doe" required>
        <label for="form-floating-1">Full Name</label>
       </div>
      </div>
      <div class="col-6">
       <div class="form-floating">
        <input type="email" name="email" class="form-control" id="form-floating-2" placeholder="name@example.com" required>
        <label for="form-floating-2">Email address</label>
       </div>
      </div>
      <div class="col-12">
       <div class="form-floating">
        <input type="text" name="subject" class="form-control" id="form-floating-3" placeholder="Subject">
        <label for="form-floating-3">Subject</label>
       </div>
      </div>
      <div class="col-12">
       <div class="form-floating">
        <textarea class="form-control" name="msg" placeholder="Message" id="form-floating-4" style="height: 150px" required></textarea>
        <label for="form-floating-4">Message</label>
       </div>
      </div>
      <div class="col-12">
       <button class="btn btn-primary w-100 py-3" type="submit" name="send_btn">Submit</button>
      </div>
						<div class="col-md-12"><?= $alert; ?></div>
     </div>
    </form>
   </div>
   <div class="col-lg-6" style="min-height: 400px;">
    <div class="position-relative h-100">
     <iframe class="position-relative w-100 h-100"
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15131.471739212613!2d-72.29355375979351!3d18.534869191681377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb9e7cd5d17154b%3A0xeed8602bc4f25654!2sRue%20Balmir%2C%20Port-au-Prince!5e0!3m2!1sfr!2sht!4v1672946321022!5m2!1sfr!2sht" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
					</iframe>
    </div>
   </div>
  </div>
 </div>
 <!-- Contact End -->

<?php include "includes/footer.php"; ?>