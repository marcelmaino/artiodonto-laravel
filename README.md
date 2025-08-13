# 🦷 Arti Odonto - Site da Clínica

Site estático desenvolvido em Laravel 12 com Tailwind CSS 4.0 para a clínica odontológica Arti Odonto.

## 🚀 Início Rápido

### Opção 1: Script Automático (Recomendado)
```bash
# Windows
start-project.bat

# Linux/Mac
./start-project.sh
```

### Opção 2: Comandos Manuais
```bash
# 1. Iniciar containers
docker-compose up -d

# 2. Instalar dependências
docker-compose exec app composer install

# 3. Configurar Laravel
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan config:clear

# 4. Acessar o site
# http://localhost
```

## 📄 Páginas Disponíveis

- **Home**: http://localhost
- **A Clínica**: http://localhost/a-clinica
- **Procedimentos**: http://localhost/procedimentos
- **Arti Kids**: http://localhost/arti-kids
- **Contato**: http://localhost/contato
- **Obrigado**: http://localhost/obrigado

## 🛑 Parar o Projeto

```bash
# Script automático
stop-project.bat

# Ou comando manual
docker-compose down
```

## 📋 Funcionalidades

✅ **Menu Adicional**: Aparece no scroll  
✅ **Menu Interno**: Apenas nas páginas internas  
✅ **Slider de Fundo**: Automático na home  
✅ **Responsivo**: Mobile-first design  
✅ **Site Estático**: Sem banco de dados  

## 📖 Documentação Completa

Para informações detalhadas, consulte: [DOCUMENTACAO.md](DOCUMENTACAO.md)

## 🛠️ Tecnologias

- Laravel 12
- Tailwind CSS 4.0
- Docker & Docker Compose
- Nginx
- PHP 8.2

---

## 🚀 Deploy Automático

✅ **GitHub**: https://github.com/marcelmaino/artiodonto-laravel  
✅ **Deploy Automático**: Configurado via GitHub Actions  
✅ **Hospedagem**: Umbler  

**Status**: ✅ Funcionando  
**Última atualização**: 13/08/2025  
**Teste Deploy**: 🚀 Deploy automático configurado e funcionando!
