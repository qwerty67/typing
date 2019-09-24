<?php
/**
 * Created by PhpStorm.
 * User: Taha
 * Date: 9/23/2019
 * Time: 9:40 PM
 */

namespace App\GraphQL\User\Mutation\Content\Resolver;


use App\Endpoints\User\Content;
use App\Structures\Abstracts\ResolverAbstract;

class AddContent extends ResolverAbstract
{

    /**
     * @param $data
     * @param $context
     * @param $selectionField
     * @return mixed
     */
    public function endpointResolver($data, $context, $selectionField)
    {
        $endpoint = new Content();
        return $endpoint->addContent($data);
    }
}