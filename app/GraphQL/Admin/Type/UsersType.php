<?php
//
//namespace App\GraphQL\Admin\Type;
//
//
//use App\User;
//use GraphQL\Type\Definition\Type;
//use Rebing\GraphQL\Support\Facades\GraphQL;
//use Rebing\GraphQL\Support\Type as GraphQLType;
//
//class UsersType extends GraphQLType
//{
//    protected $attributes = [
//        'name' => 'Users',
//        'description' => 'A type',
//        'model' => User::class, // define model for users type
//    ];
//
//    /**
//     * @return array
//     */
//    public function fields(): array
//    {
//        return [
//            'id' => [
//                'type' => Type::nonNull(Type::int())
//            ],
//            'name' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'family' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'username' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'avatar' => [
//                'type' => Type::string(),
//            ],
//            'phone' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'city' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'job' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'description' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'gender' => [
//                'type' => Type::nonNull(Type::int()),
//            ],
//            'email' => [
//                'type' => Type::nonNull(Type::string()),
//            ],
//            'created_at' => [
//                'type' => Type::string(),
//            ],
//            'updated_at' => [
//                'type' => Type::string(),
//            ],
//            'role_id' => [
//                'type' => Type::int(),
//            ],
//            'setting' => [
//                'type' => Type::string(),
//            ],
//            'email_verified_at' => [
//                'type' => Type::string(),
//            ],
//        ];
//    }
//
//    protected function resolveEmailField($root, $args)
//    {
//        return strtolower($root->email);
//    }
//}