@if ($message = Session::get('success'))
<div id="alert" class=" bg-green-500 ring ring-1 ring-green-800 rounded-lg py-px px-2 text-sm text-white">	
        <i>{{ $message }}</i>
</div>
@endif

@if ($message = Session::get('error'))
<div id="alert" class="bg-orange-500 ring ring-1 ring-red-800 rounded-lg py-px px-2 text-sm text-white">	
        <i>{{ $message }}</i>
</div>
@endif

@if ($message = Session::get('warning'))
<div id="alert" class="bg-red-500 ring ring-1 ring-red-800 rounded-lg py-px px-2 text-sm text-white">	
        <i>{{ $message }}</i>
</div>
@endif

@if ($message = Session::get('info'))
<div id="alert" class="bg-fuschia-500 ring ring-1 ring-red-800 rounded-lg py-px px-2 text-sm text-white">	
        <i>{{ $message }}</i>
</div>
@endif
