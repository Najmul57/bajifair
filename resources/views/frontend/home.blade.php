@extends('frontend.layouts.master')

@section('frontend')
        <!-- quick master agent start -->
        <section>
            <div class="quick-master-agent">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 mx-auto">
                            <div class="agent-content p-2 rounded">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <b class="h5">Quick master agent number</b>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <h6>Master Agent</h6>
                                        <div class="agent_id">ID : {{$quickmaster->master_id ?? ''}}</div>
                                        <div class="agent_number">
                                            {{$quickmaster->whatsapp ?? ''}} <br>
                                            <div class="text-center">
                                                <span>WhatsApp</span>
                                            </div>
                                        </div>
                                        <div class="agent_btn">
                                            <button class="btn btn-sm"><a class="text-white"
                                                    href="https://wa.me/+{{$quickmaster->whatsapp ?? ''}}"
                                                    title="WhatsApp : +{{$quickmaster->whatsapp ?? ''}}"
                                                    target="_blank">Message</a></button>
                                            <button class="btn btn-sm btn-danger">Report</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quick master agent end -->

        <!-- agent system start -->
        <section>
            <div class="agent_system pt-4">
                <div class="container">
                    <div class="row g-2">
                        <div class="col-lg-8">
                            <div class="agent-content p-2 rounded">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <b class="h5">এজেন্ট কয় প্রকারঃ</b>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div class="single_agent text-center">
                                            <h6>অনলাইন সুপার এজেন্ট লিস্টঃ</h6>
                                            <p>সুপার এজেন্ট রা, ইউজার একাউন্ট এবং মাষ্টার এজেন্ট একাউন্ট খুলে দিতে
                                                পারেন। কোন সুপার এজেন্ট এর নামে অভিযোগ থাকলে সরাসরি এডমিন কে জানাতে হবে।
                                            </p>
                                            <a href="{{route('super.frontend')}}" class="btn btn-sm  btn-danger">Report</a>
                                        </div>
                                        <div class="single_agent text-center">
                                            <h6>অনলাইন মাষ্টার এজেন্ট লিস্টঃ</h6>
                                            <p>সুপার এজেন্ট রা, ইউজার একাউন্ট এবং মাষ্টার এজেন্ট একাউন্ট খুলে দিতে
                                                পারেন। কোন সুপার এজেন্ট এর নামে অভিযোগ থাকলে সরাসরি এডমিন কে জানাতে হবে।
                                            </p>
                                            <a href="{{route('master.frontend')}}" class="btn btn-sm btn-danger ">Report</a>
                                        </div>
                                        <div class="single_agent text-center">
                                            <h6>লোকাল সুপার এজেন্ট লিস্টঃ</h6>
                                            <p>সুপার এজেন্ট রা, ইউজার একাউন্ট এবং মাষ্টার এজেন্ট একাউন্ট খুলে দিতে
                                                পারেন। কোন সুপার এজেন্ট এর নামে অভিযোগ থাকলে সরাসরি এডমিন কে জানাতে হবে।
                                            </p>
                                            <a href="{{route('admin.frontend')}}" class="btn btn-sm btn-danger ">Report</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="agent-content p-2 rounded">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <b class="h5">এজেন্ট লিস্টঃ</b>
                                    </div>
                                    <div class="card-body single_agent">
                                        <p>একাউন্ট খুলতে নিম্বের অনলাইন এজেন্ট লিস্ট এ ক্লিক করুন। এজেন্ট লিষ্ট এর
                                            এজেন্ট দের সাথে ইউজার দের শুধু মাত্র হোয়াটসাপ এর মাধ্যমে যোগাযোগ করতে হবে।
                                            হোয়াটসাপ ছাড়া অন্য কোন মাধ্যমে যোগাযোগ করলে বা লেনদেন করলে তা গ্রহনযোগ্য
                                            হবে না। হোয়াটসাপ এ যোগাযোগ করতে হলে এজেন্ট লিস্টে হোয়াটসাপ আইকন উপরে ক্লিক
                                            করুন অথবা ফোন নাম্বার টি মোবাইলে সেভ করে তাকে হোয়াটসাপ এ মসেজ পাঠাতে
                                            পারবেন। হোয়াটসাপ এপ টি আপনার মোবাইলে আগে থেকেই থাকতে হবে। না থাকলে গুগুল
                                            প্লে থেকে ইন্সটল করে নিন। </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agent system end -->

        <!-- account opening start -->
        <section>
            <div class="accouont-opening pt-3 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="agent-content p-2 rounded card flex-fill d-flex flex-column">
                                <div class="card-header text-center">
                                    <b class="h5">কিভাবে একাউন্ট খুলবেনঃ</b>
                                </div>
                                <div class="card-body single_agent">
                                    <p>Bajifair- এ একাউন্ট করতে হলে আপনার এজেন্ট এর মাধ্যমে একাউন্ট খুলতে হবে। এজেন্ট এর
                                        মাধ্যমেই টাকা ডিপোজিট এবং উইথড্র করতে হবে। আপনি যে এজেন্ট এর কাছ থেকে একাউন্ট
                                        খুলবেন তার সাথেই সব সময় লেনদেন করতে হবে। ঠিক কোন এজেন্ট কে টাকা দিবেন এবং
                                        কিভাবে তার সাথে লেনদেন করবেন তার বুঝতে হলে আপনার নিম্বের তথ্য গুলো পড়া জরুরী।
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="agent-content p-2 rounded card flex-fill d-flex flex-column">
                                <div class="card-header text-center">
                                    <b class="h5">Bajifair এর নতুন সব আপডেট</b>
                                </div>
                                <div class="card-body single_agent">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account opening end -->

@endsection