# Diretório de Imagens

Este diretório contém as imagens utilizadas no site da Arti Odonto.

## Imagens Necessárias

Para que o site funcione corretamente, você precisa adicionar as seguintes imagens neste diretório:

### 1. Logo da Clínica
- **Arquivo**: `logo.png`
- **Uso**: Logo principal da clínica no header
- **Recomendação**: PNG com fundo transparente, altura de aproximadamente 80px

### 2. Fundo do Hero Mobile
- **Arquivo**: `fundo-hero-mobile.webp`
- **Uso**: Imagem de fundo para a seção hero em dispositivos móveis
- **Recomendação**: WebP otimizado, resolução adequada para mobile

### 3. Fundo do Menu Mobile
- **Arquivo**: `fundo-menu-mobile.jpg`
- **Uso**: Imagem de fundo para o menu mobile
- **Recomendação**: JPG otimizado, resolução adequada para mobile

### 4. Logo do Footer
- **Arquivo**: `logo-footer.png`
- **Uso**: Logo da clínica no rodapé
- **Recomendação**: PNG com fundo transparente, altura de aproximadamente 64px

### 5. Fundo do Hero Desktop
- **Arquivo**: `fundo-hero.webp`
- **Uso**: Imagem de fundo para a seção hero em desktop (slide 1)
- **Recomendação**: WebP otimizado, resolução adequada para desktop

### 6. Fundo do Hero Desktop (Slide 2)
- **Arquivo**: `fundo-hero2.webp`
- **Uso**: Imagem de fundo para a seção hero em desktop (slide 2)
- **Recomendação**: WebP otimizado, resolução adequada para desktop

### 7. Fundo do Hero Mobile (Slide 2)
- **Arquivo**: `fundo-hero-mobile1.webp`
- **Uso**: Imagem de fundo para a seção hero em mobile (slide 2)
- **Recomendação**: WebP otimizado, resolução adequada para mobile

## Como Adicionar Imagens

1. Coloque as imagens neste diretório (`public/images/`)
2. Certifique-se de que os nomes dos arquivos correspondem exatamente aos especificados acima
3. As imagens serão automaticamente carregadas pelo Laravel usando a função `asset()`

## Estrutura de URLs

As imagens serão acessíveis através das seguintes URLs:
- `http://localhost:8000/images/logo.png`
- `http://localhost:8000/images/fundo-hero-mobile.webp`
- `http://localhost:8000/images/fundo-menu-mobile.jpg`
- `http://localhost:8000/images/logo-footer.png`
- `http://localhost:8000/images/fundo-hero.webp`
- `http://localhost:8000/images/fundo-hero2.webp`
- `http://localhost:8000/images/fundo-hero-mobile1.webp`

## Otimização

Para melhor performance, recomenda-se:
- Comprimir as imagens adequadamente
- Usar formatos modernos como WebP quando possível
- Manter tamanhos de arquivo razoáveis
- Considerar diferentes resoluções para dispositivos móveis e desktop
