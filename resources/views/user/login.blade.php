<x-layout title="Login">
    
    <form action="/login" method="POST">

        @csrf

        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email"  value="{{old('email')}}">
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <label for="password">Password</label>
        <input id="password" type="password" class="form-control" name="password" value="{{old('password')}}" >
        @error('password')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</x-layout>