<form  wire:submit="send" class="php-email-form">
    @if (session()->has('success'))
    <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
<div class="row gy-4">

    <div class="col-md-6">
        <input wire:model="name" type="text" name="name" class="form-control" placeholder="Name" >
        @error('name') <span class="text-danger text-sm">{{ $message}}</span>  @enderror
    </div>

    <div class="col-md-6 ">
        <input  wire:model="phone" type="text" class="form-control" name="phone" placeholder="phone" >
            @error('phone') <span class="text-danger text-sm">{{ $message}}</span>  @enderror
    </div>

    <div class="col-md-12">
        <input  wire:model="subject" type="text" class="form-control" name="subject" placeholder="subject" >
        @error('subject') <span class="text-danger text-sm">{{ $message}}</span>  @enderror
    </div>

    <div class="col-md-12">
        <textarea  wire:model="message" class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
        @error('message') <span class="text-danger text-sm">{{ $message}}</span>  @enderror
    </div>

    <div class="col-md-12 text-center">
       
        <button type="submit">Send Message</button>
    </div>

</div>
</form>