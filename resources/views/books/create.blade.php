<x-layout>
    <div class="container">
        <h1 class="text-center">Add book</h1>
        <form action="/books" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" value="{{ old('title') }}" id="title" name="title"
                    placeholder="Masukan Nama Judul...">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">Kategori</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="">pilih kategori</option>
                    @foreach ($categories as $category)
                        <option {{ $category->id == old('category_id') ? 'selected' : '' }} value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach

                </select>
                @error('category_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" class="form-control" value="{{ old('author') }}" id="author" name="author"
                    placeholder="Masukan Nama Penulis...">
                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="publisher">Penerbit</label>
                <input type="text" class="form-control" value="{{ old('publisher') }}" id="publisher"
                    name="publisher" placeholder="Masukan Nama Penerbit...">
                @error('publisher')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="year">Tanggal Terbit</label>
                <input type="date" class="form-control" value="{{ old('year') }}" id="year" name="year"
                    placeholder="Masukan Tahun Terbit...">
                @error('year')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
