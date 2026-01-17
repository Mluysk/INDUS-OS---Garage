# Indus-OS Garage

ERP completo para oficinas, auto center e elétrica automotiva em PHP 8+ e MySQL.

## Requisitos
- PHP 8+
- MySQL 8+
- Composer

## Instalação local (XAMPP)
1. Clone o repositório.
2. Copie `.env.example` para `.env` e ajuste as variáveis.
3. Gere o autoload:
   ```bash
   composer install
   composer dump-autoload
   ```
4. Crie o banco e rode as migrations:
   ```bash
   mysql -u root -p indus_os_garage < database/migrations/001_create_schema.sql
   ```
5. Rode o seed admin:
   ```bash
   mysql -u root -p indus_os_garage < database/seed/001_admin_seed.sql
   ```
6. Acesse `http://localhost/public`.

## Deploy (Hostinger)
1. Configure o `.env` com as credenciais do MySQL e timezone `America/Sao_Paulo`.
2. Faça upload do projeto para o diretório público e aponte o domínio para `public/`.
3. Execute as migrations e seed usando o phpMyAdmin.

## Usuário administrador
- Email: `admin@indusos.com`
- Senha temporária: `123456` (alterar no primeiro login)

## Estrutura
```
/app
  /Controllers
  /Core
  /Models
  /Views
/database
  /migrations
  /seed
/public
/routes
/storage
  /backups
  /logs
```
