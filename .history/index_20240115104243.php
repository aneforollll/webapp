
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Health alert demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
      <div class="feature-icon d-inline-flex align-items-center justify-content-start text-bg-light bg-gradient fs-2 mb-3">
          <img src="images/home.png" width="50px">
      </div>
        <div class="justify-content-end">
          <button type="button" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-light text-dark me-2">logout</button>
        </div>
      </div>
    </div>
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Health alert+</h1>
          <p class="lead">Health alert is a website for elderly who concern about their health. by taking our survey you will know roughly about your health.
            We using machine learning to create program that can predict your chance of getting Heart attack, Diabetes and Stroke using only your health information (No personal information) </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" onclick="document.location='healthalertform.php'">Start</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4" onclick="document.location='FAQ.php'">More information</button>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="images/heart.jpg" alt="" width="600
            ">
        </div>
      </div>
      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">What can we tell you</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-light bg-gradient fs-2 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="light" class="bi bi-heart-pulse" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053.918 3.995.78 5.323 1.508 7H.43c-2.128-5.697 4.165-8.83 7.394-5.857.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17c3.23-2.974 9.522.159 7.394 5.856h-1.078c.728-1.677.59-3.005.108-3.947C13.486.878 10.4.28 8.717 2.01zM2.212 10h1.315C4.593 11.183 6.05 12.458 8 13.795c1.949-1.337 3.407-2.612 4.473-3.795h1.315c-1.265 1.566-3.14 3.25-5.788 5-2.648-1.75-4.523-3.434-5.788-5Z"/>
                <path d="M10.464 3.314a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.5a.5.5 0 0 0 0 1H4a.5.5 0 0 0 .416-.223l1.473-2.209 1.647 4.118a.5.5 0 0 0 .945-.049l1.598-5.593 1.457 3.642A.5.5 0 0 0 12 9h3.5a.5.5 0 0 0 0-1h-3.162z"/>
              </svg>
            </div>
            <h3 class="fs-2 text-body-emphasis">Your chance of having disease</h3>
            <p>Take our survey to check your chance of having Heart disease, Diabetes and Stroke.</p>
            <a href="healthalertform.php" class="icon-link">
              Check it out
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-light bg-gradient fs-2 mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="light" class="bi bi-file-bar-graph" viewBox="0 0 16 16">
                <path d="M4.5 12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5zm3 0a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm3 0a.5.5 0 0 1-.5-.5v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5z"/>
                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
              </svg>
            </div>
            <h3 class="fs-2 text-body-emphasis">Your health status</h3>
            <p>We will tell you about your health status. What you have too high or too low.</p>
            <a href="dashboard.php" class="icon-link">
              Click here
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
            </a>
          </div>
          <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-light bg-gradient fs-2 mb-3">
              <img class="rounded" src="images/info.png" width="50" height="50" fill="light" >
            </div>
            <h3 class="fs-2 text-body-emphasis">Additional information</h3>
            <p>Basic health information that you will need to understand before answer our question.</p>
            <a href="FAQ.php" class="icon-link">
              Check this
              <svg class="bi"><use xlink:href="#chevron-right"></use></svg>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            </a>
          </div>
        </div>
      </div>   




  </body>
</html>