<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cate;
class SidServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $cates = Cate::where('is_enabled', 1)->where('parent_id', 0)->get();
        foreach ($cates as $k => $v) {
            $cates_num = Cate::where('is_enabled', 1)->where('parent_id', $v['cate_id'])->count();
            $cates[$k]['son_num'] = $cates_num;
        }

        $cate_son = Cate::where('is_enabled', 1)->where('parent_id', '>', 0)->get();
        $cate_list = array(
            'cates' => $cates,
            'son'   => $cate_son
        );
        view()->share('cate_list', $cate_list);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
