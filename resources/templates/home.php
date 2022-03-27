  <!-- Masthead-->
  <header class="masthead">
      <div class="container position-relative">
          <div class="row justify-content-center">
              <div class="col-xl-6">
                  <div class="text-center text-white">
                      <h1 class="mb-5">Rank My Notes</h1>

                      <form action="/university.php">
                          <!-- Email address input-->
                          <div class="row">
                              <h3>Find your school</h3>
                              <div class="col">
                                <input class="form-control form-control-lg" id="myInput" type="text" placeholder="UTSA" />
                              </div>
                              <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Find</button></div>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- Image Showcases-->
  <section class="showcase">

      <div class="container-fluid p-0">
          <div class="row g-0">
              <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
              <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                  <h2>Just Take pictures of your notes and upload them!</h2>
                  <p class="lead mb-0">Who says you can't make easy money in college!? Just upload your notes from your last semester, help out other students with your hard work and dedication while you earn cold hard cash!!</p>
              </div>
          </div>

          <div class="row g-0">
              <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/image1.jpg')"></div>
              <div class="col-lg-6 my-auto showcase-text">
                  <h2>Document formats are a thing of the Past!</h2>
                  <p class="lead mb-0">Your notes are not in the correct format?? NO PROBLEM!! We'll convert them to the industry standard formats free of charge and provide customers who choose to purchase the notes without the hassle of having to download the notes and convert them to the desired format.</p>
              </div>
          </div>
          <div class="row g-0">
              <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/struggling_student.jpg')"></div>
              <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                  <h2>Work Smarter, Not Harder!!</h2>
                  <p class="lead mb-0">Are you struggling in class because the notes you wrote yesterday are unreadable today? That's okay, just search for your school, then class, then professor to get the notes that have already been written and reviewed by students that have been in your position before.</p>
                  <!-- <p class="lead mb-0">When choosing the notes that best fit your style of learning. Whether it'll be a word doc that allows you to fill in the blank as you pay attention in lecture, or whether you prefer notes already filled in with highlighing enabled to give you an idea of what the professor expects you to know for the midterm exam. We are sure you will find the notes that fit your learning style so you can ace that next exam!</p> -->
              </div>
          </div>
      </div>
  </section>
  <!-- Testimonials-->
  <section class="testimonials text-center bg-light">
      <div class="container">
          <h2 class="mb-5">What people are saying about rankmynotes...</h2>
          <div class="row">
              <div class="col-lg-4">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                      <h5>Margaret E.</h5>
                      <p class="font-weight-light mb-0">I would've failed my Ochem twice if it wasn't for this site, thank you!</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                      <h5>Fred S.</h5>
                      <p class="font-weight-light mb-0">The notes I purchased we exactly what I needed to pass my discrete math class!</p>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                      <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                      <h5>Sarah W.</h5>
                      <p class="font-weight-light mb-0">My classmates always told me I had nice handwriting. I didn't know I would be making more in passive income thanks to this site than the job I got from my degree!!</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Call to Action-->
  <section class="call-to-action text-white text-center" id="signup">
      <div class="container position-relative">
          <div class="row justify-content-center">
              <div class="col-xl-6">
                  <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                  

                  <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                      <!-- Email address input-->
                      <div class="row">
                          <div class="col">
                              <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                              <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                              <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                          </div>
                          <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                      </div>
                      <!-- Submit success message-->
                      <!---->
                      <!-- This is what your users will see when the form-->
                      <!-- has successfully submitted-->
                      <div class="d-none" id="submitSuccessMessage">
                          <div class="text-center mb-3">
                              <div class="fw-bolder">Form submission successful!</div>
                              <p>To activate this form, sign up at</p>
                              <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                          </div>
                      </div>
                      <!-- Submit error message-->
                      <!---->
                      <!-- This is what your users will see when there is-->
                      <!-- an error submitting the form-->
                      <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                  </form>


              </div>
          </div>
      </div>
  </section>
  <!-- Footer-->
  <footer class="footer bg-light">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                  <ul class="list-inline mb-2">
                      <li class="list-inline-item"><a href="#!">About</a></li>
                      <li class="list-inline-item">⋅</li>
                      <li class="list-inline-item"><a href="#!">Contact</a></li>
                      <li class="list-inline-item">⋅</li>
                      <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                      <li class="list-inline-item">⋅</li>
                      <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                  </ul>
                  <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p>
              </div>
              <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                  <ul class="list-inline mb-0">
                      <li class="list-inline-item me-4">
                          <a href="#!"><i class="bi-facebook fs-3"></i></a>
                      </li>
                      <li class="list-inline-item me-4">
                          <a href="#!"><i class="bi-twitter fs-3"></i></a>
                      </li>
                      <li class="list-inline-item">
                          <a href="#!"><i class="bi-instagram fs-3"></i></a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
<script>
    autocomplete(document.getElementById("myInput"), colleges);
</script>