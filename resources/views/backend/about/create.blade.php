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
            <form action="{{Route('abouts.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Header</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="header">
                    @error('header')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="description">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="email" id="formFile" name="email">
                    @error('email')
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