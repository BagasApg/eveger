<!--DROP THIS FILE INTO YOUR BROWSER TO PREVIEW THE EFFECT-->
<!DOCTYPE html>
<html>

<head>
  <!--ADDITTONAL LINKS TO MAKE THE EXAMPLES LOOK PRETTY-->
  <!-- Bootstrap core CSS for better functionality-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet" />

  <!-- CORE FILES FOR PERFECT SCROLLBAR FUNCTIONALITY -->
  <!-- The Perfect Scrollbar CSS files -->
  <link href="{{ asset('assets/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
  <!-- The Perfect Scrollbar JS files -->
  <script src="{{ asset('assets/perfect-scrollbar/dist/perfect-scrollbar.js') }}"></script>

  <!--DEFINE CONTAINER-->
  <style>
    body {
      background-color: rgba(247, 247, 247, 0.801);
    }

    #container {
      background-color: rgb(255, 255, 255);
      position: relative;
      margin: 100px auto;
      padding: 0px;
      width: 600px;
      height: 500px;
      overflow: auto;
    }

    #container .content {
      width: 1280px;
      height: 900px;
    }

  </style>

</head>

<body>
  <!--EXAMPLE CONTENT-->
  <section class="text-center">
    <br>
    <h1>Basic</h1>
    <p class="lead mt-4 mb-5">You can preview the effect offline below or <strong>fork ready to use template</strong> of
      this
      example.</p>


    <a class="btn btn-lg btn-info ripple-surface mx-4" data-mdb-ripple-color="dark"
      style="background-color:hsl(195, 53%, 48%) !important;" href="https://perfectscrollbar.com/"><i
        class="fas fa-book mx-2"></i>DOCUMENTATION</a>
    <a class="btn  btn-link btn-lg ripple-surface mx-4" data-mdb-ripple-color="dark"
      style="color:hsl(195, 83%, 25%) !important;" href="https://github.com/mdbootstrap/perfect-scrollbar"><i
        class="fab fa-github me-2"></i>GITHUB</a>
    <a class="btn btn-lg btn-link ripple-surface mx-4" data-mdb-ripple-color="dark"
      style="color: hsl(195, 93%, 38%) !important;"
      href="https://www.youtube.com/watch?v=Ro1x0zYUwwA&list=PLl1gkwYU90QlfX9oIJvC4JJKaucei7Hx8&index=12&ab_channel=Keepcoding"><i
        class="fab fa-youtube me-2"></i> Tutorials</a>
    <a class="btn btn-lg btn-link ripple-surface mx-4" data-mdb-ripple-color="dark"
      style="color: hsl(195, 43%, 38%) !important;" href="https://mdbgo.com/"><i class="fas fa-server me-2"></i> Free
      Hosting</a>
    <a class="btn btn-lg btn-outline-info mx-4"
      href="https://mdbootstrap.com/snippets/standard/adamjakubowski/3589839?utm_campaign=PS&utm_source=Package"><i
        class="fas fa-code me-2"></i>TEMPLATE</a>
    <div class="d-flex justify-content-center mt-5 mb-5">
      <div class="alert my-3" role="alert" data-mdb-color="light" style="border: hsl(195, 53%, 48%) 1px solid ;">
        <p class="font-weight-bold">Get Free Material Design for Bootstrap 5</p>
        <hr>
        <p>Material Design 2.0 + latest Bootstrap 5 based on plain JavaScript. 700+ material UI components, super
          simple, 1 minute installation, free templates &amp; much more</p>
        <a type="button" href="https://mdbootstrap.com/docs/standard/" class="btn btn-outline-info  mt-3"
          style="color: hsl(195, 43%, 38%); border-color:  hsl(195, 43%, 38%);" role="button"
          data-mdb-ripple-color="dark">Free Download</a>
      </div>
    </div>
    <hr>

    <br>
    <div id="container" class="rounded">

      <!--EXAMPLE CONTENT-->
      <div class="content p-5">
        <h2 class="font-weight-bold text-center ">Hello I'm a piece of example content!</h2>
        <p class="lead mb-3 text-center ">You can just scroll trough me and marvel at the perfection of this scrollbar,
          but
          I'm also full of surprises!</p>

        <section class="my-4">
          <hr>
          <div class="row mt-3 justify-content-center">
            <div class="col-3 d-flex">
              <!-- Card -->
              <div class="card">

                <!-- Card image -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img class="img-fluid" src="https://mdbootstrap.com/wp-content/uploads/2018/10/mdb_news_1.jpg"
                    alt="Card image cap">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                  <!-- Title -->
                  <h4 class="card-title">I'm a pretty card</h4>
                  <!-- Text -->
                  <p class="card-text">I'm very pretty and I have a pretty blue button, but it contains nothing, only
                    animated waves. I'm a sad,
                    pretty card.</p>
                  <!-- Button -->
                  <a href="#" class="btn btn-primary mt-4">Button</a>

                </div>

              </div>
              <!-- Card -->
            </div>
            <div class="col-3 d-flex">
              <!-- Card -->
              <div class="card">

                <!-- Card image -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2018/10/tutorials.jpg"
                    alt="Card image cap">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                  <!-- Title -->
                  <h4 class="card-title">I'm also pretty</h4>
                  <!-- Text -->
                  <p class="card-text">I'm very pretty and I have a pretty purple button, it contains a link to a
                    <strong>Web design & Web development tutorials</strong>. I'm a happy,
                    pretty card.</p>
                  <!-- Button -->
                  <a href="https://mdbootstrap.com/docs/standard/getting-started/"
                    class="btn btn-secondary">Tutorial</a>

                </div>

              </div>
              <!-- Card -->
            </div>
            <div class="col-3 d-flex">
              <!-- Card -->
              <div class="card">

                <!-- Card image -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img class="card-img-top" src="https://mdbootstrap.com/wp-content/uploads/2018/10/admin.jpg"
                    alt="Card image cap">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                  <!-- Title -->
                  <h4 class="card-title">I'm also happy</h4>
                  <!-- Text -->
                  <p class="card-text">I'm very pretty and I have a pretty mdb-color button. It' leads to <strong>Admin
                      Dashboard building tutorial</strong>. I'm a happy,
                    pretty card.</p>
                  <!-- Button -->
                  <a href="https://www.youtube.com/watch?v=Ro1x0zYUwwA&list=PLl1gkwYU90QlfX9oIJvC4JJKaucei7Hx8&index=12&ab_channel=Keepcoding"
                    class="btn btn-info mt-4">Tutorial</a>

                </div>

              </div>
              <!-- Card -->
            </div>
            <div class="col-3 d-flex">
              <!-- Card -->
              <div class="card">

                <!-- Card image -->
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img class="card-img-top"
                    src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/content/en/_mdb5/standard/pro/_main/assets/mdb5-about-v2.jpg"
                    alt="Card image cap">
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                  <!-- Title -->
                  <h4 class="card-title font-weight-bold">I made y'all</h4>
                  <!-- Text -->
                  <p class="card-text">I'm very pretty and my button let's you download a <strong>free UI Kit</strong>
                    with
                    pretty, happy cards & over 700+ of other material components!</p>
                  <!-- Button -->
                  <a href="https://mdbootstrap.com/docs/standard/getting-started/installation/?utm_campaign=PS&utm_source=Package"
                    class="btn btn-success mt-1"><i class="fas fa-download mr-2"></i> Download</a>

                </div>

              </div>
              <!-- Card -->
            </div>
          </div>
        </section>

        <section class="my-4 text-center">
          <hr>
          <h3>We are beautiful and colorful</h3>
          <p class="lead mb-3">We are some material scrollbars that could help you make your apps and projects even more
            perfect!</p>
          <a href="https://mdbootstrap.com/docs/standard/methods/scrollbar/?utm_campaign=PS&utm_source=Package"
            class="btn btn-sm btn-primary rounded">Learn
            more about us!</a>
          <div class="row mt-3 justify-content-center">

            <style>
              .scrollbar {
                margin-left: 30px;
                float: left;
                height: 300px;
                width: 65px;
                background: #fff;
                overflow-y: scroll;
                margin-bottom: 25px;
              }

              .force-overflow {
                min-height: 450px;
              }

              .scrollbar-primary::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
              }

              .scrollbar-primary::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #4285F4;
              }

              .scrollbar-danger::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #F5F5F5;
                border-radius: 10px;
              }

              .scrollbar-danger::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
              }

              .scrollbar-danger::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #ff3547;
              }

              .scrollbar-warning::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #F5F5F5;
                border-radius: 10px;
              }

              .scrollbar-warning::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
              }

              .scrollbar-warning::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #FF8800;
              }

              .scrollbar-success::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #F5F5F5;
                border-radius: 10px;
              }

              .scrollbar-success::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
              }

              .scrollbar-success::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #00C851;
              }

              .scrollbar-info::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #F5F5F5;
                border-radius: 10px;
              }

              .scrollbar-info::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
              }

              .scrollbar-info::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #33b5e5;
              }

              .scrollbar-default::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #F5F5F5;
                border-radius: 10px;
              }

              .scrollbar-default::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
              }

              .scrollbar-default::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #2BBBAD;
              }

              .scrollbar-secondary::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #F5F5F5;
                border-radius: 10px;
              }

              .scrollbar-secondary::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
              }

              .scrollbar-secondary::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
                background-color: #aa66cc;
              }

            </style>
            <div class="scrollbar scrollbar-primary">
              <div class="force-overflow"></div>
            </div>
            <div class="scrollbar scrollbar-secondary">
              <div class="force-overflow"></div>
            </div>
            <div class="scrollbar scrollbar-default">
              <div class="force-overflow"></div>
            </div>
            <div class="scrollbar scrollbar-info">
              <div class="force-overflow"></div>
            </div>
            <div class="scrollbar scrollbar-success">
              <div class="force-overflow"></div>
            </div>
            <div class="scrollbar scrollbar-warning">
              <div class="force-overflow"></div>
            </div>

          </div>
        </section>

        <section class="my-4 text-center">
          <hr>
          <h3>I'm a picture of a boar</h3>
          <p class="lead mb-3">That's enough for me.</p>
          <div class="row mt-3 justify-content-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/01/Sus_scrofa_cristatus.jpg"
              class="img-fluid shadow-5" alt="1" style="width: 26rem;">

          </div>
        </section>

        <section class="my-4 text-center">
          <hr>
          <h3>I'm a basic Material Design sign-up form</h3>
          <p class="lead mb-3">Click on my button to learn more about me!</p>
          <div class="row mt-3 justify-content-center">
            <!-- Default form register -->
            <form class="border border-light shadow-5 py-4 px-4" style="width: 26rem;">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">
                <p class="h4 mb-4">Sign Up</p>
                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" />
                    <label class="form-label" for="form3Example1">First name</label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <input type="text" id="form3Example2" class="form-control" />
                    <label class="form-label" for="form3Example2">Last name</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Number input -->
              <div class="form-outline mb-4">
                <input type="number" id="form6Example6" class="form-control" />
                <label class="form-label" for="form6Example6">Phone</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <hr>
              <!-- Terms of service -->
              <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>
            </form>
            <!-- Default form register -->

          </div>
        </section>

        <section class="my-4 text-center">
          <hr>
          <h3>We are leading Web Development technologies</h3>
          <p class="lead mb-3">Click on us if you're interested about learning more or getting our beautiful components
            for free.</p>
          <div class="row mt-3 justify-content-center">
            <div class="col-md-3">
              <!-- Card -->
              <div class="card bg-image"
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center py-5 px-4"
                  style="background-color: rgba(0, 0, 0, 0.6)">
                  <div>
                    <a href="https://mdbootstrap.com/docs/standard/?utm_campaign=PS&utm_source=Package"><img
                        src="https://mdbootstrap.com/img/Marketing/general/logo/small/bootstrap.png"></a>
                    <h3 class="card-title pt-2 font-weight-bold"><strong>Standard</strong></h3>
                    <p>Get beautiful components and useful features by clicking the button below.</p>
                    <a href="https://mdbootstrap.com/docs/standard/?utm_campaign=PS&utm_source=Package"
                      class="btn btn-secondary"><i class="fas fa-clone left"></i> Learn more</a>
                  </div>
                </div>

              </div>
              <!-- Card -->
            </div>
            <div class="col-md-3">
              <!-- Card -->
              <div class="card bg-image"
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4"
                  style="background-color: rgba(0, 0, 0, 0.6)">
                  <div>
                    <a href="https://mdbootstrap.com/docs/b5/angular/?utm_campaign=PS&utm_source=Package"><img
                        src="https://mdbootstrap.com/img/Marketing/general/logo/small/angular.png"></a>
                    <h3 class="card-title pt-2 font-weight-bold"><strong>Angular</strong></h3>
                    <p>Get beautiful components and useful features by clicking the button below.</p>
                    <a href="https://mdbootstrap.com/docs/b5/angular/?utm_campaign=PS&utm_source=Package"
                      class="btn btn-danger"><i class="fas fa-clone left md-1"></i> Learn more</a>
                  </div>
                </div>

              </div>
              <!-- Card -->
            </div>
            <div class="col-md-3">
              <!-- Card -->
              <div class="card bg-image"
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4"
                  style="background-color: rgba(0, 0, 0, 0.6)">
                  <div>
                    <a href="https://mdbootstrap.com/docs/b5/react/?utm_campaign=PS&utm_source=Package"><img
                        src="https://mdbootstrap.com/img/Marketing/general/logo/small/react.png"></a>
                    <h3 class="card-title pt-2 font-weight-bold"><strong>React</strong></h3>
                    <p>Get beautiful components and useful features by clicking the button below.</p>
                    <a href="https://mdbootstrap.com/docs/b5/react/?utm_campaign=PS&utm_source=Package"
                      class="btn btn-info"><i class="fas fa-clone left me-1"></i>Learn more</a>
                  </div>
                </div>

              </div>
              <!-- Card -->
            </div>
            <div class="col-md-3">
              <!-- Card -->
              <div class="card bg-image"
                style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%2814%29.jpg);">

                <!-- Content -->
                <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4"
                  style="background-color: rgba(0, 0, 0, 0.6)">
                  <div>
                    <a href="https://mdbootstrap.com/docs/b5/vue/?utm_campaign=PS&utm_source=Package"><img
                        src="https://mdbootstrap.com/img/Marketing/general/logo/small/vue.png"></a>
                    <h3 class="card-title pt-2 font-weight-bold"><strong>Vue</strong></h3>
                    <p>Get beautiful components and useful features by clicking the button below.</p>
                    <a href="https://mdbootstrap.com/docs/b5/vue/?utm_campaign=PS&utm_source=Package"
                      class="btn btn-success"><i class="fas fa-clone left me-1"></i>Learn more</a>
                  </div>
                </div>

              </div>
              <!-- Card -->
            </div>


          </div>
        </section>

        <section class="my-4 text-center">
          <hr>
          <h3>I'm saying goodbye!</h3>
          <p class="lead mb-3">Beeing scrolled by you was a pleasure, I hope I'll see you soon at <a
              href="https://mdbootstrap.com/?utm_campaign=PS&utm_source=Package">mdbootstrap.com</a></p>
        </section>




      </div>
      <!--EXAMPLE CONTENT-->


    </div>

    <ul class="list-unstyled text-center mx-auto" style="max-width: 20em;">
      <li>
        <div class="md-form md-outline">
          <input type="number" id="width" value="800" class="form-control">
          <label for="width">Width</label>
        </div>
      </li>
      <li>
        <div class="md-form md-outline">
          <input type="number" id="height" value="400" class="form-control">
          <label for="height">Height</label>
        </div>
      </li>
      <li>
        <button id="resize" class="btn btn-primary btn-rounded mb-5">Change size<i
            class="fas fa-expand ms-2"></i></button>
      </li>
      <li>
        <a href="https://perfectscrollbar.com/?utm_campaign=PS&utm_source=Package"
          class="btn btn-sm btn-outline-primary btn-rounded"><i class="fas fa-caret-square-left me-2"></i>Back to
          docs</a>
      </li>
    </ul>
  </section>
  <!--EXAMPLE CONTENT-->

  <!--ADD PERFECT SCROLLBAR TO CONTAINER-->
  <script>
    new PerfectScrollbar('#container');

  </script>


  <!--ADDITTONAL SCRIPTS TO MAKE THE EXAMPLE CONTENT LOOK PRETTY-->
  <section>
    <!--jQuery-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- MDB core JavaScript -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
    </script>

    <!--Handle size change-->
    <script>
      // Initialize the plugin
      const demo = document.querySelector('#container');
      const ps = new PerfectScrollbar(demo);

      // Handle size change
      document.querySelector('#resize').addEventListener('click', () => {

        // Get updated values
        width = document.querySelector('#width').value;
        height = document.querySelector('#height').value;

        // Set demo sizes
        demo.style.width = `${width}px`;
        demo.style.height = `${height}px`;

        // Update Perfect Scrollbar
        ps.update();
      });

    </script>

  </section>
  <!-- Footer -->
  <footer class="text-white d-block shadow-5" style="background-color: 	hsl(195, 53%, 88%);">

    <!-- Copyright -->
    <div class="row pt-3 px-3 w-100">
      <div class="col-md-4 d-md-block d-none">
        <p class="text-primary ms-3">Project maintained by
          <a href="https://mdbootstrap.com/?utm_campaign=PS&utm_source=Package"><img class="align-self-top"
              style="height:20px;" src="https://mdbootstrap.com/img/Marketing/general/logo/small/mdb.png"></a></p>
      </div>
      <div class="text-center text-primary col-md-8 col-lg-4">
        <p>Docs & Examples made pretty with
          <a href="https://mdbootstrap.com/jquery/docs/?utm_campaign=PS&utm_source=Package"
            class="text-primary font-weight-bold">Free MDB UI Kit</a></p>
      </div>
      <div class="col-md-4 d-lg-block d-none">

        <div class="flex-right float-end">

          <!--Github-->
          <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="pin-ic">
            <i class="fab fa-github fa-lg text-primary me-4"> </i>
          </a>
          <!-- Facebook -->
          <a href="https://www.facebook.com/mdbootstrap" class="fb-ic">
            <i class="fab fa-facebook-f fa-lg text-primary me-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i href="https://twitter.com/mdbootstrap?lang=en" class="fab fa-twitter fa-lg text-primary me-4"> </i>
          </a>
          <!--Linkedin -->
          <a href="https://www.linkedin.com/company/material-design-for-bootstrap/" class="li-ic">
            <i class="fab fa-linkedin-in fa-lg text-primary me-4"> </i>
          </a>
          <!--Newsletter-->
          <a href="https://mdbootstrap.com/newsletter/" class="pin-ic">
            <i class="fas fa-envelope fa-lg text-primary"> </i>
          </a>

        </div>
      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>

</html>
