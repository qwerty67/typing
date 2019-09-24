<?php
//
//namespace App\GraphQL\Query;
//
//use App\User;
//use Closure;
//use GraphQL\Type\Definition\ResolveInfo;
//use GraphQL\Type\Definition\Type;
//use Rebing\GraphQL\Support\Query;
//use Rebing\GraphQL\Support\SelectFields;
//use Rebing\GraphQL\Support\Facades\GraphQL;
//
//class UsersQuery extends Query
//{
//    protected $attributes = [
//        'name' => 'Users Query',
//        'description' => 'A query of users'
//    ];
//
//    /**
//     * @return Type
//     */
//    public function type(): Type
//    {
//        return Type::listOf(GraphQL::type('users'));
//    }
//
//    // arguments to filter query
//    public function args(): array
//    {
//        return [
//            'id' => [
//                'name' => 'id',
//                'type' => Type::int()
//            ],
//        ];
//    }
//
//    public function resolve($root, $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
//    {
//        if (isset($args['id'])) {
//            return User::where('id' , $args['id'])->get();
//        }
//        return User::all();
//
//    }
//}