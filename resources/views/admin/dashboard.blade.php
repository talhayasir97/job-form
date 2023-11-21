@extends('admin.layouts.app')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
      name="viewport"
    />
    <title>The Angels School System</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/components.css" />
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png" />
  </head>
<body>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-3">
                <a href="./listTeacher.html" class="text-decoration-none teacher-dash">
                  <div class="card card-primary">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="text-dark">Teachers</h5>
                          <h5 class="text-dark">10+</h5>
                        </div>
                        <div>
                          <img src="./assets/img/teacher.png" alt="" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <a href="./listStudent.html" class="text-decoration-none teacher-dash">
                  <div class="card card-danger">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="text-dark">Students</h5>
                          <h5 class="text-dark">200+</h5>
                        </div>
                        <div>
                          <img src="./assets/img/students.png" alt="" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <a href="./classes.html" class="text-decoration-none teacher-dash">
                  <div class="card card-warning">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="text-dark">Classes</h5>
                          <h5 class="text-dark">10+</h5>
                        </div>
                        <div>
                          <img src="./assets/img/school.png" alt="" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                <a href="./awardsList.html" class="text-decoration-none teacher-dash">
                  <div class="card card-success">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h5 class="text-dark">Awards</h5>
                          <h5 class="text-dark">50+</h5>
                        </div>
                        <div>
                          <img src="./assets/img/achievement.png" alt="" class="img-fluid" />
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-12 ">
                <div class="card">
                  <div class="card-header">
                    <h4 class="pt-3">Number of Students</h4>
                  </div>
                  <div class="card-body">
                    <div class="recent-report__chart">
                      <div id="chart1"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>
  </section>
</body>
</html>