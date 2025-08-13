# 🚨 RESOLVENDO ERRO 500 - ARTI ODONTO

## 🔍 **DIAGNÓSTICO RÁPIDO**

### **1. Verificar Logs (PRIORIDADE MÁXIMA)**
```bash
# No servidor, execute:
tail -f storage/logs/laravel.log
```

### **2. Verificar Permissões (CAUSA MAIS COMUM)**
```bash
# Permissões das pastas críticas
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chmod -R 755 public/
chmod 644 .env
chmod 644 public/.htaccess

# Se usar Linux/Unix, também:
chown -R www-data:www-data storage/
chown -R www-data:www-data bootstrap/cache/
```

## 🚀 **SOLUÇÕES IMEDIATAS**

### **SOLUÇÃO 1: Limpar Cache**
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

### **SOLUÇÃO 2: Gerar APP_KEY**
```bash
php artisan key:generate
```

### **SOLUÇÃO 3: Reinstalar Dependências**
```bash
composer install --optimize-autoloader --no-dev
```

### **SOLUÇÃO 4: Verificar .env**
```env
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:SUA_CHAVE_AQUI
APP_URL=https://seudominio.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

## 📋 **CHECKLIST COMPLETO**

### **✅ Permissões**
- [ ] `storage/` - 755
- [ ] `bootstrap/cache/` - 755
- [ ] `public/` - 755
- [ ] `.env` - 644
- [ ] `public/.htaccess` - 644

### **✅ Configuração**
- [ ] `APP_ENV=production`
- [ ] `APP_DEBUG=false`
- [ ] `APP_KEY` preenchida
- [ ] `APP_URL` correta
- [ ] Banco de dados configurado

### **✅ Dependências**
- [ ] `composer install` executado
- [ ] `npm run build` executado
- [ ] Extensões PHP instaladas

### **✅ Cache**
- [ ] Cache limpo
- [ ] Config cache criado
- [ ] Route cache criado
- [ ] View cache criado

## 🆘 **SE NADA FUNCIONAR**

### **1. Ativar Debug Temporariamente**
```env
APP_DEBUG=true
```
**⚠️ ATENÇÃO: Só em desenvolvimento!**

### **2. Verificar Extensões PHP**
```bash
php -m | grep -E "(bcmath|ctype|json|mbstring|openssl|pdo|tokenizer|xml|fileinfo)"
```

### **3. Verificar Versão PHP**
```bash
php -v
# Deve ser 8.0+
```

### **4. Verificar Servidor Web**
```bash
# Apache
a2enmod rewrite
systemctl restart apache2

# Nginx
nginx -t
systemctl restart nginx
```

## 📞 **SUPORTE**

Se o problema persistir:
1. Verifique os logs do servidor web
2. Verifique os logs do Laravel
3. Teste com `APP_DEBUG=true` temporariamente
4. Verifique se o banco está acessível
5. Teste a conexão FTP

## 🎯 **ORDEM DE PRIORIDADE**

1. **VERIFICAR LOGS** (storage/logs/laravel.log)
2. **AJUSTAR PERMISSÕES** (storage, bootstrap/cache)
3. **LIMPAR CACHE** (artisan commands)
4. **GERAR APP_KEY** (artisan key:generate)
5. **VERIFICAR .env** (configurações)
6. **REINSTALAR DEPENDÊNCIAS** (composer install)
