<?php echo view("header.login")?>
<link rel="stylesheet" href="{{URL::asset('css/honor.css')}}">
<script src="{{URL::asset('js/list.js')}}" async="" charset="utf-8"></script></head>

<script>
window.globalInfo = {};
</script>
<div class="topic-banner-box honor-banner-wrap">
<div class="topic-banner" style="background:url(http://static.nowcoder.com//images/res/banner/act/honor.png)">
</div>
</div>
<div class="nk-main topic-main">
<!--主体内容-->
<div class="honor-page clearfix">
<div class="module-box">
<div class="module-head clearfix">
<h1>连续登录</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">天</td>
</tr>
<?php $i=1?>
@foreach( $login_sort as $val)
<tr>
<td>
<span class="browse-num top-browse @if($i<4)top{{$i}} @else top @endif}">
{{ $i }}
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/557336">
<img alt="sunburstRun" src="{{URL::asset('images/557336_1428507748298_557336_1425907358968_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/557336">
{{ $val['nickname'] }}
</a>
</div>
</td>
<td>
{{ $val['login_count'] }}
</td>
</tr>
<?php $i++?>
@endforeach
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/online?tab=total" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>成就值</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">周榜</a>
</li>
<li><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">成就值</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/772265">
<img alt="牛客772265号" src="{{URL::asset('images/894m.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/772265">
牛客772265号
</a>
</div>
</td>
<td>
+473
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/892982">
<img alt="我是菜鸡" src="{{URL::asset('images/882m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/892982">
我是菜鸡
</a>
</div>
</td>
<td>
+436
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/947870">
<img alt="nanami" src="{{URL::asset('images/49m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/947870">
nanami
</a>
</div>
</td>
<td>
+341
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/447244">
<img alt="卡普米亚" src="{{URL::asset('images/927m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/447244">
卡普米亚
</a>
</div>
</td>
<td>
+330
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/128747">
<img alt="牛客128747号" src="{{URL::asset('images/128747_1446191772417_7C2C60506876716CCF0E706DB13D45110e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/128747">
牛客128747号
</a>
</div>
</td>
<td>
+321
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/honor?tab=weekly" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
<table style="display: none">
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">成就值</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/394118">
<img alt="牛客-007" src="{{URL::asset('images/394118_1421113274454_394118_1421113269562_c4798d8e4a33a63452.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/394118">
牛客-007
</a>
</div>
</td>
<td>
12397
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/205070">
<img alt="For-Happy" src="{{URL::asset('images/874m.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/205070">
For-Happy
</a>
</div>
</td>
<td>
6908
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/141075">
<img alt="revivedSuN" src="{{URL::asset('images/136m.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/141075">
revivedSuN
</a>
</div>
</td>
<td>
6295
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/863234">
<img alt="老街" src="{{URL::asset('images/863234_1439136652585_863234_1439136642884_00000835.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/863234">
老街
</a>
</div>
</td>
<td>
6181
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/532568">
<img alt="CRJ" src="{{URL::asset('images/532568_1439276032769_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/532568">
CRJ
</a>
</div>
</td>
<td>
6135
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/honor?tab=total" style="display: none" class="all-honor-list js-sort-1">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>粉丝榜</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">粉丝数</td>
</tr>
<?php  $fi=1?>
@foreach( $fensi as $val)
<tr>
<td>
<span class="browse-num top-browse @if($fi<4)top{{$fi}} @else top @endif}">
{{ $fi }}
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/394118">
<img alt="牛客-007" src="{{URL::asset('images/394118_1421113274454_394118_1421113269562_c4798d8e4a33a63452.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/394118">
{{ $val['nickname'] }}
</a>
</div>
</td>
<td>
{{ $val['fensi'] }}
</td>
</tr>
<?php $fi++?>
@endforeach
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/fans?tab=total" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>牛币榜</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">总牛币</td>
</tr>
<?php $mi=1?>
@foreach( $money as $val)
<tr>
<td>
<span class="browse-num top-browse @if($mi<4) top{{$mi}} @else top @endif}">
{{ $mi }}
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/824891">
<img alt="希留" src="{{URL::asset('images/824891_1434529892887_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/824891">
{{ $val['nickname'] }}
</a>
</div>
</td>
<td>
{{$val['money']}}
</td>
</tr>
<?php $mi++?>
@endforeach

</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/money?tab=total" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>编程榜</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">周榜</a>
</li>
<li><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">通过数</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/128662">
<img alt="Mr.nobody" src="{{URL::asset('images/128662_1446617570170_FDD55B24A72A1248AB7F96EC416D099D0e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/128662">
Mr.nobody
</a>
</div>
</td>
<td>
42
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/526366">
<img alt="百年风骚" src="{{URL::asset('images/526366_1433836187136_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/526366">
百年风骚
</a>
</div>
</td>
<td>
40
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/694426">
<img alt="Jocelyn" src="{{URL::asset('images/694426_1432294010912_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/694426">
Jocelyn
</a>
</div>
</td>
<td>
38
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/883588">
<img alt="treasuresss" src="{{URL::asset('images/755m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/883588">
treasuresss
</a>
</div>
</td>
<td>
35
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/541277">
<img alt="warmsnow" src="{{URL::asset('images/541277_1446966798487_F24BD1F9A73CAFBB0AB7CD4B97EBBBE40e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/541277">
warmsnow
</a>
</div>
</td>
<td>
31
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/program?tab=weekly" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
<table style="display: none">
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">通过数</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/51">
<img alt="叶小鱼" src="{{URL::asset('images/51_1429887854709_51_1429887852539_300_300.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/51">
叶小鱼
</a>
</div>
</td>
<td>
2391
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/523514">
<img alt="易水" src="{{URL::asset('images/523514_1428507396030_523514_1427272441118_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/523514">
易水
</a>
</div>
</td>
<td>
333
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/865851">
<img alt="JF" src="{{URL::asset('images/865851_1434103208096_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/865851">
JF
</a>
</div>
</td>
<td>
317
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/415611">
<img alt="lzg葫芦娃" src="{{URL::asset('images/415611_1445992767898_489F6F7456D257EB732F4DEB973D90050e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/415611">
lzg葫芦娃
</a>
</div>
</td>
<td>
295
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/813749">
<img alt="小菜一枚" src="{{URL::asset('images/813749_1428561007153_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/813749">
小菜一枚
</a>
</div>
</td>
<td>
283
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/program?tab=total" style="display: none" class="all-honor-list js-sort-1">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>答题榜</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">周榜</a>
</li>
<li><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">答题数</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/413963">
<img alt="不易" src="{{URL::asset('images/413963_1422362302919_413963_1422362287810_117632-106.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/413963">
不易
</a>
</div>
</td>
<td>
13
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/546413">
<img alt="影流散尽" src="{{URL::asset('images/546413_1442990717724_7C2C60506876716CCF0E706DB13D45110e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/546413">
影流散尽
</a>
</div>
</td>
<td>
12
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/732224">
<img alt="Dianna" src="{{URL::asset('images/732224_1441592189088_7966D65A2B85435361D9C04C62D342620e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/732224">
Dianna
</a>
</div>
</td>
<td>
8
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/708360">
<img alt="﹎." src="{{URL::asset('images/708360_1429890040095_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-6" href="http://www.nowcoder.com/profile/708360">
﹎.
</a>
</div>
</td>
<td>
8
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/710504">
<img alt="半纸流年-轻描了谁的夏天" src="{{URL::asset('images/710504_1437395683890_710504_1437395651450_527ae3356610292382.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/710504">
半纸流年-轻描了谁的夏天
</a>
</div>
</td>
<td>
8
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/answer?tab=weekly" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
<table style="display: none">
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">答题数</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/394118">
<img alt="牛客-007" src="{{URL::asset('images/394118_1421113274454_394118_1421113269562_c4798d8e4a33a63452.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/394118">
牛客-007
</a>
</div>
</td>
<td>
1038
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/644326">
<img alt="MyGoodHelper" src="{{URL::asset('images/153m.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/644326">
MyGoodHelper
</a>
</div>
</td>
<td>
715
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/717983">
<img alt="墨儿" src="{{URL::asset('images/717983_1428509604902_717983_1425911957580_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/717983">
墨儿
</a>
</div>
</td>
<td>
347
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/59">
<img alt="小小" src="{{URL::asset('images/59_1422544783122_59_1422544779923_18414710153.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/59">
小小
</a>
</div>
</td>
<td>
308
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/444334">
<img alt="牛客444334号" src="{{URL::asset('images/203m.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/444334">
牛客444334号
</a>
</div>
</td>
<td>
248
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/answer?tab=total" style="display: none" class="all-honor-list js-sort-1">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>试卷平均分</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">周榜</a>
</li>
<li><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">平均分/套</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/458882">
<img alt="╰微笑感染嘴角的苦涩" src="{{URL::asset('images/458882_1437987781503_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/458882">
╰微笑感染嘴角的苦涩
</a>
</div>
</td>
<td>
100/3
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/808747">
<img alt="萧正楠202" src="{{URL::asset('images/808747_1444705881535_225D9337E3576D59ED894618028112060e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/808747">
萧正楠202
</a>
</div>
</td>
<td>
100/1
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/763951">
<img alt="羽香" src="{{URL::asset('images/481m.png')}}">
</a>
<div class="list-name">
<a class="level-color-6" href="http://www.nowcoder.com/profile/763951">
羽香
</a>
</div>
</td>
<td>
100/1
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/610542">
<img alt="CodingNaga" src="{{URL::asset('images/610542_1446442709548_4A47A0DB6E60853DEDFCFDF08A5CA2490e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-5" href="http://www.nowcoder.com/profile/610542">
CodingNaga
</a>
</div>
</td>
<td>
100/1
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/470928">
<img alt="antao3780" src="{{URL::asset('images/464m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/470928">
antao3780
</a>
</div>
</td>
<td>
100/1
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/paper-average?tab=weekly" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
<table style="display: none">
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">平均分/套</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/995102">
<img alt="牛客995102号" src="{{URL::asset('images/995102_1444382842015_4A47A0DB6E60853DEDFCFDF08A5CA2490e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-6" href="http://www.nowcoder.com/profile/995102">
牛客995102号
</a>
</div>
</td>
<td>
100/6
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/613959">
<img alt="未来" src="{{URL::asset('images/813m.png')}}">
</a>
<div class="list-name">
<a class="level-color-5" href="http://www.nowcoder.com/profile/613959">
未来
</a>
</div>
</td>
<td>
100/6
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/907995">
<img alt="芥末堆看教育" src="{{URL::asset('images/907995_1428512011761_907995_1425914249960_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-5" href="http://www.nowcoder.com/profile/907995">
芥末堆看教育
</a>
</div>
</td>
<td>
100/5
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/903977">
<img alt="牛客903977号" src="{{URL::asset('images/298m.png')}}">
</a>
<div class="list-name">
<a class="level-color-5" href="http://www.nowcoder.com/profile/903977">
牛客903977号
</a>
</div>
</td>
<td>
100/4
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/882433">
<img alt="zhujxi" src="{{URL::asset('images/882433_1425914006542_user_normal.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-5" href="http://www.nowcoder.com/profile/882433">
zhujxi
</a>
</div>
</td>
<td>
100/4
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/paper-average?tab=total" style="display: none" class="all-honor-list js-sort-1">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>试卷总分</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">周榜</a>
</li>
<li><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">总分/套</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/447244">
<img alt="卡普米亚" src="{{URL::asset('images/927m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/447244">
卡普米亚
</a>
</div>
</td>
<td>
5630/89
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/892982">
<img alt="我是菜鸡" src="{{URL::asset('images/882m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/892982">
我是菜鸡
</a>
</div>
</td>
<td>
4430/66
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/947870">
<img alt="nanami" src="{{URL::asset('images/49m.png')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/947870">
nanami
</a>
</div>
</td>
<td>
3830/50
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/128747">
<img alt="牛客128747号" src="{{URL::asset('images/128747_1446191772417_7C2C60506876716CCF0E706DB13D45110e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/128747">
牛客128747号
</a>
</div>
</td>
<td>
3460/50
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/293442">
<img alt="螺丝钉" src="{{URL::asset('images/293442_1446541864038_7C2C60506876716CCF0E706DB13D45110e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-7" href="http://www.nowcoder.com/profile/293442">
螺丝钉
</a>
</div>
</td>
<td>
3180/65
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/paper-total?tab=weekly" class="all-honor-list js-sort-0">查看全部榜单 &gt;</a>
<table style="display: none">
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">总分/套</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/546413">
<img alt="影流散尽" src="{{URL::asset('images/546413_1442990717724_7C2C60506876716CCF0E706DB13D45110e_100w.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/546413">
影流散尽
</a>
</div>
</td>
<td>
36449/536
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/851149">
<img alt="张佃鹏" src="{{URL::asset('images/851149_1430617236927_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/851149">
张佃鹏
</a>
</div>
</td>
<td>
36385/432
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/121939">
<img alt="prow" src="{{URL::asset('images/516m.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/121939">
prow
</a>
</div>
</td>
<td>
32703/457
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/532568">
<img alt="CRJ" src="{{URL::asset('images/532568_1439276032769_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/532568">
CRJ
</a>
</div>
</td>
<td>
31406/431
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/442784">
<img alt="幻之飞雪" src="{{URL::asset('images/442784_1432307030577_442784_1432307020979_8.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/442784">
幻之飞雪
</a>
</div>
</td>
<td>
31239/518
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/paper-total?tab=total" style="display: none" class="all-honor-list js-sort-1">查看全部榜单 &gt;</a>
</div>
</div>
<div class="module-box">
<div class="module-head clearfix">
<h1>采纳榜</h1>
</div>
<div class="menu-box side-tab-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">周榜</a>
</li>
<li><a href="javascript:void(0);">总榜</a>
</li>
</ul>
</div>
<div class="module-body browse-rank">
<!--本周排行榜-->
<table>
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">采纳数</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/557336">
<img alt="sunburstRun" src="{{URL::asset('images/557336_1428507748298_557336_1425907358968_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/557336">
sunburstRun
</a>
</div>
</td>
<td>
3
</td>
</tr>
</tbody>
</table>
<table style="display: none">
<tbody>
<tr>
<td width="60">排行</td>
<td width="150">用户</td>
<td width="80">采纳数</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top1">
1
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/394118">
<img alt="牛客-007" src="{{URL::asset('images/394118_1421113274454_394118_1421113269562_c4798d8e4a33a63452.jpg')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/394118">
牛客-007
</a>
</div>
</td>
<td>
456
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top2">
2
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/644326">
<img alt="MyGoodHelper" src="{{URL::asset('images/153m.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/644326">
MyGoodHelper
</a>
</div>
</td>
<td>
282
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top3">
3
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/444334">
<img alt="牛客444334号" src="{{URL::asset('images/203m.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/444334">
牛客444334号
</a>
</div>
</td>
<td>
152
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
4
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/557336">
<img alt="sunburstRun" src="{{URL::asset('images/557336_1428507748298_557336_1425907358968_100.png')}}">
</a>
<div class="list-name">
<a class="level-color-9" href="http://www.nowcoder.com/profile/557336">
sunburstRun
</a>
</div>
</td>
<td>
118
</td>
</tr>
<tr>
<td>
<span class="browse-num top-browse top">
5
</span>
</td>
<td>
<a class="head-pic" href="http://www.nowcoder.com/profile/603476">
<img alt="eagle" src="{{URL::asset('images/910m.png')}}">
</a>
<div class="list-name">
<a class="level-color-8" href="http://www.nowcoder.com/profile/603476">
eagle
</a>
</div>
</td>
<td>
91
</td>
</tr>
</tbody>
</table>
<a href="http://www.nowcoder.com/ranking/refer-answer?tab=total" style="display: none" class="all-honor-list js-sort-1">查看全部榜单 &gt;</a>
</div>
</div>
</div>
</div>
<div style="display: block; bottom: 123px;" class="fixed-menu">
<ul>
<li>
<a href="#top" class="gotop" title="回到顶部" id="gotop"></a>
</li>
<li>
<a class="fixed-wb" target="_blank" href="http://www.weibo.com/nowcoder"></a>
</li>
<li>
<a href="tencent://groupwpa/?subcmd=all&amp;param=7B2267726F757055696E223A3135373539343730352C2274696D655374616D70223A313431333130373737387D0A" class="qq" title="QQ"></a>
</li>
<li>
<a href="javascript:void(0);" class="wx"></a>
<div class="wx-qrcode">
<img src="{{URL::asset('images/wx-rcode.jpg')}}" alt="二维码">
<p>扫描二维码，关注牛客网</p>
</div>
</li>
<li>
<a href="http://www.nowcoder.com/discuss/30" class="feedback" title="意见反馈"></a>
<a href="http://www.nowcoder.com/discuss/30" class="feedback-letter">意见反馈</a>
</li>
<li>
<a href="javascript:void(0);" class="qrcode"></a>
<div class="wx-qrcode">
<img src="{{URL::asset('images/app.png')}}" alt="二维码">
<p>下载牛客APP，随时随地刷题</p>
</div>
</li>
</ul>
<div class="phone-qrcode" style="">
<a href="javascript:void(0);" class="qrcode-close">x</a>
<img src="{{URL::asset('images/app.png')}}" alt="二维码" style="width:70px;height:70px;">
<p>扫一扫下载牛客APP</p>
</div>
</div>
<div class="fixed-foot clearfix js-fixed-foot" style="display:none;">
<div class="fixed-foot-main">
<div class="fixed-foot-tip">刷真题、补算法、看面经、得内推</div>
<div class="fixed-foot-login">
<span>登录使用吧：</span>
<a href="javascript:void(0);" class="ft-login-item ft-login-wb" title="登录微博"></a>
<a href="javascript:void(0);" class="ft-login-item ft-login-qz" title="登录Qzone"></a>
<a href="javascript:void(0);" class="ft-login-item ft-login-wx" title="登录微信"></a>
<a href="javascript:void(0);" class="ft-login-item ft-login-git" title="登录git"></a>
<a href="javascript:void(0);" class="more-login">更多</a>
</div>
</div>
</div>
<div class="ft-wrap">
<div class="ft-cont clearfix">
<div class="ft-main">
<ul class="ft-links">
<li><a href="http://www.nowcoder.com/html/aboutus">关于我们</a></li>
<li><a href="http://www.nowcoder.com/html/joinus">加入我们</a></li>
<li><a href="http://www.nowcoder.com/discuss/30" target="_blank">意见反馈</a></li>
<li><a href="http://www.nowcoder.com/html/services">企业服务</a></li>
<li><a href="http://www.nowcoder.com/html/cooperation">网站合作</a></li>
<li><a href="javascript:void(0);" class="nc-req-auth nc-req-active js-test-vm">模拟终端</a></li>
<li><a href="http://www.nowcoder.com/html/disclaimer">免责声明</a></li>
<li><a href="http://www.nowcoder.com/html/links">友情链接</a></li>
</ul>
<ul class="webrights">
<li><a href="">牛客网©2015 All rights reserved</a></li>
<li><a href="">浙ICP备14000860号-2</a></li>
</ul>
</div>
<dl class="ft-web-info">
<dt class="ft-web-name">牛客网，程序员必备求职神器</dt>
<dd class="ft-info-item">QQ群：272820159</dd>
<dd class="ft-info-item">微 信：www_nowcoder_com
<a href="javascript:;" class="btn btn-primary btn-xs">关注
<div class="tooltip top">
<div class="tooltip-arrow"></div>
<div class="tooltip-inner"><img src="{{URL::asset('images/wx-rcode_002.jpg')}}" width="80"></div>
</div>
</a>
</dd>
<dd class="ft-info-item">微 博：牛客网
<a href="http://weibo.com/nowcoder" class="btn btn-primary btn-xs" target="_blank">关注
</a>
</dd>
</dl>
<div class="ft-app">
<div class="ft-qrcode-box">
<img src="{{URL::asset('images/app_download.png')}}" width="128">
</div>
<p>扫一扫，把题目装进口袋</p>
</div>
</div>
</div>

</div>
<script src="{{URL::asset('js/sea.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/base.js')}}"></script>
<script type="text/javascript">
seajs.use('nowcoder/1.2.351/javascripts/site/common/index');
seajs.use('nowcoder/1.2.351/javascripts/site/common/nav');
</script>
<span id="cnzz_stat_icon_1253353781" style="display:none;"></span>
<script type="text/javascript">
seajs.use('nowcoder/1.2.351/javascripts/site/ranking/list');
</script>


<script src="{{URL::asset('js/stat.php')}}" type="text/javascript"></script></body></html>