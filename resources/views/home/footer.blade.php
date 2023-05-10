<!-- Footer -->
<footer class="text-center text-lg-start text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between">
      <!-- Right -->

      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem"></i>{{ $profil->nama_sekolah }}
            </h6>
            <p>
                {{ $profil->deskripsi }}
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Sosial Media
            </h6>
            <div>
                <a href="" class="me-4 text-reset">
                  <i class="fas fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fas fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fas fa-fs-youtube"></i>
                </a>
                <a href="" class="me-4 text-reset">
                  <i class="fas fa-tiktok"></i>
                </a>
              </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
            <p><i class="fas fa-home"></i> {{ $profil->alamat }}</p>
            <p>
              <i class="fas fa-envelope"></i>
              {{ $profil->email }}
            </p>
            <p><i class="fas fa-phone"></i>{{ $profil->no_telp }}</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="#">{{ $profil->nama_sekolah }}</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
