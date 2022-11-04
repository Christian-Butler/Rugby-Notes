@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>

@error('First Name')
    <div class="text-red-600 text-sm">{{$message}}</div>
@enderror


@error('Last Name')
    <div class="text-red-600 text-sm">{{$message}}</div>
@enderror

@error('Date of Birth')
    <div class="text-red-600 text-sm">{{$message}}</div>
@enderror

