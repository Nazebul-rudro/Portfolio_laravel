s<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Consultent</a></li>
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
            <a href="{{Route('consultent.create')}}" class="btn btn-primary float-end">Create Consultent</a>
            </div>
            <div class="card-body">
             <!-- Table with stripped rows -->
             <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    
                    <th scope="col">image</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($consultents as $consult)
                  <tr>
                    <th scope="row">{{$consultents->firstItem() + $loop->index}}</th>
                    <td><img src="{{ asset('storage/consultent/'.$consult->image) }}" alt="" srcset="" height="30" width="50"> </td>
                    <td class="d-flex">
                      <a href="{{route('consultent.edit',['consult'=>$consult->id])}}" class="btn btn-warning mx-2"> Edit </a>
                      
                      <form action="{{route('consultent.destroy',['consult'=>$consult->id])}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>  
                  @endforeach
                </tbody>
              </table>
              {{ $consultents->links() }} 
              
            </div>
            </div>    
          </div>
        </section>
        
      </main><!-- End #main -->
</x-backend.layouts.master>