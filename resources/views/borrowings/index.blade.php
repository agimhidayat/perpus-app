<x-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                {{-- input search --}}
                {{-- button add --}}
                <div class="x_title">
                    <h2>Selamat Datang</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <form action="/peminjaman" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search"
                                            value="{{ request('search') }}" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($books as $book)
                            <div class="col-md-4">
                                <div class="card text-start">
                                    <div class="card-body">
                                        {{-- unsplash --}}
                                        <img src="/../build/images/back_disabled.png" alt="">
                                        <h1 class="text-title">
                                            {{ $book->title }}
                                        </h1>
                                        <p class="text-start">
                                            Penulis: {{ $book->author }}
                                        </p>
                                        <p class="text-start">
                                            Penerbit: {{ $book->publisher }}
                                        </p>
                                        <p class="text-start">
                                            Tahun Terbit: {{ $book->year }}
                                        </p>
                                        <p class="text-start">
                                            <a href="/peminjaman/{{ $book->id }}" class="btn btn-primary">Pinjam</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
