<x-layouts.admin-dash>

      <div class="main-content-inner">
              <!-- Dark table start -->
              <div class="col-12 mt-5">
                  <a href="{{route('allUserPage')}}" class="btn btn-primary">Back
                  </a>
                  <div class="form-group d-flex justify-content-end ">
                      <form action="{{route('search')}}" method="get">
                      <div class="input-group">
                          <input name="search" class="form-control" placeholder="Search.." value="{{isset($search) ? $search : ''}}">
                          <button type="submit" class="btn btn-primary">Filter</button>
                      </div>
                    </form>
                  </div>

                  <div class="card">
                      <div class="card-body ">
                          <h4 class="header-title">User List</h4>
                          <div class="data-tables datatable-dark">
                            <table  class="text-center table">
                                  <thead class="text-capitalize font-medium">
                                      <tr>
                                          <th>ID</th>
                                          <th>Name</th>
                                          <th>Role</th>
                                          <th>Email</th>
                                          <th>Created At</th>
                                          <th>Edit </th>
                                          <th>Delete</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                    @foreach ($users as $user)
                                      <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$user->name}}</td>
                                          <td>{{$user->role->name}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>{{$user->created_at}}</td>
                                          <td>
                                            <button class="btn btn-info">
                                               <a class="text-white" href="{{route('editUserPage',['id'=>$user->id])}}">Edit</a>
                                            </button>
                                         </td>
                                          <td>
                                             <button class="btn btn-danger">
                                               <a class="text-white" href="{{route('deleteUserPost',['id'=>$user->id])}}">Delete</a>
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
