<x-layout>
    <div class="container_box py-5">
    <form action="/login" method="POST" class="bg-warning shadow rounded p-4 my-5 box_form bg-opacity-50 border border-danger-subtle">

        @csrf

        <div class="py-2">
        <label for="email">{{__('ui.email')}}</label>
        <input id="email" type="email" class="form-control" name="email"  value="{{old('email')}}">
        @error('email')
            <b style="color: red">{{$message}}</b>
        @enderror
        </div>

        <div class="py-2">
        <label for="password">{{__('ui.password')}}</label>
        <input id="password" type="password" class="form-control" name="password" value="{{old('password')}}" >
        @error('password')
            <b style="color: red">{{$message}}</b>
        @enderror
        </div>

        <div class="d-flex justify-content-center my-4">
            <button type="submit" class="my-3 btn btncustom">Login</button>
        </div>
    </form>
    </div>
</x-layout>