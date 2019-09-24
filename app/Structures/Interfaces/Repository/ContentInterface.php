<?php
/**
 * Created by PhpStorm.
 * User: Taha
 * Date: 9/23/2019
 * Time: 9:37 PM
 */

namespace App\Structures\Interfaces\Repository;


interface ContentInterface
{

    /**
     * @param $income
     * @return mixed
     */
    public function addContent($income);

}