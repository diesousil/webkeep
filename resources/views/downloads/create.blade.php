<div class="form">
{{ Form::open(array('url' => 'foo/bar')) }}

	<div class="field">
		{{ Form::label('url', 'Url') }}
		{{ Form::text('url'); }}
	</div>
	
{{ Form::close() }}
</div>