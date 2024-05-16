<x-layouts.admin-dash>
    <a href="{{route('home.page')}}" class="btn btn-primary"> Home</a>
    <div class="main-content-inner">
        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body ">
                    <h3 class="mb-2">News List</h3>
                    <div class="data-tables datatable-dark">

                        <table  class="text-center table">
                            <thead class="text-capitalize font-medium">
                            <tr>
                                <th>ID</th>
                                <th>Titile</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>

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
                                          <h3>No image</h3>
                                        @endif
                                    </td>
                                    <td>{{$new->created_at}}</td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <h4 class="mt-4 mb-2">Cource List</h4>
     <table  class="text-center table">
                            <thead class="text-capitalize font-medium">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>price</th>
                                <th>Image</th>
                                <th>Created At </th>
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
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <h2 class="mt-4">Teacher List</h2>

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


</x-layouts.admin-dash>
