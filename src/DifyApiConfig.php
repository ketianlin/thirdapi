<?php

class DifyApiConfig extends CommonConfig
{
    private $api_base_url;
    private $bind_url;

    /**
     * @return mixed
     */
    public function getApiBaseUrl()
    {
        return $this->api_base_url;
    }

    /**
     * @param mixed $api_base_url
     */
    public function setApiBaseUrl($api_base_url)
    {
        $this->api_base_url = $api_base_url;
    }

    /**
     * @return mixed
     */
    public function getBindUrl()
    {
        return $this->bind_url;
    }

    /**
     * @param mixed $bind_url
     */
    public function setBindUrl($bind_url)
    {
        $this->bind_url = $bind_url;
    }

}