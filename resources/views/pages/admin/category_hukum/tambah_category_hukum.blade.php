<form action="/category-hukum-add" method="POST">
    @csrf
    
    <label for="title">Nama Hukum:
        <input type="text" name="title" id="title" value="{{ old('title') ?:session('title') }}">
    </label><br>
    <label for="short_title">singkatan Hukum:
        <input type="text" name="short_title" id="short_title" value="{{ old('short_title') ?:session('short_title') }}"></label><br>
   
   
    <button >Tambah</button>
</form>

@error('title')
    <div >{{ $message}}</div>
@enderror
@error('short_title')
    <div >{{ $message}}</div>
@enderror