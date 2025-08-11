@php
$class = '';
switch($type){
    case 'success':
        $class="btn btn-success";
        break;
    case 'warning':
        $class="btn btn-warning";
        break;
    default:  
        $class="btn btn-secondary";
        break;
}

@endphp

<button class= "{{$class}}" onclick="alert('¡Botón presionado!')">
    {{ $texto }}
</button>