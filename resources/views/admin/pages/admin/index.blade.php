@extends('admin.layouts.master')

@section('admin_content')
    <style>
        button.close span {
            color: #00A551;
        }

        button.close {
            opacity: 1;
            font-size: 30px;
        }
    </style>

    <div class="page_header" style="display: flex; align-items: center;justify-content: space-between;">
        <h2>Admin List</h2>
        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-md btn-success">Add Admin</a>
    </div>

    <div class="quick-master table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead style="background: #00A551;color:#fff">
                <tr>
                    <th>SL</th>
                    <th>Quick Master ID No. </th>
                    <th>WhatsApp Number </th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $counter = 1;
                @endphp

                @foreach ($data as $item)
                    <tr>
                        <td>{{ $counter++ }}</td>
                        <td>{{ ucwords($item->name) }}</td>
                        <td>{{ $item->whatsapp }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#update{{ $item->id }}" class="btn btn-md btn-success"><i
                                    class="fa fa-pencil"></i></a>

                            <a href="{{ route('admin.destroy', $item->id) }}"
                                onclick="return confirm('Are you sure you want to delete this item?')"
                                class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    <!-- master Modal add -->
                    <div class="modal fade" id="update{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="myModalLabel">Update Admin </h3>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('admin.update', $item) }}" method="post">
                                        @csrf
                                        @method('PUT') <!-- Method spoofing for PUT -->
                                        <div class="form-group">
                                            <label for="name">Admin Name</label>
                                            <input type="text" id="name" name="name" class="form-control" required value="{{ $item->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="whatsapp">Whatsapp Number</label>
                                            <input type="number" name="whatsapp" id="whatsapp" class="form-control" required value="{{ $item->whatsapp }}">
                                        </div>
                                        <div style="text-align: end">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </tbody>
        </table>
    </div>


    <!-- master Modal add -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">Add New Admin</h3>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Admin Name</label>
                            <input type="text" id="name" name="name" class="form-control" required
                                placeholder="Admin Name">
                        </div>
                        <div class="form-group">
                            <label for="whatsapp">Whatsapp Number</label>
                            <input type="number" name="whatsapp" id="whatsapp" class="form-control" required
                                placeholder="Whatsapp Number">
                        </div>
                        <div style="text-align: end">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
