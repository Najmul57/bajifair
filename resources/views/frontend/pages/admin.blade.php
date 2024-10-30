@extends('frontend.layouts.master')

@section('frontend')
    <main>

        <!-- breadcrumb start -->
        <div class="breadcrumb">
            <div class="container">
                <h4 class="text-white text-center py-4 text-uppercase">Bajifair ADMIN LIST</h4>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- list start -->
        <div class="list">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered ">
                        <thead class="table-success">
                            <tr class="text-center">
                                <th scope="col">Name</th>
                                <th scope="col">Whatsapp</th>
                                <th scope="col">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                <tr class="text-center">
                                    <td>{{ ucwords($admin->name) }}</td>
                                    <td>
                                        <a href="https://wa.me/+{{ $admin->whatsapp }}"
                                            title="WhatsApp : +{{ $admin->whatsapp }}" target="_blank"><i
                                                class="fa-brands fa-whatsapp  fs-1"></i></a>
                                    </td>
                                    <td>
                                        {{ ucwords($admin->name) }} <br>
                                        <span
                                            style="position: relative; left: 0; right: 0; margin: auto;">WhatsApp</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- list end -->

    </main>
@endsection
