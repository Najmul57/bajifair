@extends('admin.layouts.master')

@section('admin_content')
    <style>
        .logo,
        .favicon {
            border: 1px solid #00A551;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            padding: 20px;
        }

        .logo img,
        .favicon img {
            margin: 10px 0;
            margin-bottom: 20px;
            background: #00A551;
            padding: 5px;
        }

        div#error-alert {
            text-align: center;
            width: 400px;
            margin-bottom: 0;
            position: relative;
            left: 0;
            right: 0;
            margin: auto;
        }

        div#error-alert ul li {
            list-style: none;
        }
    </style>

    @if ($errors->any())
        <div class="alert alert-danger" id="error-alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="page_header" style="display: flex; align-items: center;justify-content: space-between;">
        <h2>Website Settings</h2>

    </div>
    <div class="setting_content">
        <form action="{{ route('setting.update', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div style="display: flex; gap: 10px;">
                <!-- Logo Section -->
                <div class="logo" style="border-radius: 10px">
                    <h2><b>Logo</b></h2>
                    <!-- Display existing logo and preview new selection -->
                    <img id="logoPreview" src="{{ asset('upload/logo/' . $data->logo) }}" alt="Logo"
                        style="width: 200px; border-radius: 10px;">
                    <input type="file" class="form-control" name="logo" onchange="previewImage(event, 'logoPreview')">
                </div>

                <!-- Favicon Section -->
                <div class="favicon" style="border-radius: 10px">
                    <h2><b>Favicon</b></h2>
                    <!-- Display existing favicon and preview new selection -->
                    <img id="faviconPreview" src="{{ asset('upload/favicon/' . $data->favicon) }}" alt="Favicon"
                        style="width: 80px; border-radius: 10px;">
                    <input type="file" class="form-control" name="favicon"
                        onchange="previewImage(event, 'faviconPreview')">
                </div>
            </div>

            <div class="form-group mt-2">
                <label for="title">Site Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $data->title }}">
            </div>

            <div class="form-group">
                <label for="notice">Site Notice</label>
                <input type="text" id="notice" name="notice" class="form-control" value="{{ $data->notice }}">
            </div>

            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="text" id="facebook" name="facebook" class="form-control" value="{{ $data->facebook }}">
            </div>

            <button type="submit" class="btn btn-sm btn-success">Update</button>
        </form>

    </div>
    <script>
        function previewImage(event, previewId) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById(previewId).src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>

    <script>
        setTimeout(function() {
            var errorAlert = document.getElementById('error-alert');
            if (errorAlert) {
                errorAlert.style.display = 'none';
            }
        }, 4000);
    </script>

@endsection
