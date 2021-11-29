@extends('layouts.homelayouts')

<style>
    .pref_img{
        text-align: center;
    }
</style>
@section('title', '地域選択画面')
@include('layouts.header')
@section('contents')
    <div class="pref_img">
        <img src="{{ asset('pref_img.png') }}" alt="日本地図">
    </div>
    <div class="pref_all">

        <ul class="hokkido_local">北海道
            <li><label for="pushlabel">北海道</label></li>
            <input id="pushlabel" class="hokkido" type="checkbox">
            <span class="boxshow">
                <ul class="hokkido_select">
                    <li class="area"><a href="hokkido_1">第1区</a></li>
                    <li class="area"><a href="hokkido_2">第2区</a></li>
                    <li class="area"><a href="hokkido_3">第3区</a></li>
                    <li class="area"><a href="hokkido_4">第4区</a></li>
                    <li class="area"><a href="hokkido_5">第5区</a></li>
                    <li class="area"><a href="hokkido_6">第6区</a></li>
                    <li class="area"><a href="hokkido_7">第7区</a></li>
                    <li class="area"><a href="hokkido_8">第8区</a></li>
                    <li class="area"><a href="hokkido_9">第9区</a></li>
                    <li class="area"><a href="hokkido_10">第10区</a></li>
                    <li class="area"><a href="hokkido_11">第11区</a></li>
                    <li class="area"><a href="hokkido_12">第12区</a></li>
                </ul>
            </span>
        </ul>

        <ul class="touhoku_local">東北
            <li><label for="pushlabel">青森県</label></li>
            <input id="pushlabel" class="aomori" type="checkbox">
            <span class="boxshow">
                <ul class="aomori_area">
                    <li class="area"><a href="aomori_1">第1区</a></li>
                    <li class="area"><a href="aomori_2">第2区</a></li>
                    <li class="area"><a href="aomori_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">岩手県</label></li> 
            <input id="pushlabel" class="iwate" type="checkbox">
            <span class="boxshow">
                <ul class="iwate_area">
                    <li class="area"><a href="iwate_1">第1区</a></li>
                    <li class="area"><a href="iwate_2">第2区</a></li>
                    <li class="area"><a href="iwate_3">第3区</a></li>
                </ul>
            </span>       
            <li><label for="pushlavel">宮城県</label></li>
            <input id="pushlabel" class="miyagi" type="checkbox">
            <span class="boxshow">
                <ul class="miyagi_area">
                    <li class="area"><a href="miyagi_1">第1区</a></li>
                    <li class="area"><a href="miyagi_2">第2区</a></li>
                    <li class="area"><a href="miyagi_3">第3区</a></li>
                    <li class="area"><a href="miyagi_4">第4区</a></li>
                    <li class="area"><a href="miyagi_5">第5区</a></li>
                    <li class="area"><a href="miyagi_6">第6区</a></li>
                </ul>
            </span>   
            <li><label for="pushlabel">秋田県</label></li>
            <input id="pushlabel" class="akita" type="checkbox">
            <span class="boxshow">
                <ul class="akita_area">
                    <li class="area"><a href="akita_1">第1区</a></li>
                    <li class="area"><a href="akita_2">第2区</a></li>
                    <li class="area"><a href="akita_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">山形県</label></li>
            <input id="pushlabel" class="yamagata" type="checkbox">
            <span class="boxshow">
                <ul class="yamagata_area">
                    <li class="area"><a href="yamagata_1">第1区</a></li>
                    <li class="area"><a href="yamagata_2">第2区</a></li>
                    <li class="area"><a href="yamagata_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">福島県</label></li>
            <input id="pushlabel" class="fukusima" type="checkbox">
            <span class="boxshow">
                <ul class="fukusima_area">
                    <li class="area"><a href="fukusima_1">第1区</a></li>
                    <li class="area"><a href="fukusima_2">第2区</a></li>
                    <li class="area"><a href="fukusima_3">第3区</a></li>
                    <li class="area"><a href="fukusima_4">第4区</a></li>
                    <li class="area"><a href="fukusima_5">第5区</a></li>
                </ul>
            </span>
        </ul>

        <ul class="kanto_local">関東
            <li><label for="pushlabel">茨城県</label></li>
            <input id="pushlabel" class="ibaraki" type="checkbox">
            <span class="boxshow">
                <ul class="ibaraki_area">
                    <li class="area"><a href="ibaraki_1">第1区</a></li>
                    <li class="area"><a href="ibaraki_2">第2区</a></li>
                    <li class="area"><a href="ibaraki_3">第3区</a></li>
                    <li class="area"><a href="ibaraki_4">第4区</a></li>
                    <li class="area"><a href="ibaraki_5">第5区</a></li>
                    <li class="area"><a href="ibaraki_6">第6区</a></li>
                    <li class="area"><a href="ibaraki_7">第7区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">栃木県</label></li>
            <input id="pushlabel" class="tochigi" type="checkbox">
            <span class="boxshow">
                <ul class="tochigi_area">
                    <li class="area"><a href="tochigi_1">第1区</a></li>
                    <li class="area"><a href="tochigi_2">第2区</a></li>
                    <li class="area"><a href="tochigi_3">第3区</a></li>
                    <li class="area"><a href="tochigi_4">第4区</a></li>
                    <li class="area"><a href="tochigi_5">第5区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">群馬県</label></li>
            <input id="pushlabel" class="gunma" type="checkbox">
            <span class="boxshow">
                <ul class="gunma_area">
                    <li class="area"><a href="gunma_1">第1区</a></li>
                    <li class="area"><a href="gunma_2">第2区</a></li>
                    <li class="area"><a href="gunma_3">第3区</a></li>
                    <li class="area"><a href="gunma_4">第4区</a></li>
                    <li class="area"><a href="gunma_5">第5区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">埼玉県</label></li>
            <input id="pushlabel" class="saitama" type="checkbox">
            <span class="boxshow">
                <ul class="saitama_area">
                    <li class="area"><a href="saitama_1">第1区</a></li>
                    <li class="area"><a href="saitama_2">第2区</a></li>
                    <li class="area"><a href="saitama_3">第3区</a></li>
                    <li class="area"><a href="saitama_4">第4区</a></li>
                    <li class="area"><a href="saitama_5">第5区</a></li>
                    <li class="area"><a href="saitama_6">第6区</a></li>
                    <li class="area"><a href="saitama_7">第7区</a></li>
                    <li class="area"><a href="saitama_8">第8区</a></li>
                    <li class="area"><a href="saitama_9">第9区</a></li>
                    <li class="area"><a href="saitama_10">第10区</a></li>
                    <li class="area"><a href="saitama_11">第11区</a></li>
                    <li class="area"><a href="saitama_12">第12区</a></li>
                    <li class="area"><a href="saitama_13">第13区</a></li>
                    <li class="area"><a href="saitama_14">第14区</a></li>
                    <li class="area"><a href="saitama_15">第15区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">千葉県</label></li>
            <input id="pushlabel" class="chiba" type="checkbox">
            <span class="boxshow">
                <ul class="chiba_area">
                    <li class="area"><a href="chiba_1">第1区</a></li>
                    <li class="area"><a href="chiba_2">第2区</a></li>
                    <li class="area"><a href="chiba_3">第3区</a></li>
                    <li class="area"><a href="chiba_4">第4区</a></li>
                    <li class="area"><a href="chiba_5">第5区</a></li>
                    <li class="area"><a href="chiba_6">第6区</a></li>
                    <li class="area"><a href="chiba_7">第7区</a></li>
                    <li class="area"><a href="chiba_8">第8区</a></li>
                    <li class="area"><a href="chiba_9">第9区</a></li>
                    <li class="area"><a href="chiba_10">第10区</a></li>
                    <li class="area"><a href="chiba_11">第11区</a></li>
                    <li class="area"><a href="chiba_12">第12区</a></li>
                    <li class="area"><a href="chiba_13">第13区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">東京都</label></li>
            <input id="pushlabel" class="tokyo" type="checkbox">
            <span class="boxshow">
                <ul class="tokyo_area">
                    <li class="area"><a href="tokyo_1">第1区</a></li>
                    <li class="area"><a href="tokyo_2">第2区</a></li>
                    <li class="area"><a href="tokyo_3">第3区</a></li>
                    <li class="area"><a href="tokyo_4">第4区</a></li>
                    <li class="area"><a href="tokyo_5">第5区</a></li>
                    <li class="area"><a href="tokyo_6">第6区</a></li>
                    <li class="area"><a href="tokyo_7">第7区</a></li>
                    <li class="area"><a href="tokyo_8">第8区</a></li>
                    <li class="area"><a href="tokyo_9">第9区</a></li>
                    <li class="area"><a href="tokyo_10">第10区</a></li>
                    <li class="area"><a href="tokyo_11">第11区</a></li>
                    <li class="area"><a href="tokyo_12">第12区</a></li>
                    <li class="area"><a href="tokyo_13">第13区</a></li>
                    <li class="area"><a href="tokyo_14">第14区</a></li>
                    <li class="area"><a href="tokyo_15">第15区</a></li>
                    <li class="area"><a href="tokyo_16">第16区</a></li>
                    <li class="area"><a href="tokyo_17">第17区</a></li>
                    <li class="area"><a href="tokyo_18">第18区</a></li>
                    <li class="area"><a href="tokyo_19">第19区</a></li>
                    <li class="area"><a href="tokyo_20">第20区</a></li>
                    <li class="area"><a href="tokyo_21">第21区</a></li>
                    <li class="area"><a href="tokyo_22">第22区</a></li>
                    <li class="area"><a href="tokyo_23">第23区</a></li>
                    <li class="area"><a href="tokyo_24">第24区</a></li>
                    <li class="area"><a href="tokyo_25">第25区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">神奈川県</label></li>
            <input id="pushlabel" class="kanagawa" type="checkbox">
            <span class="boxshow">
                <ul class="kanagawa_area">
                    <li class="area"><a href="kanagawa_1">第1区</a></li>
                    <li class="area"><a href="kanagawa_2">第2区</a></li>
                    <li class="area"><a href="kanagawa_3">第3区</a></li>
                    <li class="area"><a href="kanagawa_4">第4区</a></li>
                    <li class="area"><a href="kanagawa_5">第5区</a></li>
                    <li class="area"><a href="kanagawa_6">第6区</a></li>
                    <li class="area"><a href="kanagawa_7">第7区</a></li>
                    <li class="area"><a href="kanagawa_8">第8区</a></li>
                    <li class="area"><a href="kanagawa_9">第9区</a></li>
                    <li class="area"><a href="kanagawa_10">第10区</a></li>
                    <li class="area"><a href="kanagawa_11">第11区</a></li>
                    <li class="area"><a href="kanagawa_12">第12区</a></li>
                    <li class="area"><a href="kanagawa_13">第13区</a></li>
                    <li class="area"><a href="kanagawa_14">第14区</a></li>
                    <li class="area"><a href="kanagawa_15">第15区</a></li>
                    <li class="area"><a href="kanagawa_16">第16区</a></li>
                    <li class="area"><a href="kanagawa_17">第17区</a></li>
                    <li class="area"><a href="kanagawa_18">第18区</a></li>
                </ul>
            </span>

        <ul class="chubu_select">中部
            <li><label for="pushlabel">新潟県</label></li>
            <input id="pushlabel" class="nigata" type="checkbox">
            <span class="boxshow">
                <ul class="nigata_area">
                    <li class="area"><a href="nigata_1">第1区</a></li>
                    <li class="area"><a href="nigata_2">第2区</a></li>
                    <li class="area"><a href="nigata_3">第3区</a></li>
                    <li class="area"><a href="nigata_4">第4区</a></li>
                    <li class="area"><a href="nigata_5">第5区</a></li>
                    <li class="area"><a href="nigata_6">第6区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">富山県</label></li>
            <input id="pushlabel" class="toyama" type="checkbox">
            <span class="boxshow">
                <ul class="toyama_area">
                    <li class="area"><a href="toyama_1">第1区</a></li>
                    <li class="area"><a href="toyama_2">第2区</a></li>
                    <li class="area"><a href="toyama_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="btn">石川県</label></li>
            <input id="pushlabel" class="isikawa" type="checkbox">
            <span class="boxshow">
                <ul class="isikawa_area">
                    <li class="area"><a href="isikawa_1">第1区</a></li>
                    <li class="area"><a href="isikawa_2">第2区</a></li>
                    <li class="area"><a href="isikawa_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">福井県</label></li>
            <input id="pushlabel" class="fukui" type="checkbox">
            <span class="boxshow">
                <ul class="fukui_area">
                    <li class="area"><a href="fukui_1">第1区</a></li>
                    <li class="area"><a href="fukui_2">第2区</a></li>
                </ul>
            </span>
            <li><label for="btn">山梨県</label></li>
            <input id="pushlabel" class="yamanasi" type="checkbox">
            <span class="boxshow">
                <ul class="yamanasi_area">
                    <li class="area"><a href="yamanasi_1">第1区</a></li>
                    <li class="area"><a href="yamanasi_2">第2区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">長野県</label></li>
            <input id="pushlabel" class="nagano" type="checkbox">
            <span class="boxshow">
                <ul class="nagano_area">
                    <li class="area"><a href="nagano_1">第1区</a></li>
                    <li class="area"><a href="nagano_2">第2区</a></li>
                    <li class="area"><a href="nagano_3">第3区</a></li>
                    <li class="area"><a href="nagano_4">第4区</a></li>
                    <li class="area"><a href="nagano_5">第5区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">岐阜県</label></li>
            <input id="pushlabel" class="gihu" type="checkbox">
            <span class="boxshow">
                <ul class="gihu_area">
                    <li class="area"><a href="gihu_1">第1区</a></li>
                    <li class="area"><a href="gihu_2">第2区</a></li>
                    <li class="area"><a href="gihu_3">第3区</a></li>
                    <li class="area"><a href="gihu_4">第4区</a></li>
                    <li class="area"><a href="gihu_5">第5区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">静岡県</label></li>
            <input id="pushlabel" class="sizuoka" type="checkbox">
            <span class="boxshow">
                <ul class="sizuoka_area">
                    <li class="area"><a href="sizuoka_1">第1区</a></li>
                    <li class="area"><a href="sizuoka_2">第2区</a></li>
                    <li class="area"><a href="sizuoka_3">第3区</a></li>
                    <li class="area"><a href="sizuoka_4">第4区</a></li>
                    <li class="area"><a href="sizuoka_5">第5区</a></li>
                    <li class="area"><a href="sizuoka_6">第6区</a></li>
                    <li class="area"><a href="sizuoka_7">第7区</a></li>
                    <li class="area"><a href="sizuoka_8">第8区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">愛知県</label></li>
            <input id="pushlabel" class="aichi" type="checkbox">
            <span class="boxshow">
                <ul class="aichi_area">
                    <li class="area"><a href="aichi_1">第1区</a></li>
                    <li class="area"><a href="aichi_2">第2区</a></li>
                    <li class="area"><a href="aichi_3">第3区</a></li>
                    <li class="area"><a href="aichi_4">第4区</a></li>
                    <li class="area"><a href="aichi_5">第5区</a></li>
                    <li class="area"><a href="aichi_6">第6区</a></li>
                    <li class="area"><a href="aichi_7">第7区</a></li>
                    <li class="area"><a href="aichi_8">第8区</a></li>
                    <li class="area"><a href="aichi_9">第9区</a></li>
                    <li class="area"><a href="aichi_10">第10区</a></li>
                    <li class="area"><a href="aichi_11">第11区</a></li>
                    <li class="area"><a href="aichi_12">第12区</a></li>
                    <li class="area"><a href="aichi_13">第13区</a></li>
                    <li class="area"><a href="aichi_14">第14区</a></li>
                    <li class="area"><a href="aichi_15">第15区</a></li>
                </ul>
            </span>
        </ul>

        <ul class="kinki_local">近畿
            <li><label for="pushlabel">三重県</label></li>
            <input id="pushlabel" class="mie" type="checkbox">
            <span class="boxshow">
                <ul class="mie_area">
                    <li class="area"><a href="mie_1">第1区</a></li>
                    <li class="area"><a href="mie_2">第2区</a></li>
                    <li class="area"><a href="mie_3">第3区</a></li>
                    <li class="area"><a href="mie_4">第4区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">滋賀県</label></li>
            <input id="pushlabel" class="siga" type="checkbox">
            <span class="boxshow">
                <ul class="siga_area">
                    <li class="area"><a href="siga_1">第1区</a></li>
                    <li class="area"><a href="siga_2">第2区</a></li>
                    <li class="area"><a href="siga_3">第3区</a></li>
                    <li class="area"><a href="siga_4">第4区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">京都府</label></li>
            <input id="pushlabel" class="kyoto" type="checkbox">
            <span class="boxshow">
                <ul class="kyoto_area">
                    <li class="area"><a href="kyoto_1">第1区</a></li>
                    <li class="area"><a href="kyoto_2">第2区</a></li>
                    <li class="area"><a href="kyoto_3">第3区</a></li>
                    <li class="area"><a href="kyoto_4">第4区</a></li>
                    <li class="area"><a href="kyoto_5">第5区</a></li>
                    <li class="area"><a href="kyoto_6">第6区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">大阪府</label></li>
            <input id="pushlabel" class="osaka" type="checkbox">
            <span class="boxshow">
                <ul class="osaka_area">
                    <li class="area"><a href="osaka_1">第1区</a></li>
                    <li class="area"><a href="osaka_2">第2区</a></li>
                    <li class="area"><a href="osaka_3">第3区</a></li>
                    <li class="area"><a href="osaka_4">第4区</a></li>
                    <li class="area"><a href="osaka_5">第5区</a></li>
                    <li class="area"><a href="osaka_6">第6区</a></li>
                    <li class="area"><a href="osaka_7">第7区</a></li>
                    <li class="area"><a href="osaka_8">第8区</a></li>
                    <li class="area"><a href="osaka_9">第9区</a></li>
                    <li class="area"><a href="osaka_10">第10区</a></li>
                    <li class="area"><a href="osaka_11">第11区</a></li>
                    <li class="area"><a href="osaka_12">第12区</a></li>
                    <li class="area"><a href="osaka_13">第13区</a></li>
                    <li class="area"><a href="osaka_14">第14区</a></li>
                    <li class="area"><a href="osaka_15">第15区</a></li>
                    <li class="area"><a href="osaka_16">第16区</a></li>
                    <li class="area"><a href="osaka_17">第17区</a></li>
                    <li class="area"><a href="osaka_18">第18区</a></li>
                    <li class="area"><a href="osaka_19">第19区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">兵庫県</label></li>
            <input id="pushlabel" class="hyogo" type="checkbox">
            <span class="boxshow">
                <ul class="hyogo_area">
                    <li class="area"><a href="hyogo_1">第1区</a></li>
                    <li class="area"><a href="hyogo_2">第2区</a></li>
                    <li class="area"><a href="hyogo_3">第3区</a></li>
                    <li class="area"><a href="hyogo_4">第4区</a></li>
                    <li class="area"><a href="hyogo_5">第5区</a></li>
                    <li class="area"><a href="hyogo_6">第6区</a></li>
                    <li class="area"><a href="hyogo_7">第7区</a></li>
                    <li class="area"><a href="hyogo_8">第8区</a></li>
                    <li class="area"><a href="hyogo_9">第9区</a></li>
                    <li class="area"><a href="hyogo_10">第10区</a></li>
                    <li class="area"><a href="hyogo_11">第11区</a></li>
                    <li class="area"><a href="hyogo_12">第12区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">奈良県</label></li>
            <input id="pushlabel" class="nara" type="checkbox">
            <span class="boxshow">
                <ul class="nara_area">
                    <li class="area"><a href="nara_1">第1区</a></li>
                    <li class="area"><a href="nara_2">第2区</a></li>
                    <li class="area"><a href="nara_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">和歌山県</label></li>
            <input id="pushlabel" class="wakayama" type="checkbox">
            <span class="boxshow">
                <ul class="wakayama_area">
                    <li class="area"><a href="wakayama_1">第1区</a></li>
                    <li class="area"><a href="wakayama_2">第2区</a></li>
                    <li class="area"><a href="wakayama_3">第3区</a></li>
                </ul>
            </span>
        </ul>

        <ul class="chugoku_local">中国
            <li><label for="btn">鳥取県</label></li>
            <input id="pushlabel" class="tottori" type="checkbox">
            <span class="boxshow">
                <ul class="tottori_area">
                    <li class="area"><a href="tottori_1">第1区</a></li>
                    <li class="area"><a href="tottori_2">第2区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">島根県</label></li>
            <input id="pushlabel" class="simane" type="checkbox">
            <span class="boxshow">
                <ul class="simane_area">
                    <li class="area"><a href="simane_1">第1区</a></li>
                    <li class="area"><a href="simane_2">第2区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">岡山県</label></li>
            <input id="pushlabel" class="okayama" type="checkbox">
            <span class="boxshow">
                <ul class="okayama_area">
                    <li class="area"><a href="okayama_1">第1区</a></li>
                    <li class="area"><a href="okayama_2">第2区</a></li>
                    <li class="area"><a href="okayama_3">第3区</a></li>
                    <li class="area"><a href="okayama_4">第4区</a></li>
                    <li class="area"><a href="okayama_5">第5区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">広島県</label></li>
            <input id="pushlabel" class="hirosima" type="checkbox">
            <span class="boxshow">
                <ul class="hirosima_area">
                    <li class="area"><a href="hirosima_1">第1区</a></li>
                    <li class="area"><a href="hirosima_2">第2区</a></li>
                    <li class="area"><a href="hirosima_3">第3区</a></li>
                    <li class="area"><a href="hirosima_4">第4区</a></li>
                    <li class="area"><a href="hirosima_5">第5区</a></li>
                    <li class="area"><a href="hirosima_6">第6区</a></li>
                    <li class="area"><a href="hirosima_7">第7区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">山口県</label></li>
            <input id="pushlabel" class="yamaguchi" type="checkbox">
            <span class="boxshow">
                <ul class="yamaguchi_area">
                    <li class="area"><a href="yamaguchi_1">第1区</a></li>
                    <li class="area"><a href="yamaguchi_2">第2区</a></li>
                    <li class="area"><a href="yamaguchi_3">第3区</a></li>
                    <li class="area"><a href="yamaguchi_4">第4区</a></li>
                </ul>
            </span>
        </ul>

        <ul class="sikoku_local">四国
            <li><label for="pushlabel">徳島県</label></li>
            <input id="pushlabel" class="tokusima" type="checkbox">
            <span class="boxshow">
                <ul class="tokusima_area">
                    <li class="area"><a href="tokusima_1">第1区</a></li>
                    <li class="area"><a href="tokusima_2">第2区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">香川県</label></li>
            <input id="pushlabel" class="kagawa" type="checkbox">
            <span class="boxshow">
                <ul class="kagawa_area">
                    <li class="area"><a href="kagawa_1">第1区</a></li>
                    <li class="area"><a href="kagawa_2">第2区</a></li>
                    <li class="area"><a href="kagawa_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">愛媛県</label></li>
            <input id="pushlabel" class="ehime" type="checkbox">
            <span class="boxshow">
                <ul class="ehime_area">
                    <li class="area"><a href="ehime_1">第1区</a></li>
                    <li class="area"><a href="ehime_2">第2区</a></li>
                    <li class="area"><a href="ehime_3">第3区</a></li>
                    <li class="area"><a href="ehime_4">第4区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">高知県</label></li>
            <input id="pushlabel" class="kochi" type="checkbox">
            <span class="boxshow">
                <ul class="kochi_area">
                    <li class="area"><a href="kochi_1">第1区</a></li>
                    <li class="area"><a href="kochi_2">第2区</a></li>
                </ul>
            </span>
        </ul>

        <ul class="kyusyu_local">九州
            <li><label for="pushlabel">福岡県</label></li>
            <input id="pushlabel" class="fukuoka" type="checkbox">
            <span class="boxshow">
                <ul class="fukuoka_area">
                    <li class="area"><a href="fukuoka_1">第1区</a></li>
                    <li class="area"><a href="fukuoka_2">第2区</a></li>
                    <li class="area"><a href="fukuoka_3">第3区</a></li>
                    <li class="area"><a href="fukuoka_4">第4区</a></li>
                    <li class="area"><a href="fukuoka_5">第5区</a></li>
                    <li class="area"><a href="fukuoka_6">第6区</a></li>
                    <li class="area"><a href="fukuoka_7">第7区</a></li>
                    <li class="area"><a href="fukuoka_8">第8区</a></li>
                    <li class="area"><a href="fukuoka_9">第9区</a></li>
                    <li class="area"><a href="fukuoka_10">第10区</a></li>
                    <li class="area"><a href="fukuoka_11">第11区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">佐賀県</label></li>
            <input id="pushlabel" class="saga" type="checkbox">
            <span class="boxshow">
                <ul class="saga_area">
                    <li class="area"><a href="saga_1">第1区</a></li>
                    <li class="area"><a href="saga_2">第2区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">長崎県</label></li>
            <input id="pushlabel" class="nagasaki" type="checkbox">
            <span class="boxshow">
                <ul class="nagasaki_area">
                    <li class="area"><a href="nagasaki_1">第1区</a></li>
                    <li class="area"><a href="nagasaki_2">第2区</a></li>
                    <li class="area"><a href="nagasaki_3">第3区</a></li>
                    <li class="area"><a href="nagasaki_4">第4区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">熊本県</label></li>
            <input id="pushlabel" class="kumamoto" type="checkbox">
            <span class="boxshow">
                <ul class="kumamoto_area">
                    <li class="area"><a href="kumamoto_1">第1区</a></li>
                    <li class="area"><a href="kumamoto_2">第2区</a></li>
                    <li class="area"><a href="kumamoto_3">第3区</a></li>
                    <li class="area"><a href="kumamoto_4">第4区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">大分県</label></li>
            <input id="pushlabel" class="oita" type="checkbox">
            <span class="boxshow">
                <ul class="oita_area">
                    <li class="area"><a href="oita_1">第1区</a></li>
                    <li class="area"><a href="oita_2">第2区</a></li>
                    <li class="area"><a href="oita_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">宮崎県</label></li>
            <input id="pushlabel" class="miyazaki" type="checkbox">
            <span class="boxshow">
                <ul class="miyazaki_area">
                    <li class="area"><a href="miyazaki_1">第1区</a></li>
                    <li class="area"><a href="miyazaki_2">第2区</a></li>
                    <li class="area"><a href="miyazaki_3">第3区</a></li>
                </ul>
            </span>
            <li><label for="pushlabel">鹿児島県</label></li>
            <input id="pushlabel" class="kagosima" type="checkbox">
            <span class="boxshow">
                <ul class="kagosima_area">
                    <li class="area"><a href="kagosima_1">第1区</a></li>
                    <li class="area"><a href="kagosima_2">第2区</a></li>
                    <li class="area"><a href="kagosima_3">第3区</a></li>
                    <li class="area"><a href="kagosima_4">第4区</a></li>
                </ul>
            </span>
        </ul>

        <ul class="okinawa_local">沖縄
            <li><label for="pushlabel">沖縄県</label></li>
            <input id="pushlabel" class="okinawa" type="checkbox">
            <span class="boxshow">
                <ul class="okinawa_area">
                    <li class="area"><a href="okinawa_1">第1区</a></li>
                    <li class="area"><a href="okinawa_2">第2区</a></li>
                    <li class="area"><a href="okinawa_3">第3区</a></li>
                    <li class="area"><a href="okinawa_4">第4区</a></li>
                </ul>
            </span>
        </ul>
    </div>
@endsection