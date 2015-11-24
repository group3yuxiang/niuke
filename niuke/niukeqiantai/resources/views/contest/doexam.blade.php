<!DOCTYPE html>



<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>&#19979;&#21015;&#26377;&#20851;MySQL&#25968;&#25454;&#24211;&#20013;&#30340;NULL&#20540;,&#35828;&#27861;&#27491;&#30830;&#30340;&#26159;()_&#20140;&#19996;2016&#30740;&#21457;&#24037;&#31243;&#24072;&#31508;&#35797;&#39064;_牛客网</title>
<meta name="description" content="&#19979;&#21015;&#26377;&#20851;MySQL&#25968;&#25454;&#24211;&#20013;&#30340;NULL&#20540;,&#35828;&#27861;&#27491;&#30830;&#30340;&#26159;(),&#20140;&#19996;2016&#30740;&#21457;&#24037;&#31243;&#24072;&#31508;&#35797;&#39064;,牛客网是IT求职神器,提供海量IT笔试题库,全面提升编程能力">
<meta name="keywords" content="京东2016研发工程师笔试题,IT笔试,牛客网">
<script>
var _czc = _czc || [];
_czc.push(["_setAccount", "1253353781"]);
</script>
<link rel="stylesheet" href="http://static.nowcoder.com/nowcoder/1.2.359/stylesheets/styles/subject/exercise.css" />
</head>
<body>
<div class="nk-container     with-validate">
<div class="nowcoder-header">
<div class="header-main clearfix">
<a class="nowcoder-logo" href="/" title="牛客网"></a>
<ul class="nowcoder-navbar">
<li>
<a href="/" class="nav-home">首页</a>
</li>
<li>
<a href="/contestRoom" class="nav-exam">题库</a>
<ul class="sub-nav">
<li><a href="/contestRoom">公司真题</a></li>
<li><a href="/intelligentTest">专项练习</a></li>
<li><a href="/activity/oj">在线编程</a></li>
<li><a href="/activity/topics">精华专题</a></li>
<li><a href="/questionCenter">试题广场</a></li>
</ul>
</li>
<li>
<span class="ico-nav-new"></span>
<a href="/courses/1" class="nav-exam">课程</a>
<ul class="sub-nav">
<li><a href="/courses/1">精品课程</a></li>
<li><a href="/live/courses">直播课程</a></li>
</ul>
</li>
<li>
<a href="/ranking" class="nav-ranking">排行榜</a>
</li>
<li>
<a href="/recommand" class="nav-discuss">内推</a>
</li>
<li>
<a href="/discuss" class="nav-discuss">讨论区</a>
</li>
<li>
<a href="/app" class="nav-discuss" target="_blank">APP</a>
</li>
</ul>
<ul class="nowcoder-navbar nowcoder-other-nav">
<li class="nav-search">
<form method="get" action="/search">
<label class="nav-search-ico"></label>
<input class="nav-search-txt" name="query" type="text"
placeholder="输入关键字搜索"
>
<input type="hidden" name="type" value="paper"/>
<input type="submit" class="nk-invisible"/>
</form>
</li>
<li class="nav-msg">
<a href="/sns/message/532961/conversation-list"
data-unread-conv="">消息</a>
</li>
<li class="profile-item">
<a href="/profile" class="nav-profile">
<div class="img-box"><img src="http://images.nowcoder.com/images/20151016/532961_1444969297286_7C2C60506876716CCF0E706DB13D4511@0e_100w_100h_0c_1i_1o_90Q_1x"/></div>
</a>
<ul class="sub-nav">
<li><a href="/profile" class="nav-profile-page">个人主页</a></li>
<li><a href="/profile/532961/account" class="nav-set">帐号设置</a></li>
<li><a href="/activity/reward" class="nav-coins">我的牛币</a></li>
<li><a href="javascript:void(0);" class="nav-out nc-logout">退出登录</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="email-validate">
<div class="validate-content">你还没有设置邮箱或手机，无法激活账号,点击<a href="/completeness">立刻设置</a>
</div>
</div>
<script>
window.globalInfo = {};
window.globalInfo.ownerId = '532961';
window.globalInfo.ownerName = '牛客532961号';
window.globalInfo.ownerTinyHead = 'http://images.nowcoder.com/images/20151016/532961_1444969297286_7C2C60506876716CCF0E706DB13D4511@0e_100w_100h_0c_1i_1o_90Q_1x';
window.globalInfo.ownerMainHead = 'http://images.nowcoder.com/images/20151016/532961_1444969297286_7C2C60506876716CCF0E706DB13D4511@0e_200w_200h_0c_1i_1o_90Q_1x';
window.globalInfo.ownerEmail = '';
window.globalInfo.status = '1';
window.globalInfo.honorLevel = '6';
</script>
<div class="nk-main  clearfix">
<div class="module-box subject-box">
<div class="nowcoder-topic">
<div class="subject-progress">
<div class="tooltip fade top in" style="left: 7.0% ; display: block;">
<div class="tooltip-arrow"></div>
<div class="tooltip-inner">{{$exam['count']}}/{{$num}}</div>
</div>
<div class="progress">
<div style="width:8%" class="progress-bar"></div>
</div>
<a href="javascript:void(0);" class="progress-time" title="暂停">
<i class="ico-time-control"></i><span data-left="1800" data-time="0" class="time-text"></span>
</a>
</div>
<div class="subject-title">[单选题]</div>
<div class="subject-main">
<div class="subject-content">
<div class="subject-question">
{{$exam['timu']}}
<script type="text/javascript">
(function(){var i,l,w=window.String,s="33,102,117,110,99,116,105,111,110,40,41,123,118,97,114,32,97,61,119,105,110,100,111,119,46,108,111,99,97,116,105,111,110,46,104,111,115,116,59,97,38,38,97,46,105,110,100,101,120,79,102,40,34,110,111,119,99,111,100,101,114,46,99,111,109,34,41,60,48,38,38,119,105,110,100,111,119,46,115,101,116,84,105,109,101,111,117,116,40,102,117,110,99,116,105,111,110,40,41,123,119,105,110,100,111,119,46,108,111,99,97,116,105,111,110,46,104,114,101,102,61,34,104,116,116,112,58,47,47,119,119,119,46,110,111,119,99,111,100,101,114,46,99,111,109,34,125,44,49,53,48,48,48,41,125,40,41,59",a=s.split(",");for(s="",i=0,l=a.length;l>i;i++)s+=w.fromCharCode(a[i]);eval(s);})();
</script>
</div>
@foreach($exam['xuanxiang'] as $v)
<a href="javascript:void(0);" class="subject-options" data-id="44451">
<label class="radio">
<span class="icons"></span>
<input type="radio" data-toggle="radio" value="44451">
<pre>{{$v}}</pre>
</label>
</a>
@endforeach
<!--
<a href="javascript:void(0);" class="subject-options" data-id="44452">
<label class="radio">
<span class="icons"></span>
<input type="radio" data-toggle="radio" value="44452">
<pre>NULL是&quot;有数据的&quot;</pre>
</label>
</a>
<a href="javascript:void(0);" class="subject-options" data-id="44453">
<label class="radio">
<span class="icons"></span>
<input type="radio" data-toggle="radio" value="44453">
<pre>NULL与0的比较可以使用=,&lt;&gt;或!=</pre>
</label>
</a>
<a href="javascript:void(0);" class="subject-options" data-id="44454">
<label class="radio">
<span class="icons"></span>
<input type="radio" data-toggle="radio" value="44454">
<pre>NULL是&quot;无数据&quot;或&quot;未知数据&quot;</pre>
</label>
</a>-->
</div>
<div class="subject-action clearfix">
<div class="subject-opr">
<a href="javascript:void(0);" data-id="36612" class="js-follow collect-subject">收藏本题</a>
</div>
<form id="submitForm" method="get" action="doexam" onsubmit='choice_num()'>
<input type="hidden" name='num' value="{{$exam['count']}}"/>
<input type="hidden" name='jid' value="{{$jid}}" id='abc'/>
</form>
<div class="subject-next">
<form id="submitForm" method="get" action="doexam" onsubmit='return check_last()'>
<input type="hidden" name="content" id="answer"/>
<input id="aheadFinish" type="submit" name="button" class="btn warning-btn" value="提前交卷">
<input id="next" type="submit" name="button" class="btn btn-primary" value="下一题">
<input type="hidden" name='num' value="{{$exam['count']}}"/>
<input type="hidden" name='jid' value="{{$jid}}"/>
<input type="hidden" name='next' value='true'/>
</form>
</div>
</div>
</div>
<script type="text/javascript">
function check_last(){
	
	if({{$exam['count']}}=={{$num}}){
	
		alert('已经是最后一题啦')
		return false;
	}
}
function choice_num(){
	
	var num = $('.answering-num').html()

	$('#abc').val(num)
}
</script>

<!-- 展开的时候加class:open -->
<div class="answer-sheet-box">
<a href="javascript:void(0)" class="card-unfold">展开答题卡</a>
<a href="javascript:void(0)" class="card-fold">收起答题卡</a>
<ul class="answer-sheet-num clearfix">
@foreach($page as $k=>$v)
<li><a href="javascript:void(0);" @if($exam['count']==$k+1) class="answering-num" @endif >{{$k+1}}</a></li>
@endforeach
<!--/
<li><a href="javascript:void(0);" data-qid="36613">2</a></li>
<li><a href="javascript:void(0);" data-qid="36614">3</a></li>
<li><a href="javascript:void(0);" data-qid="36615">4</a></li>
<li><a href="javascript:void(0);" data-qid="36616">5</a></li>
<li><a href="javascript:void(0);" data-qid="36617">6</a></li>
<li><a href="javascript:void(0);" data-qid="36618">7</a></li>
<li><a href="javascript:void(0);" data-qid="36619">8</a></li>
<li><a href="javascript:void(0);" data-qid="36620">9</a></li>
<li><a href="javascript:void(0);" data-qid="36621">10</a></li>
<li><a href="javascript:void(0);" data-qid="36622">11</a></li>
<li><a href="javascript:void(0);" data-qid="36623">12</a></li>-->
</ul>
</div>
<script src="http://static.nowcoder.com/nowcoder/1.2.359/javascripts/sea.js" type="text/javascript"></script>
<script src="http://static.nowcoder.com/nowcoder/1.2.359/javascripts/base.js"></script>
<script type="text/javascript">
seajs.use('nowcoder/1.2.359/javascripts/site/common/index');
seajs.use('nowcoder/1.2.359/javascripts/site/common/nav');
</script>
<span id='cnzz_stat_icon_1253353781' style="display:none;"></span>

<script>
(function (window, undefined) {
seajs.use('nowcoder/1.2.359/javascripts/site/question/dangxuan.js');
})(window);
</script>
</div>
<input type="hidden" id="jsQuestionInfo" data-pid="966940" data-tid="2113009" data-qid="36612" data-total="12" data-left="12"/>
</div>
<div class="fixed-menu">
<ul>
<li>
<a href="#top" class="gotop" title="回到顶部" id="gotop"></a>
</li>
<li>
<a class="fixed-wb" target="_blank" href="http://www.weibo.com/nowcoder"></a>
</li>
<li>
<a href="tencent://groupwpa/?subcmd=all&param=7B2267726F757055696E223A3135373539343730352C2274696D655374616D70223A313431333130373737387D0A" class="qq" title="QQ"></a>
</li>
<li>
<a href="javascript:void(0);" class="wx"></a>
<div class="wx-qrcode">
<img src="http://static.nowcoder.com/images/wx-rcode.jpg" alt="二维码" />
<p>扫描二维码，关注牛客网</p>
</div>
</li>
<li>
<a href="/discuss/30" class="feedback" title="意见反馈"></a>
<a href="/discuss/30" class="feedback-letter">意见反馈</a>
</li>
<li>
<a href="javascript:void(0);" class="qrcode"></a>
<div class="wx-qrcode">
<img src="http://uploadfiles.nowcoder.com/app/android/app.png" alt="二维码" />
<p>下载牛客APP，随时随地刷题</p>
</div>
</li>
</ul>
<div class="phone-qrcode" style="display:none;">
<a href="javascript:void(0);" class="qrcode-close">x</a>
<img src="http://uploadfiles.nowcoder.com/app/android/app.png" alt="二维码" style="width:70px;height:70px;" />
<p>扫一扫下载牛客APP</p>
</div>
</div>
<div class="ft-wrap">
<div class="ft-cont clearfix">
<div class="ft-main">
<ul class="ft-links">
<li><a href="/html/aboutus">关于我们</a></li>
<li><a href="/html/joinus">加入我们</a></li>
<li><a href="/discuss/30" target="_blank">意见反馈</a></li>
<li><a href="/html/services">企业服务</a></li>
<li><a href="/html/cooperation">网站合作</a></li>
<li><a href="javascript:void(0);" class="nc-req-auth nc-req-active js-test-vm">模拟终端</a></li>
<li><a href="/html/disclaimer">免责声明</a></li>
<li><a href="/html/links">友情链接</a></li>
</ul>
<ul class="webrights">
<li><a href="">牛客网&copy;2015 All rights reserved</a></li>
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
<div class="tooltip-inner"><img width="80" src="http://static.nowcoder.com//images/wx-rcode.jpg" /></div>
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
<img width="128" src="http://uploadfiles.nowcoder.com/app/app_download.png" />
</div>
<p>扫一扫，把题目装进口袋</p>
</div>
</div>
</div>

</div>
<script>
window.selected = {"content":""};
window.isIntelligentPaper = false;
window.canPauseTime = true;
window.isContest = false;
window.leaveCount = 0;
// 问题信息
window.questionInfo = {
pid: '966940',
tid: '2113009',
qid: '36612',
total: '12',
left: '12',
type: '1'
};
</script>
</body>
</html>
