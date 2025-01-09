<x-layout>
    <div class="container">
        <h1 class="text-center">Pinjam Buku</h1>
        <form action="/pinjam" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">Nama Peminjam</label>
                <select class="form-control" id="user_id" name="user_id" disabled>
                    <option {{ $user->id == old('user_id') ? 'selected' : '' }} value="{{ $user->id }}">
                        {{ $user->name }}
                    </option>
                </select>
                @error('user_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="book_id">Nama Buku</label>
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <select class="form-control" id="book_id" name="book_id" disabled>
                    <option {{ $book->id == old('book_id') ? 'selected' : '' }} value="{{ $book->id }}">
                        {{ $book->title }}
                    </option>
                </select>
                @error('book_id')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="borrow_date">Tanggal Peminjaman</label>
                <input type="date" class="form-control" value="{{ old('borrow_date') }}" id="borrow_date"
                    name="borrow_date" placeholder="Masukan Tahun Terbit...">
                @error('borrow_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="return_date">Tanggal Pengembalian</label>
                <input type="date" class="form-control" value="{{ old('return_date') }}" id="return_date"
                    name="return_date" placeholder="Masukan Tahun Terbit...">
                @error('return_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
