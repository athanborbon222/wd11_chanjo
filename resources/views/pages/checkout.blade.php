@extends('pagelayout.app')

@section('pagecontent')
 <!-- Info Section -->
      <div
        class="col-lg-6 col-md-12 order-xxl-1 order-xl-1 order-lg-1 order-md-2 order-sm-2 border rounded-4"
      >
        <section class="container container-fluid">
          <div class="row my-5 mx-0">
            <div class="col-lg-6 col-md-12">
              <h4 class="text text-start">Contact information</h4>
            </div>
            <div class="col-lg-6 col-md-12">
              <h6 class="text text-lg-end text-md-start">
                Already have an account?
                <a
                  href="../../pages/login/index.html"
                  style="text-decoration: none"
                >
                  Log in
                </a>
              </h6>
            </div>
            <!-- Form -->
            <form class="needs-validation row g-3 mx-0 my-0" novalidate>
              <!-- email id: #email1 -->
              <div class="col-md-12">
                <label for="email1" class="form-label">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email1"
                  placeholder="Email address"
                  required
                />
                <div class="invalid-feedback fw-bold">Enter a valid email</div>
              </div>
              <!-- Phone id: #phone -->
              <div class="col-md-12">
                <label for="phone" class="form-label">Phone number</label>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    id="phone"
                    placeholder="Phone number"
                    required
                  />
                  <label class="input-group-text">
                    <span
                      class="tt"
                      data-bs-placement="top"
                      title="In case we need to contact you about your order"
                    >
                      <i class="bi bi-question-circle-fill"></i>
                    </span>
                  </label>
                  <div class="invalid-feedback">
                    Enter a valid Phone number.
                  </div>
                </div>
              </div>
              <!-- Newsletter checkbox id: #checkemail -->
              <div class="col-md-12 mb-3">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="checkemail"
                />
                <label class="form-check-label" for="checkemail">
                  Email me with news and offers
                </label>
              </div>
              <!-- Shipping address head -->
              <div class="col-md-12">
                <h4 class="text text-start">Shipping address</h4>
              </div>
              <!-- Name id: #Fname #Lname-->
              <div class="col-lg-6 col-md-12">
                <label for="Fname" class="form-label">First name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Fname"
                  placeholder="First name"
                  required
                />
                <div class="invalid-feedback">Enter a first name</div>
              </div>
              <div class="col-lg-6 col-md-12">
                <label for="Lname" class="form-label">Last name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Lname"
                  placeholder="Last name"
                  required
                />
                <div class="invalid-feedback">Enter a last name</div>
              </div>
              <!-- Address id: #address1 #address2 -->
              <div class="col-md-12">
                <label for="address1" class="form-label">Address</label>
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="address1"
                    placeholder=""
                    required
                  />
                  <label for="address1" class="form-label">Address</label>
                  <div class="invalid-feedback">Enter a valid address</div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="address2" />
                  <label for="address2" class="form-label"
                    >Apartment, suite, etc. (optional)</label
                  >
                </div>
              </div>
              <!-- City id: #city -->
              <div class="col-lg-4 col-md-12">
                <label for="city" class="form-label">City</label>
                <select class="form-select" id="city" disabled required>
                  <option selected disabled value="">Valencia City</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback fw-bold">
                  Please select a City.
                </div>
              </div>
              <!-- State id: #state -->
              <div class="col-lg-4 col-md-12">
                <label for="state" class="form-label">Barangay</label>
                <select class="form-select" id="state" required>
                  <option selected disabled value="">Barangay</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback fw-bold">
                  Please select a State.
                </div>
              </div>
              <!-- ZIP code id: #zip -->
              <div class="col-lg-4 col-md-12">
                <label for="zip" class="form-label">Zip Code</label>
                <input
                  type="text"
                  class="form-control"
                  id="zip"
                  value="8709"
                  disabled
                  required
                />
                <div class="invalid-feedback">Enter a valid ZIP code.</div>
              </div>
              <!-- Save information id: #saveInfo -->
              <div class="col-md-12">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="saveInfo"
                />
                <label class="form-check-label" for="saveInfo">
                  Save this information for next time
                </label>
              </div>
              <div class="col-lg-9 order-lg-1 col-md-12 order-md-2">
                <a href="./CartP.html">
                  <i class="bi bi-arrow-left"></i>
                  Return to cart
                </a>
              </div>
              <div class="col-lg-3 order-lg-2 col-md-12 order-md-1">
                <button
                  class="btn btn-primary w-100 h-100"
                  type="submit"
                  formaction="./Payment.html"
                >
                  Continue to Payment
                </button>
              </div>
            </form>
          </div>
        </section>
      </div>
      <!-- Product Section -->
      <div
        class="col-lg-6 col-md-12 order-xxl-2 order-xl-2 order-lg-2 order-md-1 order-sm-1 border rounded-4 px-3 py-5"
      >
        <section class="container container-fluid">
          <div class="row g-5">
            <div class="col-md-12 col-lg-6 w-100">
              <h4
                class="d-flex justify-content-between align-items-center mb-3 mx-2"
              >
                <span class="text-primary">Your cart</span>
                <span class="badge bg-primary rounded-pill">5</span>
              </h4>
              <ul class="list-group mb-3 d-flex flex-wrap flex-column-reverse">
                <!-- Item 1 -->
                <li
                  class="list-group-item d-flex flex-wrap justify-content-between align-items-center lh-sm"
                >
                  <img
                    src="../Images/ProductSample.jpg"
                    alt=""
                    class="img img-fluid mx-auto my-3"
                    width="100px"
                    height="100px"
                  />
                  <div
                    class="d-flex flex-column align-items-start justify-content-start w-50 mx-auto my-3"
                  >
                    <h6 class="my-0">Sample Product 1</h6>
                    <small class="text-muted">Produc Details</small>
                    <small class="text-muted"
                      ><span class="fw-bold badge rounded-pill bg-primary"
                        >1</span
                      >
                      Piece</small
                    >
                  </div>
                  <span class="fw-bolder mx-auto my-3">₱999.99</span>
                </li>
                <!-- Item 1 -->
                <li
                  class="list-group-item d-flex flex-wrap justify-content-between align-items-center lh-sm"
                >
                  <img
                    src="../Images/ProductSample.jpg"
                    alt=""
                    class="img img-fluid mx-auto my-3"
                    width="100px"
                    height="100px"
                  />
                  <div
                    class="d-flex flex-column align-items-start justify-content-start w-50 mx-auto my-3"
                  >
                    <h6 class="my-0">Sample Product 2</h6>
                    <small class="text-muted">Produc Details</small>
                    <small class="text-muted"
                      ><span class="fw-bold badge rounded-pill bg-primary"
                        >1</span
                      >
                      Piece</small
                    >
                  </div>
                  <span class="fw-bolder mx-auto my-3">₱999.99</span>
                </li>
                <!-- Item 1 -->
                <li
                  class="list-group-item d-flex flex-wrap justify-content-between align-items-center lh-sm"
                >
                  <img
                    src="../Images/ProductSample.jpg"
                    alt=""
                    class="img img-fluid mx-auto my-3"
                    width="100px"
                    height="100px"
                  />
                  <div
                    class="d-flex flex-column align-items-start justify-content-start w-50 mx-auto my-3"
                  >
                    <h6 class="my-0">Sample Product 3</h6>
                    <small class="text-muted">Produc Details</small>
                    <small class="text-muted"
                      ><span class="fw-bold badge rounded-pill bg-primary"
                        >1</span
                      >
                      Piece</small
                    >
                  </div>
                  <span class="fw-bolder mx-auto my-3">₱999.99</span>
                </li>
                <!-- Item 1 -->
                <li
                  class="list-group-item d-flex flex-wrap justify-content-between align-items-center lh-sm"
                >
                  <img
                    src="../Images/ProductSample.jpg"
                    alt=""
                    class="img img-fluid mx-auto my-3"
                    width="100px"
                    height="100px"
                  />
                  <div
                    class="d-flex flex-column align-items-start justify-content-start w-50 mx-auto my-3"
                  >
                    <h6 class="my-0">Sample Product 4</h6>
                    <small class="text-muted">Produc Details</small>
                    <small class="text-muted"
                      ><span class="fw-bold badge rounded-pill bg-primary"
                        >1</span
                      >
                      Piece</small
                    >
                  </div>
                  <span class="fw-bolder mx-auto my-3">₱999.99</span>
                </li>
                <!-- Item 1 -->
                <li
                  class="list-group-item d-flex flex-wrap justify-content-between align-items-center lh-sm"
                >
                  <img
                    src="../Images/ProductSample.jpg"
                    alt=""
                    class="img img-fluid mx-auto my-3"
                    width="100px"
                    height="100px"
                  />
                  <div
                    class="d-flex flex-column align-items-start justify-content-start w-50 mx-auto my-3"
                  >
                    <h6 class="my-0">Sample Product 5</h6>
                    <small class="text-muted">Produc Details</small>
                    <small class="text-muted"
                      ><span class="fw-bold badge rounded-pill bg-primary"
                        >1</span
                      >
                      Piece</small
                    >
                  </div>
                  <span class="fw-bolder mx-auto my-3">₱999.99</span>
                </li>
                <!-- Total -->
              </ul>
              <ul class="list-group mb-3 d-flex flex-wrap">
                <li class="list-group-item px-5">
                  <form class="card my-3 w-100">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control d-flex flex-grow-1"
                        placeholder="Promo code"
                      />
                      <button type="submit" class="btn btn-primary">
                        Redeem
                      </button>
                    </div>
                  </form>
                </li>
                <li
                  class="list-group-item d-flex flex-column justify-content-between px-5"
                >
                  <div class="d-flex flex-row">
                    <small
                      class="my-2 d-block flex-grow-1 text-dark text-opacity-50 fw-lighter"
                      >Subtotal</small
                    >
                    <small
                      class="my-2 d-block flex-shrink-1 text-dark text-opacity-50 fw-lighter"
                      >₱9,999.99</small
                    >
                  </div>
                  <div class="d-flex flex-row">
                    <small
                      class="my-2 d-block flex-grow-1 text-dark text-opacity-50 fw-lighter"
                      >Shipping</small
                    >
                    <small
                      class="my-2 d-block flex-shrink-1 text-dark text-opacity-50 fw-lighter"
                      >₱999.99</small
                    >
                  </div>
                  <div class="d-flex flex-row">
                    <div class="d-flex flex-column flex-grow-1">
                      <small class="my-0 text-success fw-light mt-2"
                        >Promo code</small
                      >
                      <small class="my-0 text-success fw-light mb-2"
                        >EXAMPLECODE20</small
                      >
                    </div>
                    <small
                      class="my-auto d-block flex-shrink-1 text-success fw-light"
                      >-₱999.99</small
                    >
                  </div>
                </li>
                <li class="list-group-item d-flex justify-content-between px-5">
                  <span class="my-3 d-block">Total</span>
                  <strong class="my-3 d-block">₱9,999.99</strong>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Information page end -->

   
   
    <script>
      const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
      );
      const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
      );
    </script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
          form.addEventListener(
            "submit",
            (event) => {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }

              form.classList.add("was-validated");
            },
            false
          );
        });
      })();
    </script>
    <!-- Tooltip script -->
    <script>
      const tooltips = document.querySelectorAll(".tt");
      tooltips.forEach((t) => {
        new bootstrap.Tooltip(t);
      });
    </script>
    
@endsection