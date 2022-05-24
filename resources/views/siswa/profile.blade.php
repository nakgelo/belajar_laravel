<x-app-layout>
    <x-slot name="header">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="row">
    <div class="col">
        <h4>NAME</h4>
      <input type="text" class="form-control" value="{{ $user->name }}"  readonly placeholder="First name" aria-label="First name">
    </div>
    <div class="col">
        <h4>EMAIL</h4>
      <input type="text" class="form-control" readonly value="{{ $user->email }}" placeholder="Last name" aria-label="Last name">
    </div>
  </div>
    </x-slot>
</x-app-layout>