<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <!-- Styles -->
    </head>
    <body>
        @if ($errors->any())
        <div>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif

        <div class = "browse">
            <h1 class = "header_entry">入力フォーム</h1>
            <form action = "" method="POST" enctype="multipart/form-data">
            @csrf
                <table border="0">
                    <tbody>
                        <tr>
                            <td align="left">題名</td>
                        </tr>
                        <tr>
                            <td>
                                <input 
                                    type="text" 
                                    name="title"
                                    class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                    value="{{ old('title') }}" 
                                    size="70" 
                                    maxlength="40"
                                >
                                @if ($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                            </td>
                            <td align="left" font="10px">40/40</td>
                        </tr>
                        <tr class = "blank">
                            <td></td>
                        </tr>
                        <tr>
                            <td align="left">本文</td>
                        </tr>
                        <tr>
                            <td>
                                <textarea 
                                    name="body" 
                                    cols="68" 
                                    rows="30" 
                                    size="50" 
                                    text-align="left"
                                    class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
                                    value="{{ old('body') }}" 
                                >
                                </textarea>
                                @if ($errors->has('body'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('body') }}
                                    </div>
                                @endif
                                <!-- <input type="text" name="name" size="50" maxlength="40"> -->
                            </td>
                            <td align="left" valign="bottom">4000/4000</td>
                        </tr>
                        <tr class = "blank">
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <input type="submit" value="作成" class="btn btn-primary">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </body>
</html>
