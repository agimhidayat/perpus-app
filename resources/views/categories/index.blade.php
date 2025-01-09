<x-layout>
    <div class="row">
        <div class="col-md-6">
            <div class="x_panel">
                {{-- button add --}}
                <a href="/categories/create" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data
                    kategori</a>
                <div class="x_title">
                    <h2>Data Kategori</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        {{-- <a href="/categories/{{ $category->id }}" class="btn btn-info btn-sm"><i
                                                class="fa fa-eye"></i></a> --}}
                                        <a href="/categories/{{ $category->id }}/edit" class="btn btn-warning btn-sm"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="/categories/{{ $category->id }}" method="post" class="d-inline">
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
