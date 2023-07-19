<!DOCTYPE html>
<html lang="en">

<x-backend.layouts.partials.head/>
<body>
    <x-backend.layouts.partials.header/>
    <x-backend.layouts.partials.sidebar/>
  

 {{$slot}}

  <!-- ======= Footer ======= -->
  <x-backend.layouts.partials.footer/>
</body>

</html>