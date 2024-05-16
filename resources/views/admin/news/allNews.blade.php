<x-layouts.admin-dash>

      <div class="main-content-inner">
              <!-- Dark table start -->
              <div class="col-12 mt-5">
                  <div class="card">
                      <div class="card-body ">
                          <h4 class="header-title">News List</h4>
                          <div class="data-tables datatable-dark">

                            <a class="btn btn-outline-success mb-3 " href="{{route('addNewsPage')}}">Add News</a>

                            <table  class="text-center table">
                                  <thead class="text-capitalize font-medium">
                                      <tr>
                                          <th>ID</th>
                                          <th>Titile</th>
                                          <th>Description</th>
                                          <th>Image</th>
                                          <th>Created At</th>
                                          <th>Edit </th>
                                          <th>Delete</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                    @foreach ($news as $new)
                                      <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$new->title}}</td>
                                          <td>{{$new->description}}</td>
                                          <td>
                                              @if($new->image != '')
                                            <img src="{{asset('asset/newsImg/'.$new->image)}}" class="rounded" width="100" alt="...">
                                              @else
                                                  <h3>No Image</h3>
                                              @endif
                                          </td>
                                          <td>{{$new->created_at}}</td>
                                          <td>
                                            <button class="btn btn-info">
                                               <a class="text-white" href="{{route('editNewsPage',['id'=>$new->id])}}">Edit</a>
                                            </button>
                                         </td>
                                          <td>
                                             <button class="btn btn-danger">
                                               <a class="text-white" href="{{route('deleteNewsPost',['id'=>$new->id])}}">Delete</a>
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
