<form wire:submit="send" class="php-email-form">
    <h3>Get a quote</h3>
        @if (session()->has('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
    <div class="row gy-3">

        <div class="col-12">
            <input wire:model="name" type="text" name="name" class="form-control" placeholder="Name" >
            @error('name') <span class="text-danger text-sm">{{ $message}}</span>  @enderror
        </div>

        <div class="col-12 ">
            <input  wire:model="email" type="email" class="form-control" name="email" placeholder="Email" >
            @error('email') <span class="text-danger text-sm">{{ $message}}</span>  @enderror
        </div>

        <div class="col-12">
            <input  wire:model="phone" type="text" class="form-control" name="phone" placeholder="Phone" >
            @error('phone') <span class="text-danger text-sm">{{ $message}}</span>  @enderror
        </div>

        <div class="col-12">
            <textarea  wire:model="message" class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
            @error('message') <span class="text-danger text-sm">{{ $message}}</span>  @enderror

        </div>

        <div class="col-12 text-center">
            <button type="submit">Get a quote</button>
        </div>

    </div>
</form>