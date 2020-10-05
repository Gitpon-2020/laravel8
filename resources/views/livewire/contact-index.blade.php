<table class="table-auto">
    <thead>
        <tr>
            <th class="col">#</th>
            <th class="col">Name</th>
            <th class="col">Phone</th>
            <th class="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 0; ?>
        @foreach ($data as $item)
            <?php $no++; ?>
            <tr>
                <td class="border px-4 py-2">{{ $no }}</td>
                <td class="border px-4 py-2">{{ $item->name }}</td>
                <td class="border px-4 py-2">{{ $item->phone }}</td>
                <td class="border px-4 py-2">
                    <button class="btn btn-sm btn-info text-white">Edit</button>
                    <button class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
