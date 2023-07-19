<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Slider</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
            @if (session('massage'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Successfully || </strong> {{ session('massage') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            @endif
            <div class="card">
            <div class="card-header">
            <a href="{{Route('slider.create')}}" class="btn btn-primary float-end">Create Slider</a>
            </div>
            <div class="card-body">
             <!-- Table with stripped rows -->
             <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Caption</th>
                    <th scope="col">Title</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sliders as $slider)
                  <tr>
                    <th scope="row">{{$sliders->firstItem() + $loop->index}}</th>
                    <td>{{$slider->caption}} </td>
                    <td>{{$slider->title}}</td>
                    <td>
                      @if ($slider->isActive == 1)
                      <form action="{{route('slider.active',['slider'=>$slider->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Active</button>
                        </form>
                      
                      @else
                      <form action="{{route('slider.deactive',['slider'=>$slider->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info">Deactive</button>
                        </form>
                      
                      @endif
                    </td>
                    <td class="d-flex">
                      <a href="{{route('slider.edit',['slider'=>$slider->id])}}" class="btn btn-warning mx-2">Edit</a>
                      <form action="{{route('slider.destroy',['slider'=>$slider->id])}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>  
                  @endforeach
                </tbody>
              </table>
              {{ $sliders->links() }}
              <!-- End Table with stripped rows -->
            </div>
            </div>    
          </div>
        </section>
        
      </main><!-- End #main -->
</x-backend.layouts.master>