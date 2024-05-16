<x-layouts.admin-dash>

      <div class="main-content-inner">
              <!-- Dark table start -->
              <div class="col-12 mt-5">
                  <div class="card">
                      <div class="card-body ">
                          <h4 class="header-title">Teacher List</h4>
                          <div class="data-tables datatable-dark">

                            <a class="btn btn-outline-dark mb-3" href="{{route('addTeacherPage')}}">Add Teacher</a>

                            <table  class="text-center table">
                                  <thead class="text-capitalize font-medium">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Created At </th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher )

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$teacher->name}}</td>
                                        <td>{{$teacher->job}}</td>
                                        <td >{{$teacher->description}}</td>
                                        <td>
                                            @if ($teacher->image != null)
                                            <img src="{{asset('asset/teacherImg/'.$teacher->image)}}" class="rounded" width="100" alt="...">

                                            @else
                                            <div><h3>No Image</h3></div>
                                            @endif
                                        </td>

                                        <td>{{$teacher->created_at}}</td>
                                        <td>
                                          <button class="btn btn-info">
                                             <a class="text-white" href="{{route('editTeacherPage',['id'=>$teacher->id])}}">Edit</a>
                                            </button>
                                        </td>

                                        <td>
                                          <button class="btn btn-danger">
                                             <a class="text-white" href="{{route('deleteTeacherPost',['id'=>$teacher->id])}}">Delete</a>
                                          </button>
                                        </td>
                                    </tr>
                                    @endforeach

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Dark table end -->
          </div>
      </div>
  </div>
  <!-- main content area end -->

</x-layouts.admin-dash>
