@extends('layouts.header')


@section('content')
    <div class="menu-body" style="text-align: center; font-size: 15px;">
        <p>－ご注文内容の確認－</p>
    </div>
    <form method="post" action="{{ route('form.send') }}">
        @csrf
    <table class="menu">
        @if(isset($input["quantity1"]))
        <tr>
            <td class="img_one">
                <img src="/images/chickencurry.png" height="100px" width="152px">
            </td>
            <td style="width: 150px">
                <p style="font-size: 20px;" class="cart_name">チキンカレー</p>
                <p class="fee" style="font-size: 18px">680円</p>
            </td>
            <td>
                <p style="height: 30px; width: 50px; margin-top: 30px; margin-left: 10px; font-size: 20px; font-weight: bold;">
                </p><br>

            </td>
        </tr><br>
        @else
        @endif
        @if(isset($input["quantity2"]))
        <tr>
            <td class="img_one">
                <img src="images/meatsauce.png" height="100px" width="152px">
            </td>
            <td style="width: 150px">
                <p style="font-size: 20px;" class="cart_name">ミートソース</p>
                <p class="fee" style="font-size: 18px">700円</p>
            </td>
            <td>
                <p style="height: 30px; width: 50px; margin-top: 30px; margin-left: 10px; font-size: 20px; font-weight: bold;">
                </p><br>
            </td>
        </tr><br>
        @else
        @endif
        @if(isset($input["quantity3"]))
        <tr>
            <td class="img_one">
                <img src="images/tomatosauce.png" height="100px" width="152px">
            </td>
            <td style="width: 150px">
                <p style="font-size: 20px;" class="cart_name">トマトソース</p>
                <p class="fee" style="font-size: 18px">750円</p>
            </td>

            <td>
                <p style="height: 30px; width: 50px; margin-top: 30px; margin-left: 10px; font-size: 20px; font-weight: bold;">
                </p><br>
            </td>
        </tr><br>
        @else
        @endif
        @if(isset($input["quantity4"]))
        <tr>
            <td class="img_one">
                <img src="images/peperoncino.png" height="100px" width="152px">
            </td>
            <td style="width: 150px">
                <p style="font-size: 20px;" class="cart_name">ペペロンチーノ</p>
                <p class="fee" style="font-size: 18px">800円</p>
            </td>
            <td>
                <p style="height: 30px; width: 50px; margin-top: 30px; margin-left: 10px; font-size: 20px; font-weight: bold;">
                </p><br>
            </td>
        </tr><br>
        @else
        @endif
    </table>
    <div class="nav-link">
        <a href="/form" type="submit" class="btn btn--green">戻る</a><br>
        <a href="https://qr.hanazono.tokyo/#s={{$qrcode_number}}" class="btn btn--orange">送信</a>
    </div>
</form>


@endsection
