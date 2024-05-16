<x-layouts.admin-dash>

            <div class="main-content-inner">
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body ">
                                <h4 class="header-title">Cource List</h4>
                                <div class="data-tables datatable-dark">

                            <a class="btn btn-outline-dark mb-3" href="{{route('addCourcePage')}}">Add Cource</a>

                                    @if ($delete = Session::get('delete'))
                               <div class="alert alert-success">{{$delete}}</div>

                               @endif

                                    <table  class="text-center table">
                                        <thead class="text-capitalize font-medium">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>price</th>
                                                <th>Image</th>
                                                <th>Created At </th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cources as $cource )

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$cource->title}}</td>
                                                <td >{{$cource->description}}</td>
                                                <td>{{$cource->price}}</td>
                                                <td>
                                                    @if($cource->image != '')
                                                    <img src="{{asset('asset/img/'.$cource->image)}}" class="rounded" width="100" alt="...">
                                                    @else
                                                        <h3>No Image</h3>
                                                    @endif
                                                </td>

                                                <td>{{$cource->created_at}}</td>
                                                <td>
                                                  <button class="btn btn-info">
                                                     <a class="text-white" href="{{route('editCourcePage',['id'=>$cource->id])}}">Edit</a>
                                                    </button>
                                                </td>

                                                <td>
                                                    <button class="btn btn-danger">
                                                     <a class="text-white" href="{{route('deleteCourcePost',['id'=>$cource->id])}}">Delete</a>
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
