@extends('public.layouts.layout-master');
@section('content')
    <h3>Blog post create</h3>
    <div class="container">
        <form id="jsFormElem" method="POST" action="{{ route('blog-post-create-action') }}" enctype="multipart/form-data">
            @csrf
            <div class="input-wrapper form-group">
                <label for="post-title">Тайтл поста</label>
                <input class="form-control" required type="text" name="post-title" id="post-title" value="{{ fake()->realText(20) }}">
            </div>
            <div class="input-wrapper form-group">
                <label for="post-short-content-raw">Короткий текст поста</label>
                <textarea class="form-control" id="post-short-content-raw" name="post-short-content-raw">{{ fake()->realText(50) }}</textarea>
            </div>
            <div class="input-wrapper form-group">
                <label for="post-content-raw">Полный текст поста</label>
                <textarea class="form-control" required id="post-content-raw" name="post-content-raw">{{ fake()->realText(155) }}</textarea>
            </div>
            <div class="input-wrapper form-group">
                <label for="post-preview-img">Изображение поста</label>
                <input class="form-control-file" required type="file" id="post-preview-img" name="post-preview-img">
            </div>
            <div class="input-wrapper form-group">
                <button class="form-control" type="submit">Опубликовать</button>
            </div>
        </form>
    </div>
    <style>
        /* TODO - Перенести в css */
        .input-wrapper + .input-wrapper{
            margin-top:20px;
        }
    </style>
    <script>
        // Todo - move to .js
        let form = document.getElementById('jsFormElem');
        if (form){
            form.onsubmit = async (e) => {
                e.preventDefault();
                let response = await fetch(form.getAttribute('action'), {
                    method: 'POST',
                    body: new FormData(form)
                });

                let result = await response.json();
            }
        }
    </script>
@endsection
