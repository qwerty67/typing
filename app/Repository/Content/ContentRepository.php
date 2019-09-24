<?php
/**
 * Created by PhpStorm.
 * User: Taha
 * Date: 9/23/2019
 * Time: 9:39 PM
 */

namespace App\Repository\Content;


use App\Model\Content;
use App\Model\Owner;
use App\Structures\Interfaces\Repository\ContentInterface;
use App\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;
use Laravel\Passport\Token;
use Lcobucci\JWT\Parser;

class ContentRepository implements ContentInterface, Authenticatable
{

    /**
     * @param $income
     * @return mixed
     */
    public function addContent($income)
    {

        $content = new Content([
            'subject' => $income['subject'],
            'content' => $income['content'],
            'hashtag' => $income['hashtag'],
        ]);
//
        $user = new User();
        $user->contentsRelation()->save($content);

        return [
            'result' => 'success',
            'message' => 'Post added!!'
        ];
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return Auth::loginUsingId(5);
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}