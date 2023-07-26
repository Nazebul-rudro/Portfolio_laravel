<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Feedback</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
            <!-- General Form Elements -->
            <form action="{{Route('feedback.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="project_name" class="col-sm-2 col-form-label">Project Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="project_name" id="project_name">
                    @error('project_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="comment" class="col-sm-2 col-form-label">Comment</label>
                  <div class="col-sm-10">
                    <textarea name="comment" class="form-control" id="comment" cols="30" rows="10" placeholder="writing something......"></textarea>
                    @error('comment')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="image" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="image" name="image">
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              
                <div class="row mb-3">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-warning float-end">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->
            
          </div>
        </section>
    
      </main><!-- End #main -->
</x-backend.layouts.master>