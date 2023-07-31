<x-backend.layouts.master>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Dashboard</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Message</a></li>
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
           
            </div>
            <div class="card-body">
             <!-- Table with stripped rows -->
             <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Date</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach ($messages as $message)
                  <tr>
                    <th scope="row">{{$messages->firstItem() + $loop->index}}</th>
                    <td>{{$message->name}} </td>
                    <td>{{$message->email}}</td>
                    <td><p style="font-size: 12px">{{$message->message}}</p></td>
                    <td><p style="font-size: 12px">{{$message->created_at}}</p></td>
                  </tr>  
                  @endforeach

                  @foreach ($contactmessages as $contactmessage)
                  <tr>
                    <th scope="row">{{$contactmessages->firstItem() + $loop->index}}</th>
                    <td>{{$contactmessage->name. '  '}}<span style="color: red">->another</span> </td>
                    <td>{{$contactmessage->email}}</td>
                    <td><p style="font-size: 12px">{{$contactmessage->message}}</p></td>
                    <td><p style="font-size: 12px">{{$contactmessage->created_at}}</p></td>
                  </tr>
                  @endforeach


                </tbody>
              </table>
              {{ $messages->links() }}
              {{ $contactmessages->links() }}
              <!-- End Table with stripped rows -->
            </div>
            </div>    
          </div>
        </section>
        
      </main><!-- End #main -->
</x-backend.layouts.master>