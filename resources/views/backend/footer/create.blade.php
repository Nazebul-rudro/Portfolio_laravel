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
            <form action="{{route('footer.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="name" class="form-control" name="name">
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="address" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="address">
                    @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="linkedin" class="col-sm-2 col-form-label">LinkedIn</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="linkedin">
                    @error('linkedin')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="twitter">
                    @error('twitter')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="facebook">
                    @error('facebook')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="instagram">
                    @error('instagram')
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