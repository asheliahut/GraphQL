<?php
/**
 * Date: 01.12.15
 *
 * @author Portey Vasil <portey@gmail.com>
 */

namespace Youshido\GraphQL\Validator\ResolveValidator;


use Youshido\GraphQL\Parser\Ast\Query;
use Youshido\GraphQL\Request;
use Youshido\GraphQL\Type\Object\ObjectType;
use Youshido\GraphQL\Type\TypeInterface;
use Youshido\GraphQL\Validator\ErrorContainer\ErrorContainerInterface;

interface ResolveValidatorInterface extends ErrorContainerInterface
{

    /**
     * @param $queryType TypeInterface
     * @param $query     Query
     * @param $request   Request
     *
     * @return bool
     */
    public function validateArguments($queryType, $query, $request);

    /**
     * @param $value
     * @param $kind
     *
     * @return bool
     */
    public function validateResolvedValue($value, $kind);
}