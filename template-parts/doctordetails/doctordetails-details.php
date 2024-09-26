<section class="doctor-details">
  <div class="container my-4">
    <div class="row">
      <div class="col-lg-4">
        <div class="doctor-details-image">
          <img
            src="<?php the_post_thumbnail_url() ?>"
            alt="Doctor Photo"
            class="img-fluid"
          />
        </div>
      </div>
      <div class="col-lg-8">
        <?php 
          $doctors = get_post_meta( get_the_ID(), 'medicare-doctor-metabox', true );
          $department = $doctors['doctor-department'];
          $speciality = $doctors['doctor-speciality'];
          $availability = $doctors['doctor-availability'];
         ?>
        <div class="doctor-info">
          <h4 class="doctor-name"><?php the_title() ?></h4>
          <h5 class="doctor-specialist text-black mb-4">
            <strong class="mr-2">Department</strong> - <?php echo esc_html($department) ?>
          </h5>
          <h5 class="doctor-specialist">
            <strong class="my-3">Specialist</strong> - <?php echo esc_html($speciality) ?>
          </h5>
          <?php the_content() ?>
          <h5 class="doctor-availability">
            <strong class="mr-2">Availability</strong> - <?php echo esc_html($availability) ?>
          </h5>
        </div>
      </div>
      <div class="col-lg-12" id="book-appointment">
        <div class="book-appointment mt-5">
          <div class="appointment-here-form">
            <a id="appointment"></a>
            <h3>Make an Appointment</h3>
             <?php echo do_shortcode('[contact-form-7 id="3b11725" title="Doctor Appointment"]') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
