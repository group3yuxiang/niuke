<!DOCTYPE html>



<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>牛客网-注册</title>
<script>
var _czc = _czc || [];
_czc.push(["_setAccount", "1253353781"]);
</script>
<link rel="stylesheet" href="{{URL::asset('css/reglogin.css') }}">
</head>
<body>
<?php echo view('index.header')?>
<div class="nk-main clearfix">
<div class="wrapper">
<div class="tabbed">
<ul class="clearfix">
<li><a href="{{ url('login') }}"><span class="tab-login"></span>登录</a></li>
<li class="tab-selected"><a href="javascript:void(0);"><span class="tab-reg"></span>注册</a></li>
</ul>
</div>
<div class="wrapper-content clearfix">
<div class="input-section">
{!! Form::open(['url'=>'register_info']) !!}
<div class="form-group">

{!! Form::label('emailIpt','电子邮箱:',['class'=>'control-label']) !!}
<div class="control-group">
{!! Form::email('email',null,['placeholder'=>'请输入邮箱']) !!}
</div>
</div>
<div class="form-group">

{!! Form::label('passwordIpt','密码:',['class'=>'control-label']) !!}
<div class="control-group">
{!! Form::password('password',['placeholder'=>'请输入密码']) !!}
</div>
</div>
<div class="form-group">
{!! Form::label('passwordIpt2','重输密码:',['class'=>'control-label']) !!}
<div class="control-group">
{!! Form::password('q_password',['placeholder'=>'请重复输入密码']) !!}
</div>
</div>
<div class="form-group">
{!! Form::label('input-rqcode','输入验证码:',['class'=>'control-label']) !!}
<div class="control-group input-rqcode-box">
<input type="text" id="rqcodeIpt" maxlength="4" placeholder="请输入验证码" />
<a href="javascript:void(0);" class="rq-img">
<img src="/captcha/register" alt="验证码" />
</a>
<a href="javascript:void(0);" class="rq-refresh"></a>
</div>
</div>
<div class="form-group">
<div class="col-input-login">
<!--<a class="btn btn-primary btn-block" href="javascript:void(0);" id="registerBtn">立即注册</a>
<input type="submit" class="nk-invisible" />-->
 {!! Form::submit('立即注册',['class'=>'btn btn-primary btn-block']) !!}
</div>
</div>
{!! Form::close() !!}
</div>
<div class="other-login-way">
<span class="separate-line">或</span>
<div class="login-way">
<a href="javascript:void(0);" data-href="https://graph.qq.com/oauth2.0/authorize?client_id=101003590&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/qqconfig&state=web&scope=get_user_info" class="nc-js-action-oauth login-qq">QQ账号登录</a>
<a href="javascript:void(0);" data-href="https://api.weibo.com/oauth2/authorize?client_id=3023520088&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/sinaconfig&state=web&scope=follow_app_official_microblog" class="nc-js-action-oauth login-wb">微博账号登录</a>
<a href="javascript:void(0);" data-href="https://open.weixin.qq.com/connect/qrconnect?appid=wxfee0340998de6ab1&redirect_uri=http%3A%2F%2Fwww.nowcoder.com%2Foauth2%2Flogin%2Fweixin?&response_type=code&scope=snsapi_login&state=11" class="nc-js-action-oauth login-wx">微信账号登录</a>
<a href="javascript:void(0);" data-href="https://graph.renren.com/oauth/authorize?client_id=33356a41ddac4028a9ad64925e68c0e0&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/rrconfig&state=web" class="nc-js-action-oauth login-rr">人人账号登录</a>
<a href="javascript:void(0);" data-href="https://github.com/login/oauth/authorize?client_id=1c539827b9400016d0c9&response_type=code&redirect_uri=http://www.nowcoder.com/oauth2/gitconfig&state=web&scope=user:email" class="nc-js-action-oauth login-git">Github账号登录</a>
</div>
</div>
</div>
</div>
</div>

<?php echo view('index.footer')?>
</div>
</div>

</div>
<script src="{{URL::asset('js/sea.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/base.js')}}"></script>
<script type="text/javascript">
seajs.use('nowcoder/1.2.346/javascripts/site/common/index');
seajs.use('nowcoder/1.2.346/javascripts/site/common/nav');
</script>
<span id='cnzz_stat_icon_1253353781' style="display:none;"></span>
<script type="text/javascript">
//seajs.use('nowcoder/1.2.346/javascripts/site/login/register.js');
</script>
</body>
</html>
