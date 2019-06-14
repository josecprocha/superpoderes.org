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

    'accepted'             => ':attribute deve ser aceito.',
    'active_url'           => ':attribute não é um URL válido.',
    'after'                => ':attribute deve ser uma data após :date.',
    'after_or_equal'       => ':attribute deve ser uma data posterior ou igual a :date.',
    'alpha'                => ':attribute só pode conter letras.',
    'alpha_dash'           => ':attribute só pode conter letras, números, traços e sublinhados.',
    'alpha_num'            => ':attribute só pode conter letras e números.',
    'array'                => ':attribute deve ser uma cadeia de caracteres (array).',
    'before'               => ':attribute deve ser uma data anterior a :date.',
    'before_or_equal'      => ':attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => ':attribute deve estar entre :min e :max.',
        'file'    => ':attribute deve estar entre :min e :max kilobytes.',
        'string'  => ':attribute deve estar entre :min e :max caracteres.',
        'array'   => ':attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação :attribute não corresponde.',
    'date'                 => ':attribute não é uma data válida.',
    'date_format'          => ':attribute não corresponde ao formato :format.',
    'different'            => ':attribute e :other devem ser diferentes.',
    'digits'               => ':attribute deve ter :digits dígitos.',
    'digits_between'       => ':attribute deve ter entre :min e :max dígitos.',
    'dimensions'           => ':attribute tem dimensões de imagem inválida.',
    'distinct'             => 'Campo :attribute tem um valor duplicado',
    'email'                => ':attribute deve ser um endereço de e-mail válido.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'file'                 => ':attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute deve ter um valor.',
    'gt'                   => [
        'numeric' => ':attribute deve ser maior que :value.',
        'file'    => ':attribute deve ser maior que :value kilobytes.',
        'string'  => ':attribute deve ser maior que :value caracteres.',
        'array'   => ':attribute deve ter mais que :value itens.',
    ],
    'gte'                  => [
        'numeric' => ':attribute deve ser maior ou igual a :value.',
        'file'    => ':attribute deve ser maior ou igual a :value kilobytes.',
        'string'  => ':attribute deve ser maior ou igual a :value caracteres.',
        'array'   => ':attribute deve ter :value itens ou mais.',
    ],
    'image'                => ':attribute deve ser uma imagem.',
    'in'                   => ':attribute selecionado é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => ':attribute deve ser um inteiro.',
    'ip'                   => ':attribute deve ser um endereço de IP válido.',
    'ipv4'                 => ':attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => ':attribute deve ser um endereço IPv6 válido.',
    'json'                 => ':attribute deve ser uma string JSON válida.',
    'lt'                   => [
        'numeric' => ':attribute deve ser menor que :value.',
        'file'    => ':attribute deve ser menor que :value kilobytes.',
        'string'  => ':attribute deve ser menor que :value caracteres.',
        'array'   => ':attribute deve ser menor que :value itens.',
    ],
    'lte'                  => [
        'numeric' => ':attribute deve ser menor ou igual a :value.',
        'file'    => ':attribute deve ser menor ou igual a :value kilobytes.',
        'string'  => ':attribute deve ser menor ou igual a :value caracteres.',
        'array'   => ':attribute deve ser menor ou igual a :value itens.',
    ],
    'max'                  => [
        'numeric' => ':attribute não pode ser maior que :max.',
        'file'    => ':attribute não pode ser maior que :max kilobytes.',
        'string'  => ':attribute não pode ser maior que :max caracteres.',
        'array'   => ':attribute não pode ser maior que :max itens.',
    ],
    'mimes'                => ':attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => ':attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => ':attribute deve ser pelo menos :min.',
        'file'    => ':attribute deve ter pelo menos :min kilobytes.',
        'string'  => ':attribute deve ter pelo menos :min caracteres.',
        'array'   => ':attribute deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'not_regex'            => 'O formato do campo :attribute é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve ser preenchido.',
    'regex'                => 'O formato do campo :attribute é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :value é :other.',
    'required_unless'      => 'O campo :attribute é obrigatório a não ser que :values seja :other.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está preenchido.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values estão preenchidos.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está preenchido.',
    'required_without_all' => 'O campo :attribute é obrigatório quando :values não estão preenchidos.',
    'same'                 => ':attribute e :other devem corresponder.',
    'size'                 => [
        'numeric' => ':attribute deve ser :size.',
        'file'    => ':attribute deve ter :size kilobytes.',
        'string'  => ':attribute deve ter :size caracteres.',
        'array'   => ':attribute deve conter :size itens.',
    ],
    'string'               => ':attribute deve ser uma string.',
    'timezone'             => ':attribute deve ser um fuso horário válido.',
    'unique'               => ':attribute já está em uso.',
    'uploaded'             => ':attribute falhou em carregar.',
    'url'                  => 'O formato de :attribute é inválido.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
