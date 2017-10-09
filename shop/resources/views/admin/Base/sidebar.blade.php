<div id="sidebar">
        <!-- <a href="#" class="visible-phone"><i class="icon icon-home"></i> 首页</a> -->
        <ul>
            <li class=""><a href="{{url('admin/index')}}"><i class="icon icon-home"></i> <span>首页</span></a></li>
            @foreach ($cate_list['cates'] as $list)

                <li class="submenu">
                    <a href="{{$list->url}}"><i class="icon icon-th-list"></i> <span>{{$list->cate_name}}</span> <span class="label">
                    @if($list->son_num <= 0)

                    @else
                    {{$list->son_num}}
                    @endif
                    </span></a>
                    <ul>
                    @foreach($cate_list['son'] as $son)
                        @if($son->parent_id == $list->cate_id)
                        <li><a href="{{$son->url}}">{{$son->cate_name}}</a></li>
                        @endif
                    @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>

    </div>

    {{--<div id="style-switcher">--}}

        {{--<i class="icon-arrow-left icon-white"></i>--}}
        {{--<span>Style:</span>--}}
        {{--<a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>--}}
        {{--<a href="#blue" style="background-color: #2D2F57;"></a>--}}
        {{--<a href="#red" style="background-color: #673232;"></a>--}}
    {{--</div>--}}
