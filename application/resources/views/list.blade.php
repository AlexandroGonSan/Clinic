@include('menu')
@php
	$file = 'list';
@endphp
@include('fontawesome')


<style>
	@include($file.'.css')
</style>

<script>
	@include($file.'.js')
</script>

@include($file.'.html')