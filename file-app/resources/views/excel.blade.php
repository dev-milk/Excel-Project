{{-- インポート --}}
<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<input type="file" name="file">
		<br><br>
		<button class="btn btn-success">Excelインポート</button>
        @if (session('importMessage'))
        <div class="alert alert-success text-center">
            {{ session('importMessage') }}
        </div>
        @endif
	</div>
</form>
{{-- エクスポート --}}
<a href="{{ route('export') }}">
    <button class="btn btn-success">Excelエクスポート</button>
</a>
@if (session('exportMessage'))
    <div class="alert alert-success text-center">
        {{ session('exportMessage') }}
    </div>
@endif
