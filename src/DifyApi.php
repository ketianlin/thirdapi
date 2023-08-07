<?php

class DifyApi extends Base
{
    /**
     * @var DifyApiConfig
     */
    protected $config;
    public function __construct(DifyApiConfig $config)
    {
        $this->config = $config;
    }

    public function bind()
    {
        $url = 'http://www.xinfadi.com.cn/getCat.html';
        $data = HttpHelper::FormPost($url, ['prodCatid'=>1186],['User-Agent'=>'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36']);
        return ['code'=>200, 'msg'=>'ok', 'data'=>$data];
    }
}