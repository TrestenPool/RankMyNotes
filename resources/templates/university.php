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
                              <h3>Find your Professor</h3>
                              <div class="col">
                                <input class="form-control form-control-lg" id="myInput" type="text" placeholder="" />
                              </div>
                              <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Find</button></div>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </header>
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