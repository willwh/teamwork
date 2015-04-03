<?php  namespace Rossedman\Teamwork; 

use Rossedman\Teamwork\Traits\RestfulTrait;

class People extends Object {

    use RestfulTrait;

    protected $wrapper  = 'person';

    protected $endpoint = 'people';

    /**
     * GET /me.json
     */
    public function me()
    {
        return $this->client->get("me")->response();
    }

    /**
     * Get All API Keys
     * GET /people/APIKeys.json
     *
     * @return mixed
     */
    public function apiKeys()
    {
        return $this->client->get("$this->endpoint/APIKeys")->response();
    }

}