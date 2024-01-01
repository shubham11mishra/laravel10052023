@props(['abc'])
<?php 
if($abc){
    $a = 456;

}else{
    $a = 123;
}
?>

<div {{ $attributes->merge(['a' => $a]) }}>

    {{ $slot }} {{ $a }}

</div>
