<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
     
			@php
				$items = [];
				
				$aux = [];
				$aux['label'] = 'People';
				$aux['ico'] = strtolower($aux['label']);
				$items[] = $aux;

				$aux = [];
				$aux['label'] = 'Patient';
				$aux['ico'] = 'pregnant_woman';
				$items[] = $aux;

				$aux = [];
				$aux['label'] = 'Doctor';
				$aux['ico'] = 'next_week';
				$items[] = $aux;

				$aux = [];
				$aux['label'] = 'Receptionist';
				$aux['ico'] = 'note_add';
				$items[] = $aux;
				
				// echo '<pre>';
				// var_dump($items);
				// echo '<pre>';
				// return;
			@endphp
      @foreach($items as $item)
				@php
					$label = $item['label'];
					$id = strtolower($label);
					$onclick = $id.'()';
					$ico = $item['ico'];
				@endphp
				
				<script>
					function {{$id}}()
					{
						//o onclick é executado antes de alterar o check do box
						//o onclick substitui a função padrão que executa ao clicar
						if ( $('#{{$id}}')[0].checked )
						{
							$('#register')[0].href = '#';
							$('#list')[0].href = '#';
							$('#{{$id}}')[0].checked = false;
						}
						else if ( !$('#{{$id}}')[0].checked )
						{
							$('#register')[0].href = '{{ route($id.'.create') }}';
							$('#list')[0].href = '{{ route($id.'.index') }}';
							
							$('#people')[0].checked = false;
							$('#patient')[0].checked = false;
							$('#doctor')[0].checked = false;
							$('#receptionist')[0].checked = false;
							
							$('#{{$id}}')[0].checked = true;
						}
					}
				</script>
				<!-- checked -->
				<li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
				<a class="nav-link" href="#" onclick="{{$onclick}}">
					<table>
					<tr>
						<td>
						<div class="form-check" style="margin-bottom:1.65rem">
							<label class="form-check-label">
							<input id="{{$id}}" class="form-check-input" type="checkbox" value="" onclick="{{$onclick}}">
							<span class="form-check-sign">
								<span class="check"></span>
							</span>
							</label>
						</div>
						</td>
						<td>
						<i class="material-icons">{{$ico}}</i>
						<p>{{ __($label) }}</p>
						</td>
					</tr>
					</table>
				</a>
				</li>
			@endforeach
      
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a id="register" class="nav-link" href="#">
          <i class="material-icons">note_add</i>
            <p>{{ __('Register') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a id="list" class="nav-link" href="#">
          <i class="material-icons">list</i>
            <p>{{ __('List') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>