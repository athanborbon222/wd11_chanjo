@extends('pagelayout.app')

@section('pagecontent')
<section>
      <div class="container container-fluid">
        <div class="row">
          <div class="col-12 my-5">
            <h3>Your Cart</h3>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-12 w-100">
              <ul>
                <li class="d-flex flex-column w-100">
                  <div class="card mb-3">
                    <div class="row g-0 d-flex">
                      <div class="col-3">
                        <img
                          src="../Images/ProductSample.jpg"
                          alt=""
                          class="img img-fluid"
                        />
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h4 class="card-title">Sample Product 1</h4>
                          <p class="card-text">₱999.00</p>
                        </div>
                        <div class="row">
                          <div
                            class="col-12 px-3 py-3 d-flex justify-content-center align-items-center"
                          >
                            <button
                              class="btn btn-danger"
                              onclick="decrement();"
                            >
                              <i class="fa-solid fa-minus"></i>
                            </button>
                            <h4 class="px-1 mx-1 w-100 text-center">1</h4>
                            <button
                              class="btn btn-success"
                              onclick="increment();"
                            >
                              <i class="fa-solid fa-plus"></i>
                            </button>
                            <button
                              class="btn btn-danger ms-3"
                              onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.remove();"
                            >
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <h4 class="text-center">₱999.00</h4>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-column w-100">
                  <div class="card mb-3">
                    <div class="row g-0 d-flex">
                      <div class="col-3">
                        <img
                          src="../Images/ProductSample.jpg"
                          alt=""
                          class="img img-fluid"
                        />
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h4 class="card-title">Sample Product 1</h4>
                          <p class="card-text">₱999.00</p>
                        </div>
                        <div class="row">
                          <div
                            class="col-12 px-3 py-3 d-flex justify-content-center align-items-center"
                          >
                            <button
                              class="btn btn-danger"
                              onclick="decrement();"
                            >
                              <i class="fa-solid fa-minus"></i>
                            </button>
                            <h4 class="px-1 mx-1 w-100 text-center">1</h4>
                            <button
                              class="btn btn-success"
                              onclick="increment();"
                            >
                              <i class="fa-solid fa-plus"></i>
                            </button>
                            <button
                              class="btn btn-danger ms-3"
                              onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.remove();"
                            >
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <h4 class="text-center">₱999.00</h4>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-column w-100">
                  <div class="card mb-3">
                    <div class="row g-0 d-flex">
                      <div class="col-3">
                        <img
                          src="../Images/ProductSample.jpg"
                          alt=""
                          class="img img-fluid"
                        />
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h4 class="card-title">Sample Product 1</h4>
                          <p class="card-text">₱999.00</p>
                        </div>
                        <div class="row">
                          <div
                            class="col-12 px-3 py-3 d-flex justify-content-center align-items-center"
                          >
                            <button
                              class="btn btn-danger"
                              onclick="decrement();"
                            >
                              <i class="fa-solid fa-minus"></i>
                            </button>
                            <h4 class="px-1 mx-1 w-100 text-center">1</h4>
                            <button
                              class="btn btn-success"
                              onclick="increment();"
                            >
                              <i class="fa-solid fa-plus"></i>
                            </button>
                            <button
                              class="btn btn-danger ms-3"
                              onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.remove();"
                            >
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <h4 class="text-center">₱999.00</h4>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-column w-100">
                  <div class="card mb-3">
                    <div class="row g-0 d-flex">
                      <div class="col-3">
                        <img
                          src="../Images/ProductSample.jpg"
                          alt=""
                          class="img img-fluid"
                        />
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h4 class="card-title">Sample Product 1</h4>
                          <p class="card-text">₱999.00</p>
                        </div>
                        <div class="row">
                          <div
                            class="col-12 px-3 py-3 d-flex justify-content-center align-items-center"
                          >
                            <button
                              class="btn btn-danger"
                              onclick="decrement();"
                            >
                              <i class="fa-solid fa-minus"></i>
                            </button>
                            <h4 class="px-1 mx-1 w-100 text-center">1</h4>
                            <button
                              class="btn btn-success"
                              onclick="increment();"
                            >
                              <i class="fa-solid fa-plus"></i>
                            </button>
                            <button
                              class="btn btn-danger ms-3"
                              onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.remove();"
                            >
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <h4 class="text-center">₱999.00</h4>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-column w-100">
                  <div class="card mb-3">
                    <div class="row g-0 d-flex">
                      <div class="col-3">
                        <img
                          src="../Images/ProductSample.jpg"
                          alt=""
                          class="img img-fluid"
                        />
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h4 class="card-title">Sample Product 1</h4>
                          <p class="card-text">₱999.00</p>
                        </div>
                        <div class="row">
                          <div
                            class="col-12 px-3 py-3 d-flex justify-content-center align-items-center"
                          >
                            <button
                              class="btn btn-danger"
                              onclick="decrement();"
                            >
                              <i class="fa-solid fa-minus"></i>
                            </button>
                            <h4 class="px-1 mx-1 w-100 text-center">1</h4>
                            <button
                              class="btn btn-success"
                              onclick="increment();"
                            >
                              <i class="fa-solid fa-plus"></i>
                            </button>
                            <button
                              class="btn btn-danger ms-3"
                              onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.remove();"
                            >
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <h4 class="text-center">₱999.00</h4>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="d-flex flex-column w-100">
                  <div class="card mb-3">
                    <div class="row g-0 d-flex">
                      <div class="col-3">
                        <img
                          src="../Images/ProductSample.jpg"
                          alt=""
                          class="img img-fluid"
                        />
                      </div>
                      <div class="col-9">
                        <div class="card-body">
                          <h4 class="card-title">Sample Product 1</h4>
                          <p class="card-text">₱999</p>
                        </div>
                        <div class="row">
                          <div
                            class="col-12 px-3 py-3 d-flex justify-content-center align-items-center"
                          >
                            <button
                              class="btn btn-danger"
                              onclick="decrement();"
                            >
                              <i class="fa-solid fa-minus"></i>
                            </button>
                            <h4 class="px-1 mx-1 w-100 text-center">1</h4>
                            <button
                              class="btn btn-success"
                              onclick="increment();"
                            >
                              <i class="fa-solid fa-plus"></i>
                            </button>
                            <button
                              class="btn btn-danger ms-3"
                              onclick="this.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.remove();"
                            >
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <h4 class="text-center">₱999</h4>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div
          class="col-12 d-flex justify-content-around align-content-center border-top border-bottom my-2 pt-3"
        >
          <h4 class="text fw-bold">Total Price:</h4>
          <h4 class="text fw-bold">
            <span>₱9999.00</span>
            <a class="btn btn-primary mx-3 rounded-pill" href="/checkout">
              Checkout
            </a>
          </h4>
        </div>
      </div>
    </section>
    
@endsection