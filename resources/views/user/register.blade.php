<x-layout>
<div class="container_box py-5">
    <form action="/register" method="post" class="bg-warning shadow rounded p-4 my-5 box_form bg-opacity-50 border border-danger-subtle">

        @csrf
        <div class="py-2">
            <label for="username">Scegli uno username</label>
            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
            @error('name')
                <b style="color: red">{{$message}}</b>
            @enderror
        </>

        <div class="py-2">
            <label for="email">Fornisci la tua email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
            @error('email')
                <b style="color: red">{{$message}}</b>
            @enderror
        </div>
        

        <div class="py-2">
            <label for="password">Scegli una password</label>
            <input type="password" id="password" name="password" class="form-control" value="{{old('password')}}">
            @error('password')
                <b style="color: red">{{$message}}</b>
            @enderror
        </div>

        <div class="py-2">
            <label for="password_confirmation">Conferma password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
        
            <div class="d-flex justify-content-center my-4">
                <button type="submit" class="my-3 btn btncustom">Registrati!</button>
            </div>
    
        </div>
    </form>
</div>
</x-layout>