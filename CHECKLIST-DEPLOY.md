# 📋 CHECKLIST COMPLETO PARA DEPLOY FTP - ARTI ODONTO

## 🚀 ANTES DO DEPLOY

### ✅ Preparação Local
- [ ] Executar `composer install` (dependências PHP)
- [ ] Executar `npm install` (dependências Node.js)
- [ ] Verificar se o arquivo `.env` existe e está configurado
- [ ] Verificar se `APP_KEY` está definida no `.env`
- [ ] Testar o projeto localmente

### ✅ Configuração do Servidor
- [ ] Verificar se o servidor suporta PHP 8.0+
- [ ] Verificar se as extensões PHP necessárias estão instaladas:
  - [ ] BCMath PHP Extension
  - [ ] Ctype PHP Extension
  - [ ] JSON PHP Extension
  - [ ] Mbstring PHP Extension
  - [ ] OpenSSL PHP Extension
  - [ ] PDO PHP Extension
  - [ ] Tokenizer PHP Extension
  - [ ] XML PHP Extension
- [ ] Verificar se o servidor suporta MySQL/MariaDB
- [ ] Criar banco de dados no servidor
- [ ] Obter credenciais FTP do servidor

## 🔧 EXECUTANDO O DEPLOY

### ✅ Opção 1: Script Automatizado (Recomendado)
- [ ] Executar `deploy-ftp.ps1` (PowerShell)
- [ ] Ou executar `deploy-ftp.bat` (Windows)
- [ ] Seguir as instruções na tela
- [ ] Aguardar o upload automático

### ✅ Opção 2: Upload Manual
- [ ] Executar `npm run build` para compilar assets
- [ ] Executar `php artisan config:cache`
- [ ] Executar `php artisan route:cache`
- [ ] Executar `php artisan view:cache`
- [ ] Executar `php artisan optimize`
- [ ] Copiar arquivos para pasta `deploy-files`:
  - [ ] `public/` (com assets compilados)
  - [ ] `app/`
  - [ ] `bootstrap/`
  - [ ] `config/`
  - [ ] `database/`
  - [ ] `lang/`
  - [ ] `resources/`
  - [ ] `routes/`
  - [ ] `storage/`
  - [ ] `artisan`
  - [ ] `composer.json`
  - [ ] `.env`
  - [ ] `public/.htaccess`
- [ ] Fazer upload da pasta `deploy-files` via FTP para o servidor

## 🌐 CONFIGURAÇÃO NO SERVIDOR

### ✅ Arquivo .env
- [ ] Configurar `APP_ENV=production`
- [ ] Configurar `APP_DEBUG=false`
- [ ] Configurar `APP_URL=https://seudominio.com`
- [ ] Configurar banco de dados:
  - [ ] `DB_HOST`
  - [ ] `DB_PORT`
  - [ ] `DB_DATABASE`
  - [ ] `DB_USERNAME`
  - [ ] `DB_PASSWORD`
- [ ] Configurar `LOG_LEVEL=error`

### ✅ Permissões de Pastas
- [ ] `storage/` → 755
- [ ] `storage/app/` → 755
- [ ] `storage/framework/` → 755
- [ ] `storage/logs/` → 755
- [ ] `bootstrap/cache/` → 755

### ✅ Comandos no Servidor
- [ ] `php artisan config:clear`
- [ ] `php artisan cache:clear`
- [ ] `php artisan view:clear`
- [ ] `php artisan route:clear`
- [ ] `php artisan migrate` (se necessário)
- [ ] `php artisan storage:link` (se necessário)

## 📁 ESTRUTURA FINAL NO SERVIDOR

```
public_html/
├── app/
├── bootstrap/
├── config/
├── database/
├── lang/
├── public/
│   ├── assets/
│   ├── build/
│   ├── images/
│   ├── .htaccess
│   └── index.php
├── resources/
├── routes/
├── storage/
├── artisan
├── composer.json
└── .env
```

## 🧪 TESTES PÓS-DEPLOY

### ✅ Funcionalidades Básicas
- [ ] Página inicial carrega
- [ ] Menu de navegação funciona
- [ ] Slider de fundo funciona
- [ ] Slider "antes e depois" funciona
- [ ] Animações da seção procedimentos funcionam
- [ ] Formulário de contato funciona
- [ ] Páginas internas carregam

### ✅ Performance
- [ ] Tempo de carregamento aceitável
- [ ] Imagens carregam corretamente
- [ ] CSS e JavaScript funcionam
- [ ] Sem erros no console do navegador

### ✅ Responsividade
- [ ] Site funciona em desktop
- [ ] Site funciona em tablet
- [ ] Site funciona em mobile
- [ ] Menu mobile funciona

## 🚨 SOLUÇÃO DE PROBLEMAS

### ❌ Erro 500
- [ ] Verificar permissões das pastas
- [ ] Verificar arquivo `.env`
- [ ] Verificar logs em `storage/logs/`
- [ ] Verificar se `APP_KEY` está definida

### ❌ Página em branco
- [ ] Verificar permissões da pasta `storage`
- [ ] Verificar se `bootstrap/cache` tem permissões
- [ ] Verificar logs do servidor

### ❌ Assets não carregam
- [ ] Verificar se `npm run build` foi executado
- [ ] Verificar se pasta `public/build` existe
- [ ] Verificar permissões da pasta `public`

### ❌ Banco de dados não conecta
- [ ] Verificar credenciais no `.env`
- [ ] Verificar se banco existe
- [ ] Verificar se usuário tem permissões

## 📞 SUPORTE

### ✅ Informações Úteis
- [ ] Hosting provider
- [ ] Credenciais FTP
- [ ] Credenciais banco de dados
- [ ] Logs de erro
- [ ] Screenshots de problemas

### ✅ Comandos de Debug
- [ ] `php artisan --version`
- [ ] `php -m` (extensões PHP)
- [ ] `php -v` (versão PHP)
- [ ] Verificar logs em `storage/logs/laravel.log`

---

## 🎯 RESUMO RÁPIDO

1. **Preparar**: `composer install` + `npm install`
2. **Compilar**: `npm run build`
3. **Otimizar**: `php artisan optimize`
4. **Executar**: Script de deploy ou upload manual
5. **Configurar**: `.env` + permissões no servidor
6. **Testar**: Todas as funcionalidades
7. **Monitorar**: Logs e performance

---

**⚠️ IMPORTANTE**: Sempre faça backup antes do deploy e teste em ambiente de staging primeiro!
