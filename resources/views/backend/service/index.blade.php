<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Service</a></li>
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
            <a href="{{Route('service.create')}}" class="btn btn-primary float-end">Create Service</a>
            </div>
            <div class="card-body">
             <!-- Table with stripped rows -->
             <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">image</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($services as $service)
                  <tr>
                    <th scope="row">{{$services->firstItem() + $loop->index}}</th>
                    <td>{{$service->project_name}} </td>
                    <td>{{$service->project_image}}</td>
                    <td>
                      @if ($service->isActive == 1)
                      <form action="{{route('service.active',['service'=>$service->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Active</button>
                        </form>
                      
                      @else
                      <form action="{{route('service.deactive',['service'=>$service->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info">Deactive</button>
                        </form>
                      
                      @endif
                    </td>
                    <td class="d-flex">
                      <a href="{{route('service.edit',['service'=>$service->id])}}" class="btn btn-warning mx-2">Edit</a>
                      <form action="{{route('service.destroy',['service'=>$service->id])}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>  
                  @endforeach
                </tbody>
              </table>
              {{ $services->links() }} 
              <!-- End Table with stripped rows -
            </div>
            </div>    
          </div>
        </section>
        
      </main><!-- End #main -->
</x-backend.layouts.master>