<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Footer</a></li>
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
            <a href="{{Route('footer.create')}}" class="btn btn-primary float-end">Create Footer</a>
            </div>
            <div class="card-body">
             <!-- Table with stripped rows -->
             <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($footers as $footer)
                  <tr>
                    <th scope="row">{{$footers->firstItem() + $loop->index}}</th>
                    <td>{{$footer->name}} </td>
                    <td>{{$footer->email}}</td>
                    <td>{{$footer->address}}</td>
                    <td>
                      @if ($footer->isActive == 1)
                      <form action="{{route('footer.active',['footer'=>$footer->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-success">Active</button>
                        </form>
                      
                      @else
                      <form action="{{route('footer.deactive', ['footer'=>$footer->id])}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info">Deactive</button>
                        </form>
                      
                      @endif
                    </td>
                    <td class="d-flex">
                      <a href="{{route('footer.edit',['footer'=>$footer->id])}}" class="btn btn-warning mx-2">Edit</a>
                      <form action="{{route('footer.destroy',['footer'=>$footer->id])}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>  
                  @endforeach
                </tbody>
              </table>
              {{ $footers->links() }} 
              <!-- End Table with stripped rows -->
            </div>
            </div>    
          </div>
        </section>
        
      </main>
      <!-- End #main -->
</x-backend.layouts.master>