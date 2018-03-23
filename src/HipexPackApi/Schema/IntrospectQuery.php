<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Schema;

class IntrospectQuery extends BaseQuery
{

    /**
     * @return string
     */
    public function getBody(): string
    {
        $query = [];
        $query[] = 'query IntrospectionQuery {';
        $query[] = '    __schema {';
        $query[] = '        queryType { name }';
        $query[] = '        mutationType { name }';
        $query[] = '        subscriptionType { name }';
        $query[] = '        types {';
        $query[] = '            ...FullType';
        $query[] = '        }';
        $query[] = '        directives {';
        $query[] = '            name';
        $query[] = '            description';
        $query[] = '            args {';
        $query[] = '                ...InputValue';
        $query[] = '            }';
        $query[] = '            onOperation';
        $query[] = '            onFragment';
        $query[] = '            onField';
        $query[] = '        }';
        $query[] = '    }';
        $query[] = '}';
        $query[] = '';
        $query[] = 'fragment FullType on __Type {';
        $query[] = '    kind';
        $query[] = '    name';
        $query[] = '    description';
        $query[] = '    fields(includeDeprecated: true) {';
        $query[] = '        name';
        $query[] = '        description';
        $query[] = '        args {';
        $query[] = '            ...InputValue';
        $query[] = '        }';
        $query[] = '        type {';
        $query[] = '            ...TypeRef';
        $query[] = '        }';
        $query[] = '        isDeprecated';
        $query[] = '        deprecationReason';
        $query[] = '    }';
        $query[] = '    inputFields {';
        $query[] = '        ...InputValue';
        $query[] = '    }';
        $query[] = '    interfaces {';
        $query[] = '        ...TypeRef';
        $query[] = '    }';
        $query[] = '    enumValues(includeDeprecated: true) {';
        $query[] = '        name';
        $query[] = '        description';
        $query[] = '        isDeprecated';
        $query[] = '        deprecationReason';
        $query[] = '    }';
        $query[] = '    possibleTypes {';
        $query[] = '        ...TypeRef';
        $query[] = '    }';
        $query[] = '}';
        $query[] = '';
        $query[] = 'fragment InputValue on __InputValue {';
        $query[] = '    name';
        $query[] = '    description';
        $query[] = '    type { ...TypeRef }';
        $query[] = '    defaultValue';
        $query[] = '}';
        $query[] = '';
        $query[] = 'fragment TypeRef on __Type {';
        $query[] = '    kind';
        $query[] = '    name';
        $query[] = '    ofType {';
        $query[] = '        kind';
        $query[] = '        name';
        $query[] = '        ofType {';
        $query[] = '            kind';
        $query[] = '            name';
        $query[] = '            ofType {';
        $query[] = '                kind';
        $query[] = '                name';
        $query[] = '            }';
        $query[] = '        }';
        $query[] = '    }';
        $query[] = '}';
        return implode(PHP_EOL, $query);
    }

    /**
     * @return BaseType
     */
    public function getReturnType(): BaseType
    {
        return new SchemaType();
    }

    /**
     * @return bool
     */
    public function getReturnArray(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getReturnKey(): string
    {
        return '__schema';
    }
}