<?php
include('./admin/DB.php');
$db=new DB();
include('./header.php');
?>

<div class="main1">
	<div class="m1_left">
		<h3 class="ltitle">
			<span><a href="#"><img src="images/more.jpg" alt="更多"/></a></span>
			<strong class="on"><a href="product.php">最新产品</a></strong>
		</h3>
		<div  class="m1_body c">

<div id='demo'>
	<table cellpadding='0' cellspacing='0'>
		<tr>
			<td id='demo1'>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<?php
				 
				?>
				<td>
					<a href="product_show.php" title=""><img src="images/p1.jpg" alt=""/><br/>产品一</a>
				</td>
				
			</tr>
		</table>
			</td>
			<td id="demo2" valign="top"></td>
		</tr>
	</table>
</div>
<script type="text/javascript">

  var speed=15;
  demo2.innerHTML=demo1.innerHTML;
  function Marquee(){
  if(demo2.offsetWidth-demo.scrollLeft<=0)
  demo.scrollLeft-=demo1.offsetWidth;
  else{
  demo.scrollLeft++;
  }
  }
  var MyMar=setInterval(Marquee,speed);
  demo.onmouseover=function() {clearInterval(MyMar);}
  demo.onmouseout=function() {MyMar=setInterval(Marquee,speed);}

</script>
		</div>
	</div>
	<div class="m2_right">
		<h3 class="rtitle">合作媒体</h3>
		<div class="m2_body m2_body2">
			<p><img src="images/m2_pic.png" alt=""/></p>
			<p align="center"><a href="about.php?id=3">查看更多合作媒体 &gt;&gt;</a></p>
		</div>		
	</div>
	<div class="c"></div>
</div>

<div class="main1">
	<div class="m3_left">
		<div class="m3_ll">
			<h3 class="ltitle"><span><a href="about.php?id=1"><img src="images/more.jpg" alt="更多"/></a></span><strong class="on">公司简介</strong></h3>
			<div class="m1_body c">
				<p>　　公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介。</p>
				<p>　　公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介，公司简介公司简介。</p>
			</div>
		</div>
		<div class="m3_lr">
			<h3 class="ltitle"><span><a href="news.php"><img src="images/more.jpg" alt="更多"/></a></span><strong class="on">新闻资讯</strong></h3>
			<ul class="m1_body c">
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
				<li><span>2-16</span><a href="content.php?id=1">公司新闻一</a></li>
			</ul>
		</div>
		<div class="c"></div>
	</div>
	<div class="m2_right">
		<h3 class="rtitle">友情连接</h3>
		<ul class="m2_body">
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
			<li><a href="http://www.itsource.cn" target="_blank">源码时代官方网站</a></li>
		</ul>		
	</div>
	<div class="c"></div>
</div>
 <?php
include('./footer.php');
 ?>