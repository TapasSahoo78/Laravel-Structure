<table id="zero_config" class="table table-striped table-bordered g-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Stand Name</th>
            <th>Address</th>
            <th>Stand Manager</th>
            <th>QR Code</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($stands as $key => $stand)
            <tr>
                <td>#{{ $key + 1 }}</td>
                <td>{{ $stand->stand_name }}</td>
                <td>{{ $stand->address }}</td>
                <td>
                    @foreach ($stand->standManagerList as $stand_manager_list)
                        <p>
                            {{ $stand_manager_list?->getStandManager?->manager_name }}
                        </p>
                    @endforeach
                </td>
                <td>
                    <div class="demo">
                        <div class="switch">
                            <input id="switch-{{ $stand->id }}" type="checkbox" class="switch-input"
                                data-url="{{ route('admin.stand.status') }}" data-id="{{ $stand->id }}"
                                {{ $stand->status == 1 ? 'checked' : '' }} name="status" />
                            <label for="switch-{{ $stand->id }}" class="switch-label">Switch</label>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="#" class="btn btn-md btn-primary btn-qr" data-bs-toggle="modal"
                        data-bs-target="#generateQRModal{{ $stand->id }}">Generate QR </a>
                </td>
                <td>
                    <div class="action-sec">
                        <div class="dropdown">
                            <a href="{{ route('admin.edit.stand', $stand->id) }}"><i class="fas fa-pen-square"></i>
                            </a>
                            <a href="{{ route('admin.delete.stand', $stand->id) }}"><i class="fa fa-trash"
                                    style="color: red"></i></a>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@foreach ($stands as $key => $stand)
    <div class="modal fade" id="generateQRModal{{ $stand->id }}" tabindex="-1" role="dialog"
        aria-labelledby="generateQRModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $stand->stand_name }} </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body generate-qr">
                    <div class="qrcode_box" id="generate-qr">
                        <div class="qr_code" style="margin-left: 120px;">
                            {!! DNS2D::getBarcodeHTML(Crypt::encrypt($stand->id), 'QRCODE', 4, 4, 'black', true) !!}
                        </div>
                    </div>
                    <div class="qr_download" style="margin-left: 125px;margin-top:15px;">
                        <button type="button" class="btn btn-success btn-qr" id="download">Download QR</button>
                        <button type="button" onclick="window.print()" class="btn btn-success btn-qrprint">Print
                            QR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.js">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js"></script>
    <script src="{{ asset('assets/custom/qrcode.js') }}"></script>
@endpush
