<x-layouts.main>    
  <x-navbar>
      
  </x-navbar>

  <div class="untree_co-hero overlay" style="background-image: url('images/img-school-6-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">News</h1>
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
      <div class="row align-items-stretch">
        <div class="col-lg-6 mb-4"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">

          @foreach ($news as $new )
            <figure>
                @if ($new->image != "")
                  <img src="{{asset('asset/newsImg/'.$new->image)}}" alt="Image">
               
               @else
                  <div class="mb-4"><h3>No Image</h3></div>
              @endif

            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Education for Tomorrow's Leaders</a></h2>
              <div class="meta "><span class="icon-calendar mr-2"></span><span>{{ $new->creted_at }}</span>  <span class="icon-person mr-2"></span>Untree.co</div>
              <p> {{ $new->description }}</p>
            </div>
         @endforeach
          
          </div>
        </div> 
      </div>

      {{ $news->links('pagination::bootstrap-5') }}

      
    </div>
  </div> <!-- /.untree_co-section -->

</x-layouts.main>

