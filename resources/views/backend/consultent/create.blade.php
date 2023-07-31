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
            <form action="{{Route('consultent.store')}}" method="post" enctype="multipart/form-data">
              @csrf
                
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Discription</label>
                  <div class="col-sm-10">
                    <textarea name="description" id="" cols="30" rows="10"  class="form-control"></textarea>
                    {{-- <input type="text" class="form-control" name="description"> --}}
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">How can we help?</label>
                  <div class="col-sm-10">
                    <textarea name="sortdescription" id="" cols="30" rows="10"  class="form-control"></textarea>
                    {{-- <input type="text" class="form-control" name="description"> --}}
                    @error('sortdescription')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label"> Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
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