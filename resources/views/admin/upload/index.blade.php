@extends('admin.layout')

@section('content')
<section class="uploads">
	<div class="row">
		<div class="small-12 columns">
			<h2>Uploads</h2>
			<ul class="breadcrumbs">
			@foreach ($breadcrumbs as $path => $disp)
				<li><a href="/admin/upload?folder={{ $path }}">{{ $disp }}</a></li>
			@endforeach
				<li class="active">{{ $folderName}}</li>
			</ul>
			<div class="pull-right">
				<a href="#" type="button" data-reveal-id="createFolder" class="button success">New Folder</a>
				<a href="#" type="button" data-reveal-id="uploadFile" class="button">Upload</a>
			</div>

			@include('admin.partials.errors')
			@include('admin.partials.success')

			<table width="100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Date</th>
						<th>Size</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
				{{-- The Subfolders --}}
				@foreach ($subfolders as $path => $name)
					<tr>
						<td>
							<a href="/admin/upload?folder={{ $path }}"><i class="fa fa-folder"></i> {{ $name }}</a>
						</td>
						<td>Folder</td>
						<td>-</td>
						<td>-</td>
						<td><button type="button" class="button alert" onclick="delete_folder('{{ $name }}')">Delete</button></td>
					</tr>
				@endforeach

				{{-- The Files --}}
				@foreach ($files as $file)
					<tr>
						<td>
							<a href="{{ $file['webPath'] }}">
								@if (is_image($file['mimeType']))
									<i class="fa fa-file-image-o"></i>
								@else
									<i class="fa fa-file-o"></i>
								@endif
								{{ $file['name'] }}
							</a>
						</td>
						<td>{{ $file['mimeType'] or 'Unknown' }}</td>
						<td>{{ $file['modified']->format('j-M-y g:ia') }}</td>
						<td>{{ human_filesizes($file['size']) }}</td>
						<td>
							<button type="button" class="button alert" onclick="delete_file('{{ $file['name'] }}')">Delete</button>
							@if (is_image($file['mimeType']))
								<button type="button" class="button success" onclick="preview_image('{{ $file['webPath'] }}')">Preview</button>
							@endif
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>

@include('admin.upload._modals')

@stop

@section('scripts')
<script>

	// Confirm file delete
	function delete_file(name) {
		$("#delete-file-name1").html(name);
		$("#delete-file-name2").val(name);
		//$("#modal-file-delete").modal("show");
	}

	// Confirm folder delete
	function delete_folder(name) {
		$("#delete-folder-name1").html(name);
		$("#delete-folder-name2").val(name);
		//$("#modal-folder-delete").modal("show");
	}

	function preview_image(path) {
		$("#preview-image").attr("src", path);
		//$("modal-image-view").modal("show");
	}
</script>
@stop