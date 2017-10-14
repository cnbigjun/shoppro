@section('hacker_header')
@show{{-- 黑客头部申明区域 --}}

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>@section('title')管理后台 @show{{-- 页面标题 --}}</title>
    <meta name="renderer" content="webkit">{{-- 360浏览器使用webkit内核渲染页面 --}}
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />{{-- IE(内核)浏览器优先使用高版本内核 --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    @section('meta')
    @show{{-- 添加一些额外的META申明 --}}

    @section('head_css')
    @show{{-- head区域css样式表 --}}

    @section('head_js')
    @show{{-- head区域javscript脚本 --}}

    @section('beforeStyle')
    @show{{-- 在内联样式之前填充一些东西 --}}

    @section('head_style')
    @show{{-- head区域内联css样式表 --}}

    @section('afterStyle')
    @show{{-- 在内联样式之后填充一些东西 --}}

</head>
<body>

    @section('header')
    @show{{--头信息--}}

    @section('search')
    @show{{--搜索框--}}

    @section('user-nav')
    @show{{--导航栏--}}

    @section('sidebar')
    @show{{--侧边栏--}}

    @section('content')
    @show{{--内容展示--}}

    @section('js')
    @show{{--尾部js--}}
</body>
</html>

@section('hacker_footer')
@show{{-- 黑客尾部申明区域 --}}
