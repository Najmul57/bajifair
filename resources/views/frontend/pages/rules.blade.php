@extends('frontend.layouts.master')

@section('frontend')
    <!-- breadcrumb start -->
    <div class="breadcrumb">
        <div class="container">
            <h4 class="text-white text-center py-4 text-uppercase">Bajifair Rules</h4>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- agent start -->
    <section>
        <div class="container">
            <div class="agent-content p-2 rounded">
                <div class="card">
                    <div class="card-header text-center">
                        <b class="h5">এজেন্ট কয় প্রকারঃ</b>
                    </div>
                    <div class="row g-1">
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="single_agent text-center card p-2 m-2 flex-fill d-flex flex-column">
                                <h6>অনলাইন সুপার এজেন্ট লিস্টঃ</h6>
                                <p>আপনি আমাদের যেকোনো সাব-এডমিন বা এডমিনের সাথে যোগাযোগ করে সুপার এজেন্ট হতে পারবেন।
                                    সুপার এজেন্ট রেট ৫৫ টাকা, যা ক্রয় এবং বিক্রয় উভয় ক্ষেত্রেই প্রযোজ্য। আর আপনি ২
                                    লক্ষ টাকা এবং ৩০০০ পয়েন্ট ক্রয়ের মধ্য দিয়ে বাজিফেয়ারের একজন সুপার এজেন্ট হতে
                                    পারবেন। আপনার পয়েন্ট যদি বেশী হয়ে যায়, সেক্ষেত্রে আপনি ৫০০০ পয়েন্ট একাউন্টে রেখে
                                    বাকি পয়েন্ট আপনার আপলাইনের কাছে বিক্রি করতে পারবেন। </p>
                                <div class="mt-auto">
                                    <a href="{{ route('subadmin.frontend') }}" class="btn btn-sm  btn-danger">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex">
                            <div class="single_agent text-center card p-2 m-2 flex-fill d-flex flex-column">
                                <h6>অনলাইন মাষ্টার এজেন্ট লিস্টঃ</h6>
                                <p>আপনি চাইলে যেকোনো সুপার এজেন্টের সাথে যোগাযোগ করেই বাজিফেয়ারের একজন মাষ্টার
                                    এজেন্ট হতে পারেন। আমাদের বাজিফেয়ারের মাষ্টার এজেন্টের পয়েন্ট রেট ৭০ টাকা। আপনি
                                    আপনার সুপারের থেকে ক্রয় এবং বিক্রয় উভয় ক্ষেত্রেই রেট পাবেন ৭০, আর আপনি ১০০০
                                    পয়েন্ট এবং ১ লক্ষ টাকা জামানত প্রদানের মধ্য দিয়ে বাজিফেয়ারে মাষ্টার এজেন্ট হতে
                                    পারবেন। আপনার পয়েন্ট যদি বেশী হয়ে যায়, সেক্ষেত্রে ২০০০ পয়েন্ট একাউন্টে রেখে বাকি
                                    পয়েন্ট আপনি আপনার সুপারের কাছে বিক্রি করতে পারবেন। আর এঁকটি কথা মনে রাখবেন, যদি
                                    আপনি অন্য কাউকে বেট ধরিয়ে দিয়ে থাকেন সেক্ষেত্রে আপলাইনে সেই আইডির বিষয়ে অবগত
                                    করতে হবে,আর যদি এই বিষয়ে কোম্পানি নিজ থেকে জানতে পারে তাহলে প্রমানের ভিত্তিতে
                                    নিজে খেলার অপরাধে এজেন্টশীফ সহ জামানত বাজেয়াপ্ত করা হবে

                                </p>
                                <div class="mt-auto">
                                    <a href="{{ route('super.frontend') }}" class="btn btn-sm btn-danger">Contact</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 d-flex">
                            <div class="single_agent text-center card p-2 m-2 flex-fill d-flex flex-column">
                                <h6>লোকাল মাষ্টার অথবা সুপার নিয়োগঃ </h6>
                                <p>লোকাল মাষ্টার বা সুপারএজেন্ট রা, শুধু ইউজার একাউন্ট একাউন্ট খুলে দিতে পারেন।
                                    কিন্তু তাদের সাথে লেনদেন প্রতিটি ইউজার কে নিজ দায়িত্বে লেনদেন করতে হবে। তাদের
                                    নামে কোন অভিযোগ কারো কাছে করা যাবে না।

                                </p>
                                <div class="mt-auto">
                                    <a href="javascript::void(0)" class="btn btn-sm btn-danger">Your Responcibility</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- agent end -->

    <section>
        <div class="agent_system pt-4">
            <div class="container">
                <div class="row g-2">
                    <div class="col-lg-8">
                        <div class="agent-content p-2 rounded">
                            <div class="card">
                                <div class="card-header text-center">
                                    <b class="h5">BAJIFAIR.COM এফিলিয়েটর নিয়োগ পদ্ধতিঃ
                                    </b>
                                </div>
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div class="single_agent text-center">
                                        <h6>সুপার এফিলিয়েটর নিয়োগঃ
                                        </h6>
                                        <p>সুপার এফিলিটর হলে আপনি মাষ্টার এফিলিয়েটর নিয়োগ দিতে পারবেন, সেক্ষেত্রে প্রতি মাষ্টার এফিলেটর থেকে ৫% কমিশন উপভোগ করতে পারবেন আজীবন। সুপার এফিলিয়েটর হতে আপনাকে ১ লক্ষ টাকা (অফেরতযোগ্য)প্রদান করতে হবে।সুপার এফেলিয়েটর হতে নিচের বাটনে ক্লিক করুন।

                                        </p>
                                        <a href="{{ route('admin.frontend') }}" class="btn btn-sm  btn-danger">Contact</a>
                                    </div>
                                    <div class="single_agent text-center">
                                        <h6>মাষ্টার এফিলিয়েটর নিয়োগঃ
                                        </h6>
                                        <p>সুপার এজেন্ট রা, ইউজার একাউন্ট এবং মাষ্টার এজেন্ট একাউন্ট খুলে দিতে
                                            পারেন। কোন সুপার এজেন্ট এর নামে অভিযোগ থাকলে সরাসরি এডমিন কে জানাতে হবে।
                                        </p>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger ">Contact</a>
                                    </div>
                                    <div class="single_agent text-center">
                                        <h6>প্রোমো কোড বসাবেন কিভাবে সাইটে:
                                        </h6>
                                        <p>সুপার এজেন্ট রা, ইউজার একাউন্ট এবং মাষ্টার এজেন্ট একাউন্ট খুলে দিতে
                                            পারেন। কোন সুপার এজেন্ট এর নামে অভিযোগ থাকলে সরাসরি এডমিন কে জানাতে হবে।
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="agent-content p-2 rounded">
                            <div class="card">
                                <div class="card-header text-center">
                                    <b class="h5">BAJIFAIR.COM এর লেনদেনের নিয়মঃ
                                    </b>
                                </div>
                                <div class="card-body single_agent">
                                  <p>বিকাশ,নগদ,রকেটে ২৪ ঘন্টা ডিপোজিট করতে পারবেন আর উইথড্র সকাল ১০ঃ০০ টা থেকে রাত ১২ঃ০০ টা অবধি করা যাবে। উইথড্র রিকোয়েষ্ট পাঠানোর সময় থেকে ১ ঘন্টা অবধি সময় লাগতে পারে উইথড্র সম্পন্ন হতে।

                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3">
        <div class="container">
            <div class="agent-content p-2 rounded">
                <div class="card">
                    <div class="card-header text-center">
                        <b class="h5">BAJIFAIR.LIVE এর লেনদেনের নিয়মঃ
                        </b>
                    </div>
                    <p class="p-2">লেনদেন বিকাশ,নগদ, রকেট এবং ব্যাংকের মাধ্যমে প্রতিদিন সকাল ১০ঃ০০ টা থেকে রাত ১১ঃ০০ টা
                        অবধি করতে পারবেন লেনদেনের সময় ৩০ মিনিট থেকে ১ ঘন্টা অবধি হতে পারে কোন বিশেষ কারণ বষত।

                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="agent-content p-2 rounded">
                <div class="row g-1">
                    <div class="col-lg-6 col-md-6 d-flex">
                        <div class="single_agent text-center card p-2 m-2 flex-fill d-flex flex-column">
                            <h6 style="background: #00A551;    color: #fff;    padding: 12px;    border-radius: 5px;">
                                BAJIFAIR.LIVE এর জরিমানা প্রথাঃ
                            </h6>
                            <p>আপনি চাইলে যেকোনো সুপার এজেন্টের সাথে যোগাযোগ করেই বাজিফেয়ারের একজন মাষ্টার
                                এজেন্ট হতে পারেন। আমাদের বাজিফেয়ারের মাষ্টার এজেন্টের পয়েন্ট রেট ৭০ টাকা। আপনি
                                আপনার সুপারের থেকে ক্রয় এবং বিক্রয় উভয় ক্ষেত্রেই রেট পাবেন ৭০, আর আপনি ১০০০
                                পয়েন্ট এবং ১ লক্ষ টাকা জামানত প্রদানের মধ্য দিয়ে বাজিফেয়ারে মাষ্টার এজেন্ট হতে
                                পারবেন। আপনার পয়েন্ট যদি বেশী হয়ে যায়, সেক্ষেত্রে ২০০০ পয়েন্ট একাউন্টে রেখে বাকি
                                পয়েন্ট আপনি আপনার সুপারের কাছে বিক্রি করতে পারবেন। আর এঁকটি কথা মনে রাখবেন, যদি
                                আপনি অন্য কাউকে বেট ধরিয়ে দিয়ে থাকেন সেক্ষেত্রে আপলাইনে সেই আইডির বিষয়ে অবগত
                                করতে হবে,আর যদি এই বিষয়ে কোম্পানি নিজ থেকে জানতে পারে তাহলে প্রমানের ভিত্তিতে
                                নিজে খেলার অপরাধে এজেন্টশীফ সহ জামানত বাজেয়াপ্ত করা হবে

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 d-flex">
                        <div class="single_agent text-center card p-2 m-2 flex-fill d-flex flex-column">
                            <h6 style="background: #00A551;    color: #fff;    padding: 12px;    border-radius: 5px;">
                                BAJIFAIR.LIVE এর সব শর্তঃ
                            </h6>
                            <p>লোকাল মাষ্টার বা সুপারএজেন্ট রা, শুধু ইউজার একাউন্ট একাউন্ট খুলে দিতে পারেন।
                                কিন্তু তাদের সাথে লেনদেন প্রতিটি ইউজার কে নিজ দায়িত্বে লেনদেন করতে হবে। তাদের
                                নামে কোন অভিযোগ কারো কাছে করা যাবে না।

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection
