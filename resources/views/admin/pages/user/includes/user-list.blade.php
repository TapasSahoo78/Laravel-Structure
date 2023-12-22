 <table id="zero_config" class="table table-striped table-bordered g-0">
     <thead>
         <tr>
             <th>No</th>
             <th>Name</th>
             <th>Email</th>
             <th>Contact No</th>
             <th>Status</th>
             <th>App Version</th>
             <th>Actions</th>
         </tr>
     </thead>
     <tbody>
         {{-- @foreach ($users as $key => $row) --}}
         <tr>
             <td>#1</td>
             <td>test</td>
             <td>test@gmail.com</td>
             <td>1234567890</td>
             <td>
                 <div class="demo">
                     <div class="switch">
                         {{-- <input id="switch-{{ $row->id }}" type="checkbox" class="switch-input"
                             data-url="{{ route('admin.status.customer') }}" data-id="{{ $row->id }}"
                             {{ $row->status == 1 ? 'checked' : '' }} name="status" /> --}}
                         {{-- <label for="switch-{{ $row->id }}" class="switch-label">Switch</label> --}}
                     </div>
                 </div>
             </td>
             <td>0</td>
             <td>
                 <div class="action-sec">
                     <div class="dropdown">
                         <a href="#"><i class="me-2 fa fa-edit "></i></a>
                         <a href="#">
                             <i class="me-2 fa fa-trash "></i></a>
                     </div>
                 </div>
             </td>
         </tr>
         {{-- @endforeach --}}
     </tbody>
 </table>
