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
            <form action="{{route('abouts.update',['about'=>$about->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('patch')
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Header</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="header" value="{{old('header', $about->header)}}">
                    @error('header')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" value="{{old('description', $about->description)}}">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="email" id="formFile" name="email" value="{{old('email', $about->email)}}">
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