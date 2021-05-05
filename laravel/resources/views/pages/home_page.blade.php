<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mavent</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <style>
    .card-header,
    .card-footer {
      background: #3e6866;
    }
  </style>
</head>

<body>
  <header class="fixed-top ">
    <nav class="navbar navbar-expand-lg navbar-dark  navbar-custom">
      <div class="container ">
        <a class="navbar-brand" href="#">
          <img src="images/logo_1.png" class="logo" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="justify-content-end">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item effect">
                <a class="nav-link" href="#process">Process</a>
              </li>
              <li class="nav-item dropdown effect">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#popular">Popular</a>
                  <a class="dropdown-item" href="#recent">Recent</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pages/products_all.html">All products</a>
                </div>
              </li>
              <li class="nav-item effect">
                <a class="nav-link " href="#about">About</a>
              </li>
              <li class="nav-item effect">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item effect">
                <a class="nav-link" href="#sponsors">Sponsors</a>
              </li>
              <li class="nav-item effect">
                <a class="nav-link" href="https://www.facebook.com" id="line" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook"
                    viewBox="0 0 16 16">
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item effect">
                <a class="nav-link" href="https://www.facebook.com" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item effect">
                <a class="nav-link" href="https://www.facebook.com" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-linkedin"
                    viewBox="0 0 16 16">
                    <path
                      d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slider_1.jpg" class="d-block w-100" alt="slide1">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slider_2.jpg" class="d-block w-100" alt="slide2">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/slider_3.jpg" class="d-block w-100" alt="slide3">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section class="section" id="process">
      <div class="container-fluid text-center">
        <h2 class="about-title featured-text text-center">The Process</h2>
        <div class="row">
          <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#3e6866" class="bi bi-basket-fill"
              viewBox="0 0 16 16">
              <path
                d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z" />
            </svg>
            <h2>Choose</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolore quaerat optio corporis.
              Reprehenderit recusandae quasi perferendis id excepturi, commodi eius neque labore voluptatibus ad ?
            </p>
          </div>
          <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#3e6866"
              class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z" />
            </svg>
            <h2>Schedulling</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat rem doloribus,
              totam facilis quae quasi. Consequatur, quidem alias? Porro quod vitae neque soluta dignissimos
              blanditiis quo rerum quos doloribus.
            </p>
          </div>
          <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#3e6866"
              class="bi bi-calendar2-check-fill" viewBox="0 0 16 16">
              <path
                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zm-2.6 5.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg>
            <h2>Organizing</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat rem doloribus,
              totam facilis quae quasi. Consequatur, quidem alias? Porro quod vitae neque soluta dignissimos
              blanditiis quo rerum quos doloribus.
            </p>
          </div>
          <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#3e6866" class="bi bi-people-fill"
              viewBox="0 0 16 16">
              <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              <path fill-rule="evenodd"
                d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
              <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
            </svg>
            <h2>Leave on us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat rem doloribus,
              totam facilis quae quasi. Consequatur, quidem alias? Porro quod vitae neque soluta dignissimos
              blanditiis quo rerum quos doloribus.
            </p>
          </div>
          <div class="col">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#3e6866" class="bi bi-cup-straw"
              viewBox="0 0 16 16">
              <path
                d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z" />
            </svg>
            <h2>Enjoy</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat rem doloribus,
              totam facilis quae quasi. Consequatur, quidem alias? Porro quod vitae neque soluta dignissimos
              blanditiis quo rerum quos doloribus.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="popular">
      <div class="container-fluid">
        <h2 class="about-title featured-text text-center">Popular Products</h2>
        <div class="row">
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_1.webp.webp" class="card-img-top" alt="pop_pr">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_2.webp" class="card-img-top" alt="pop_pr">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_3.webp" class="card-img-top" alt="pop_pr">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_4.webp" class="card-img-top" alt="pop_pr">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="about">
      <h2 class="about-title featured-text text-center">About Us</h2>
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="about-image">
              <img src="images/prod_1.webp" class="img-fluid" alt="about">
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus placeat odit dignissimos doloremque eum?
              Laboriosam quasi
              facilis maxime iste. Architecto et hic repellendus! Voluptatibus rem nulla minima molestias. Sequi,
              reiciendis?
              Deserunt aut deleniti voluptates quia. Asperiores quam ratione voluptate error enim? Ducimus aliquam saepe
              veritatis
              suscipit sequi fugiat tempora alias, dignissimos reiciendis consequatur exercitationem doloremque tenetur
              ratione animi
              nesciunt officiis.
              Consequuntur assumenda necessitatibus harum quod, obcaecati odio eligendi, culpa dignissimos, non quo
              dolor
              magni fugiat deserunt ex beatae. Laboriosam voluptatibus error qui blanditiis ipsa molestiae! Assumenda
              sit amet est vel.
              <a href="pages/about_us.html" target="_blank">Continue Reading</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="recent">
      <div class="container-fluid">
        <h2 class="about-title featured-text text-center">Recent Products</h2>
        <div class="row">
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_1.webp.webp" class="card-img-top" alt="rec_pr">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_2.webp" class="card-img-top" alt="rec_pr">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_3.webp" class="card-img-top" alt="...">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center" style="width: 18rem;">
              <div class="card-header">
              </div>
              <img src="images/prod_4.webp" class="card-img-top" alt="rec_pr">
              <div class="card-body">
                <div class="col">
                  <div class="d-flex mt-3 align-items-center">
                    <h5 class="card-title">Card title </h5>
                    <h5 class="card-title price ml-auto">55$</h5>
                  </div>
                </div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
              <div class="card-footer text-muted">
                <a href="#" class="btn btn-success">Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section sec" id="contact">
      <h2 class="about-title featured-text text-center text-white">Contacts</h2>
      <div class="container-fluid">
        <div class="row">
          <div>
            <blockquote class="blockquote blockquote-custom p-5 shadow">
              <p class="mb-0 mt-2 font-italic text-white">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris
                nisi ut aliquip ex ea commodo."</p>
              <footer class="blockquote-footer pt-4 mt-4 border-top text-white">Do not hesitate and
                <cite title="Source Title"><a href="pages/contact.html" class="text-info">@contact_us</a></cite>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>
    <section class="section" id="sponsors">
      <div class="container">
        <h2 class="about-title featured-text text-center">Sponsors</h2>
        <div class="customer-logos slider">
          <div class="slide"><img src="images/adidas.png" alt="sp"></div>
          <div class="slide"><img src="images/facebook.png" alt="sp"></div>
          <div class="slide"><img src="images/google.png" alt="sp"></div>
          <div class="slide"><img src="images/instagram.png" alt="sp"></div>
          <div class="slide"><img src="images/nike.png" alt="sp"></div>
          <div class="slide"><img src="images/twitter.png" alt="sp"></div>
          <div class="slide"><img src="images/uber.png" alt="sp"></div>
          <div class="slide"><img src="images/youtube.png" alt="sp"></div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container border-bottom">
      <div class="row align-items-center">
        <div class="col">
          <a href="#">          
            <img src="images/logo_1.png" class="logo_f" alt="logo">
          </a>
        </div>
        <div class="col">
          <h2 class="text-white">Menu</h2>
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item effect">
              <a class="nav-link  text-white" href="pages/blog.html">Blog</a>
            </li>
            <li class="nav-item effect">
              <a class="nav-link text-white" href="pages/products_all.html">Products</a>
            </li>
            <li class="nav-item effect">
              <a class="nav-link text-white" href="pages/about_us.html">About</a>
            </li>
            <li class="nav-item effect">
              <a class="nav-link text-white" href="pages/contact.html">Contact</a>
            </li>
            <li class="nav-item effect">
              <a class="nav-link text-white" href="pages/terms.html">Terms and Conditions</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item effect">
              <a class="nav-link" href="https://www.facebook.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
            <li class="nav-item effect">
              <a class="nav-link" href="https://www.facebook.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter"
                  viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
              </a>
            </li>
            <li class="nav-item effect">
              <a class="nav-link" href="https://www.facebook.com" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-linkedin"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script>
    $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          setting: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          setting: {
            slidesToShow: 3
          }
        }]
      });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
    crossorigin="anonymous"></script>
</body>

</html>
