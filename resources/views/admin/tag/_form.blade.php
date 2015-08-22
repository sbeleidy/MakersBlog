<label for="title">Title</label>
<input type="text" class="radius" name="title" id="title" value="{{ $title }}" required>

<label for="subtitle">Subtitle</label>
<input type="text" class="radius" name="subtitle" id="subtitle" value="{{ $subtitle }}">

<label for="meta_description">Meta Description</label>
<input type="text" class="radius" name="meta_description" id="meta_description" value="{{ $meta_description }}">

<label for="page_image">Page Image</label>
<input type="text" class="radius" name="page_image" id="page_image" value="{{ $page_image }}">

<label for="layout">Layout</label>
<input type="text" class="radius" name="layout" id="layout" value="{{ $layout }}">

<label for="reverse_direction">Direction</label>

<input type="radio" name="reverse_direction" id="reverse_direction"
@if (! $reverse_direction)
	checked="checked"
@endif
	value="0"><label>Normal</label>

<input type="radio" name="reverse_direction" id="reverse_direction"
@if ($reverse_direction)
	checked="checked"
@endif
	value="1"><label>Reversed</label>