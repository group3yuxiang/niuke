<?php echo view("header/login")?>

<script>
window.globalInfo = {};
</script>
<div class="test-tab-wrap">
<div class="test-tab-cont clearfix">
<ul class="test-tab clearfix">
<li><a href="../contestroom.htm">公司真题模考</a></li>
<li><a href="../intelligenttest.htm">智能专项练习</a></li>
<li><a href="oj.htm">在线编程</a></li>
<li class="selected"><a href="topics.htm">精华专题</a></li>
<li><a href="../questioncenter.htm">试题广场</a></li>
</ul>
</div>
</div>
<div class="nk-main test-center-page clearfix">
<div class="mini-banner">
<a href="../courses/1.htm"><img src="{{ url('images') }}/courses/jp-course.png"></a>
</div>
<div class="test-center-bar">
<ul class="test-center-menu">
<li class="selected">
<div class="tcm-mod">
<h4 class="tcm-hd"><a href="topicstype0">全部</a></h4>
</div>
</li>
<li>
<div class="tcm-mod">
<h4 class="tcm-hd"><a href="topicstype4">考前突击</a></h4>
</div>
</li>
<li>
<div class="tcm-mod">
<h4 class="tcm-hd"><a href="topicstype2">公司专题</a></h4>
</div>
</li>
<li>
<div class="tcm-mod">
<h4 class="tcm-hd"><a href="topicstype6">限时活动</a></h4>
</div>
</li>
</ul>
<div class="module-box">
<a href="reward" class="btn btn-primary btn-block">挑战编程赚牛币</a>
</div>
</div>
<!--主体内容-->
<div class="nk-content">
<div class="module-box">
<div class="menu-box">
<ul class="menu clearfix">
<li class="selected"><a href="topicstype0">最新</a></li>
<li><a href="topicstype0orderbyhotvalue2">最热</a></li>
</ul>
</div>
<div class="module-body">
<ul class="topic-list clearfix">
<li>
<a class="topic-img" href="../ta/acm-solutions">
<img src="{{ url('images') }}/topic/acm-topic.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="ACM解题大全">ACM解题大全</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">9830</span>题</div>
<div class="tq-join"><span class="font-green">2802</span>人
练习</div>
</div>
<a href="../ta/acm-solutions" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../ta/review-c">
<img src="{{ url('images') }}/topics/ta-c.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="C/C++面试经典题目合集">C/C++面试经典题目合集</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">19</span>题</div>
<div class="tq-join"><span class="font-green">1255</span>人
练习</div>
</div>
<a href="../ta/review-c" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../ta/review-test">
<img src="{{ url('images') }}/topics/ta-test.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="软件测试面试经典题目合集">软件测试面试经典题目合集</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">24</span>题</div>
<div class="tq-join"><span class="font-green">661</span>人
练习</div>
</div>
<a href="../ta/review-test" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../ta/review-java">
<img src="{{ url('images') }}/topics/ta-java.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="JAVA面试经典题目合集">JAVA面试经典题目合集</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">120</span>题</div>
<div class="tq-join"><span class="font-green">2269</span>人
练习</div>
</div>
<a href="../ta/review-java" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../ta/review-network">
<img src="{{ url('images') }}/topics/ta-network.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="计算机网络面试经典题目合集">计算机网络面试经典题目合集</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">11</span>题</div>
<div class="tq-join"><span class="font-green">597</span>人
练习</div>
</div>
<a href="../ta/review-network" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="campus2016.htm">
<img src="{{ url('images') }}/img/bg/campus2016-1.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="IT名企校招指南">IT名企校招指南</h3>
<div class="topic-detail clearfix">
<div class="tq-sum" style="visibility:hidden">共有题</div>
<div class="tq-join" style="visibility:hidden">人练习</div>
</div>
<a href="campus2016.htm" class="btn btn-primary btn-sm">
马上参加
</a>
</div>
</li>
<li>
<a class="topic-img" href="../ta/front-end-interview.htm">
<img src="{{ url('images') }}/img/bg/js-mianshi.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="JS面试经典题目合集">JS面试经典题目合集</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">77</span>题</div>
<div class="tq-join"><span class="font-green">37831</span>人
练习</div>
</div>
<a href="../ta/front-end-interview.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../review.htm">
<img src="{{ url('images') }}/img/bg/review-1.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="计算机期末备考练习">计算机期末备考练习</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">598</span>题</div>
<div class="tq-join"><span class="font-green">16246</span>人
练习</div>
</div>
<a href="../review.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../ta/nine-chapter">
<img src="{{ url('images') }}/img/bg/nine-217.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="BAT经典面试题汇总">BAT经典面试题汇总</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">69</span>题</div>
<div class="tq-join"><span class="font-green">29530</span>人
练习</div>
</div>
<a href="../ta/nine-chapter" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../companycenterterminal_134.htm">
<img src="{{ url('images') }}/res/essencetopic/al.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="阿里巴巴">阿里巴巴</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">1715</span>题</div>
<div class="tq-join"><span class="font-green">395</span>人
关注</div>
</div>
<a href="../companycenterterminal_134.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../companycenterterminal_138.htm">
<img src="{{ url('images') }}/res/essencetopic/tx.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="腾讯">腾讯</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">929</span>题</div>
<div class="tq-join"><span class="font-green">238</span>人
关注</div>
</div>
<a href="../companycenterterminal_138.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../companycenterterminal_139.htm">
<img src="{{ url('images') }}/res/essencetopic/bd.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="百度">百度</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">1059</span>题</div>
<div class="tq-join"><span class="font-green">219</span>人
关注</div>
</div>
<a href="../companycenterterminal_139.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../companycenterterminal_140.htm">
<img src="{{ url('images') }}/res/essencetopic/rr.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="人人">人人</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">226</span>题</div>
<div class="tq-join"><span class="font-green">10</span>人
关注</div>
</div>
<a href="../companycenterterminal_140.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../companycenterterminal_141.htm">
<img src="{{ url('images') }}/res/essencetopic/quna.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="去哪儿">去哪儿</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">116</span>题</div>
<div class="tq-join"><span class="font-green">24</span>人
关注</div>
</div>
<a href="../companycenterterminal_141.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
<li>
<a class="topic-img" href="../companycenterterminal_144.htm">
<img src="{{ url('images') }}/res/essencetopic/google.png" />
</a>
<div class="topic-info">
<h3 class="topic-head" title="google">google</h3>
<div class="topic-detail clearfix">
<div class="tq-sum">共有<span class="font-green">122</span>题</div>
<div class="tq-join"><span class="font-green">25</span>人
关注</div>
</div>
<a href="../companycenterterminal_144.htm" class="btn btn-primary btn-sm">
马上练习
</a>
</div>
</li>
</ul>
<div class="pagination">
<ul data-total="2">
<li class="txt-pager disabled js-first-pager"><a data-page="1" href="javascript:void(0)">首页</a></li>
<li class="txt-pager disabled js-pre-pager"><a data-page="1" href="javascript:void(0)">上一页</a></li>
<li class="active js-1-pager"><a href="javascript:void(0)" data-page="1">1</a></li>
<li class="js-2-pager"><a href="topicstype0page2" data-page="2">2</a></li>
<li class="txt-pager js-next-pager"><a data-page="2" href="topicstype0page2">下一页</a></li>
<li class="txt-pager js-last-pager"><a data-page="2" href="topicstype0page2">末页</a></li>
</ul>
</div>
</div>
</div>
<?php echo view("index.footer")?>

</div>
<script src="{{ asset('js/sea.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/base.js')}}"></script>
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
