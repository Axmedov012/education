<x-layouts.main>


<x-navbar>
      
</x-navbar>


<div class="untree_co-hero overlay" style="background-image: url('images/img-school-3-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">School Staff</h1>
              <div class="mb-5 text-white desc mx-auto" data-aos="fade-up" data-aos-delay="200">
                <p>Another free template by <a href="https://untree.co/" target="_blank" class="link-highlight">Untree.co</a>. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live.</p>
              </div>

              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore courses</a></p>

            </div>


          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->

  <div class="untree_co-section bg-light">
    <div class="container">

      <div class="row">
        
        @foreach ($teachers as $teacher)

        <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="0">
          <div class="staff text-center">
          @if ($teacher->image != null)
          
          <div class="mb-4"><img src="{{asset('asset/teacherImg/'.$teacher->image)}}" alt="Image" class="img-fluid"></div>
        
          @else
            <div class="mb-4"><h3>No Image</h3></div>

          @endif
         
            <div class="staff-body">
              <h3 class="staff-name">{{$teacher->name}}</h3>
              <span class="d-block position mb-4">{{$teacher->job}}</span>
              <p class="mb-4">{{$teacher->description}}</p>
                         
            </div>
          </div>
        </div>

        @endforeach
      
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  </x-layouts.main>
