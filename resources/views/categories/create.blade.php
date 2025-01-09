<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center">Add Category</h1>
                <form action="/categories" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Kategori</label>
                        <input type="text" class="form-control" value="{{ old('name') }}" id="name"
                            name="name" placeholder="Masukan Nama Kategori...">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
