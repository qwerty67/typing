<?php

namespace App\Repository\User;

use App\User;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Object_;
use Illuminate\Database\Eloquent\Model;
use App\Structures\Abstracts\RepositoryAbstract;
use Intervention\Image\Exception\NotFoundException;
use App\Structures\Interfaces\Repository\UserInterface;

class UserRepository implements UserInterface
{
    /**
     * @param $income
     * @return
     */
    public function findById($income)
    {
//            $user = DB::table('users')->where('id', $income['id'])->get();
//        $user = User::find($income['id']);
        $user = User::where('id', $income['id'])->get();

        return $user;

//        throw new NotFoundException('not found');

    }

    /**
     * @param $income
     * @return mixed
     */
    public function SignUp($income)
    {
        $user = new User();

        $user->name = $income['name'];
        $user->family = $income['family'];
        $user->username = $income['username'];
        $user->email = $income['email'];
        $user->password = bcrypt($income['password']);
        $user->job = $income['job'];
        $user->gender = $income['gender'];
        $user->description = $income['description'];
        $user->phone = $income['phone'];
        $user->city = $income['city'];

        $user->save();

        return [
            'result' => 'success',
            'message' => 'User created!!'
        ];
    }
}