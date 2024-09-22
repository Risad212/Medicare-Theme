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
        <div class="doctor-info">
          <h4 class="doctor-name"><?php the_title() ?></h4>
          <h5 class="doctor-specialist text-black mb-4">
            <strong class="mr-2">Department</strong> - Medicine
          </h5>
          <h5 class="doctor-specialist">
            <strong class="my-3">Specialist</strong> - Merchandise Displayer OR
            Window Trimmer
          </h5>
          <?php the_content() ?>
          <h5 class="doctor-availability">
            <strong class="mr-2">Availability</strong> - Morning
          </h5>
        </div>
      </div>
      <div class="col-lg-12" id="book-appointment">
        <div class="book-appointment mt-5">
          <div class="appointment-here-form">
            <a id="appointment"></a>
            <h3>Make an Appointment</h3>
             <?php echo do_shortcode('[contact-form-7 id="3b11725" title="Doctor Appointment"]') ?>
            <!-- <form
              action="#"
              id="contactForm"
              method="POST"
            >
              <input
                type="hidden"
                name="_token"
                autocomplete="off"
              />
              <div class="row">
                <div class="col-lg-6">
                  <label>Doctor Name</label>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      readonly=""
                      value="<?php the_title() ?>"
                    />
                  </div>
                </div>

                <div class="col-lg-6">
                  <label>Type of Visit</label>
                  <div class="form-group">
                    <select
                      id="visit_type"
                      class="form-control"
                      name="visit_type"
                    >
                      <option value="1">First Visit</option>
                      <option value="2">Second Visit</option>
                      <option value="3">Show Report</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label>Patient's Name</label>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="name"
                      placeholder="Enter Patient's Name"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <label>Email</label>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      id="Email"
                      name="email"
                      placeholder="Your Email"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <label>Phone</label>
                  <div class="form-group">
                    <input
                      type="number"
                      class="form-control"
                      id="Phone"
                      name="phone"
                      placeholder="Your Phone Number"
                    />
                  </div>
                </div>

                <div class="col-lg-6">
                  <label>Appointment Date</label>
                  <div class="form-group">
                    <div class="react-datepicker-wrapper">
                      <div>
                        <input
                          type="date"
                          name="date"
                          class="form-control appointment-date"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <input
                  type="hidden"
                  class="form-control"
                  name="doctor_id"
                  value="14"
                  placeholder="Enter Patient's Name"
                />
                <div class="col-12">
                  <button type="submit" class="default-btn">
                    Send Request
                  </button>
                </div>
              </div>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
