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

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal'       => 'O campo :attribute deve ser uma data posterior ou igual a :date.',
    'alpha'                => 'O campo :attribute só pode conter letras.',
    'alpha_dash'           => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num'            => 'O campo :attribute só pode conter letras e números.',
    'array'                => 'O campo :attribute deve ser uma matriz.',
    'before'               => 'O campo :attribute deve ser uma data anterior :date.',
    'before_or_equal'      => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve ser entre :min e :max.',
        'file'    => 'O campo :attribute deve ser entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve ser entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'O campo :attribute de confirmação não confere.',
    'date'                 => 'O campo :attribute não é uma data válida.',
    'date_equals'          => 'O campo :attribute deve ser uma data igual a :date.',
    'date_format'          => 'O campo :attribute não corresponde ao formato :format.',
    'different'            => 'Os campos :attribute e :other devem ser diferentes.',
    'digits'               => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between'       => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions'           => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct'             => 'O campo :attribute campo tem um valor duplicado.',
    'email'                => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'ends_with'            => 'O campo :attribute deve terminar com um dos seguintes: :values',
    'exists'               => 'O campo :attribute selecionado é inválido.',
    'file'                 => 'O campo :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file'    => 'O campo :attribute deve ser maior que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior que :value caracteres.',
        'array'   => 'O campo :attribute deve conter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file'    => 'O campo :attribute deve ser maior ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser maior ou igual a :value caracteres.',
        'array'   => 'O campo :attribute deve conter :value itens ou mais.',
    ],
    'image'                => 'O campo :attribute deve ser uma imagem.',
    'in'                   => 'O campo :attribute selecionado é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O campo :attribute deve ser um número inteiro.',
    'ip'                   => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4'                 => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json'                 => 'O campo :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file'    => 'O campo :attribute deve ser menor que :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor que :value caracteres.',
        'array'   => 'O campo :attribute deve conter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual a :value.',
        'file'    => 'O campo :attribute deve ser menor ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ser menor ou igual a :value caracteres.',
        'array'   => 'O campo :attribute não deve conter mais que :value itens.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não pode ser superior a :max.',
        'file'    => 'O campo :attribute não pode ser superior a :max kilobytes.',
        'string'  => 'O campo :attribute não pode ser superior a :max caracteres.',
        'array'   => 'O campo :attribute não pode ter mais do que :max itens.',
    ],
    'mimes'                => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ser pelo menos :min.',
        'file'    => 'O campo :attribute deve ter pelo menos :min kilobytes.',
        'string'  => 'O campo :attribute deve ter pelo menos :min caracteres.',
        'array'   => 'O campo :attribute deve ter pelo menos :min itens.',
    ],
    'not_in'               => 'O campo :attribute selecionado é inválido.',
    'not_regex'            => 'O campo :attribute possui um formato inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'password'             => 'A senha está incorreta.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O campo :attribute tem um formato inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other for :value.',
    'required_unless'      => 'O campo :attribute é obrigatório exceto quando :other for :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same'                 => 'Os campos :attribute e :other devem corresponder.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file'    => 'O campo :attribute deve ser :size kilobytes.',
        'string'  => 'O campo :attribute deve ser :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with'          => 'O campo :attribute deve começar com um dos seguintes valores: :values',
    'string'               => 'O campo :attribute deve ser uma string.',
    'timezone'             => 'O campo :attribute deve ser uma zona válida.',
    'unique'               => 'O campo :attribute já foi utilizado.',
    'uploaded'             => 'Ocorreu uma falha no upload do campo :attribute.',
    'url'                  => 'O campo :attribute tem um formato inválido.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

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

    'notification' => [
        'Success'               => 'Sucesso',
        'Warning'               => 'Atenção',
        'Error'                 => 'Erro',
        'verify_data' => 'Verifique os dados informados',
        'inserted'     => 'Dados inseridos com sucesso.',
        'not_insert'   => 'Houve um problema ao inserir os dados.',
        'updated'      => 'Dados atualizados com sucesso.',
        'not_update'   => 'Houve um problema ao atualizar os dados.',
        'deleted'      => 'Dados removidos com sucesso.',
        'not_delete'   => 'Houve um problema ao remover os dados',
        'failed_job'   => 'Houve um problema do lado do servidor ao realizar esta ação',
        'invalid_data'          => 'os dados fornecidos eram inválidos.',
        'not_found'    => 'Não foi encontrado nenhum registro para os dados informados',
    ],

    'generic' => [
        'Success' => 'Sucesso',
        'Warning' => 'Atenção',
        'Error' => 'Erro',

        'verify_data'           => 'verifique os dados informados',
        'ops'                   => 'Ops!',
        'created'               => 'dados inseridos com sucesso.',
        'not_created'           => 'ocorreu um erro ao tentar incluir. Tente novamente.',
        'updated'               => 'dados alterados com sucesso.',
        'not_updated'           => 'não foi possível alterar os dados. Tente novamente.',
        'deleted'               => 'dados removidos com sucesso.',
        'not_deleted'           => 'não foi possível remover este dados. Tente novamente.',
        'not_found'             => 'não foi encontrado nenhum registro para os dados informados',
        'api_not_found'         => 'nenhum registro foi encontrado com os parâmetros informados',
        'failed_job'            => 'houve um problema do lado do servidor e a requisição não pode ser concluída com êxito.',
        'any_error'             => 'Não foi possível processar a última ação.',

        '401_error'             => 'não autorizado',
        '401_error_body'        => 'Você não está autorizado a realizar esta requisição.',
        '403_error'             => 'não autorizado',
        '403_error_body'        => 'Você não está autorizado a realizar esta ação baseada nas regras de acesso.',
        '404_error'             => 'não encontrado',
        '404_error_body'        => 'O recurso que está tentando acessar não foi encontrado.',
        '419_error'             => 'página expirada',
        '419_error_body'        => 'A página que esta tentando acessar está expirada.<br>Por motivos de segurança não pudemos exibi-la.',
        '429_error'             => 'não autorizado',
        '429_error_body'        => 'Muitos pedidos foram solicitados.<br>Por motivos de segurança não pudemos exibir.',
        '500_error'             => 'problemas no servidor',
        '500_error_body'        => 'Um problema foi encontrado no servidor.<br>Por este motivo não pudemos concluir a requisição solicitada',
        '503_error'             => 'serviço indisponível',
        '503_error_body'        => 'Serviço indisponível.<br>Por este motivo não pudemos concluir a requisição solicitada.',
        'return_to_back_page'   => 'clique aqui para retornar a página anterior.',
    ],

    'time' => [
        'salution' => [
            'hello'           =>    "Olá",
            'good_morning'    =>    "Bom dia",
            'good_afternoon'  =>    "Boa tarde",
            'good_night'      =>    "Boa noite",
            'of'              => 'de',
        ],
        'week' => [
            'sunday'          =>    "domingo",
            'monday'          =>    "segunda-feira",
            'tuesday'         =>    "terça-feira",
            'wednesday'       =>    "quarta-feira",
            'thursday'        =>    "quinta-feira",
            'friday'          =>    "sexta-feira",
            'saturday'        =>    "sábado",
        ],
        'month' => [
            'january'         =>    "janeiro",
            'february'        =>    "fevereiro",
            'march'           =>    "março",
            'april'           =>    "abril",
            'may'             =>    "maio",
            'june'            =>    "junho",
            'july'            =>    "julho",
            'august'          =>    "agosto",
            'september'       =>    "setembro",
            'october'         =>    "outubro",
            'november'        =>    "novembro",
            'december'        =>    "dezembro"
        ],
    ],

    'report' => [
        'empty' => 'não existem dados para geração do relatório!',
        'success' => 'relatório gerado com sucesso!',
        'error' => 'não foi possível gerar o relatório neste momento.',
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

    'attributes' => [
        'address'   => 'endereço',
        'age'       => 'idade',
        'body'      => 'conteúdo',
        'city'      => 'cidade',
        'country'   => 'país',
        'date'      => 'data',
        'day'       => 'dia',
        'excerpt'   => 'resumo',
        'first_name'=> 'primeiro nome',
        'gender'    => 'gênero',
        'hour'      => 'hora',
        'last_name' => 'sobrenome',
        'message'   => 'mensagem',
        'minute'    => 'minuto',
        'mobile'    => 'celular',
        'month'     => 'mês',
        'name'      => 'nome',
        'password'  => 'senha',
        'phone'     => 'telefone',
        'second'    => 'segundo',
        'sex'       => 'sexo',
        'state'     => 'estado',
        'subject'   => 'assunto',
        'text'      => 'texto',
        'time'      => 'hora',
        'title'     => 'título',
        'username'  => 'usuário',
        'year'      => 'ano',
        'description' => 'descrição',
        'password_confirmation' => 'confirmação da senha',
        'status_id' => 'status',
        'opcoes'    => 'opções',
        'type'      => 'tipo',
        'period'    => 'periodo',
        'home_about' => 'sobre',
        'path'      => 'arquivo',
        'path.*'      => 'arquivo',
        'project_id'  => 'id do projeto',
        'bank_info' => 'dados bancários',
        'pix_copy_paste' => 'pix copia e cola',
        'pix_key' => 'chave pix',
        'company_name' => 'nome da empresa',
        'g-recaptcha-response'  => 'recaptcha',
        'contact_default_email' => 'e-mail',
        'contact_enable_contact_form' => 'formulário contato',
        'weekday'   =>  'dia da semana',
        'file' => 'arquivo',
        'group_image' => 'imagem do grupo',
        'lead_image' => 'imagem do líder',
        'lead_name' => 'nome do líder',
        'lead_contact' => 'contato do líder',
        'is_online' => 'é online',
        'is_face_to_face' => 'é presencial',
        'meeting_link' => 'link da reunião',
        'geolocation_map' => 'geolocalização de mapa',
        'opening_date' => 'data de abertura',
        'parent_group_id' => 'pgm pai',
        'is_actived' => 'está ativo',
        'home_prayer_request_link' => 'link pedido de oração',
        'ministry_start' => 'data início ministério',
        'ministry_end' => 'data fim ministério',
        'history' => 'história',
        'home_bulletin_url' => 'link boletim',
        'publish_date' => 'data de publicação',
        'image' => 'imagem',
        'url' => 'link',
        'expiration_date' => 'data de expiração',
    ],

    'values' => [
        'contact_enable_contact_form' => [
            true => 'ativo',
            false => 'inativo'
        ]
    ]

];
