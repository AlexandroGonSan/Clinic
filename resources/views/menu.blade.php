@php
	$file = 'menu';
@endphp

<style>
	@include($file.'.css')
</style>

<script>
	@include($file.'.js')
</script>

@include($file.'.html')