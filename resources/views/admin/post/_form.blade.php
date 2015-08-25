<label for="title">Title</label>
<input type="text" class="radius" name="title" id="title" value="{{ $title }}">

<label for="subtitle">Subtitle</label>
<input type="text" class="radius" name="subtitle" id="subtitle" value="{{ $subtitle }}">

<label for="page_image">Page Image</label>
<input type="text" name="page_image" id="page_image" onchange="handle_image_change()" value="{{ $page_image }}">

<script>
	function handle_image_change() {
		$("page-image-preview").attr("src", function () {
			var value = $("#page_image").val();
			if ( ! value ) {
				value = {!! json_encode(config('blog.page_image')) !!};
				if (value == null) {
					value = '';
				}
			}

			if (value.substr(0, 4) != 'http' && value.substr(0, 1) != '/') {
				value = {!! json_encode(config('blog.uploads.webpath')) !!} + '/' + value;
			}
			return value;
		});
	}
</script>

<img src="{{ page_image($page_image) }}" id="page-image-preview">

<label for="content">Content</label>
<textarea name="content" id="content" rows="10">{{ $content }}</textarea>

<label for="publish_date">Pub Date</label>
<input type="text" name="publish_date" id="publish_date" value="{{ $publish_date }}">

<label for="publish_time">Pub Time</label>
<input type="text" name="publish_time" id="publish_time" value="{{ $publish_time }}">

<input {{ checked($is_draft) }} type="checkbox" name="is_draft"><label for="is_draft">Draft?</label>

<label for="tags">Tags</label>
<select name="tags[]" id="tags" multiple>
@foreach ($allTags as $tag)
	<option @if (in_array($tag, $tags)) selected @endif value="{{ $tag }}">{{ $tag }}</option>
@endforeach
</select>

<label for="layout">Layout</label>
<input type="text" name="layout" id="layout" value="{{ $layout }}">

<label for="meta_description">Meta</label>
<textarea name="meta_description" id="meta_description" rows="4">{{ $meta_description }}</textarea>