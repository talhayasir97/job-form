@extends('admin.layouts.app')
<!DOCTYPE html>
<html lang="en">
  <!-- blank.html  21 Nov 2019 03:54:41 GMT -->
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
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="py-3">All Students</h4>
                    </div>

                    <h4 class="brand-name text-center py-3">
                      Welcome to the ANGELS School System Students List
                    </h4>
                    <div class="search-box">
                      <div class="row mx-2">
                        <div
                          class="col-12 d-flex justify-content-end align-items-center"
                        >
                          <div class="form-group d-flex">
                            <div>
                              <h6 class="mt-2 mx-2">Search :</h6>
                            </div>
                            <div>
                              <input type="text" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover" id="tableExport" style="width: 100%">
                          <thead>
                            <tr>
                              <th>Student ID</th>
                              <th>Name</th>
                              <th>Father's Name</th>
                              <th>Class</th>
                              <th>Contact Number</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          @foreach ($students as $student)
                            <tr>
                              <td>{{$student->id}}</td>
                              <td>{{$student->name }}</td>
                              <td>{{$student->father_name }}</td>
                              <td>{{$student->class }}</td>
                              <td>{{$student->contact_number }}</td>

                              <td>
                                <a href="{{route('show_student',$student->id)}}" class="btn btn-icon btn-outline-success"><i class="far fa-eye"></i></a>
                                <a href="{{route('edit_student',$student->id)}}" class="btn btn-icon btn-outline-primary"><i class="far fa-edit"></i></a>
                                <!-- Delete Button -->
                                <a href="{{$student->id}}" class="btn btn-icon btn-outline-danger" data-toggle="modal" data-target="#basicModal{{$student->id}}"><i class="fas fa-times"></i></a>
                             </td>
                              
                            </tr>
                          @endforeach
                        </table>
                        <div class="d-flex justify-content-md-end">
                          <nav aria-label="Page navigation example mx-3">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                        <div class="d-flex justify-content-end my-2">
                          <a
                            href="#"
                            class="btn btn-icon icon-left btn-outline-success d-flex align-items-center"
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
              </div>
            </div>
          </section>
        </div>

        <!-- Modal -->
        @foreach ($students as $student)
                <form action="{{route('destroy_student',$student->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                <div class="modal fade" id="basicModal{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Student
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this <b>Student</b>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                      <button type="button" class="btn btn-outline-dark d-flex align-items-center" data-dismiss="modal">
                      <ion-icon name="close-outline" class="share-icon"></ion-icon>
                        Close
                      </button>

                      
                      <button type="submit" class="btn btn-danger d-flex align-items-center">
                      <ion-icon name="trash-bin-outline" class="share-icon"></ion-icon>
                        Delete
                      </button>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
              @endforeach
  </body>
</html>
