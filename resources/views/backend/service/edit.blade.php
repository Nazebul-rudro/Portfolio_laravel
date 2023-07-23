<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Slider</a></li>
              <li class="breadcrumb-item active">Update</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
            <!-- General Form Elements -->
            <form action="{{Route('service.update',['service'=>$service->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Project Name</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select Example" name="project_name">
                      {{-- <option disabled selected>Open this select menu</option> --}}
                      <option value="web_design" {{ $service->project_name === 'web_design' ? 'selected' : '' }}>Web Design</option>
                      <option value="laravel_project" {{ $service->project_name === 'laravel_project' ? 'selected' : '' }}>Laravel Project</option>
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
                    <input type="text" class="form-control" name="git_link" value="{{old('git_link', $service->git_link)}}">
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
                  <label for="inputNumber" class="col-sm-2 col-form-label">Sirvice Active</label>
                  <div class="col-sm-10">
                    <input type="checkbox" id="formFile" name="isActive" {{$service->isActive == '1' ? 'checked' : ''}}>
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