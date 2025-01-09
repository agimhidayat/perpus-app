<x-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                {{-- button add --}}
                <a href="/books/create" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data
                    Barang</a>
                <div class="x_title">
                    <h2>Data Barang</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->publisher }}</td>
                                    <td>{{ $book->year }}</td>
                                    <td>
                                        {{-- <a href="/books/{{ $book->id }}" class="btn btn-info btn-sm"><i
                                                class="fa fa-eye"></i></a> --}}
                                        <a href="/books/{{ $book->id }}/edit" class="btn btn-warning btn-sm"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="/books/{{ $book->id }}" method="post" class="d-inline">
                                            @csrf @method('delete')
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>
