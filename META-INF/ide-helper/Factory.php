<?php

namespace Zan\Framework\Utilities\Validation;

use Zan\Framework\Contract\Utilities\Validation\Factory as FactoryContract;
use Zan\Framework\Utilities\DesignPattern\Singleton;

class Factory implements FactoryContract
{
    use Singleton;

    /**
     * Create a new Validator instance.
     *
     * @param  array  $data
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return \Zan\Framework\Utilities\Validation\Validator
     */
    public static function make(array $data, array $rules, array $messages = [], array $customAttributes = [])
    {

    }

    /**
     * Add the extensions to a validator instance.
     *
     * @param  \Zan\Framework\Utilities\Validation\Validator  $validator
     * @return void
     */
    protected function addExtensions(Validator $validator)
    {

    }

    /**
     * Resolve a new Validator instance.
     *
     * @param  array  $data
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     * @return \Zan\Framework\Utilities\Validation\Validator
     */
    protected function resolve(array $data, array $rules, array $messages, array $customAttributes)
    {

    }

    /**
     * Register a custom validator extension.
     *
     * @param  string  $rule
     * @param  \Closure|string  $extension
     * @param  string  $message
     * @return void
     */
    public function extend($rule, $extension, $message = null)
    {

    }

    /**
     * Register a custom implicit validator extension.
     *
     * @param  string   $rule
     * @param  \Closure|string  $extension
     * @param  string  $message
     * @return void
     */
    public function extendImplicit($rule, $extension, $message = null)
    {

    }

    /**
     * Register a custom implicit validator message replacer.
     *
     * @param  string   $rule
     * @param  \Closure|string  $replacer
     * @return void
     */
    public function replacer($rule, $replacer)
    {

    }

    /**
     * Set the Validator instance resolver.
     *
     * @param  \Closure  $resolver
     * @return void
     */
    public function resolver(Closure $resolver)
    {

    }

}
