@props(['active' => false, 'type' => 'a'])

<?php
$class = 'block px-3 py-2 rounded-md text-base font-medium';
if ($active) {
    $class .= ' bg-gray-900 text-white';
} else {
    $class .= ' text-gray-300 hover:bg-gray-700 hover:text-white';
}
?>

<?php if ($type === 'a'): ?>
<a {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</a>
<?php else: ?>
<button {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</button>
<?php endif; ?>

