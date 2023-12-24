<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">
<head>

<meta http-equiv=X-UA-Compatible>
<meta charset=utf-8>

<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta content=width=device-width name=viewport>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
<style type="text/css">
table {
border-collapse: separate;
table-layout: fixed;
mso-table-lspace: 0pt;
mso-table-rspace: 0pt
}
table td {
border-collapse: collapse
}
.ExternalClass {
width: 100%
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
line-height: 100%
}
* {
line-height: inherit;
text-size-adjust: 100%;
-ms-text-size-adjust: 100%;
-moz-text-size-adjust: 100%;
-o-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale
}
html {
-webkit-text-size-adjust: none !important
}
img+div {
display: none;
display: none !important
}
img {
Margin: 0;
padding: 0;
}
h1, h2, h3, p, a {
line-height: 1;
overflow-wrap: normal;
white-space: normal;
word-break: break-word
}
a {
text-decoration: none
}
h1, h2, h3, p {
min-width: 100%!important;
width: 100%!important;
max-width: 100%!important;
display: inline-block!important;
border: 0;
padding: 0;
margin: 0
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;
font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important
}
a[href^="mailto"],
a[href^="tel"],
a[href^="sms"] {
color: inherit;
text-decoration: none
}
@media (min-width: 481px) {
.hd { display: none!important }
}
@media (max-width: 480px) {
.hm { display: none!important }
}
[style*="Albert Sans"] {font-family: 'Albert Sans', BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif !important;}
@media only screen and (min-width: 481px) {.t3{mso-line-height-alt:45px!important;line-height:45px!important;display:block!important}.t9{padding-left:50px!important;padding-bottom:60px!important;padding-right:50px!important}.t11{padding-left:50px!important;padding-bottom:60px!important;padding-right:50px!important;width:500px!important}.t15,.t23{width:250px!important}.t27,.t32{padding-bottom:15px!important}.t33{line-height:26px!important;font-size:24px!important;letter-spacing:-1.56px!important}.t40{padding:48px 50px!important}.t42{padding:48px 50px!important;width:500px!important}.t56,.t61{padding-bottom:44px!important}.t139{padding-bottom:60px!important;width:130px!important}.t144{padding-bottom:60px!important}.t262,.t267{padding-left:24px!important}}
</style>
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;500;700;800&display=swap" rel="stylesheet" type="text/css">
<!--<![endif]-->
<!--[if mso]>
<style type="text/css">
div.t3{mso-line-height-alt:45px !important;line-height:45px !important;display:block !important}td.t11,td.t9{padding-left:50px !important;padding-bottom:60px !important;padding-right:50px !important}td.t15,td.t23{width:250px !important}td.t27,td.t32{padding-bottom:15px !important}h1.t33{line-height:26px !important;font-size:24px !important;letter-spacing:-1.56px !important}td.t40,td.t42{padding:48px 50px !important}td.t56,td.t61{padding-bottom:44px !important}td.t139{padding-bottom:60px !important;width:130px !important}td.t144{padding-bottom:60px !important}td.t262,td.t267{padding-left:24px !important}
</style>
<![endif]-->
<!--[if mso]>
<xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml>
<![endif]-->
</head>
<body class=t0 style="min-width:100%;Margin:0px;padding:0px;background-color:#242424;"><div class=t1 style="background-color:#242424;"><table role=presentation width=100% cellpadding=0 cellspacing=0 border=0 align=center><tr><td class=t290 style="font-size:0;line-height:0;mso-line-height-rule:exactly;" valign=top align=center>
<!--[if mso]>
<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false">
<v:fill color=#242424 />
</v:background>
<![endif]-->
<table role=presentation width=100% cellpadding=0 cellspacing=0 border=0 align=center><tr><td><div class=t3 style="mso-line-height-rule:exactly;font-size:1px;display:none;">&nbsp;</div></td></tr><tr><td>
<table class=t10 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t11 style="background-color:#F8F8F8;overflow:hidden;width:540px;padding:0 30px 40px 30px;">
<!--<![endif]-->
<!--[if mso]><td class=t11 style="background-color:#F8F8F8;overflow:hidden;width:600px;padding:0 30px 40px 30px;"><![endif]-->
<table role=presentation width=100% cellpadding=0 cellspacing=0><tr><td>
<table class=t138  align=left><tr>
<!--[if !mso]><!--><td class=t139 style="width:80px;padding:0 0 50px 0;">
<!--<![endif]-->
<!--[if mso]><td class=t139 style="width:80px;padding:0 0 50px 0;"><![endif]-->
<div style="font-size:0px;"><img style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width="130px" height="130px" src="https://uploads.tabular.email/e/8bfdaf0f-ca62-486a-95aa-63e14d14fe32/2271cb1b-356a-4e72-9120-57fe8c1f4f98.jpeg"  /></div></td>

</tr></table>
</td></tr><tr><td>
<table class=t26 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t27 style="width:600px;padding:0 0 20px 0;">
<!--<![endif]-->
<!--[if mso]><td class=t27 style="width:600px;padding:0 0 20px 0;"><![endif]-->
<h1 class=t33 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:28px;font-weight:800;font-style:normal;font-size:26px;text-decoration:none;text-transform:none;letter-spacing:-1.04px;direction:ltr;color:#191919;text-align:left;mso-line-height-rule:exactly;mso-text-raise:1px;">{{$order['customer_name']}}, cảm ơn bạn đã đặt hàng.</h1></td>
</tr></table>
</td></tr><tr><td>
<table class=t148 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t149 style="width:600px;padding:0 0 22px 0;">
<!--<![endif]-->
<!--[if mso]><td class=t149 style="width:600px;padding:0 0 22px 0;"><![endif]-->
<p class=t155 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">Đơn đặt hàng của bạn đang được Male Fashion xử lý và đang trên đường đến. Bạn sẽ nhận được thông tin cập nhật từ chúng tôi về tình trạng đơn đặt hàng của bạn và việc giao bưu kiện.</p></td>
</tr></table>
</td></tr><tr><td>
<table class=t158 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t159 style="width:600px;">
<!--<![endif]-->
<!--[if mso]><td class=t159 style="width:600px;"><![endif]-->
<p class=t165 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;"><span class=t166 style="margin-bottom:0;Margin-bottom:0;font-weight:bold;mso-line-height-rule:exactly;">Email</span></p></td>
</tr></table>
</td></tr><tr><td>
<table class=t169 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t170 style="width:600px;padding:0 0 22px 0;">
<!--<![endif]-->
<!--[if mso]><td class=t170 style="width:600px;padding:0 0 22px 0;"><![endif]-->
<p class=t176 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">{{$order['customer_email']}}</p></td>
</tr></table>
</td></tr><tr><td>
<table class=t179 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t180 style="width:600px;">
<!--<![endif]-->
<!--[if mso]><td class=t180 style="width:600px;"><![endif]-->
<p class=t186 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;"><span class=t187 style="margin-bottom:0;Margin-bottom:0;font-weight:bold;mso-line-height-rule:exactly;">Số điện thoại</span></p></td>
</tr></table>
</td></tr><tr><td>
<table class=t201 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t202 style="width:600px;padding:0 0 22px 0;">
<!--<![endif]-->
<!--[if mso]><td class=t202 style="width:600px;padding:0 0 22px 0;"><![endif]-->
<p class=t208 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">{{$order['customer_phone']}}</p></td>
</tr></table>
</td></tr><tr><td>
<table class=t190 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t191 style="width:600px;">
<!--<![endif]-->
<!--[if mso]><td class=t191 style="width:600px;"><![endif]-->
<p class=t197 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;"><span class=t198 style="margin-bottom:0;Margin-bottom:0;font-weight:bold;mso-line-height-rule:exactly;">Địa chỉ giao hàng</span></p></td>
</tr></table>
</td></tr><tr><td>
<table class=t221 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t222 style="width:600px;">
<!--<![endif]-->
<!--[if mso]><td class=t222 style="width:600px;"><![endif]-->
<p class=t228 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">{{$order['customer_address']}}</p></td>
</tr></table>
</td></tr><tr><td>

</td></tr><tr><td>
</td></tr><tr><td><div class=t240 style="mso-line-height-rule:exactly;mso-line-height-alt:30px;line-height:30px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
<table class=t251 role=presentation cellpadding=0 cellspacing=0 align=center>
   
@foreach($orderDetail as $detail)
<tr>
    <!--[if !mso]><!-->
        
        <td class=t252 style="background-color:#FFFFFF;overflow:hidden;width:780px;padding:20px 20px 20px 20px;">
    <!--<![endif]-->
    <!--[if mso]><td class=t252 style="background-color:#FFFFFF;overflow:hidden;width:800px;padding:20px 20px 20px 20px;"><![endif]-->
    <div class=t258 style="display:inline-table;width:100%;text-align:left;vertical-align:middle;">
    <!--[if mso]>
    <table role=presentation cellpadding=0 cellspacing=0 align=left valign=middle><tr><td class=t283 style="width:10px;" width=10></td><td width=68.77673 valign=middle><![endif]-->
    <div class=t284 style="display:inline-table;text-align:initial;vertical-align:inherit;width:17.9821%;max-width:221px;"><div class=t285 style="padding:0 10px 0 10px;">
    <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t286><tr>
    <td class=t287><div style="font-size:0px;"><img class=t288 style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width=68.77673224978614 height=96.53125 src="{{asset('public/'.$detail->products->thumbnail)}}" /></div></td>
    </tr></table>
    </div></div>
    <!--[if mso]>
    </td><td class=t283 style="width:10px;" width=10></td><td class=t263 style="width:10px;" width=10></td><td width=205.30368 valign=middle><![endif]-->
    <div class=t264 style="display:inline-table;text-align:initial;vertical-align:inherit;width:40.44752%;max-width:620px;"><div class=t265 style="padding:0 10px 0 10px;">
    <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t266><tr>
    <td class=t247><h3 class=t248 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:16px;font-weight:700;font-style:normal;font-size:14px;text-decoration:none;text-transform:uppercase;color:#1A1A1A;text-align:left;">{{$detail->products->name}}</h3></td>
    </tr></table>
    </div></div>
    <!--[if mso]>
    </td><td class=t263 style="width:10px;" width=10></td><td class=t273 style="width:10px;" width=10></td><td width=125.91959 valign=middle><![endif]-->
    <div class=t244 style="display:inline-table;text-align:initial;vertical-align:inherit;width:15.57038%;max-width:100px;"><div class=t275 style="padding:0 10px 0 10px;">
    <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t276><tr>
    <td class=t277><h1 class=t278 style="text-align:center;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:uppercase;letter-spacing:-0.56px;direction:ltr;color:#333333;mso-line-height-rule:exactly;mso-text-raise:2px;"> {{$detail->qty}}</h1></td>
    </tr></table>
    </div></div>
    <div class=t164 style="display:inline-table;text-align:initial;vertical-align:inherit;width:25.44752%;max-width:200px;"><div class=t165 style="padding:0 10px 0 10px;">
        <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t266><tr>
        <td class=t247><h3 class=t248 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:16px;font-weight:700;font-style:normal;font-size:14px;text-decoration:none;text-transform:uppercase;color:#1A1A1A;text-align:left;">{{number_format($detail->qty * $detail->price)}} VND</h3></td>
        </tr></table>
        </div></div>
    <!--[if mso]>
    </td><td class=t273 style="width:10px;" width=10></td>
    </tr></table>
    <![endif]-->
    </div></td>
    
    
    </tr>
    @endforeach
    <tr>
        <!--[if !mso]><!-->
            
            <td class=t252 style="background-color:#FFFFFF;overflow:hidden;width:780px;padding:20px 20px 20px 20px;">
        <!--<![endif]-->
        <!--[if mso]><td class=t252 style="background-color:#FFFFFF;overflow:hidden;width:800px;padding:20px 20px 20px 20px;"><![endif]-->
        <div class=t258 style="display:inline-table;width:100%;text-align:left;vertical-align:middle;">
        <!--[if mso]>
        <table role=presentation cellpadding=0 cellspacing=0 align=left valign=middle><tr><td class=t283 style="width:10px;" width=10></td><td width=68.77673 valign=middle><![endif]-->
   
        <!--[if mso]>
        </td><td class=t283 style="width:10px;" width=10></td><td class=t263 style="width:10px;" width=10></td><td width=205.30368 valign=middle><![endif]-->
        <div class=t264 style="display:inline-table;text-align:initial;vertical-align:inherit;width:42%;max-width:620px;"><div class=t265 style="padding:0 10px 0 20px;">
        <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t266><tr>
        <td class=t247><h3 class=t248 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:16px;font-weight:700;font-style:normal;font-size:14px;text-decoration:none;text-transform:uppercase;color:#1A1A1A;text-align:left;">Tổng thanh toán</h3></td>
        </tr></table>
        </div></div>
   
        <div class=t364 style="display:inline-table;text-align:initial;vertical-align:inherit;width:56%;max-width:640px;"><div class=t165 style="padding:0 10px 0 10px;">
            <table role=presentation width=100% cellpadding=0 cellspacing=0 class=t266><tr>
            <td class=t247><h3 class=t248 style="margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:16px;font-weight:700;font-style:normal;font-size:14px;text-decoration:none;text-transform:uppercase;color:#1A1A1A;text-align:right;">{{number_format($order['total'])}} VND</h3></td>
            </tr></table>
            </div></div>
        <!--[if mso]>
        </td><td class=t273 style="width:10px;" width=10></td>
        </tr></table>
        <![endif]-->
        </div></td>
        
        
        </tr>
</table>
</td></tr><tr><td><div class=t250 style="mso-line-height-rule:exactly;mso-line-height-alt:30px;line-height:30px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
<table class=t211 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t212 style="width:600px;">
<!--<![endif]-->
<!--[if mso]><td class=t212 style="width:600px;"><![endif]-->
<p class=t218 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:14px;text-decoration:none;text-transform:none;letter-spacing:-0.56px;direction:ltr;color:#333333;text-align:left;mso-line-height-rule:exactly;mso-text-raise:2px;">Nhấp vào nút bên dưới để cập nhật trạng thái giao hàng của bạn.</p></td>
</tr></table>
</td></tr><tr><td><div class=t210 style="mso-line-height-rule:exactly;mso-line-height-alt:40px;line-height:40px;font-size:1px;display:block;">&nbsp;</div></td></tr><tr><td>
<table class=t14 role=presentation cellpadding=0 cellspacing=0 align=left><tr>
<!--[if !mso]><!--><td class=t15 style="background-color:#181818;overflow:hidden;width:353px;text-align:center;line-height:44px;mso-line-height-rule:exactly;mso-text-raise:10px;border-radius:44px 44px 44px 44px;">
<!--<![endif]-->
<!--[if mso]><td class=t15 style="background-color:#181818;overflow:hidden;width:353px;text-align:center;line-height:44px;mso-line-height-rule:exactly;mso-text-raise:10px;border-radius:44px 44px 44px 44px;"><![endif]-->
<span class=t21 style="display:block;margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:44px;font-weight:800;font-style:normal;font-size:12px;text-decoration:none;text-transform:uppercase;letter-spacing:2.4px;direction:ltr;color:#F8F8F8;text-align:center;mso-line-height-rule:exactly;mso-text-raise:10px;" target=_blank>THEO DÕI ĐƠN HÀNG</span></td>
</tr></table>
</td></tr></table></td>
</tr></table>
</td></tr><tr><td>
<table class=t41 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t42 style="background-color:#242424;overflow:hidden;width:540px;padding:40px 30px 40px 30px;">
<!--<![endif]-->
<!--[if mso]><td class=t42 style="background-color:#242424;overflow:hidden;width:600px;padding:40px 30px 40px 30px;"><![endif]-->
<table role=presentation width=100% cellpadding=0 cellspacing=0><tr><td>

</td></tr><tr><td>
<table class=t55 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t56 style="overflow:hidden;width:800px;padding:10px 0 36px 0;">
<!--<![endif]-->
<!--[if mso]><td class=t56 style="overflow:hidden;width:800px;padding:10px 0 36px 0;"><![endif]-->
<div class=t62 style="display:inline-table;width:100%;text-align:center;vertical-align:top;">
<!--[if mso]>
<table role=presentation cellpadding=0 cellspacing=0 align=center valign=top><tr><td class=t67 style="width:10px;" width=10></td><td width=24 valign=top><![endif]-->
<div class=t68 style="display:inline-table;text-align:initial;vertical-align:inherit;width:20%;max-width:44px;"><div class=t69 style="padding:0 10px 0 10px;">
<table role=presentation width=100% cellpadding=0 cellspacing=0 class=t70><tr>
<td class=t71><div style="font-size:0px;"><img class=t72 style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width=24 height=24 src=https://uploads.tabular.email/e/2feb9749-6369-44a9-90e9-1c26bf36c1a5/90e14628-2d8f-4c64-af7a-410b0a53d60c.png /></div></td>
</tr></table>
</div></div>
<!--[if mso]>
</td><td class=t67 style="width:10px;" width=10></td><td class=t107 style="width:10px;" width=10></td><td width=24 valign=top><![endif]-->
<div class=t108 style="display:inline-table;text-align:initial;vertical-align:inherit;width:20%;max-width:44px;"><div class=t109 style="padding:0 10px 0 10px;">
<table role=presentation width=100% cellpadding=0 cellspacing=0 class=t110><tr>
<td class=t111><div style="font-size:0px;"><img class=t112 style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width=24 height=24 src=https://uploads.tabular.email/e/b158fd0c-1d9a-41bb-885b-099af24afa59/bbde14ea-031f-4dfe-bb34-39af4949882b.png /></div></td>
</tr></table>
</div></div>
<!--[if mso]>
</td><td class=t107 style="width:10px;" width=10></td><td class=t97 style="width:10px;" width=10></td><td width=24 valign=top><![endif]-->
<div class=t98 style="display:inline-table;text-align:initial;vertical-align:inherit;width:20%;max-width:44px;"><div class=t99 style="padding:0 10px 0 10px;">
<table role=presentation width=100% cellpadding=0 cellspacing=0 class=t100><tr>
<td class=t101><div style="font-size:0px;"><img class=t102 style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width=24 height=24 src=https://uploads.tabular.email/e/b158fd0c-1d9a-41bb-885b-099af24afa59/b6f1e7ce-8c7b-41ee-b453-746aaf5e9b57.png /></div></td>
</tr></table>
</div></div>
<!--[if mso]>
</td><td class=t97 style="width:10px;" width=10></td><td class=t87 style="width:10px;" width=10></td><td width=24 valign=top><![endif]-->
<div class=t88 style="display:inline-table;text-align:initial;vertical-align:inherit;width:20%;max-width:44px;"><div class=t89 style="padding:0 10px 0 10px;">
<table role=presentation width=100% cellpadding=0 cellspacing=0 class=t90><tr>
<td class=t91><div style="font-size:0px;"><img class=t92 style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width=24 height=24 src=https://uploads.tabular.email/e/2feb9749-6369-44a9-90e9-1c26bf36c1a5/8cf62035-acff-4f30-bb51-13faa775bd9f.png /></div></td>
</tr></table>
</div></div>
<!--[if mso]>
</td><td class=t87 style="width:10px;" width=10></td><td class=t77 style="width:10px;" width=10></td><td width=24 valign=top><![endif]-->
<div class=t78 style="display:inline-table;text-align:initial;vertical-align:inherit;width:20%;max-width:44px;"><div class=t79 style="padding:0 10px 0 10px;">
<table role=presentation width=100% cellpadding=0 cellspacing=0 class=t80><tr>
<td class=t81><div style="font-size:0px;"><img class=t82 style="display:block;border:0;height:auto;width:100%;Margin:0;max-width:100%;" width=24 height=24 src=https://uploads.tabular.email/e/b158fd0c-1d9a-41bb-885b-099af24afa59/8e37593e-8033-4bc9-9fee-951849506678.png /></div></td>
</tr></table>
</div></div>
<!--[if mso]>
</td><td class=t77 style="width:10px;" width=10></td>
</tr></table>
<![endif]-->
</div></td>
</tr></table>
</td></tr><tr><td>
<table class=t125 role=presentation cellpadding=0 cellspacing=0 align=center><tr>
<!--[if !mso]><!--><td class=t126 style="width:600px;">
<!--<![endif]-->
<!--[if mso]><td class=t126 style="width:600px;"><![endif]-->
<p class=t132 style="margin-bottom:0;Margin-bottom:0;font-family:BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,sans-serif,'Albert Sans';line-height:22px;font-weight:500;font-style:normal;font-size:12px;text-decoration:none;text-transform:none;direction:ltr;color:#888888;text-align:center;mso-line-height-rule:exactly;mso-text-raise:3px;">ấp Tà Lóc, xã Sơn Kiên, huyện Hòn Đất, tỉnh Kiên Giang.</p></td>
</tr></table>
</td></tr><tr><td>

</td></tr></table></td>
</tr></table>
</td></tr></table></td></tr></table></div></body>

</html>