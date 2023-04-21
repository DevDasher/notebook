@extends('layouts.main')

@section('title', 'Notebook - Home')

@section('content')
    <div class="text-center mb-5">
        <h2 class="fw-bolder">خوش آمدید!</h2>
        <p class="lead mb-0">یادداشت های خود را به راحتی اضافه کنید</p>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-6">
            <form id="contactForm" method="post" action="{{ route('notes.store') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" name="title" value="{{ old('title') }}" placeholder="عنوان یادداشت خود را وارد کنید..." />
                    <label for="title">عنوان</label>
                    @error('title')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" name="body" value="{{ old('body') }}" placeholder="یادداشت خود را وارد کنید..." style="height: 10rem"></textarea>
                    <label for="body">یادداشت</label>
                    @error('body')
                        <div class="form-error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">موفقیت آمیز بود</div>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">خطایی رخ داد!</div></div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit">
                            افزودن یادداشت
                    </button>
                </div>
            </form>
            @if (isset($note))
                <?php echo "OK"; ?>
            @endif
        </div>
    </div>
@endsection
