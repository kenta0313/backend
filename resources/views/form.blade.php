@extends('layouts.header')

@section('content')
    <div class="menu-body" style="text-align: center; font-size: 28px;">
        <p>NSWフード・サービス<br>渋谷桜丘町店</p>
        <p>－ご利用可能なお支払い－</p>
        <img src="images/pay_method.png" height="50px">
    </div>
    <form method="post" action="{{ route('form.post') }}">
        @csrf

        <table class="menu">
            <tr>
                <td><input type="checkbox" name="quantity1" value="1" style="margin-top: 45px;"></td>
                <td class="img_one">
                    <img src="images/chickencurry.png" height="100px" width="152px">
                </td>
                <td style="width: 150px;">
                    <strong style="font-size: 20px">チキンカレー</strong>
                    <p style="font-size: 12px; opacity: 0.8;">カロリー158kcal<br>糖質（17.31グラム）<br>食物繊維（0.64グラム）<br>たんぱく質（5.52グラム）
                </td>
                <td>
                    <p class="fee" style="margin-top: 0px; margin-left: 0px; font-size: 20px">680円</p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="quantity2" value="2" style="margin-top: 45px;"></td>
                <td class="img_one">
                    <img src="images/meatsauce.png" height="100px" width="152px">
                </td>
                <td style="width: 150px;">
                    <strong style="font-size: 20px">ミートソース</strong>
                    <p style="font-size: 12px; opacity: 0.8;">カロリー156kcal<br>糖質（21.1グラム）<br>食物繊維（1.35グラム）<br>たんぱく質（5.55グラム）
                </td>
                <td>
                    <p class="fee" style="margin-top: 0px; margin-left: 0px; font-size: 20px">700円</p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="quantity3" value="3" style="margin-top: 45px;"></td>
                <td class="img_one">
                    <img src="images/tomatosauce.png" height="100px" width="152px">
                </td>
                <td style="width: 150px;">
                    <strong style="font-size: 20px">トマトソース</strong>
                    <p style="font-size: 12px; opacity: 0.8;">カロリー168kcal<br>糖質（21.02グラム）<br>食物繊維（1.4グラム）<br>たんぱく質（5.46グラム）
                </td>
                <td>
                    <p class="fee"style="margin-top: 0px; margin-left: 0px; font-size: 20px">750円</p>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="quantity4" value="4" style="margin-top: 45px;"></td>
                <td class="img_one">
                    <img src="images/peperoncino.png" height="100px" width="152px">
                </td>
                <td style="width: 150px;">
                    <strong style="font-size: 20px">ペペロンチーノ</strong>
                    <p style="font-size: 12px; opacity: 0.8;">カロリー158kcal<br>糖質（17.31グラム）<br>食物繊維（0.64グラム）<br>たんぱく質（5.52グラム）
                </td>
                <td>
                    <p class="fee"style="margin-top: 0px; margin-left: 0px; font-size: 20px">800円</p>
                </td>
            </tr>
        </table>
        <div class="nav-link">
            <input class="btn btn--orange" type="submit" value="カートに進む" />
        </div>
    </form>

@endsection
