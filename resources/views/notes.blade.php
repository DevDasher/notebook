@extends('layouts.main')

@section('title', 'Notebook - About')

@section('content')
    <div class="text-center mb-5">
        <h2 class="fw-bolder">یادداشت ها</h2>
        <p class="lead mb-0">در این قسمت یادداشت های ذخیره شما توسط شما قابل مشاهده است</p>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($notes as $key => $note)
            <div class="col">
                <div class="card">
                    <h5 class="card-header">یادداشت {{ $key+1 }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">عنوان یادداشت</h5>
                        <p class="card-text">Lorem Ipsum متنی بی‌معنی است، اما به صنعت چاپ و طراحی گرافیک کمک می‌کند تا در ارائه طرح‌ها و صفحات نمونه استفاده شود. این متن با شروع عبارت "لورم ایپسوم دلور سیت آمت" شروع و در ادامه به صورتی بی‌معنی ادامه پیدا می‌کند. هدف از استفاده از این متن، جذب توجه خواننده به محتوای متن نبوده و صرفا برای پر کردن فضای متنی در طرح‌های چاپی و گرافیکی مورد استفاده قرار می‌گیرد.</p>
                    </div>
                    <div class="card-footer text-muted">
                        اضافه شده در تاریخ: {{ $note->created_at }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
