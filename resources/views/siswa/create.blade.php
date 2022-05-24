<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <x-app-layout>
        <x-slot name="header">
    <title>Create a Data</title>
    <div class="container-fluid">
        <nav class="navbar navbar-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand">Create New Data </a>
            </div>
            
            <a href="/siswa" class="btn btn-danger">Back</a>
          </nav>
          <br>
          <br>

          @csrf
          <form action="{{ route('siswa.store') }}" method="post">
            {{ csrf_field() }}
            
            nama<input type="text" name="nama" required="required"> <br>
            jurusan<input type="text" name="jurusan" required="required"> <br>
            nis<input type="text" name="nis" required="required"> <br>
            <input type="submit" value="Save Data">
          </form>
           
          
      </div>
        </x-slot>
    </x-app-layout>
    