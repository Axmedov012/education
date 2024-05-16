<x-layouts.admin-dash>

    <div class=" py-12 mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                        <span class="text-3xl text-blue-500 fond-bold">Received Application</span>
                        <div class='mt-5'>
                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                            @endif

                            @foreach($applications as $application)

                                <div class=" mt-4 rounded-xl border p-5 shadow-md w-9/12 bg-white">
                                    <div class="flex w-full items-center justify-between border-b pb-3 ">
                                        <div class="flex items-center space-x-3">
                                            <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                                            <div class="text-lg font-bold text-slate-700">
                                                {{ $application->user->name }}
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-8">
                                            <button class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">
                                                ID {{ $application->id }}
                                            </button>

                                            <div class="text-xs text-neutral-500">
                                                {{ $application->created_at }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between ">
                                        <div>
                                            <div class="mt-4 mb-3">
                                                <div class="mb-3 text-xl font-bold">{{ $application->phone_number }}</div>
                                                <div class="text-sm text-neutral-600">{{ $application->description }}</div>
                                            </div>
                                        </div>



                                            {{-- javob berilganmagan bo'lsa  --}}
                                            @if( $application->answer()->exists())
                                                <hr>
                                                <h4 >Javob:</h4>
                                               <p class="font-weight-bold  text-danger ">{{$application->answer->body}}</p>

                                            @else
                                            <div class="d-flex justify-content-end">
                                                <a href="{{route('answer.create',['application'=>$application->id])}}" class="btn btn-primary">Javob berish</a>
                                            @endif
                                        </div>
                                     </div>
                                </div>
                            @endforeach

</x-layouts.admin-dash>
