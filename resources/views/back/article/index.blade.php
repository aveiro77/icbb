@extends('back.layout.template')
@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@section('title', 'Articles - Admin')

@section('content')
    <!-- content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Articles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="{{ url('articles/create') }}" type="button" class="btn btn-sm btn-outline-secondary">Add New</a>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      @if ($errors->any())    
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="swal" data-swal="{{ session('success') }}"></div>

      @if (session('deleted'))    
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('deleted') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      

      <div class="table-responsive">
        <table class="table table-striped table-sm display" id="myTable" style="width:100%">
            <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Category</th>
              <th>Tags</th>
              <th>Status</th>
              <th>Published On</th>
              <th class="text-center">Function</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>
                    @foreach($article->tags as $tag)
                        <span class="btn btn-outline-primary btn-sm rounded-4 py-1">{{ $tag->name }}</span>
                    @endforeach
                    </td>
                    <td>{{ $article->status }}</td>
                    <td>{{ $article->published }}</td>
                    <td>
                        <div class="text-center">
                            <a href="{{ url('articles/'.$article->id) }}" class="btn btn-primary btn-sm rounded-0" >View</a>
                            <a href="{{ url('articles/'.$article->id.'/edit') }}" class="btn btn-success btn-sm rounded-0">Edit</a>
                            <button class="btn btn-danger btn-sm rounded-0" onclick="deleteArticle(this)" data-id="{{ $article->id }}">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>

    <!-- content -->
    
    
@endsection

@push('script')

  <!-- Script untuk sweetalert -->
  <script>
    const swal = $('.swal').data('swal');

    if (swal){
      Swal.fire({
        'title': 'Success',
        'text': swal,
        'icon': 'success' ,
        'showConfirmButton': false,
        'timer': 2000
      })
    }


    function deleteArticle(e){
        let id = e.getAttribute('data-id');
        Swal.fire({
          title: 'Delete',
          text: 'Are you sure you want to delete',
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Yes',
          cancelButtonText: 'No'
        }).then((result) => {
          if (result.value) {
              $.ajax({
                headers: {
                  'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },
                type: 'DELETE',
                url: '/articles/' + id,
                dataType: "json",
                success: function(response){
                  Swal.fire({
                    title: 'Deleted',
                    text: response.message,
                    icon:'success'
                  }).then((result) => {
                    window.location.href = '/articles/';
                  })
                },
                error: function(xhr, ajaxOptions, thrownError) {
                  alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
              });
          }  
        })
    }
  </script>


  <!-- Script untuk datatables -->
  <script>
    $(document).ready(function() { // Inisialisasi DataTables setelah DOM dimuat
      $('#myTable').DataTable();
    });
  </script>
@endpush