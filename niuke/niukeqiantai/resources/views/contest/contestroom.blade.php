<?php echo view("index.header");?>
<link rel="stylesheet" href="{{ URL::asset('css/nowcoder-ui.css') }}">

<script>
window.globalInfo = {};
</script>
<div class="test-tab-wrap">
<div class="test-tab-cont clearfix">
<ul class="test-tab clearfix">
<li class="selected"><a href="contestroom.htm">公司真题模考</a></li>
<li><a href="intelligenttest.htm">智能专项练习</a></li>
<li><a href="activity/oj.htm">在线编程</a></li>
<li><a href="activity/topics.htm">精华专题</a></li>
<li><a href="questioncenter.htm">试题广场</a></li>
</ul>
</div>
</div>
<div class="nk-main test-center-page clearfix">
<div class="mini-banner">
<a href="courses/1.htm"><img src="{{ url('images') }}/courses/jp-course.png"></a>
</div>
<div class="test-center-bar">
<ul class="test-center-menu">
@foreach ($type as $l1)
@if($l1['level']==1)
<li>
<div class="tcm-mod">
@if(@$l1['display']!='all')
<div class="tcm-arrow"></div>
@endif
<h4 class="tcm-hd">{{$l1['name']}}</h4>
<div class="tcm-bd">
@foreach ($type as $l2)
@if($l1['_id']==$l2['pid']&&@$l2['display'])
<a class="tcm-tag" data-id="639" href="javascript:void(0);">{{$l2['name']}}</a>
@endif
@endforeach
</div>
</div>
@if(@$l1['display']!='all')
<div class="mod-sub-wrap">
<div class="tcm-sub-mod">
<h4 class="tcm-hd">{{$l1['name']}}</h4>
<div class="tcm-bd">
@foreach ($type as $l3)
@if($l1['_id']==$l3['pid'])
<a class="tcm-tag" data-id="639" href="javascript:void(0);">{{$l3['name']}}</a>
@endif
@endforeach
</div>
</div>
</div>
@endif
</li>
@endif
@endforeach
<!--
<li>
<div class="tcm-mod">
<div class="tcm-arrow"></div>
<h4 class="tcm-hd">公司</h4>
<div class="tcm-bd">
<a href="javascript:void(0);" class="tcm-tag"
data-id="134">阿里巴巴</a>
<a href="javascript:void(0);" class="tcm-tag" data-id="138">腾讯</a>
<a href="javascript:void(0);" class="tcm-tag" data-id="139">百度</a>
</div>
</div>
<div class="mod-sub-wrap">
<div class="tcm-sub-mod">
<h4 class="tcm-hd">公司</h4>
<div class="tcm-bd">
<a class="tcm-tag" data-id="235" href="javascript:void(0);">Leetcode</a>
<a class="tcm-tag" data-id="134" href="javascript:void(0);">阿里巴巴</a>
<a class="tcm-tag" data-id="138" href="javascript:void(0);">腾讯</a>
<a class="tcm-tag" data-id="139" href="javascript:void(0);">百度</a>
<a class="tcm-tag" data-id="144" href="javascript:void(0);">Google</a>
<a class="tcm-tag" data-id="146" href="javascript:void(0);">微软</a>
<a class="tcm-tag" data-id="147" href="javascript:void(0);">小米</a>
<a class="tcm-tag" data-id="151" href="javascript:void(0);">京东</a>
<a class="tcm-tag" data-id="157" href="javascript:void(0);">奇虎</a>
<a class="tcm-tag" data-id="179" href="javascript:void(0);">美团</a>
<a class="tcm-tag" data-id="171" href="javascript:void(0);">迅雷</a>
<a class="tcm-tag" data-id="140" href="javascript:void(0);">人人网</a>
<a class="tcm-tag" data-id="149" href="javascript:void(0);">网易</a>
<a class="tcm-tag" data-id="239" href="javascript:void(0);">华为</a>
<a class="tcm-tag" data-id="650" href="javascript:void(0);">英特尔</a>
<a class="tcm-tag" data-id="141" href="javascript:void(0);">去哪儿</a>
<a class="tcm-tag" data-id="148" href="javascript:void(0);">搜狐</a>
<a class="tcm-tag" data-id="162" href="javascript:void(0);">乐视</a>
<a class="tcm-tag" data-id="652" href="javascript:void(0);">滴滴</a>
<a class="tcm-tag" data-id="184" href="javascript:void(0);">大众点评</a>
<a class="tcm-tag" data-id="166" href="javascript:void(0);">爱奇艺</a>
<a class="tcm-tag" data-id="654" href="javascript:void(0);">蘑菇街</a>
</div>
</div>
</div>
</li>
<li>
<div class="tcm-mod">
<h4 class="tcm-hd">时间</h4>
<div  class="tcm-bd">
<a class="tcm-tag" data-id="651" href="javascript:void(0);">2016</a>
<a class="tcm-tag" data-id="250" href="javascript:void(0);">2015</a>
<a class="tcm-tag" data-id="251" href="javascript:void(0);">2014</a>
<a class="tcm-tag" data-id="252" href="javascript:void(0);">2013</a>
<a class="tcm-tag" data-id="253" href="javascript:void(0);">2012</a>
<a class="tcm-tag" data-id="254" href="javascript:void(0);">2011</a>
</div>
</div>
</li>
-->
</ul>
</div>
<div class="nk-content">
<div class="module-box">
<div class="menu-box">
<ul class="menu clearfix">
<li class="selected"><a href="javascript:void(0);">最新</a></li>
<li><a href='contestroomorderbyhotvalue2filter0'>最热</a></li>
</ul>
</div>
<div class="module-body">
<ul class="content-item-box clearfix">
@foreach($tiji as $v)
<li>
<a href="incontest?id={{$v['_id']}}">
<div class="content-item-brief">
<h1>{{$v['title']}}</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/0.png"/>
</div>
<div class="exam-foot">已有310人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共{{$v['num']}}道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-4"></span>
</div>
</a>
</li>
@endforeach
<!--
<li>
<a href="test/902031/summary">
<div class="content-item-brief">
<h1>搜狐2016研发工程师笔试题</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/21.png"/>
</div>
<div class="exam-foot">已有769人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共14道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/895264/summary">
<div class="content-item-brief">
<h1>完美世界2016研发工程师笔试题</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/33.png"/>
</div>
<div class="exam-foot">已有764人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共26道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/888982/summary">
<div class="content-item-brief">
<h1>奇虎360 2016数据挖掘笔试题</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/3.png"/>
</div>
<div class="exam-foot">已有352人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共13道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/877605/summary">
<div class="content-item-brief">
<h1>爱奇艺2016研发工程师笔试题（三）</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/25.png"/>
</div>
<div class="exam-foot">已有1299人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共10道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/871788/summary">
<div class="content-item-brief">
<h1>网易2016研发工程师笔试题</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/15.png"/>
</div>
<div class="exam-foot">已有766人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共15道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/869958/summary">
<div class="content-item-brief">
<h1>京东2016研发工程师编程题（二）</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/37.png"/>
</div>
<div class="exam-foot">已有571人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共2道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/860056/summary">
<div class="content-item-brief">
<h1>4399游戏2015校园招聘游戏开发类笔试题</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/0.png"/>
</div>
<div class="exam-foot">已有489人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共34道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/857629/summary">
<div class="content-item-brief">
<h1>滴滴出行2016研发工程师笔试题（五）</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/didi.png"/>
</div>
<div class="exam-foot">已有438人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共7道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-4"></span>
</div>
</a>
</li>
<li>
<a href="test/853176/summary">
<div class="content-item-brief">
<h1>滴滴出行2016研发工程师笔试题（四）</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/didi.png"/>
</div>
<div class="exam-foot">已有467人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共12道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/837299/summary">
<div class="content-item-brief">
<h1>滴滴出行2016研发工程师笔试题（三）</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/didi.png"/>
</div>
<div class="exam-foot">已有1294人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共11道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/826830/summary">
<div class="content-item-brief">
<h1>美团2016研发工程师编程题(二)</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/6.png"/>
</div>
<div class="exam-foot">已有707人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共4道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/818883/summary">
<div class="content-item-brief">
<h1>搜狗2016研发工程师编程题</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/21.png"/>
</div>
<div class="exam-foot">已有576人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共2道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/811355/summary">
<div class="content-item-brief">
<h1>58同城2016研发工程师笔试题</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/0.png"/>
</div>
<div class="exam-foot">已有1058人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共16道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
<li>
<a href="test/805222/summary">
<div class="content-item-brief">
<h1>爱奇艺2016研发工程师笔试题（二）</h1>
<div class="web-logoimg">
<img src="{{ url('images') }}/weblogo/gray_logo/25.png"/>
</div>
<div class="exam-foot">已有1107人参加</div>
<dl class="exam-info">
<dd><span class="link-green">共15道题</span></dd>
<dd class="exam-btn"><span class="btn  btn-block btn-primary" >查看详情</span></dd>
</dl>
</div>
<div class="difficulty">
<span class="item-label">难度系数：</span>
<span title="难度系数" class="stars star-3"></span>
</div>
</a>
</li>
-->
</ul>
<div class="pagination">
<ul data-total="12">
<li class="txt-pager disabled js-first-pager"><a data-page="1" href="javascript:void(0)">首页</a></li>
<li class="txt-pager disabled js-pre-pager"><a data-page="1" href="javascript:void(0)">上一页</a></li>
<li class="active js-1-pager"><a href="javascript:void(0)" data-page="1">1</a></li>
<li class="js-2-pager"><a href="paper/listfilter0orderbyhotvalue1page2" data-page="2">2</a></li>
<li class="js-3-pager"><a href="paper/listfilter0orderbyhotvalue1page3" data-page="3">3</a></li>

<li class="txt-pager js-next-pager"><a data-page="2" href="paper/listfilter0orderbyhotvalue1page2">下一页</a></li>
<li class="txt-pager js-last-pager"><a data-page="12" href="paper/listfilter0orderbyhotvalue1page12">末页</a></li>
</ul>
</div>
</div>
</div>
</div>
<?php echo view('index.footer');?>

</div>
<script src="{{ URL::asset('js/sea.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('js/base.js') }}"></script>
<script type="text/javascript">
seajs.use('nowcoder/1.2.348/javascripts/site/common/index');
seajs.use('nowcoder/1.2.348/javascripts/site/common/nav');
</script>
<span id='cnzz_stat_icon_1253353781' style="display:none;"></span>
<script type="text/javascript">
window.parameter = {
mutiTagIds: ''
};
seajs.use('nowcoder/1.2.348/javascripts/site/contest/paperList');
</script>
</body>
</html>
