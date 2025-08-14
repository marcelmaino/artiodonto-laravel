# Instruções para Corrigir Erro 500

## 🚨 Problema Identificado

O site está apresentando erro 500 devido a:
1. **Configuração de banco de dados** inválida (SQLite inexistente)
2. **Cache das views** corrompido

## ✅ Solução

### 1. Configurar .env no servidor (Umbler)

Criar/editar arquivo `.env` na raiz com:

```bash
APP_NAME="Arti Odonto"
APP_ENV=production
APP_KEY=base64:EgdbKNB3nVmVjn0zC+Ke6G4hDUFXSkoVGv7p/wyTCVE=
APP_DEBUG=false
APP_URL=http://sitearti.marcelmaino.com.br

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

# Banco de dados desabilitado - site estático
DB_CONNECTION=

CACHE_DRIVER=array
SESSION_DRIVER=array
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_LIFETIME=120
```

### 2. Limpar cache (via SSH na Umbler)

```bash
rm -rf storage/framework/views/*.php
rm -rf storage/framework/cache/data/*
```

### 3. Verificar permissões

```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

## 🎯 Resultado Esperado

Site funcionando sem erro 500 após aplicar essas configurações.