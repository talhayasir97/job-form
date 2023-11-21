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
            <form action="{{route('store_teacher')}}" method="POST">
            @csrf
            <div class="section-body">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="py-3">Teacher Registration</h4>
                    </div>
                    <h4 class="brand-name text-center py-3">
                      Welcome to the ANGEL School System Teacher Registration
                      Form
                    </h4>
                    <div class="card-body">
                      <div class="form-group">
                        <label> Name</label>
                        <input type="text" class="form-control" name="name" />
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Date Of Birth</label>
                          <input type="date" class="form-control" name="dob"/>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Contact Number</label>
                          <input type="text" class="form-control" name="contact_number"/>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label>Education Qualification</label>
                          <input type="text" class="form-control" name="education"/>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address"></textarea>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Select Nationality</label>
                          <select class="form-control" name="nationality">
                            <option>Pakistani</option>
                            <option>Non Pakistani</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Select Religion</label>
                          <select class="form-control" name="religion">
                            <option>Islam</option>
                            <option>Hindu</option>
                            <option>Christian</option>
                            <option>Other</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Profile</label>
                        <input type="file" class="form-control" name="image" />
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button
                        class="btn btn-primary mr-1" type="submit">
                        Submit
                      </button>
                      <button class="btn btn-secondary" type="reset">
                        Reset
                      </button>
                    </div>
                  </form>
                    <!-- Print & Share Buttons -->

                    <div class="d-flex justify-content-end mb-3">
                      <div class="btn-student-id-card">
                        <a
                          href="./teacherProfileCard.html"
                          class="btn btn-icon icon-left btn-light d-flex align-items-center gap-1"
                          ><i class="fas fa-address-card"></i> Teacher ID
                          Card</a
                        >
                      </div>
                      <a
                        href="#"
                        class="btn btn-icon icon-left btn-outline-success mx-4 d-flex align-items-center gap-1"
                        ><ion-icon
                          name="print-outline"
                          class="share-icon"
                        ></ion-icon>
                        Print</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         
      </div>
    </div>  
  </body>
</html>
