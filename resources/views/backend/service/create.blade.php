<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Service</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
            <!-- General Form Elements -->
            <form action="{{Route('service.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Project Name</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select Example" name="project_name">
                      <option selected disabled>Open this select menu</option>
                      <option value="web_desgin">Web Desgin</option>
                      <option value="laravel_project">Laravel Project</option>
                    </select>
                    {{-- {{-- <input type="text" class="form-control" name="project_name"> --}}
                    @error('project_name') 
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Git Hub Link</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="git_link">
                    @error('git_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Project Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="project_image">
                    @error('project_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Slider Active</label>
                  <div class="col-sm-10">
                    <input type="checkbox" id="formFile" name="isActive">
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