@extends('back.layout.template')
@push('css')
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.css" />
@endpush

@section('title', 'Create Articles - Admin')

@section('content')
    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit a article</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <button type="button" id="submitButton" class="btn btn-sm btn-outline-primary">Save</button>
          <a href="{{ url('articles') }}" type="button" class="btn btn-sm btn-outline-secondary">Cancel</a>
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

  @if (session('success'))    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if (session('deleted'))    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('deleted') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif


    <div class="row">
        <div class="col">

            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Click here to fill the title, category and images</button>

            <form action="{{ url('articles/'.$article->id) }}" method="post" enctype="multipart/form-data" id="myForm">
                @method('PUT')
                @csrf

                <input type="hidden" name="oldImg" value="{{ old('img', $article->img) }}">

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Article Info</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $article->title) }}">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category_id" name="category_id" class="form-select" aria-label="Default select example">
                                @foreach($categories as $category)
                                  @if ($category->id == $article->category_id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                  @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Image (Max: 2MB)</label>
                            <input type="file" name="img" id="img" class="form-control">
                            <div class="mt-2">
                              <img src="{{ asset('storage/back/'. $article->img)}}" width="300px">
                            </div>
                        </div>

                        <div class="mb-3">
                          <label for="img_caption" class="form-label">Image Text</label>
                          <input type="text" class="form-control" name="img_caption" id="img_caption" value="{{ old('img_caption', $article->img_caption) }}">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select" aria-label="Default select example">
                                <option value="0" {{ $article->status == 0 ? 'selected' : null }}>Draft</option>
                                <option value="1" {{ $article->status == 1 ? 'selected' : null }}>Published</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="my-3">
                  <label for="desc" class="form-label">Description</label>
                  <textarea class="form-control" id="desc" name="desc" rows="10">{{ old('desc', $article->desc) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <input type="text" class="form-control" name="tags" id="tags" value="{{ old('tags', $article->tags->pluck('name')->implode(', ')) }}">
                </div>

            </form>
        </div>
    </div>
</main>
    
@endsection

@push('script')
    <script>
        document.querySelector('#submitButton').addEventListener('click', function() {
            document.querySelector('#myForm').submit();
        });
    </script>
    <script type="importmap">
      {
          "imports": {
              "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/42.0.1/ckeditor5.js",
              "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/42.0.1/"
          }
      }
  </script>

  <script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph
    } from 'ckeditor5';

    ClassicEditor
        .create( document.querySelector( '#desc' ), {
            plugins: [ Essentials, Bold, Italic, Font, Paragraph ],
            toolbar: {
                items: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor' 
                ]
            }
        } )
        .then( /* ... */ )
        .catch( /* ... */ );
  </script>
@endpush