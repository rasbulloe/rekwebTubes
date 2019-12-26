<br><br><br><br><br>
<div id="contact-page" class="container">
  <div class="bg">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="title text-center">Contact <strong>Us</strong></h2>
        <div id="gmap" class="contact-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2017232435805!2d107.59059191402025!3d-6.8664139950380285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sen!2sid!4v1576331834998!5m2!1sen!2sid" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="contact-form">
          <h2 class="title text-center">Get In Touch</h2>
          <?php echo $this->session->flashdata("flash_msg"); ?>
          <div class="status alert alert-success" style="display: none"></div>
          <form action="<?= base_url() . 'Contact/tambah_aksi_contact'; ?>" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
            <div class="form-group col-md-6">
              <input type="text" name="nama" class="form-control" required="required" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
              <input type="email" name="email" class="form-control" required="required" placeholder="Email">
            </div>
            <div class="form-group col-md-12">
              <input type="text" name="pesan" class="form-control" required="required" placeholder="Subject">
            </div>
            <div class="form-group col-md-12">
              <textarea name="contact_message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
            </div>
            <div class="form-group col-md-12">
              <input type="submit" class="btn btn-primary pull-right" value="Submit">
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="contact-info">
          <h2 class="title text-center">Contact Info</h2>
          <address>
            <p>Astro Inc.</p>
            <p>Jl.Komud Supadio No.306</p>
            <p>Bandung, Indonesia</p>
            <p>Mobile: 02293466698</p>
            <p>Fax: 1-714-252-0026</p>
            <p>Email: info@e-astro.com</p>
          </address>
          <div class="social-networks">
            <h2 class="title text-center">Social Networking</h2>
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/#contact-page-->