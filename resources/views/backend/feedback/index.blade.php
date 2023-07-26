<x-backend.layouts.master>
  <main id="main" class="main">

      <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">About</a></li>
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
            <a href="{{Route('feedback.create')}}" class="btn btn-primary float-end">Create Feedback</a>
          </div>
          <div class="card-body">
           <!-- Table with stripped rows -->
           <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">Project Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($reviews as $review)
                <tr>
                  <th scope="row">{{$reviews->firstItem() + $loop->index}}</th>
                  <td>{{$review->header}} </td>
                  <td>{{$review->project_name}}</td>
                  <td><img src="{{ asset('storage/reviews/' . $review->image) }}" alt="alt" width="50" height="30">  </td>
                  <td class="d-flex">
                    <a href="{{route('feedback.edit',['review'=>$review->id])}}" class="btn btn-warning mx-2">Edit</a>
                    <form action="{{route('feedback.destroy',['review'=>$review->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                  
                </tr>  
                @endforeach
              </tbody>
            </table>
            {{ $reviews->links() }}
            <!-- End Table with stripped rows -->
          </div>
          </div>    
        </div>
      </section>
      
    </main><!-- End #main -->
</x-backend.layouts.master>