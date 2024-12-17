@props(['active'=>false])
<a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} text-sm font-medium  px-3 py-2 rounded-md" 
aria-current="{{$active ? 'page' : false}}" >{{$slot}}</a>