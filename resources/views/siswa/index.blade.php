<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('List Siswa') }}
    </h2>
   <br><a href="{{ url('siswa/create') }}" class="btn btn-success">Add data</a>

</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
            <div class="row">
           <div class="col">
            <div class="container-fluid">
                

                
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>NIS</th>
                        <th></th>
                    </tr>
                    @foreach ( $datas as $key=>$value )
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->jurusan }}</td>
                        <td>{{ $value->nis }}</td>
                        <td>
                           
                          <form action="{{ url('siswa/'.$value->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <form onsubmit="return confirm(Delete)";
                         action="{{ route('siswa.destroy', $value->id) }}" method="POST">
                        
                       
                        <button class="bi bi-trash btn-danger btn-lg" ></button> 
                          </form>
                        
                        <a href="{{ route('siswa.edit',$value->id)}}" class="bi bi-pencil btn-primary btn-lg"></a>
                        </td><br>
                           
                        
                    </tr>
                    @endforeach
                        
                    
                </table>
            
</x-app-layout>

