<?php

namespace Zan\Framework\Utilities\Validation;

use Zan\Framework\Contract\Utilities\Validation\Validator as ValidatorContract;

class Validator implements ValidatorContract
{
    /**
     * Create a new Validator instance.
     *
     * @param  array  $data
     * @param  array  $rules
     * @param  array  $messages
     * @param  array  $customAttributes
     */
    public function __construct(array $data, array $rules, array $messages = [], array $customAttributes = [])
    {

    }

    /**
     * After an after validation callback.
     *
     * @param  callable|string  $callback
     * @return $this
     */
    public function after($callback)
    {

    }

    /**
     * Add conditions to a given field based on a Closure.
     *
     * @param  string  $attribute
     * @param  string|array  $rules
     * @param  callable  $callback
     * @return void
     */
    public function sometimes($attribute, $rules, callable $callback)
    {

    }

    /**
     * Define a set of rules that apply to each element in an array attribute.
     *
     * @param  string  $attribute
     * @param  string|array  $rules
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function each($attribute, $rules)
    {

    }

    /**
     * Merge additional rules into a given attribute.
     *
     * @param  string  $attribute
     * @param  string|array  $rules
     * @return void
     */
    public function mergeRules($attribute, $rules)
    {

    }

    /**
     * Determine if the data passes the validation rules.
     *
     * @return bool
     */
    public function passes()
    {

    }

    /**
     * Determine if the data fails the validation rules.
     *
     * @return bool
     */
    public function fails()
    {
        return ! $this->passes();
    }

    /**
     * Returns the data which was valid.
     *
     * @return array
     */
    public function valid()
    {

    }

    /**
     * Returns the data which was invalid.
     *
     * @return array
     */
    public function invalid()
    {

    }

    /**
     * Get the displayable name of the value.
     *
     * @param  string  $attribute
     * @param  mixed   $value
     * @return string
     */
    public function getDisplayableValue($attribute, $value)
    {

    }

    /**
     * Get the array of custom validator extensions.
     *
     * @return array
     */
    public function getExtensions()
    {

    }

    /**
     * Register an array of custom validator extensions.
     *
     * @param  array  $extensions
     * @return void
     */
    public function addExtensions(array $extensions)
    {

    }

    /**
     * Register an array of custom implicit validator extensions.
     *
     * @param  array  $extensions
     * @return void
     */
    public function addImplicitExtensions(array $extensions)
    {

    }

    /**
     * Register a custom validator extension.
     *
     * @param  string  $rule
     * @param  \Closure|string  $extension
     * @return void
     */
    public function addExtension($rule, $extension)
    {

    }

    /**
     * Register a custom implicit validator extension.
     *
     * @param  string   $rule
     * @param  \Closure|string  $extension
     * @return void
     */
    public function addImplicitExtension($rule, $extension)
    {

    }

    /**
     * Get the array of custom validator message replacers.
     *
     * @return array
     */
    public function getReplacers()
    {

    }

    /**
     * Register an array of custom validator message replacers.
     *
     * @param  array  $replacers
     * @return void
     */
    public function addReplacers(array $replacers)
    {

    }

    /**
     * Register a custom validator message replacer.
     *
     * @param  string  $rule
     * @param  \Closure|string  $replacer
     * @return void
     */
    public function addReplacer($rule, $replacer)
    {

    }

    /**
     * Get the data under validation.
     *
     * @return array
     */
    public function getData()
    {

    }

    /**
     * Set the data under validation.
     *
     * @param  array  $data
     * @return void
     */
    public function setData(array $data)
    {

    }

    /**
     * Get the validation rules.
     *
     * @return array
     */
    public function getRules()
    {

    }

    /**
     * Set the validation rules.
     *
     * @param  array  $rules
     * @return $this
     */
    public function setRules(array $rules)
    {

    }

    /**
     * Set the custom attributes on the validator.
     *
     * @param  array  $attributes
     * @return $this
     */
    public function setAttributeNames(array $attributes)
    {

    }

    /**
     * Set the custom values on the validator.
     *
     * @param  array  $values
     * @return $this
     */
    public function setValueNames(array $values)
    {

    }

    /**
     * Get the custom messages for the validator.
     *
     * @return array
     */
    public function getCustomMessages()
    {

    }

    /**
     * Set the custom messages for the validator.
     *
     * @param  array  $messages
     * @return void
     */
    public function setCustomMessages(array $messages)
    {

    }

    /**
     * Get the custom attributes used by the validator.
     *
     * @return array
     */
    public function getCustomAttributes()
    {

    }

    /**
     * Add custom attributes to the validator.
     *
     * @param  array  $customAttributes
     * @return $this
     */
    public function addCustomAttributes(array $customAttributes)
    {

    }

    /**
     * Get the custom values for the validator.
     *
     * @return array
     */
    public function getCustomValues()
    {

    }

    /**
     * Add the custom values for the validator.
     *
     * @param  array  $customValues
     * @return $this
     */
    public function addCustomValues(array $customValues)
    {

    }

    /**
     * Get the fallback messages for the validator.
     *
     * @return array
     */
    public function getFallbackMessages()
    {

    }

    /**
     * Set the fallback messages for the validator.
     *
     * @param  array  $messages
     * @return void
     */
    public function setFallbackMessages(array $messages)
    {

    }

    /**
     * Get the failed validation rules.
     *
     * @return array
     */
    public function failed()
    {

    }

    /**
     * Get the message container for the validator.
     *
     * @return \Zan\Framework\Utilities\Types\MessageBag
     */
    public function messages()
    {

    }

    /**
     * An alternative more semantic shortcut to the message container.
     *
     * @return \Zan\Framework\Utilities\Types\MessageBag
     */
    public function errors()
    {

    }

    /**
     * Get the messages for the instance.
     *
     * @return \Zan\Framework\Utilities\Types\MessageBag
     */
    public function getMessageBag()
    {

    }

    /**
     * Handle dynamic calls to class methods.
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {

    }
}
