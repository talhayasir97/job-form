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
                        <form action="{{route('store_student')}}" method="POST">
                            @csrf
                            <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                    <h4 class="pt-3">Student Registration</h4>
                                    </div>
                                    <h4 class="brand-name text-center py-3">
                                    Welcome to the ANGELS School System Student Registration
                                    Form
                                    </h4>
                                    <div class="card-body">
                                    <div class="form-group">
                                        <label>Student Name</label>
                                        <input type="text" id="name" name="name" class="form-control" />
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label>Date Of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob" />
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Session</label>
                                        <input type="text" class="form-control" name="session" id="session"/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label>B-Form</label>
                                        <input type="text" id="b_form" name="b_form" class="form-control" maxlength="15"/>
                                        </div>

                                        <div class="form-group col-md-6">
                                        <label>Select Class</label>
                                        <select class="form-control" name="class" id="class">
                                            <option>Class 1st</option>
                                            <option>Class 2nd</option>
                                            <option>Class 3rd</option>
                                            <option>Class 4th</option>
                                            <option>Class 5th</option>
                                            <option>Class 6th</option>
                                            <option>Class 7th</option>
                                            <option>Class 8th</option>
                                            <option>Class 9th</option>
                                            <option>CLass 10th</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label>Father Name</label>
                                        <input type="text" class="form-control" name="father_name" id="father_name"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Father Business</label>
                                        <input type="text" class="form-control" name="father_buisness" id="father_buisness"/>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label>Father's CNIC</label>
                                        <input type="text" class="form-control" id="father_cnic" name="father_cnic" maxlength="15"/>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Contact Number</label>
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" maxlength="11"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea class="form-control" name="address" id="address"></textarea>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label>Select Nationality</label>
                                        <select class="form-control" name="nationality" id="nationality">
                                            <option>Pakistani</option>
                                            <option>Non Pakistani</option>
                                        </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Select Religion</label>
                                        <select class="form-control" name="religion" id="religion">
                                            <option>Islam</option>
                                            <option>Hindu</option>
                                            <option>Christian</option>
                                            <option>Other</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Profile</label>
                                        <input type="file" class="form-control" id="image" name="image"/>
                                    </div>
                                    </div>

                                    <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1"  type="submit">
                                        Submit
                                    </button>
                                    <button class="btn btn-secondary" type="reset">
                                        Reset
                                    </button>
                                    </div>
                        </form>

                    <!-- Print & Share Buttons -->

                    <div class="d-flex justify-content-end mx-4 mb-3">
                      <div class="btn-student-id-card">
                        <a
                          href="./StudentIDCard.html"
                          class="btn btn-icon icon-left btn-light d-flex align-items-center gap-1"
                          ><i class="fas fa-address-card"></i> Student ID
                          Card</a
                        >
                      </div>
                      <a
                        href="#"
                        class="btn btn-icon icon-left btn-outline-success mx-3 d-flex align-items-center gap-1"
                        ><ion-icon
                          name="print-outline"
                          class="share-icon"
                        ></ion-icon>
                        Print</a
                      >

                      <button
                        type="button"
                        class="btn btn-outline-danger d-flex align-items-center"
                        data-toggle="modal"
                        data-target="#basicModal"
                      >
                        <ion-icon
                          name="arrow-redo-outline"
                          class="share-icon"
                        ></ion-icon>
                        Share
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
        </div>

        <!-- Modal -->

        <div
          class="modal fade"
          id="basicModal"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalLabel"
          style="display: none"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                  Student Admission Form
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                Share your Student Admission confirmation form to their parents
                via
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button
                  type="button"
                  class="btn btn-warning d-flex align-items-center"
                >
                  <ion-icon
                    name="chatbox-outline"
                    class="share-icon"
                  ></ion-icon>
                  SMS
                </button>
                <button
                  type="button"
                  id="toastr-2"
                  class="btn btn-success d-flex align-items-center"
                >
                  <ion-icon name="logo-whatsapp" class="share-icon"></ion-icon>
                  Whatsapp
                </button>
              </div>
            </div>
          </div>
        </div>

  </body>
</html>