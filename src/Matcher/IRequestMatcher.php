<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/25
 * Time: 12:43
 */

namespace Aw\Routing\Matcher;


use Aw\Http\Request;

interface IRequestMatcher
{
    /**
     * @param Request $request
     * @return bool
     */
    public function match(Request $request);
}