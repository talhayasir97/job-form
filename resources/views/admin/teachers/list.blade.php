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
                <div class="col-12">
                  <div class="card">
                  
                    <div class="card-header">
                      <h4 class="py-3">All Teachers</h4>
                    </div>
                    <h4 class="brand-name text-center">
                      Welcome to the ANGELS School System Teachers List
                    </h4>
                    <div class="search-box pt-3">
                       <div class="row mx-2 ">
                      <div class="col-12 d-flex justify-content-end align-items-center">
                        <div class="form-group d-flex">
                          <div>
                            <h6 class="mt-2 mx-2">Search :</h6>
                          </div>
                          <div>
                            <input type="text" class="form-control">
                          </div>
                        </div>  
                      </div>
                       </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table
                          class="table table-striped table-hover"
                          id="tableExport"
                          style="width: 100%"
                        >
                          <thead>
                            <tr>
                              <th>Teacher Name</th>
                              <th>Qualification</th>
                              <th>Date Of Birth</th>
                              <th>Contact Number</th>
                              <th>Nationality</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          @foreach ($teachers as $teacher)
                            <tr>
                              <td>{{$teacher->name}}</td>
                              <td>{{$teacher->education}}</td>
                              <td>{{$teacher->dob}}</td>
                              <td>{{$teacher->contact_number}}</td>
                              <td>{{$teacher->nationality}}</td>

                              <td>
                                <a href="{{route('show_teacher',$teacher->id)}}" class="btn btn-icon btn-outline-success"><i class="far fa-eye"></i></a>
                                <a href="{{route('edit_teacher',$teacher->id)}}" class="btn btn-icon btn-outline-primary"><i class="far fa-edit"></i></a>
                                <!-- Delete Button -->
                                <a href="{{$teacher->id}}" class="btn btn-icon btn-outline-danger" data-toggle="modal" data-target="#basicModal{{$teacher->id}}"><i class="fas fa-times"></i></a>
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

                                            <!-- Print & Share Buttons -->

                    <div class="d-flex justify-content-end my-2">
                      <a
                        href="#"
                        class="btn btn-icon icon-left btn-outline-success   d-flex align-items-center gap-1"
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
                @foreach ($teachers as $teacher)
                <form action="{{route('destroy_teacher',$teacher->id)}}" method="POST">
                
                        @csrf
                        @method('DELETE')
                <div class="modal fade" id="basicModal{{$teacher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-dark" id="exampleModalLabel">
                        Delete Teacher
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Are you sure you want to delete this <b>Teacher</b>
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
