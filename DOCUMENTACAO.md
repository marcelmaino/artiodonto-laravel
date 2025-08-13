# Documentação do Projeto Arti Odonto

## 📋 Resumo do Projeto

Site estático desenvolvido em **Laravel 12** com **Tailwind CSS 4.0**, **Vite** e **Docker** para a clínica odontológica Arti Odonto.

### 🎯 Objetivo
Desenvolver um site estático com as seguintes páginas:
- Home
- A Clínica  
- Procedimentos
- Arti Kids
- Contato
- Obrigado

## 🛠️ Tecnologias Utilizadas

- **Laravel 12** - Framework PHP
- **Tailwind CSS 4.0** - Framework CSS
- **Vite** - Build tool
- **Docker & Docker Compose** - Containerização
- **Nginx** - Servidor web
- **PHP 8.2** - Linguagem de programação

## 📁 Estrutura do Projeto

```
laravel/
├── docker-compose.yml          # Configuração Docker
├── Dockerfile                  # Imagem PHP
├── docker/                     # Configurações Docker
│   ├── nginx/
│   │   └── conf.d/
│   │       └── default.conf    # Configuração Nginx
│   └── mysql/
│       └── my.cnf             # Configuração MySQL
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php  # Layout principal
│   │   ├── home.blade.php     # Página inicial
│   │   ├── a-clinica.blade.php
│   │   ├── procedimentos.blade.php
│   │   ├── arti-kids.blade.php
│   │   ├── contato.blade.php
│   │   └── obrigado.blade.php
│   ├── css/
│   │   └── app.css           # Estilos CSS
│   └── js/
│       └── app.js            # JavaScript
├── routes/
│   └── web.php               # Rotas do site
├── public/
│   └── images/               # Imagens do site
└── DOCUMENTACAO.md           # Este arquivo
```

## 🚀 Como Iniciar o Projeto

### 1. Pré-requisitos
- Docker Desktop instalado e rodando
- Git (para clonar o projeto)

### 2. Comandos para Iniciar

```bash
# 1. Navegar para o diretório do projeto
cd E:\artiodonto\laravel

# 2. Iniciar os containers
docker-compose up -d

# 3. Verificar se os containers estão rodando
docker-compose ps

# 4. Instalar dependências PHP (se necessário)
docker-compose exec app composer install

# 5. Gerar chave da aplicação
docker-compose exec app php artisan key:generate

# 6. Limpar caches
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear

# 7. Verificar se o site está funcionando
docker-compose exec nginx curl -I http://localhost
```

### 3. Acessar o Site
- **URL Principal**: http://localhost
- **Páginas Internas**: 
  - http://localhost/a-clinica
  - http://localhost/procedimentos
  - http://localhost/arti-kids
  - http://localhost/contato
  - http://localhost/obrigado

## 🛑 Como Parar o Projeto

```bash
# Parar todos os containers
docker-compose down

# Parar e remover volumes (cuidado - remove dados)
docker-compose down -v
```

## 📝 Funcionalidades Implementadas

### 1. Menu Adicional (Fixed)
- **Comportamento**: Aparece quando o usuário rola para baixo, desaparece quando rola para cima
- **Posicionamento**: `position: fixed` com `z-[9999]`
- **Visibilidade**: Escondido inicialmente com `-translate-y-full`
- **Localização**: `resources/views/layouts/app.blade.php`

### 2. Menu Interno (Condicional)
- **Visibilidade**: Aparece apenas nas páginas internas
- **Controle**: Variável `$isInternalPage` passada nas rotas
- **Páginas**: Todas exceto a home (`/`)
- **Estilo**: Gradiente teal com altura responsiva

### 3. Header com Slider
- **Localização**: `resources/views/home.blade.php`
- **Funcionalidade**: Slider de fundo automático
- **Responsividade**: Imagens diferentes para mobile/desktop
- **Fallback**: Imagem estática caso o slider falhe

### 4. Sistema de Rotas
```php
// Página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Páginas internas (com menu interno)
Route::get('/a-clinica', function () {
    return view('a-clinica', ['isInternalPage' => true]);
})->name('a-clinica');

Route::get('/procedimentos', function () {
    return view('procedimentos', ['isInternalPage' => true]);
})->name('procedimentos');

// ... outras páginas
```

## 🔧 Configurações Especiais

### 1. Site Estático (Sem Banco de Dados)
- **Sessões**: Driver `file`
- **Cache**: Driver `file`
- **Filas**: Driver `sync`
- **Manutenção**: Driver `file`

### 2. Configurações Removidas
- ❌ Banco de dados SQLite
- ❌ Migrações
- ❌ Seeders
- ❌ Factories
- ❌ Filas com banco de dados

### 3. Arquivos de Configuração Modificados
- `.env`: Configurações de banco comentadas
- `config/app.php`: Manutenção configurada para `file`
- `routes/web.php`: Variável `isInternalPage` adicionada

## 🎨 Estilos e JavaScript

### Tailwind CSS 4.0
- **CDN**: `https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4`
- **Responsividade**: Mobile-first
- **Cores**: Paleta teal (teal-500, teal-600, teal-700, teal-800)

### JavaScript Implementado
- **Menu Mobile**: Toggle com animações
- **Slider de Fundo**: Transições automáticas
- **Menu Adicional**: Controle por scroll
- **Intersection Observer**: Animações de entrada
- **Sliders**: Navegação infinita

## 📱 Responsividade

### Breakpoints
- **Mobile**: < 640px
- **Tablet**: 640px - 1024px  
- **Desktop**: > 1024px

### Componentes Responsivos
- **Menu**: Desktop horizontal, mobile hamburger
- **Sliders**: Cards adaptativos por breakpoint
- **Imagens**: Diferentes para mobile/desktop
- **Tipografia**: Tamanhos escaláveis

## 🐛 Troubleshooting

### Problemas Comuns

1. **Erro 500 - Sessões**
   ```bash
   docker-compose exec app php artisan config:clear
   docker-compose exec app php artisan cache:clear
   ```

2. **Imagens não carregam**
   - Verificar se as imagens estão em `public/images/`
   - Verificar permissões dos arquivos

3. **Container não inicia**
   ```bash
   docker-compose down
   docker-compose up -d --build
   ```

4. **Porta 80 ocupada**
   - Verificar se outro serviço está usando a porta
   - Alterar porta no `docker-compose.yml`

### Logs Úteis
```bash
# Logs do PHP
docker-compose logs app

# Logs do Nginx
docker-compose logs nginx

# Logs do MySQL (se necessário)
docker-compose logs db
```

## 📋 Checklist de Inicialização

- [ ] Docker Desktop rodando
- [ ] Containers iniciados (`docker-compose up -d`)
- [ ] Dependências instaladas (`composer install`)
- [ ] Chave da aplicação gerada (`php artisan key:generate`)
- [ ] Caches limpos (`php artisan config:clear`)
- [ ] Site acessível em http://localhost
- [ ] Páginas internas funcionando
- [ ] Menu adicional aparecendo no scroll
- [ ] Menu interno nas páginas internas

## 📞 Contato e Suporte

Para dúvidas ou problemas:
- Verificar logs: `docker-compose logs`
- Reiniciar containers: `docker-compose restart`
- Rebuild completo: `docker-compose down && docker-compose up -d --build`

---

**Última atualização**: 07/08/2025  
**Versão**: 1.0  
**Status**: ✅ Funcionando
