<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Полето :attribute трябва да бъде прието.',
    'active_url' => 'Полето :attribute е невалиден URL адрес.',
    'after' => 'Полето :attribute трябва да бъде дата след :date.',
    'after_or_equal' => 'Полето :attribute трябва да бъде дата следваща или равна на :date.',
    'alpha' => 'Полето :attribute може да съдържа само букви.',
    'alpha_dash' => 'Полето :attribute може да съдържа само букви, цифри, тирета и долни черти.',
    'alpha_num' => 'Полето :attribute може да съдържа само букви и цифри.',
    'array' => 'Полето :attribute трябва да бъде масив.',
    'before' => 'Полето :attribute трябва да бъде дата преди :date.',
    'before_or_equal' => 'Полето :attribute трябва да бъде дата предишна или равна на :date.',
    'between' => [
        'numeric' => 'Полето :attribute трябва да бъде между :min и :max.',
        'file' => 'Полето :attribute трябва да бъде между  :min и :max килобайта.',
        'string' => 'Полето :attribute трябва да бъде между :min и :max знака.',
        'array' => 'Полето :attribute трябва да бъде между :min и :max елемента.',
    ],
    'boolean' => 'Полето :attribute трябва да бъде Да или Не.',
    'confirmed' => 'Полето :attribute не е потвърдено.',
    'cyrillic' => 'Моля, въведете на кирилица.',
    'date' => 'Полето :attribute е невалидна дата.',
    'date_equals' => 'Полето :attribute трябва да бъде дата равна на :date.',
    'date_format' => 'Полето :attribute не съвпада с формат :format.',
    'different' => 'Полето :attribute и :other трябва да бъдат различни.',
    'digits' => 'Полето :attribute трябва да бъде :digits цифри.',
    'digits_between' => 'Полето :attribute трябва да бъде между :min и :max цифри.',
    'dimensions' => 'Изображението :attribute е с невалидни размери.',
    'distinct' => 'Полето :attribute е с дублирана стойност.',
    'email' => 'Полето :attribute трябва да бъде валиден имейл адрес.',
    'email_tld' => 'Полето :attribute трябва да бъде валиден имейл адрес.',
    'email_with_dot' => 'Невалиден e-mail адрес.',
    'ends_with' => 'Полето :attribute трябва да завършва с една от стойностите: :values.',
    'exists' => 'Избраната стойност за :attribute е невалидна.',
    'file' => 'Полето :attribute трябва да бъде файл.',
    'filled' => 'Полето :attribute трябва да бъде попълнено.',
    'gt' => [
        'numeric' => 'Полето :attribute трябва да бъде по-голямо от :value.',
        'file' => 'Полето :attribute трябва да бъде по-голямо от :value килобайта.',
        'string' => 'Полето :attribute трябва да бъде повече от :value знака.',
        'array' => 'Полето :attribute трябва да бъде с повече от :value елемента.',
    ],
    'gte' => [
        'numeric' => 'Полето :attribute трябва да бъде по-голямо или равно на :value.',
        'file' => 'Полето :attribute трябва да бъде по-голямо или равно на :value килобайта.',
        'string' => 'Полето :attribute трябва да бъде по-голямо или равно на :value знака.',
        'array' => 'Полето :attribute трябва да съдържа :value или повече елемента.',
    ],
    'image' => 'Полето :attribute трябва да бъде изображение.',
    'in' => 'Избраното поле :attribute е невалидно.',
    'in_array' => 'Полето :attribute не съществува в :other.',
    'integer' => 'Полето :attribute трябва да бъде цяло число.',
    'ip' => 'Полето :attribute трябва да бъде валиден IP адрес.',
    'ipv4' => 'Полето :attribute трябва да бъде валиден IPv4 адрес.',
    'ipv6' => 'Полето :attribute трябва да бъде валиден IPv6 адрес.',
    'json' => 'Полето :attribute трябва да бъде валиден JSON низ.',
    'lt' => [
        'numeric' => 'Полето :attribute трябва да бъде по-малко от :value.',
        'file' => 'Полето :attribute трябва да бъде по-малкък от :value килобайта.',
        'string' => 'Полето :attribute трябва да бъде по-малко от :value знака.',
        'array' => 'Полето :attribute трябва да съдържа по-малко от :value елемента.',
    ],
    'lte' => [
        'numeric' => 'Полето :attribute трябва да бъде по-малко или равно на :value.',
        'file' => 'Полето :attribute трябва да бъде по-малко или равно на :value килобайта.',
        'string' => 'Полето :attribute трябва да бъде по-малко или равно на :value знака.',
        'array' => 'Полето :attribute трябва да съдържа не повече от :value елемента.',
    ],
    'max' => [
        'numeric' => 'Полето :attribute не може да бъде по-голямо от :max.',
        'file' => 'Полето :attribute не може да бъде по-голямо от :max килобайта.',
        'string' => 'Полето :attribute не може да бъде по-голямо от :max знака.',
        'array' => 'Полето :attribute не може да съдържа повече от :max елемента.',
    ],
    'mimes' => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'mimetypes' => 'Полето :attribute трябва да бъде файл от тип: :values.',
    'min' => [
        'numeric' => 'Полето :attribute трябва да бъде не по-малко от :min.',
        'file' => 'Полето :attribute трябва да бъде не по-малко от :min килобайта.',
        'string' => 'Полето :attribute трябва да бъде не по-малко от :min знака.',
        'array' => 'Полето :attribute трябва да съдържа не по-малко от :min елемента.',
    ],
    'not_in' => 'Избраното поле :attribute е невалидно.',
    'not_regex' => 'Полето :attribute е в невалиден формат.',
    'numeric' => 'Полето :attribute трябва да бъде число.',
    'password' => 'Паролта е неправилна.',
    'phone_number' => 'Невалиден телефонен номер.',
    'present' => 'Полето :attribute трябва да бъде попълнено.',
    'regex' => 'Полето :attribute е в невалиден формат.',
    'required' => 'Полето :attribute е задължително.',
    'required_if' => 'Полето :attribute е задължително, когато :other е :value.',
    'required_unless' => 'Полето :attribute е задължително, освен, ако :other е :values.',
    'required_with' => 'Полето :attribute е задължително, когато :values е попълнено.',
    'required_with_all' => 'Полето :attribute е задължително, когато :values са попълнени.',
    'required_without' => 'Полето :attribute е задължително, когато :values не е попълнено.',
    'required_without_all' => 'Полето :attribute е задължително, когато нито една от :values не е попълнена.',
    'same' => 'Полето :attribute и :other трябва да съвпадат.',
    'size' => [
        'numeric' => 'Полето :attribute трябва да бъде :size.',
        'file' => 'Полето :attribute трябва да бъде :size килобайта.',
        'string' => 'Полето :attribute трябва да бъде :size знака.',
        'array' => 'Полето :attribute трябва да съдържа :size елемента.',
    ],
    'starts_with' => 'Полето :attribute трябва да започва с една от стойностите: :values.',
    'string' => 'Полето :attribute трябва да бъде низ.',
    'timezone' => 'Полети :attribute трябва да бъде валидна часова зона.',
    'unique' => 'Полето :attribute вече съществува.',
    'uploaded' => 'Неуспешен опит за качване на :attribute.',
    'url' => 'Полето :attribute е в невалиден формат.',
    'uuid' => 'Полето :attribute трябва да бъде валиден UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'text' => [
            'without_forbidden_words' => 'Поздравът съдържа нецензурни думи или изрази. Бъди доброто тук и поздрави приятел както подобава.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

    'js' => [
        'email.required'        => 'Моля, въведете имейл адрес.',
        'email.email'           => 'Моля, въведете валиден имейл адрес.',
    ],

];
