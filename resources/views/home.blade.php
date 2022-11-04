@extends('pagelayout.app')

@section('pagecontent')
<div class="conatiner">
    <div class="banner">
      <img src="./Images/Banner.png" alt=""  class="w-100"/>
    </div>
  </div>

<!-- FOODS -->
    <br />
    <div class="container .shops-container">
      <div class="d-flex flex-row justify-content-around">
        <div class="col-4">
          <h2><strong>Groceries</strong></h2>
          <a href="#">
          <img
               
                class="groseri"
                src="https://cdn-icons-png.flaticon.com/512/1261/1261163.png"
              
              />
              </a>
       
        </div>
       
        <div class="col-4">
          <h2 class="mx-5"><strong>Shops</strong></h2>
          <a href="#">
          <img class="Shops"
              src=https://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/shop-icon.png
            />
            </a>

         
        </div>
      </div>
    </div>
    <!-- FOODS END -->

     <!-- CAROUSEL -->

    <div class="container-fluid py-5">
      <h2><strong>News and Promotions</strong></h2>
      <div
        id="carouselExampleControls"
        style="background-color:  background-color: rgb(252, 205, 97); background-color: rgb(252, 205, 97); border-radius: 10px"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <div class="card">
                {{-- <a href=""> --}}
                  <img
                    src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/colorful-landscape-summer-promotion-sale-poster-template-7f8b66932dbe3e1fa50ad7c5ce196ec5_screen.jpg?ts=1561392833
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
              <div class="card d-none d-md-block">
                {{-- <a href=""> --}}
                  <img
                    src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/valentine%27s-day-sale-design-template-e08a020ec49b881283a5829011e784fe_screen.jpg?ts=1643202320
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
              <div class="card d-none d-md-block">
                {{-- <a href=""> --}}
                  <img
                    src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/fathers-day-cover-design-template-c4eb2f7068d5f7f405227611c62b7f06_screen.jpg?ts=1623054239
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card">
                {{-- <a href=""> --}}
                  <img
                    src="https://img.freepik.com/free-vector/mega-sale-offers-banner-template_1017-31299.jpg?size=626&ext=jpg&ga=GA1.2.808940383.1663516929
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
              <div class="card d-none d-md-block">
                {{-- <a href=""> --}}
                  <img
                    src="https://img.freepik.com/premium-vector/big-sale-special-offers-banner-template-design-background_416835-265.jpg?size=626&ext=jpg&ga=GA1.2.808940383.1663516929
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
              <div class="card d-none d-md-block">
                {{-- <a href=""> --}}
                  <img
                    src="https://img.freepik.com/free-vector/creative-coming-soon-teaser-background_23-2148894969.jpg?size=626&ext=jpg&ga=GA1.2.808940383.1663516929
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <div class="card">
                {{-- <a href=""> --}}
                  <img
                    src="https://img.freepik.com/free-vector/12-12-online-shopping-sale-poster-flyer-design_157027-657.jpg?size=626&ext=jpg&ga=GA1.2.808940383.1663516929
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
              <div class="card d-none d-md-block">
                {{-- <a href=""> --}}
                  <img
                    src="https://img.freepik.com/free-vector/flat-sale-banner-with-photo_23-2149026968.jpg?size=626&ext=jpg&ga=GA1.2.808940383.1663516929
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
              <div class="card d-none d-md-block">
                {{-- <a href=""> --}}
                  <img
                    src="https://img.freepik.com/free-vector/big-sale-offer-template-yellow-purple-color_1017-32175.jpg?size=626&ext=jpg&ga=GA1.2.808940383.1663516929
"
                    class="card-img-top"
                    alt="..."
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <a
        
          class="carousel-control-prev"
          data-bs-target="#carouselExampleControls"
          role="button"
          data-bs-slide="prev"
        >
          <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          data-bs-target="#carouselExampleControls"
          role="button"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <!-- CAROUSEL END -->
@endsection
