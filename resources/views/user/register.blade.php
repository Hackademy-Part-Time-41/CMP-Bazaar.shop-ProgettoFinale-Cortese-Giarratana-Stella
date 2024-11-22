<x-layout>
<div class="container_box">
    <form action="/register" method="post">

        @csrf
        <div class="box_form ">

            <label for="username">Scegli uno username</label>
            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        
            <label for="email">Fornisci la tua email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        
            <label for="password">Scegli una password</label>
            <input type="password" id="password" name="password" class="form-control" value="{{old('password')}}">
            @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
    
            <label for="password_confirmation">Conferma password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
        
            <button type="submit" class="my-3 btn btn-success">Registrati!</button>
    
        </div>
    </form>
</div>
</x-layout>