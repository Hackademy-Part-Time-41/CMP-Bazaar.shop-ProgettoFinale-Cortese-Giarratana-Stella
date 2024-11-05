<x-layout title="Registrati">

    <form action="/register" method="post">

        @csrf
    
            <label for="username">Scegli uno username</label>
            <input type="text" id="name" name="name" class="form-control">
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        
            <label for="email">Fornisci la tua email</label>
            <input type="email" id="email" name="email" class="form-control">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        
            <label for="password">Scegli una password</label>
            <input type="password" id="password" name="password" class="form-control">
            @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
    
            <label for="password_confirmation">Conferma password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
        
            <button type="submit" class="btn btn-primary">Registrati!</button>
    
        
    </form>

</x-layout>