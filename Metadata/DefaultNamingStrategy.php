<?php

/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\DiExtraBundle\Metadata;

class DefaultNamingStrategy implements NamingStrategy
{
    /**
     * Returns a service name for an annotated class.
     *
     * @param string $name the fully-qualified class name
     *
     * @return string a service name
     */
    public function classToServiceName($name)
    {
        $name = preg_replace('/(?<=[a-zA-Z0-9])[A-Z]/', '_\\0', $name);

        return strtolower(strtr($name, '\\', '.'));
    }
}
