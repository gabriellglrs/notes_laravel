<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=4C89F8&height=120&section=header"/>

<img width="1584" height="396" alt="LinkedIn cover - 29" src="https://github.com/user-attachments/assets/d1c05723-0bec-4ce7-8dee-1ef8c95ebf3e" />

<br>
<br>

# 📝 Sistema de Notas Laravel

Um sistema simples e elegante de gerenciamento de notas pessoais desenvolvido em Laravel, com autenticação segura e interface intuitiva.

## ✨ Funcionalidades

-   🔐 **Autenticação segura** com validação de email e senha
-   📝 **CRUD completo** de notas (Criar, Ler, Editar, Deletar)
-   👤 **Gerenciamento de usuários** com UUIDs para maior segurança
-   🎨 **Interface responsiva** com Bootstrap
-   🗑️ **Soft Delete** para recuperação de dados
-   ⏰ **Timestamps automáticos** para controle de criação/atualização
-   🔒 **Middleware de autenticação** personalizado
-   🎯 **Validação de formulários** robusta

## 🛠️ Tecnologias Utilizadas

-   **Laravel 11** - Framework PHP
-   **PHP 8.2+** - Linguagem de programação
-   **MySQL** - Banco de dados
-   **Bootstrap 5** - Framework CSS
-   **Font Awesome** - Ícones
-   **Blade** - Template engine

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

-   PHP >= 8.2
-   Composer
-   MySQL >= 8.0
-   Node.js >= 16 (para assets)
-   Git

## 🚀 Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/laravel-notes.git
cd laravel-notes
```

### 2. Instale as dependências PHP

```bash
composer install
```

### 3. Copie o arquivo de ambiente

```bash
cp .env.example .env
```

### 4. Configure o banco de dados

Edite o arquivo `.env` com suas configurações:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=notes_db
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 5. Gere a chave da aplicação

```bash
php artisan key:generate
```

### 6. Execute as migrações e seeders

```bash
php artisan migrate --seed
```

### 7. Instale as dependências do Node.js

```bash
npm install
npm run build
```

### 8. Inicie o servidor

```bash
php artisan serve
```

Acesse a aplicação em `http://localhost:8000`

## 👥 Usuários de Teste

O sistema vem com usuários pré-configurados para teste:

| Email               | Senha    | Descrição        |
| ------------------- | -------- | ---------------- |
| admin@example.com   | admin123 | Administrador    |
| gabriel@example.com | 123456   | Usuário padrão   |
| teste@example.com   | teste    | Usuário de teste |

## 📁 Estrutura do Projeto

```
laravel-notes/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php      # Autenticação
│   │   │   └── MainController.php      # CRUD de notas
│   │   └── Middleware/
│   │       ├── CheckIsLogged.php       # Verifica se está logado
│   │       └── CheckIsNotLogged.php    # Verifica se não está logado
│   └── Models/
│       ├── User.php                    # Model de usuários
│       └── Note.php                    # Model de notas
├── database/
│   ├── migrations/                     # Migrações do BD
│   └── seeders/                        # Dados iniciais
├── resources/
│   └── views/
│       ├── layouts/                    # Layouts base
│       ├── auth/                       # Telas de autenticação
│       └── notes/                      # Telas de notas
└── routes/
    └── web.php                         # Rotas da aplicação
```

## 🔄 Fluxo da Aplicação

### Autenticação

1. Usuário acessa `/login`
2. Preenche email e senha
3. Sistema valida credenciais
4. Redireciona para dashboard ou exibe erro

### Gerenciamento de Notas

1. **Listar**: Dashboard exibe todas as notas do usuário
2. **Criar**: Formulário com título e texto
3. **Editar**: Carrega dados existentes para edição
4. **Deletar**: Confirmação antes da exclusão

## 🔒 Segurança

-   **UUIDs** como chaves primárias para evitar enumeração
-   **Hash de senhas** com bcrypt
-   **Middleware personalizado** para controle de acesso
-   **Validação de formulários** server-side
-   **Soft Delete** para recuperação de dados
-   **CSRF Protection** em formulários

## 🧪 Testes

Execute os testes automatizados:

```bash
php artisan test
```

## 📊 Banco de Dados

### Tabela Users

-   `uuid` (PK) - Identificador único
-   `email` - Email do usuário (único)
-   `password` - Senha hasheada
-   `last_login` - Último acesso
-   `timestamps` - created_at, updated_at
-   `deleted_at` - Soft delete

### Tabela Notes

-   `uuid` (PK) - Identificador único
-   `user_uuid` (FK) - Referência ao usuário
-   `title` - Título da nota (máx. 200 chars)
-   `text` - Conteúdo da nota (máx. 3000 chars)
-   `timestamps` - created_at, updated_at
-   `deleted_at` - Soft delete

## 🚀 Deploy

### Produção

1. Configure o servidor web (Nginx/Apache)
2. Configure o ambiente de produção no `.env`
3. Execute as migrações: `php artisan migrate --force`
4. Otimize a aplicação:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Docker (Opcional)

```bash
# Dockerfile incluído para containerização
docker build -t laravel-notes .
docker run -p 8000:8000 laravel-notes
```

## 🤝 Contribuição

1. Faça um Fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/nova-feature`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/nova-feature`)
5. Abra um Pull Request

## 📝 Padrões de Código

-   PSR-12 para estilo de código PHP
-   Nomes descritivos para variáveis e métodos
-   Comentários em português
-   Validações sempre server-side
-   Uso de middlewares para controle de acesso

## 🔧 Comandos Úteis

```bash
# Limpar cache
php artisan cache:clear

# Recriar banco de dados
php artisan migrate:fresh --seed

# Verificar rotas
php artisan route:list

# Gerar nova migration
php artisan make:migration create_table_name

# Gerar novo controller
php artisan make:controller ControllerName
```

## 🐛 Troubleshooting

### Erro de permissão

```bash
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/
```

### Erro de chave da aplicação

```bash
php artisan key:generate
```

### Erro de conexão com banco

-   Verifique as configurações no `.env`
-   Certifique-se que o MySQL está rodando
-   Verifique se o banco de dados existe

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👨‍💻 Autor

**Seu Nome**

-   GitHub: [@seu-usuario](https://github.com/seu-usuario)
-   LinkedIn: [Seu Perfil](https://linkedin.com/in/seu-perfil)
-   Email: seuemail@example.com

## 🙏 Agradecimentos

-   Laravel Team pelo excelente framework
-   Bootstrap Team pela interface responsiva
-   Font Awesome pelos ícones

---

⭐ **Se este projeto foi útil para você, deixe uma estrela no repositório!**

## 📱 Screenshots

### Tela de Login

![Login](screenshots/login.png)

### Dashboard

![Dashboard](screenshots/dashboard.png)

### Nova Nota

![Nova Nota](screenshots/nova-nota.png)

### Editar Nota

![Editar](screenshots/editar-nota.png)

---

_Desenvolvido com ❤️ usando Laravel_

---

 <br>

 <br>
<div align="center">
  <img src="https://github.com/user-attachments/assets/ed7208b8-6bdc-4c82-98aa-8c8cb9c1428f" height="150"/>
</div>

<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=4C89F8&height=120&section=footer"/>
