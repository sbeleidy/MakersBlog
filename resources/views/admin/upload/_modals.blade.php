{{-- Create Folder Modal --}}
<div id="createFolder" class="reveal-modal" data-reveal aria-labelledby="Create Folder" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Create a New Folder</h2>
  <form method="POST" action="/admin/upload/folder">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  	<input type="hidden" name="folder" value="{{ $folder }}">
	<label for="new_folder_name">Folder Name</label>
	<input type="text" id="new_folder_name" name="new_folder">
	<button type="submit" class="button success expand large">Create Folder</button>
  </form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

{{-- Delete File Modal --}}
<div id="deleteFile" class="reveal-modal" data-reveal aria-labelledby="Delete File" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Delete File</h2>
  <p>Are you sure you want to delete the <kbd><span id="delete-file-name1">file</span></kbd> file?</p>
  <form method="POST" action="/admin/upload/file">
  	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  	<input type="hidden" name="_method" value="DELETE">
  	<input type="hidden" name="folder" value="{{ $folder }}">
  	<input type="hidden" name="del_file" id="delete-file-name2">
  	<button type="submit" class="button alert">Delete File</button>
  </form>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

{{-- Delete Folder Modal --}}
<div id="deleteFolder" class="reveal-modal" data-reveal aria-labelledby="Delete Folder" aria-hidden="true" role="dialog">
	<h2 id="modalTitle">Delete Folder</h2>
	<p>Are you sure you want to delete the <kbd><span id="delete-folder-name1">folder</span></kbd> folder?</p>
	<form method="POST" action="/admin/upload/folder">
	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	 <input type="hidden" name="_method" value="DELETE">
	 <input type="hidden" name="folder" value="{{ $folder }}">
	 <input type="hidden" name="del_folder" id="delete-folder-name2">
	 <button type="submit" class="button alert">Delete File</button>
	</form>
	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

{{-- Upload File Modal --}}
<div id="uploadFile" class="reveal-modal" data-reveal aria-labelledby="Upload File" aria-hidden="true" role="dialog">
	<h2 id="modalTitle">Upload File</h2>
	<form method="POST" action="/admin/upload/file" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="folder" value="{{ $folder }}">
		<label for="file">File</label>
		<input type="file" id="file" name="file">
		<label for="file_name">Optional Filename</label>
		<input type="text" id="file_name" name="file_name">
		<button type="submit" class="button expand">Upload File</button>
	</form>
</div>

{{-- View Image Modal --}}
<div id="previewImage" class="reveal-modal" data-reveal aria-labelledby="View Image" aria-hidden="true" role="dialog">
	<h2 id="modalTitle">Preview Image</h2>
	<img id="preview-image" src="x">
</div>