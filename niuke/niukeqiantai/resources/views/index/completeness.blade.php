<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>牛客网-完善资料</title>
<meta name="description" content="">
<link rel="stylesheet" href="{{ URL::asset('css/nowcoder-ui.css') }}">
<script>
var _czc = _czc || [];
_czc.push(["_setAccount", "1253353781"]);
</script>
<script src="{{ URL::asset('js/completenessV2.js') }}" async="" charset="utf-8"></script>
<script src="{{ URL::asset('js/swfupload.js') }}" async="" charset="utf-8"></script>
<script src="{{ URL::asset('js/avatarDialog.js') }}" async="" charset="utf-8"></script>
</head>
<body>
<?php echo view("header.register_header");?>
<script>
window.globalInfo = {};
window.globalInfo.ownerId = '388158';
window.globalInfo.ownerName = '牛客388158号';
window.globalInfo.ownerTinyHead = 'http://www.exam.com/laraval/niukeqiantai/public/images/957m.png';
window.globalInfo.ownerMainHead = 'http://www.exam.com/laraval/niukeqiantai/public/images/957m.png';
window.globalInfo.ownerEmail = '694845140@qq.com';
window.globalInfo.status = '1';
window.globalInfo.honorLevel = '0';
</script>
<div class="nk-main clearfix">
<!--主体内容-->
<div class="full-cell head-nickname">
<div class="module-box clearfix">
<div class="module-head clearfix">
<h1>完善资料</h1>

</div>
<div class="module-body">
<div class="head-nickname-main">
<div class="welcome-here">
<h2><span class="flag-ico"></span> 欢迎开通牛客网</h2>
</div>
<div class="head-nikname-bg">
<div class="head-nikname-box">
<div class="head-box">
<img src="http://www.exam.com/laraval/niukeqiantai/public/images/957m_002.png" alt="头像" id="headIpt" height="150" width="150">
<a href="javascript:void(0);" class="set-head">设置头像</a>
<div class="set-head-bg"><object id="SWFUpload_0" type="application/x-shockwave-flash" data="{{ URL::asset('swfupload.swf') }}" class="swfupload" height="50" width="150"><param name="wmode" value="transparent"><param name="movie" value="/swf/swfupload.swf"><param name="quality" value="high"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="flashvars" value="movieName=SWFUpload_0&amp;uploadURL=%2FuploadImage%3Ftype%3D1&amp;useQueryString=false&amp;requeueOnError=false&amp;httpSuccess=&amp;assumeSuccessTimeout=0&amp;params=NOWCODERUID%3DEA8AE3A020BBE7A9096342E2A81FD9B3%26amp%3B_cnzz_CV1253353781%3D%2525E6%252598%2525AF%2525E5%252590%2525A6%2525E7%252599%2525BB%2525E5%2525BD%252595%25257C%2525E6%25259C%2525AA%2525E7%252599%2525BB%2525E5%2525BD%252595%25257C1447159438350%26amp%3BCNZZDATA1253353781%3D242943630-1446710239-http%2525253A%2525252F%2525252Fwww.baidu.com%2525252F%25257C1447152235%26amp%3BSERVERID%3D04b0d01c5f76391d48534b2801b3cad1%257C1447152259%257C1447152234%26amp%3BNOWCODERCLINETID%3DA7FFD0124D948C95FBB322C484126B1C%26amp%3Bt%3D556A1BB3297EAEF4B9C98E5270348A09%26amp%3Btype%3D1%26amp%3Btoken%3D&amp;filePostName=Filedata&amp;fileTypes=*.jpg%3B*.JPG%3B*.png%3B*.PNG%3B*.gif%3B*.GIF%3B*.bmp%3B*.BMP%3B*.jpeg%3B*.JPEG&amp;fileTypesDescription=%E6%96%87%E4%BB%B6%E4%B8%8A%E4%BC%A0&amp;fileSizeLimit=5MB&amp;fileUploadLimit=0&amp;fileQueueLimit=1&amp;debugEnabled=false&amp;buttonImageURL=%2Fimages%2Fopacitybg.png&amp;buttonWidth=150&amp;buttonHeight=50&amp;buttonText=&amp;buttonTextTopPadding=0&amp;buttonTextLeftPadding=0&amp;buttonTextStyle=color%3A%20%23000000%3B%20font-size%3A%2016pt%3B&amp;buttonAction=-110&amp;buttonDisabled=false&amp;buttonCursor=-2"></object></div>
</div>
{!! Form::open(['url'=>'nickname']) !!}
<div id="component_0_input_0" class="control-group">

{!! Form::text("nickname",null,['placeholder'=>'起一个响亮的名字吧'])!!}
<input type="hidden" name="email" value="<?php echo $email;?>">
</div>
{!! Form::submit('确定',['class'=>'btn btn-block btn-primary']) !!}


{!! Form::close() !!}


<!--其他三种情况-->

</div>
</div>
</div>
</div>
</div>
</div>


<!--主体内容结束-->
<?php echo view("index.footer");?>

<script src="{{URL::asset('js/sea.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/base.js')}}"></script>
<script type="text/javascript">
seajs.use('nowcoder/1.2.348/javascripts/site/common/index');
seajs.use('nowcoder/1.2.348/javascripts/site/common/nav');
</script>
<span id="cnzz_stat_icon_1253353781" style="display:none;"></span>

<script type="text/javascript">
//seajs.use('nowcoder/1.2.348/javascripts/site/login/completenessV2.js');
</script>


<script src="{{URL::asset('js/stat.php')}}" type="text/javascript"></script></body></html>