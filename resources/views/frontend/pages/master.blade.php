@extends('frontend.layouts.master')

@section('frontend')
    <!-- breadcrumb start -->
    <div class="breadcrumb">
        <div class="container">
            <h4 class="text-white text-center py-4 text-uppercase">Bajifair MASTER AGENT LIST</h4>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- list start -->
    <div class="list subadmin">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered ">
                    <thead class="table-success">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Whatsapp</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Complain</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($masters as $master)
                            <tr class="text-center">
                                <td><span style="font-size: 15px;position: relative; left: 0; right: 0; margin: auto;">ID
                                        106</span></td>
                                <td>
                                    <a href="https://wa.me/+{{ $master->whatsapp }}"
                                        title="WhatsApp : +{{ $master->whatsapp }}" target="_blank"><i
                                            class="fa-brands fa-whatsapp  fs-1"></i></a>
                                </td>
                                <td>
                                    {{ $master->whatsapp }} <br>
                                    <span style="position: relative; left: 0; right: 0; margin: auto;">WhatsApp</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#complain">অভিযোগ</button>


                                    <!-- complain Modal -->
                                    <div class="modal fade" id="complain" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">অভিযোগ</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>Name</b></label>
                                                                    <input type="text" name="name" value="Faizan Vhai"
                                                                        readonly class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>Type</b></label>
                                                                    <input type="text" name="name" value="Super"
                                                                        readonly class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>Number</b></label>
                                                                    <input type="text" name="number"
                                                                        value="971554882819" readonly class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>ID Number</b></label>
                                                                    <input type="text" name="number" value="105"
                                                                        readonly class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="text-center mt-3">
                                                        <h4 class="mb-2">ADMIN</h4>
                                                        <a href="https://wa.me/+8801937563157" class="btn btn-sm btn-danger"
                                                            title="WhatsApp : +8801937563157">Report Admin</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach --}}

                        @foreach ($masters as $master)
                            <tr class="text-center">
                                <td><span style="font-size: 15px;position: relative; left: 0; right: 0; margin: auto;">ID
                                        106</span></td>
                                <td>
                                    <a href="https://wa.me/+{{ $master->whatsapp }}"
                                        title="WhatsApp : +{{ $master->whatsapp }}" target="_blank"><i
                                            class="fa-brands fa-whatsapp fs-1"></i></a>
                                </td>
                                <td>
                                    {{ $master->whatsapp }} <br>
                                    <span style="position: relative; left: 0; right: 0; margin: auto;">WhatsApp</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#complain_{{ $master->id }}">অভিযোগ</button>

                                    <!-- Complain Modal -->
                                    <div class="modal fade" id="complain_{{ $master->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">অভিযোগ</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>Name</b></label>
                                                                    <input type="text" name="name"
                                                                        value="{{ $master->superAgent->super_agent_name }}"
                                                                        readonly class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>Type</b></label>
                                                                    <input type="text" name="name" value="Super"
                                                                        readonly class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>Number</b></label>
                                                                    <input type="text" name="number"
                                                                        value="{{ $master->superAgent->whatsapp }}" readonly
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for=""><b>ID Number</b></label>
                                                                    <input type="text" name="number"
                                                                        value="{{ $master->superAgent->super_agent_id }}"
                                                                        readonly class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="text-center mt-3 d-flex gap-3"
                                                        style="justify-content: center">
                                                        <div>
                                                            <h6 class="mb-2">ADMIN</h6>
                                                            <a href="https://wa.me/+{{$admin->whatsapp}}"
                                                                class="btn btn-sm btn-danger"
                                                                title="WhatsApp : +{{$admin->whatsapp}}">Report Admin</a>
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-2">Super Agent ID:
                                                                <b>{{ $master->superAgent->super_agent_id }} </b></h6>
                                                            <a href="https://wa.me/+{{ $master->superAgent->whatsapp }}"
                                                                class="btn btn-sm btn-danger"
                                                                title="WhatsApp : +{{ $master->superAgent->whatsapp }}">Report
                                                                to Super Agent</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- list end -->
@endsection
