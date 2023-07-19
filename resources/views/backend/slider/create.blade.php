<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Slider</a></li>
              <li class="breadcrumb-item active">Create</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section dashboard">
          <div class="row">
            <!-- General Form Elements -->
            <form action="{{Route('slider.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Hero Caption</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="caption">
                    @error('caption')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Sort Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="description">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="image">
                    @error('image')
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