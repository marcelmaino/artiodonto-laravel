# Claude.md - Instruções para Deploy

## 🚀 Deploy Automático Astro Configurado na Umbler

Este projeto foi **migrado para Astro** e tem **deploy automático** configurado via **GitHub Actions** para a hospedagem **Umbler**.

### ✅ Status do Deploy
- **Repositório**: https://github.com/marcelmaino/artiodonto-laravel
- **Tecnologia**: Astro (Site Estático)
- **Hospedagem**: Umbler
- **Deploy**: Automático via GitHub Actions
- **Última configuração**: 14/08/2025
- **Status**: ✅ Migrado e Funcionando

### 🔧 Como Funciona

1. **Trigger**: Qualquer push na branch `main`
2. **Build**: GitHub Actions executa `npm run build` do Astro
3. **Deploy**: Copia arquivos estáticos (pasta `dist/`) para Umbler via SCP
4. **Resultado**: Site HTML/CSS/JS otimizado sem servidor backend

### 🔑 Configuração SSH

#### Secrets no GitHub (já configurados):
- `SSH_HOST`: Host da Umbler (ex: site12345.umbler.net)
- `SSH_USER`: Usuário da Umbler (ex: site12345)
- `SSH_PORT`: Porta SSH (22)
- `SSH_KEY`: Chave privada SSH gerada especificamente para deploy

#### Chave Pública na Umbler:
- Configurada no painel: SSH → Gerenciar chaves SSH
- Permite acesso automático para deploy

### 📋 Workflow do Deploy

O arquivo `.github/workflows/deploy.yml` executa:

```bash
# Verificar se o repositório Git existe
if [ ! -d ".git" ]; then
  echo "Inicializando repositório Git..."
  # Limpar pasta e clonar
  rm -rf * .*git* 2>/dev/null || true
  git clone https://github.com/marcelmaino/artiodonto-laravel.git temp_repo
  mv temp_repo/* . 2>/dev/null || true
  mv temp_repo/.* . 2>/dev/null || true
  rm -rf temp_repo
else
  echo "Atualizando repositório..."
  git pull origin main
fi
```

### 🧪 Como Testar o Deploy

1. **Fazer qualquer alteração** no código
2. **Commit e push** para branch `main`
3. **Verificar execução**: https://github.com/marcelmaino/artiodonto-laravel/actions
4. **Conferir resultado**: Status deve ficar verde ✅

### 🛠️ Estrutura de Arquivos na Umbler

```
/ (raiz da conta Umbler)
├── app/
├── bootstrap/
├── config/
├── database/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env (deve ser criado manualmente)
├── composer.json
└── composer.lock

/public/ (pasta pública da Umbler)
├── .htaccess
├── index.php
├── favicon.ico
└── assets/ (imagens, css, js compilados)
```

### ⚠️ Problemas Comuns e Soluções

#### Erro: "missing server host"
- **Causa**: Secrets não configurados no GitHub
- **Solução**: Verificar se todos os 4 secrets estão configurados

#### Erro: "not a git repository"
- **Causa**: Primeira execução, repositório ainda não existe
- **Solução**: O script agora clona automaticamente

#### Erro: "destination path already exists"
- **Causa**: Pasta existe mas não é repositório Git válido
- **Solução**: Script limpa e clona novamente

### 🔄 Comandos Laravel Pós-Deploy

Atualmente desabilitados (comentados), mas podem ser ativados:
```bash
# php artisan config:cache
# php artisan route:cache
# php artisan view:cache
```

### 📝 Notas Importantes

1. **Apenas a branch `main` faz deploy automático**
2. **Deploy é instantâneo** após push (poucos segundos)
3. **Logs disponíveis** nas GitHub Actions
4. **Arquivo .env** deve ser configurado manualmente na Umbler
5. **Dependências** podem precisar ser instaladas via SSH na primeira vez

### 🚨 Para Novas Configurações de Deploy

Se precisar configurar deploy em outro projeto:

1. **Gerar chaves SSH**:
   ```bash
   ssh-keygen -t rsa -b 4096 -f deploy_key -N "" -C "deploy@projeto"
   ```

2. **Configurar chave pública** na hospedagem
3. **Configurar secrets** no GitHub:
   - SSH_HOST, SSH_USER, SSH_PORT, SSH_KEY
4. **Criar workflow** `.github/workflows/deploy.yml`
5. **Testar** com commit simples

### 📞 Contatos e Links

- **Repositório**: https://github.com/marcelmaino/artiodonto-laravel
- **Actions**: https://github.com/marcelmaino/artiodonto-laravel/actions
- **Hospedagem**: Umbler
- **Configurado em**: 13/08/2025
- **Configurado por**: Claude Code + Marcel