<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edit Siswa</h1>
 
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('siswa.update', $siswa->id) }}" >
            @csrf
            @method('Put') 
           
            
            <div class="form-group">
 
                <label for="stock_name">Siswa Name:</label>
                <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" />
            </div>
 
            <div class="form-group">
                <label for="ticket">Siswa Class:</label>
                <input type="text" class="form-control" name="jurusan" value="{{ $siswa->jurusan }}" />
            </div>
 
            <div class="form-group">
                <label for="value">NIS:</label>
                <input type="text" class="form-control" name="nis" value="{{ $siswa->nis }}" />
              </div>
            
            <br>
            <input type="submit" value="Save Data">





        </form>
    </div>
</div>
</x-app-layout>
