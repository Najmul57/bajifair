@extends('frontend.layouts.master')

@section('frontend')
    <style>
        .list table tr td:first-child {
            width: auto;
        }
    </style>
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
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="table-success">
                            <tr class="text-center">
                                <th scope="col">ID</th>
                                <th scope="col">Position</th>
                                <th scope="col">WhatsApp</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Complain</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($results['admins']->isNotEmpty() || $results['super_agents']->isNotEmpty() || $results['master_agents']->isNotEmpty())
                                <!-- Admin Results -->
                                @foreach ($results['admins'] as $admin)
                                    <tr class="text-center">
                                        <td>{{ $admin->id }}</td>
                                        <td>Admin</td>
                                        <td>
                                            <a href="https://wa.me/+{{ $admin->whatsapp }}" title="WhatsApp : +{{ $admin->whatsapp }}" target="_blank">
                                                <i class="fa-brands fa-whatsapp fs-1"></i>
                                            </a>
                                        </td>
                                        <td>{{ $admin->name }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#">অভিযোগ</button>
                                        </td>
                                    </tr>
                                @endforeach
                        
                                <!-- Super Agent Results -->
                                @foreach ($results['super_agents'] as $superAgent)
                                    <tr class="text-center">
                                        <td>{{ $superAgent->id }}</td>
                                        <td>Super Agent</td>
                                        <td>
                                            <a href="https://wa.me/+{{ $superAgent->whatsapp }}" title="WhatsApp : +{{ $superAgent->whatsapp }}" target="_blank">
                                                <i class="fa-brands fa-whatsapp fs-1"></i>
                                            </a>
                                        </td>
                                        <td>{{ $superAgent->super_agent_name }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#">অভিযোগ</button>
                                        </td>
                                    </tr>
                                @endforeach
                        
                                <!-- Master Agent Results -->
                                @foreach ($results['master_agents'] as $masterAgent)
                                    <tr class="text-center">
                                        <td>{{ $masterAgent->id }}</td>
                                        <td>Master Agent</td>
                                        <td>
                                            <a href="https://wa.me/+{{ $masterAgent->whatsapp }}" title="WhatsApp : +{{ $masterAgent->whatsapp }}" target="_blank">
                                                <i class="fa-brands fa-whatsapp fs-1"></i>
                                            </a>
                                        </td>
                                        <td>{{ $masterAgent->master_agent_name }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#">অভিযোগ</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No results found</td>
                                </tr>
                            @endif
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
        <!-- list end -->
    </main>
@endsection
