<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Laravel CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('cruds.create')}}">Create</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('cruds.index')}}">Read</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('cruds.index')}}">Update</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('cruds.index')}}">Delete</a>
            </li>
             <li class="nav-item active">
              <a class="nav-link" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('search')}}">Search</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('upload')}}">Upload_File</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>