
<a href="/category-hukum">Kembali</a>

<form action="/category-hukum-update/{{ $categoryHukum->slug }}" method="POST">
    @csrf
    
    <label for="title">Nama Hukum:
        <input type="text" name="title" id="title" value="{{ $categoryHukum->title ?: ""}}">
    </label><br>
    <label for="short_title">singkatan Hukum:
        <input type="text" name="short_title" id="short_title" value="{{ $categoryHukum->short_title ?: "" }}"></label><br>
    <button >Update</button>
</form>

@error('title')
    <div >{{ $message}}</div>
@enderror
@error('short_title')
    <div >{{ $message}}</div>
@enderror